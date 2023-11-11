<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Contact;
use App\Models\ContactCms;
use App\Models\Role;
use App\Models\SubscribePlan;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WebConteroller extends Controller
{

    public function index()
    {
        $data = Auth::user();

        // $SliverPlanId = Role::where('name', 'Sliver')
        //     ->pluck('plan_id')
        //     ->first();

        // $SliverPlanName = Role::where('name', 'Sliver')
        //     ->pluck('name')
        //     ->first();

        // $SliverPlanPrice = Role::where('name', 'Sliver')
        //     ->pluck('amount')
        //     ->first();

        // // Gold
        // $GoldPlanId = Role::where('name', 'Gold')
        //     ->pluck('plan_id')
        //     ->first();

        // $GoldPlanName = Role::where('name', 'Gold')
        //     ->pluck('name')
        //     ->first();

        // $GoldPlanPrice = Role::where('name', 'Gold')
        //     ->pluck('amount')
        //     ->first();

        // //Bronze
        // $BronzePlanId = Role::where('name', 'Bronze')
        //     ->pluck('plan_id')
        //     ->first();

        // $BronzePlanName = Role::where('name', 'Bronze')
        //     ->pluck('name')
        //     ->first();

        // $BronzePlanPrice = Role::where('name', 'Bronze')
        //     ->pluck('amount')
        //     ->first();
        // if (isset($data)) {
        //     $subscribedPlan = SubscribePlan::where('user_id', Auth::user()->id)->pluck('stripe_plan_id')->first();
        // } else {
        //     $subscribedPlan = '';
        // }

        // $contact = ContactCms::latest()->first();

        // $param = [
        //     'data' => $data,

        //     'SliverPlanId' => $SliverPlanId,
        //     'SliverPlanName' => $SliverPlanName,
        //     'SliverPlanPrice' => $SliverPlanPrice,

        //     'GoldPlanId' => $GoldPlanId,
        //     'GoldPlanName' => $GoldPlanName,
        //     'GoldPlanPrice' => $GoldPlanPrice,

        //     'BronzePlanId' => $BronzePlanId,
        //     'BronzePlanName' => $BronzePlanName,
        //     'BronzePlanPrice' => $BronzePlanPrice,

        //     'subscribedPlan' => $subscribedPlan,

        //     'contact' => $contact,
        // ];
        // return view('website.index', $param);
        return view('website.index');
    }

    public function ContactUs(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'subject' => 'required',
        //     'message' => 'required',
        // ]);

        // $data = [
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'subject' => $request->subject,
        //     'message' => $request->message,
        // ];


        // $contact = Contact::create($request->all());

        // Mail::to('mr.hamxa914@gmail.com')->send(new ContactFormMail($data));

        // return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
    }
}
