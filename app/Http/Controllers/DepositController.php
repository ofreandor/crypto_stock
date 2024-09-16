<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Models\WalletAddress;
use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    //
    public  function index(){

         $walletAddresses = WalletAddress::all()->keyBy('payment_method');

         $deposits = Deposit::where('user_id', auth()->id())->get();


        return view('user.deposit', compact('deposits', 'walletAddresses'));
    }




    public function storeDeposit(Request $request)
    {


        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
        ]);

         $depositData = [
            'amount' => $request->input('amount'),
            'payment_method' => $request->input('payment_method')
        ];

         $request->session()->put('deposit_info', $depositData);

        $walletAddress = WalletAddress::where('payment_method', $request->input('payment_method'))->first();

        if ($walletAddress) {
        // Return response with wallet address
        return response()->json([
            'status' => 'success',
            'wallet_address' => $walletAddress->wallet_address,
        ]);
        } else {
            return response()->json(['status' => 'error'], 400);
        }


    }

    public function confirmDeposit(Request $request)
    {



        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1',
            'payment_method' => 'required|string',
            'paymentProof' => 'required|file|mimes:png,jpg,jpeg,gif|max:2048',
        ]);
         $depositInfo = $request->session()->get('deposit_info');

          dd($depositInfo);


        if (!$depositInfo) {
            return redirect()->back()->withErrors('Deposit info not found in session.');
        }

        $userId = Auth::id();


        $filePath = $request->file('paymentProof')->store('proofs');

        $deposit = new Deposit();
        $deposit->user_id = $userId;
        $deposit->amount = $depositInfo['amount']; // Use the amount from session
        $deposit->payment_method = $depositInfo['paymentmethod']; // Use the payment method from session
        $deposit->status = 'PENDING';
        $deposit->payment_proof = $filePath;

        dd($deposit);

        $deposit->save();

        // Clear the session data
        $request->session()->forget('deposit_info');

        // Redirect the user back with a success message
        return redirect()->back()->with('toast', 'success')
            ->with('message', 'Your deposit of ' . $deposit->amount . ' using ' . $deposit->payment_method . ' has been initiated and will be confirmed soon.');
    }




}