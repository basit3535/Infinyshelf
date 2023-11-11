<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sell;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        if(Auth::check()){
            $orders = Sell::where('user_id','=',Auth::id())->paginate(10);
            return view('backend.order.index', compact('orders'));
        }else{
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        if(Auth::check()){
            return view('backend.order.create');
        }else{
            return redirect('/');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $request->validate([
                'products.*' => 'required', // Assuming you have product validation rules
                'quantity.*' => 'required|numeric|min:1',
                'total_price.*' => 'required|numeric|min:0',
            ]);

            // Process and store the array data
            $products = $request->input('products');
            $quantities = $request->input('quantity');
            $totalPrices = $request->input('total_price');

            foreach ($products as $index => $productId) {
                // Assuming you have a model for storing sell data
                $sell = new Sell;
                $sell->product_id = $productId;
                $sell->quantity = $quantities[$index];
                $sell->total_price = $totalPrices[$index];
                $sell->user_id = Auth::id();
                $sell->save();

                $product = Product::find($productId); // Assuming $productId is the ID of the product

                if ($product) {
                    // Update the quantity
                    $newQuantity = $product->quantity - $quantities[$index];

                    // Make sure the quantity doesn't go below zero
                    $newQuantity = max(0, $newQuantity);

                    // Update the product's quantity in the database
                    $product->update(['quantity' => $newQuantity]);
                }
            }

            // Redirect or return a response as needed
            return redirect('order/create')->with('success', 'Submit successfully');
        }else{
            return redirect('/');
        }
        // Validate the request data

    }

    /**
     * Display the specified resource.
     */
    public function show(Sell $sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sell $sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sell $sell)
    {
        //
    }
    public static function fetch_products()
    {
        if(Auth::check()){
            $products = Product::where([['quantity', '>', 0,],['user_id','=',Auth::id()]])->get();
            $output = '';
            foreach ($products as $product) {
                $output .= '<option value="' . $product->id . '">' . $product->name . '</option>';
            }
            return $output;
        }else{
            return redirect('/');
        }

        // return response()->json($products);
    }
    public function fetch_single_product(Request $request)
    {
        if(Auth::check()){
            $product = DB::select('select quantity from products where id = "' . $request->id . '"');
            return response()->json($product);
        }else{
            return redirect('/');
        }

    }

}
