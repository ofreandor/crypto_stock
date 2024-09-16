<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CryptoFx | Register</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
    <link href="css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/themify-icons/0.1.2/css/themify-icons.min.css">
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
            height:40px;
            color: #2F2E43 !important;
        }
    </style>

    <!-- loader Start -->
    {{-- <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div> --}}

    <div class="top-buttons">
        <a href="{{ url('/') }}" class="btn btn-danger">Home</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
    </div>

    <div class="container h-p100">
            <div class="row align-items-center justify-content-md-center h-p100">

               <div class="col-12">
                <div class="row justify-content-center g-0 py-4">
                    <div class="col-lg-5 col-md-5 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <h2 class="text-primary">CryptoFx Stock</h2>
                                <p class="mb-0">Get started with us Register a new membership</p>
                            </div>
                                <div class="p-40">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf

                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                                <input type="text" class="form-control ps-15 bg-transparent @error('first_name') is-invalid @enderror"
                                                    placeholder="First Name" name="first_name">

                                                    @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: #C03221">{{ $message }}</span>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                                <input type="text" class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror" placeholder="Last Name" name="last_name">

                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <span style="color: #C03221">{{ $message }}</span>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-email"></i></span>
                                                <input type="email" class="form-control ps-15 bg-transparent @error('email') is-invalid @enderror"
                                                    placeholder="Email" name="email">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: #C03221">{{ $message }}</span>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-mobile"></i></span>
                                                <input type="text" class="form-control ps-15 bg-transparent @error('phone') is-invalid @enderror"
                                                    placeholder="Phone" name="phone">

                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: #C03221">{{ $message }}</span>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-image"></i></span>
                                                <input type="file" class="form-control ps-15 bg-transparent @error('profile_image') is-invalid @enderror" placeholder="Profile image" name="profile_image">

                                                @error('profile_image')
                                                <span class="invalid-feedback" role="alert">
                                                    <span style="color: #C03221">{{ $message }}</span>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                                <input type="password" class="form-control ps-15 bg-transparent @error('password') is-invalid @enderror"
                                                    placeholder="Password" name="password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: #C03221">{{ $message }}</span>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
                                                <input type="password" class="form-control ps-15 bg-transparent @error('password_confirmation') is-invalid @enderror"
                                                    placeholder="Retype Password" name="password_confirmation">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <span style="color: #C03221">{{ $message }}</span>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="basic_checkbox_1">
                                                    <label for="basic_checkbox_1">I agree to the <a href="#"
                                                            class="text-primary"><b>Terms and conditions of CryptoFx</b></a></label>
                                                </div>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-12 text-center py-2">
                                                <button type="submit" class="btn btn-danger margin-top-10">SIGN IN</button>
                                            </div>

                                        </div>
                                    </form>
                                    <div class="text-center">
                                        <p class="mt-15 mb-0">Already have an account?<a href="{{ route('login') }}"
                                                class="text-danger ms-5"> Sign In</a></p>
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

    <script>
        // Get the checkbox and the button
        const agreeCheckbox = document.getElementById('agree');
        const signUpButton = document.getElementById('signUpBtn');

        // Add an event listener to the checkbox to detect changes
        agreeCheckbox.addEventListener('change', function() {
            // If the checkbox is checked, enable the button, otherwise disable it
            if (this.checked) {
                signUpButton.disabled = false;
            } else {
                signUpButton.disabled = true;
            }
        });
    </script>

    <script>
        const input = document.querySelector("#phoneno");
        const iti = window.intlTelInput(input, {
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                fetch('https://ipinfo.io', { headers: { 'Accept': 'application/json' } })
                    .then(resp => resp.json())
                    .then(resp => {
                        const countryCode = (resp && resp.country) ? resp.country : "us";
                        callback(countryCode);
                    });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js", // For validation and formatting
        });
    </script>
</body>

</html>
