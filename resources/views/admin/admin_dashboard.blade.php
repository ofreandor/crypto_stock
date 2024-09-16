@extends('admin.layouts.app')
@section('content')
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Total Deposit</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">
                                        € 0.00</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-btc fa-2x text-white" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Approved KYC</div>
                                        @php
                                            $approvedKyc = App\Models\KycVerification::where('status', 'APPROVED')->count();
                                        @endphp

                                    <div class="h5 mb-0 font-weight-bold text-white">
                                            {{ $approvedKyc }}
                                        </div>
                                </div>
                                <div class="col-auto">
                                    {{-- <i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i> --}}
                                    <i class="ti-id-badge" style="font-size:30px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Investors</div>
                                        @php
                                            $userCount = App\Models\User::count();
                                        @endphp
                                    <div class="h5 mb-0 font-weight-bold text-white">
                                        {{ $userCount }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Withdrawals</div>
                                    <div class="h5 mb-0 font-weight-bold text-white">
                                        € 0.00</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-money fa-2x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        Stake Profit</div>
                                    <div class="h5 mb-0 font-weight-bold text-dark">
                                        <p style="color:black">€ 0.00</p>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-danger shadow h-100 py-2" style="background:#511732 !important;">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1">
                                        BTC Equivalent </div>
                                    <div class="h5 mb-0 font-weight-bold text-white">
                                        0.00000000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-btc fa-2x text-white" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                    <div class="card bg-info shadow h-100 py-2" style="
                            background: #1f1a40 !important;
                        ">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                        Refer Friends. Get Rewarded</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        <div><a href="#" class="d-lg-inline-block btn btn-sm btn-primary shadow-sm">Refer
                                                Friends

                                            </a> </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <div>
                <div class="row py-3"></div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
