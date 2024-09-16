<!DOCTYPE html>



<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>CryptoFx Stock | Admin</title>

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');

    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/custom/logo.jpg') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('sigin/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('sigin/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('sigin/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('sigin/css/demo.css') }}" />

    <link rel="stylesheet" href="{{ asset('sigin/vendor/css/pages/front-page.css') }}" />
    <!-- Vendors CSS -->

    <link rel="stylesheet" href="{{ asset('sigin/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('sigin/vendor/libs/swiper/swiper.css') }}" />

    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('sigin/vendor/css/pages/front-page-landing.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Helpers -->
    <script src="{{ asset('sigin/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('sigin/vendor/js/dropdown-hover.js') }}"></script>
    <script src="{{ asset('sigin/vendor/js/mega-dropdown.js') }}"></script>
</head>

<body>

    <style>
        .form-control {
            height:50px;
        }
    </style>



    </div>

    <div class="row py-4"></div>

    <div class="container mt-5 py-5">

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                        <div class="account-logo text-center">
                            <a href=""><span>CryptoFx Stock </span></a>
                        </div>
                    <div class="card-header text-center"><h5>Login into CryptoFx Admin</h5></div>
                    <div class="card-body">
                        <form action="{{ route('process.admin.login') }}" method="POST">
                                @csrf

                                @include('include.message')


                                <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control mb-3 @error('email') is-invalid @enderror" name="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <span>{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-password-toggle">
                                    <label class="form-label" for="basic-default-password32">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="basic-default-password32" placeholder="********" name="password" />
                                        <span class="input-group-text cursor-pointer toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <span>{{ $message }}</span>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group py-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">
                                                Remember Me
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-3">
                                            <button class="btn btn-primary btn-lg rounded-pill account-btn" style="background:#2b76d8">Login</button>
                                            {{-- <a href="{{ route('password.request') }}" class="ml-3">Forgot Password</a> --}}
                                        </div>
                                    </div>
                                </div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="{{ asset('sigin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('sigin/vendor/js/bootstrap.js') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                        const togglePassword = document.querySelector('.toggle-password');
                        const passwordInput = document.getElementById('basic-default-password32');
                        const icon = togglePassword.querySelector('i');

                        togglePassword.addEventListener('click', function() {
                            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordInput.setAttribute('type', type);

                            // Toggle the icon class
                            if (type === 'password') {
                                icon.classList.remove('fa-eye-slash');
                                icon.classList.add('fa-eye');
                            } else {
                                icon.classList.remove('fa-eye');
                                icon.classList.add('fa-eye-slash');
                            }
                        });
                    });

        </script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('sigin/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('sigin/vendor/libs/swiper/swiper.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('sigin/js/front-main.js') }}"></script>


    <!-- Page JS -->
    <script src="{{ asset('sigin/js/front-page-landing.js') }}"></script>

</body>

</html>

<!-- beautify ignore:end -->
