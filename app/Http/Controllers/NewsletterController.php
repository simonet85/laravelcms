<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    // public function create(){
    //     return view('/subscribe');
    // }

    public function store(Request $request){

        if (! Newsletter:: isSubscribed($request->email)) {
       
        return redirect()->back()->with('success', 'Thanks For Subscribing');
        
        }
        return redirect()->back()->with('failure', 'Sorry! You have already subscribed');
    }

}
