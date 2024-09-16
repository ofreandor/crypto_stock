<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WalletAddress;

class WalletController extends Controller
{
    //

    public function getWalletAddress(Request $request){

        $paymentMethod = $request->input('paymentmethod');

        // Fetch the wallet address for the selected payment method
        $walletAddress = WalletAddress::where('payment_method', $paymentMethod)->first();

        if ($walletAddress) {
            return response()->json(['address' => $walletAddress->address]);
        }

        return response()->json(['address' => ''], 404);
    }



}