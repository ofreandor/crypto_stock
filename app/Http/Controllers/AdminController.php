<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\WalletAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //


    public function dashboard(){

        return view('admin.admin_dashboard');
    }






    public function myWallet(){


        $wallets = WalletAddress::all();
        return view('admin.wallet', compact('wallets'));
    }


















     public function showAdminLogin(){

        return view('admin.auth.login');
    }


    public function checkAdminLogin(Request $request){

        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ])->validate();


        if (Auth::guard('admin')->attempt(['email'=>$request['email'], 'password'=>$request['password']])) {

             return redirect()->route('admin.dashboard')->with('toast', 'success')
            ->with('message', 'Login successful! Welcome ' .auth()->guard('admin')->user()->full_name);
        }
        else{
            return redirect()->back()->with('error', 'Invalid Login Credentials');
        }
    }










    public function approveDeposit($depositId){

        $deposit = Deposit::findOrFail($depositId);

        if ($deposit->status == 'PENDING') {
            $deposit->status = 'APPROVED';
            $deposit->charge = $this->calculateCharge($deposit->amount); // Your logic to calculate the charge
            $deposit->save();

            // Update user balance
            $user = $deposit->user;
            $user->balance += ($deposit->amount - $deposit->charge);
            $user->save();

            return redirect()->back()->with('success', 'Deposit approved and balance updated.');
        }

        return redirect()->back()->with('error', 'Deposit has already been processed.');
    }

    private function calculateCharge($amount)
    {
        // Example: Charge 10% fee
        return $amount * 0.1;
    }


}