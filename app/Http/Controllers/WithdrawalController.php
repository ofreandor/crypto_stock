<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    //

    public function withdraw(){

        return view('user.withdrawal');
    }
}