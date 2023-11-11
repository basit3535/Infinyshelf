<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Waste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::check()){
            $products  = Product::where('user_id', '=', Auth::id())->Paginate(10);
            return view('backend.product.index', compact('products'));
        }else{
            return redirect('/');
        }

    }
    public function outofstock()
    {
        if(Auth::check()){
            $products = Product::where('user_id', Auth::id())->where('quantity', 0)->paginate(10);

            return view('backend.product.outofstock', compact('products'));
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
            $user_id = Auth::user()->id;
            return view('backend.product.create', compact('user_id'));
        }else{
            return redirect('/');
        }


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        if(Auth::check()){
            $data = $request->validate([
                'name' => 'required|unique:products,name,NULL,id,user_id,' . Auth::id(),
                'price' => 'required',
                'quantity' => 'required|integer',
            ]);

            $status = $request->has('status') ? 1 : 0; // Changed to use the `has` method instead of accessing the property directly

            $product = new Product;
            $product->name = $request->input('name');
            $product->user_id = Auth::id(); // Replaced `$request->input('user_id')` with `Auth::id()`
            $product->price = $request->input('price');
            $product->quantity = $request->input('quantity');
            $created = $product->save();
            if ($created) {
                return redirect('product/create')->with('success', 'Product Added Successfully');
            } else {
                return back()->with('error', 'Whoops! Something went wrong. Please try again.');
            }
        }else{
            return redirect('/');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        if(Auth::check()){
            $user_id = Auth::user()->id;
            return view('backend.product.create', compact('user_id', 'product'));
        }else{
            return redirect('/');
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
        if(Auth::check()){
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'quantity' => 'required|integer',

            ]);
            if ($request->status) {
                $status = 1;
            } else {
                $status = 0;
            }

            $product->name = $request->name;
            $product->price = $request->price;
            $product->quantity = $request->quantity;
            // $product->tax = $request->tax;
            $product->user_id = $request->user_id;

            if ($product->update()) {
                return redirect('product')->with('success', 'Product updated Successfully');
            } else {
                return back()->with('success', 'Product cannot be updated. Try Again!');
            }
        }else{
            return redirect('/');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if(Auth::check()){
            if ($product->delete()) {
                return redirect('product')->with("warning", 'Product has been deleted !!');
            } else {
                return back()->with('fail', 'Product cannot be deleted now..!!');
            }
        }else{
            return redirect('/');
        }

    }
}
