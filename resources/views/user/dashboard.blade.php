@extends('user.layouts.app')
@section('content')

   @if(session('toast') && session('message'))
        <script>
            Swal.fire({
                    icon: '{{ session('toast') }}',
                    title: '{{ session('message') }}',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'swal-popup-success',  // Custom class for the popup background
                        title: 'swal-title-white',    // Custom class for the title text color
                    }
                });
        </script>
    @endif

    <style>
        /* Custom SweetAlert2 toast styles */
        .swal-popup-success {
            /* background-color: #28a745 !important; */
            /* Success green background */
            color: #333333 !important;
            /* Ensure the text is white */
        }

        .swal-title-white {
            color: #333333 !important;
            /* Title text should be white */
        }

        /* Optional: Change the icon's color */
        .swal2-icon.swal2-success {
            color: #333333 !important;
            /* Success icon color */
        }
    </style>



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
                                    Invested</div>
                                <div class="h5 mb-0 font-weight-bold text-white">
                                    € 0.00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-eur fa-2x" aria-hidden="true"></i>
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
                                    Profit</div>
                                <div class="h5 mb-0 font-weight-bold text-white">
                                    € 0.00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i>
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
                                    Bonus</div>
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

            <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                <div class="card bg-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Balance</div>
                                <div class="h5 mb-0 font-weight-bold text-white">
                                    € 0.00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-2" style="height: 100px">
                <div class="card bg-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1">
                                    Stake Profit</div>
                                <div class="h5 mb-0 font-weight-bold text-dark">
                                    <p style="color:black">€ 0.00</p></div>
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
                                    <div><a href="#" class="d-lg-inline-block btn btn-sm btn-primary shadow-sm">Refer Friends

                                        </a> </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="row py-3"></div>
            <div class="row py-3">
                <div class="col-xxl-4 col-xl-6 col-12">
                    <div class="row" style="height:500px">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" style="height:500px; width: 100%;">
                                <div class="tradingview-widget-container__widget" style="height: calc(100% - 32px); width: 100%;"></div>
                                <div class="tradingview-widget-copyright">
                                    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
                                        <span class="blue-text">Track all markets on TradingView</span>
                                    </a>
                                </div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js"
                                    async>
                                    {
                                  "autosize": true,
                                  "symbol": "NASDAQ:AAPL",
                                  "interval": "D",
                                  "timezone": "Etc/UTC",
                                  "theme": "dark",
                                  "style": "1",
                                  "locale": "en",
                                  "allow_symbol_change": true,
                                  "calendar": false,
                                  "support_host": "https://www.tradingview.com"
                                }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                    </div>

                </div>
                <div class="col-xxl-8 col-xl-6 	col-12">
                    <div class="box recent-activitie b-1">
                        <div class="box-header b-0 pb-0">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="m-0 fw-500">Today Top Market</h4>
                                </div>
                                <div class="btn-group">
                                    <button class="btn rounded-4 btn-light dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown">All Market </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-body p-10">
                            <div class>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>24h Change</th>
                                            <th>7d Change</th>
                                            <th>Market Cap</th>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center"><i
                                                    class="cc BTC me-5 l-h-48 text-warning" title="BTC"
                                                    style="rotate: 10deg;"></i> BTC</td>
                                            <td>$63,245.02</td>
                                            <td class="text-danger fw-500">-19,43%</td>
                                            <td class="text-success fw-500">+46,12%</td>
                                            <td>7.57321 BTC</td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex align-items-center"><i
                                                    class="cc ETH me-5 l-h-40 text-info" title="USDT"></i>
                                                ETH</td>
                                            <td>$4,743.47</td>
                                            <td class="text-danger fw-500">-10,32%</td>
                                            <td class="text-success fw-500">+14,39%</td>
                                            <td>1.23450 BTC</td>
                                        </tr>


                                        <tr>
                                            <td class="d-flex align-items-center"><i
                                                    class="cc USDT-alt me-5 l-h-40 text-success" title="USDT"></i> USDT
                                            </td>
                                            <td>$5,531.32</td>
                                            <td class="text-danger fw-500">-2,42%</td>
                                            <td class="text-danger fw-500">-2,32%</td>
                                            <td>1.45257 BTC</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- /.content -->
</div>



@endsection
