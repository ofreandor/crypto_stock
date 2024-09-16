@extends('user.layouts.app')
@section('content')
<div class="container-full">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="container my-4" id="deposit_">
                <!-- Deposit Header -->
                <div class="card bg-dark text-white mb-4">
                    <div class="card-header">
                        <h3 class="mb-0 text-capitalize">Withdraw</h3>
                    </div>
                </div>
                    <div id="withdraw_" style="display: block;">
                        <div class="row">
                            <!-- Withdrawal Form Card -->
                            <div class="col-md-5">
                                <div class="card bg-dark">
                                    <div class="card-body ">
                                        <h4 class="card-title">Withdrawal Form</h4>
                                        <form id="frmWith" method="POST">
                                            <input type="hidden" name="_token" value="">

                                            <p>Fill in your desired withdrawal amount and payment method.</p>

                                            <p>Amount (€) *</p>
                                            <input type="number" name="amount" required id="withAmt" placeholder="Amount in Euro (EUR)"
                                                class="form-control mb-3">

                                            <p>Choose Withdrawal Method *</p>
                                            <select name="withdrawalmethod" id="withdrawalmethod" class="form-control mb-3">
                                                <option value="Crypto Wallet">Crypto Wallet</option>
                                                <option value="Bank Account">Bank Account</option>
                                            </select>

                                            <!-- Bank Details -->
                                            <div id="bankDetails" style="display: none;">
                                                <p>Bank Name:</p>
                                                <input type="text" name="bankname" id="bankname" placeholder="Bank Name"
                                                    class="form-control mb-3">
                                                <p>Account Name:</p>
                                                <input type="text" name="acctname" id="acctname" placeholder="Account Name"
                                                    class="form-control mb-3">
                                                <p>Account Number:</p>
                                                <input type="number" name="acctnumber" id="acctnumber" placeholder="Account Number"
                                                    class="form-control mb-3">
                                                <p>Swift Code:</p>
                                                <input type="text" name="swiftcode" id="swiftcode" placeholder="Swift Code"
                                                    class="form-control mb-3">
                                            </div>

                                            <!-- Crypto Wallet Details -->
                                            <div id="cryptoDetails" style="display: block;">
                                                <p>Wallet Type:</p>
                                                <select class="form-control mb-3" name="wallettype">
                                                    <option value="Bitcoin">Bitcoin</option>
                                                    <option value="Ethereum">Ethereum</option>
                                                    <option value="USDT TR20">USDT TR20</option>
                                                    <option value="Tron">Tron</option>
                                                    <option value="Doge Coin">Doge Coin</option>
                                                </select>
                                                <p>Wallet Address:</p>
                                                <input type="text" name="walletaddress" id="walletaddress" class="form-control mb-3"
                                                    placeholder="Wallet Address">
                                            </div>

                                            <input type="submit" id="dep1" class="btn btn-primary btn-block" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Transaction Table Card -->
                            <div class="col-md-7">
                                <div class="card bg-dark">
                                    <div class="card-body">
                                        <h4 class="card-title">Transaction History</h4>
                                        <table class="table table-dark dep-tbl">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Amount</th>
                                                    <th scope="col">Method</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Transaction Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Your transaction records go here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
</div>




@endsection
