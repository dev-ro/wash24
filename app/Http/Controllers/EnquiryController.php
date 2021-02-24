<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function enquiryType(Request $request){
        
        if($request->type == 'franchise') {
            return redirect()->route('franchise');
        }

        if($request->type == 'services') {
            return redirect()->route('services.enq');
        }

        return back();
        
    }

    public function franchise(Request $request) {
        dd($request->all());
    }

}
