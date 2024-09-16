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
                            <h3 class="mb-0 text-capitalize">Deposit</h3>
                        </div>
                    </div>

                    <!-- Deposit Form and Table Section -->
                        <div class="row">
        <!-- Deposit Form -->
        <div class="col-md-5">
            <div class="card bg-dark mb-4">
                <div class="card-body">
                    <!-- Step 1 Form -->
                    <div id="dep1" style="display: block;">
                        <form id="frmDep1" method="POST" action="{{ route('deposit.store') }}">

                            @csrf

                            <p>Fill in your desired investment amount and payment method.</p>

                            <div class="form-group py-2">
                                <label for="amtInput">Amount (€) *</label>
                                <input type="number" name="amount" id="amtInput" required placeholder=" Amount in Euro (EUR) " class="form-control">
                            </div>

                            <div class="form-group py-2">
                                <label for="paymentmethod">Choose a Payment Method *</label>
                                <select name="paymentmethod" id="paymentmethod" class="form-control">
                                    @foreach ($walletAddresses as $paymentMethod => $address)
                                    <option value="{{ $paymentMethod }}">{{ $paymentMethod }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" id="dep1" class="btn btn-primary">Make Deposit</button>
                        </form>
                    </div>

                    <!-- Step 2 Form -->
                    <div id="dep2" style="display: none;">
                        <form method="POST" action="{{ route('deposit.confirm') }}" enctype="multipart/form-data" id="frmDep2">
                            @csrf
                            <h3 id="paymentMethodTitle">Payment</h3>
                            <ol>
                                <li>Copy Company Wallet Address </li>
                                <li>Make Payment of <b><span id="amtPay"></span></b> to the Wallet Address Below.</li>
                                <li>Proceed to wallet and make payment</li>
                                <li>Upload Proof of Payment</li>
                            </ol>

                            <p><b>Note that payment will be confirmed after admin approval</b></p>

                            <div class="form-group py-2">
                                <label for="wallet">Company Wallet Address</label>
                                <div class="copy-link mb-3">
                                    <input type="text" readonly name="wallet" class="form-control" id="wallet">
                                    <button type="button" id="copyAddressBtn" class="btn btn-secondary mt-2">
                                        <span id="copyBtnText">Copy Address</span>
                                    </button>
                                </div>
                            </div>

                            <input type="hidden" name="amount" id="hiddenAmount" value="{{ session('deposit_info.amount') }}">
                            <input type="hidden" name="paymentmethod" id="hiddenPaymentMethod" value="{{ session('deposit_info.paymentmethod') }}">

                            <div class="form-group py-2">
                                <label for="paymentProof">Upload Proof of Payment</label>
                                <input type="file" name="paymentProof" id="paymentProof" accept="image/png, image/gif, image/jpeg" class="form-control">
                                <!-- Image preview -->
                                <img id="imgPreview" src="" alt="Image Preview" style="display: none; margin-top: 10px; max-width:250px; height:250px;">
                            </div>

                            <button type="submit" class="btn btn-primary">Request Payment Confirmation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deposit Table -->
        <div class="col-md-7">
            <div class="card bg-dark mb-4">
                <div class="card-body">
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
                            @forelse($deposits as $deposit)
                            <tr>
                                <td>€{{ number_format($deposit->amount, 2) }}</td>
                                <td>{{ $deposit->payment_method }}</td>
                                    <td>
                                        @php
                                        $statusClass = '';
                                        $statusText = '';

                                        switch ($deposit->status) {
                                        case 'PENDING':
                                        $statusClass = 'text-primary'; // Yellow color
                                        $statusText = 'PENDING';
                                        break;
                                        case 'SUCCESS':
                                        $statusClass = 'text-success'; // Green color
                                        $statusText = 'SUCCESS';
                                        break;
                                        default:
                                        $statusClass = 'text-secondary'; // Gray color for unknown statuses
                                        $statusText = 'Unknown';
                                        break;
                                        }
                                        @endphp

                                        <span class="badge {{ $statusClass }}">{{ $statusText }}</span>
                                    </td>
                                <td>{{ $deposit->created_at->format('Y-m-d H:i:s') }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No deposits found.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</section>
</div>

@section('scripts')

    <script>

            document.getElementById('paymentProof').addEventListener('change', function() {
                    const file = this.files[0];
                    const imgPreview = document.getElementById('imgPreview');

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            imgPreview.src = e.target.result;
                            imgPreview.style.display = 'block';  // Show the preview image
                        };

                        reader.readAsDataURL(file);
                    } else {
                        imgPreview.src = '';
                        imgPreview.style.display = 'none';  // Hide the preview image if no file is selected
                    }
                });
                    let formData = {};
                    let formOne = document.getElementById('dep1');
                    let formTwo = document.getElementById('dep2');

                    document.getElementById('frmDep1').addEventListener('submit', function (e) {
                        e.preventDefault();
                        console.log('Submit');

                        const amount = document.getElementById('amtInput').value;
                        const paymentMethod = document.getElementById('paymentmethod').value;
                        const walletAddress = @json($walletAddresses);

                        formData.amount = amount;
                        formData.paymentMethod = paymentMethod;

                        console.log(formData);

                        document.getElementById('amtPay').textContent = "€" + amount;
                        document.getElementById('paymentMethodTitle').textContent = paymentMethod + " Payment";
                        document.getElementById('wallet').value = walletAddress[paymentMethod].wallet_address;

                        formOne.style.display = 'none';
                        formTwo.style.display = 'block';

                    });


                    document.getElementById('copyAddressBtn').addEventListener('click', function () {
                        const walletInput = document.getElementById('wallet');
                        walletInput.select();
                        document.execCommand('copy');

                        const copyBtnText = document.getElementById('copyBtnText');
                        copyBtnText.textContent = 'Copied';
                        setTimeout(() => {
                            copyBtnText.textContent = 'Copy Address';
                        }, 2000);
                    });
    </script>

@endsection
@endsection
