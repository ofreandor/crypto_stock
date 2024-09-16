<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WithdrawalController;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/trade', [TradeController::class, 'index'])->name('trade');









Route::get('admin/login', [AdminController::class, 'showAdminLogin'])->name('admin.login');
Route::post('admin/login/check', [AdminController::class, 'checkAdminLogin'])->name('process.admin.login');


Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/my-wallet', [AdminController::class, 'myWallet'])->name('admin.wallet');


});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/change/password', [UserController::class, 'changePassword'])->name('manage_authentication');
    Route::post('/store-password', [UserController::class, 'updatePassword'])->name('store.password');
    Route::get('/change/profile-image', [UserController::class, 'changePassport'])->name('manage.passport');

    Route::post('/change/profile-image', [UserController::class, 'storePassport'])->name(name: 'store.passport');
    Route::get('/deposit', [DepositController::class, 'index'])->name('deposit');
    Route::post('/deposit/funds', [DepositController::class, 'storeDeposit'])->name('deposit.store');
    Route::post('/deposit/confirm', [DepositController::class, 'confirmDeposit'])->name('deposit.confirm');


    Route::get('/wallet-address/{method}', [DepositController::class, 'fetchWalletAddress']);


    Route::get('/withdraw', [WithdrawalController::class, 'withdraw'])->name('place_withdrawal');






});

require __DIR__.'/auth.php';