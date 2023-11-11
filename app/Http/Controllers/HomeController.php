<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Sell;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use App\Models\Waste;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::check()){
            // $user = User::where('email', '!=', 'admin@gmail.com')->inRandomOrder()->take(4)->get();

            // $users = User::where('email', '!=', 'admin@gmail.com')->inRandomOrder()->take(4)->count();

            $dailysales = count(Sell::whereDate('created_at', '=', Carbon::today())->where('user_id', '=', Auth::id())->get());

            $revenue_today =  DB::table('sells')->selectRaw('sum(total_price)')->where('user_id', '=', Auth::id())->whereDate('created_at', Carbon::today())->pluck('sum(total_price)');

            $spending_month =  DB::table('products')->selectRaw('sum(price)')->where('user_id', '=', Auth::id())->whereMonth('created_at', Carbon::now()->month)->pluck('sum(price)');

            $revenue_month =  DB::table('sells')->selectRaw('sum(total_price)')->where('user_id', '=', Auth::id())->whereMonth('created_at', Carbon::now()->month)->pluck('sum(total_price)');
            // dd($revenue_month);
            // $revenue_today_paid =  DB::table('sells')->selectRaw('sum(paid)')->where('user_id', '=', Auth::id())->whereDate('created_at', Carbon::today())->pluck('sum(paid)');

            // $revenue_today_due =  DB::table('sells')->selectRaw('sum(due)')->where('user_id', '=', Auth::id())->whereDate('created_at', Carbon::today())->pluck('sum(due)');

            $product = count(Product::where('quantity', '>', 0)->where('user_id', '=', Auth::id())->get());

            $outofstock = count(Product::where('quantity', '=', 0)->where('user_id', '=', Auth::id())->get());

            // $plans = count(Role::where('id', '>', 1)->get());

            // $waste  = Waste::where('user_id', '=', Auth::id())->Paginate(5);

            $products  = Product::where('user_id', '=', Auth::id())->Paginate(5);

            // $mails = Contact::whereDate('created_at', Carbon::today())->count();
            // return view('backend.index', compact('user', 'dailysales', 'revenue_today', 'product', 'products', 'waste', 'revenue_today_paid', 'revenue_today_due', 'outofstock', 'plans', 'users', 'mails'));
            return view('backend.index', compact('products','product','dailysales','revenue_today','outofstock','revenue_month','spending_month'));

        }else{
            return redirect('/');
        }
        // ->where('user_id','=',Auth::id())
        // dd(Carbon::today());


    }
}
