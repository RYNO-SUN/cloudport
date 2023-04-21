<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use App\Models\Ports;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Queueable, SerializesModels;

class customerController extends Controller
{
    public function index()
    {

        $customers = customers::all()->toArray();
        return view('customers' , compact('customers'));
    }

    public function porting()
    {

        $porting = Ports::all()->toArray();
        return view('porting' , compact('porting'));
    }

    
   
}
