<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CryptoFx | Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    <link
        href="css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url('frontend/revslider/assets/slide2.jpg')">

    <style>

        .top-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .top-buttons a {
         margin-right: 10px;
        }
        .form-control{
            height:45px;
            color: #2F2E43 !important;
        }
    </style>

    <!-- loader Start -->


    <div class="top-buttons">
        <a href="{{ url('/') }}" class="btn btn-danger">Home</a>
        <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
    </div>


    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">

            <div class="col-12">
                <div class="row justify-content-center g-0 py-4">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">CryptoFx Stock</h2>
                                <p class="mb-0">Sign in to continue to CryptoFx </p>
                            </div>
                            <div class="p-40">
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <div class="input-group mb-3 py-2">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror"
                                                placeholder="Email" name="email" value="{{ old('email') }}">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <span style="color: #C03221">{{ $message }}</span>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3 py-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror"
                                                placeholder="Password" name="password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <span style="color: #C03221">{{ $message }}</span>
                                                </span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="basic_checkbox_1">
                                                <label for="basic_checkbox_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                            <div class="fog-pwd text-end">
                                                <a href="javascript:void(0)" class="hover-warning"><i
                                                        class="ion ion-locked"></i> Forgot password?</a><br>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
                                <div class="text-center">
                                    <p class="mt-15 mb-0">Don't have an account? <a href=""
                                            class="text-warning ms-5">Sign Up</a></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


   <script src="{{asset('backend/js/vendors.min.js')}}"></script>
    <script src="{{asset('backend/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('backend/js/demo.js')}}"></script>
    <script src="{{asset('backend/icons/feather-icons/feather.min.js')}}"></script>
</body>

</html>
