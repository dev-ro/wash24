<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnqMail;
class EnqSender extends Controller {


    public function sendEnq(){

        request()->validate([
            'mobile' => 'required',
            'name' => 'required'
        ]);

        session()->flash('success' , 'Thanks for enquiring with us. We will be in touch shortly.');
        
        Mail::to('info@wash24.in')->send(new EnqMail(request()->all()));

        return back();
    }

    

}