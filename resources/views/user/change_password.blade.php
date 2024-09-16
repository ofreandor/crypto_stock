@extends('user.layouts.app')
@section('content')
<style>
    .custom-shadow{
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2) !important;
        border:0.5px solid #2F2E43;
    }
</style>

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
            background-color: #28a745 !important;
            /* Success green background */
            color: white !important;
            /* Ensure the text is white */
        }

        .swal-title-white {
            color: white !important;
            /* Title text should be white */
        }

        /* Optional: Change the icon's color */
        .swal2-icon.swal2-success {
            color: white !important;
            /* Success icon color */
        }
    </style>

    <section class="content">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="box">
                    <div class="card bg-dark custom-shadow">
                        <div class="card-body">
                            <form  action="{{ route('store.password') }}" method="POST">
                                @csrf
                                <div class="box-body">
                                    <h4 class="box-title text-info mb-0"><i class="ti-lock me-15"></i> Authentication</h4>
                                    <hr class="my-15">
                                    <div class="row">

                                        <div class="form-group py-2">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control" placeholder="********" name="current_password">
                                            @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-group py-2">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" placeholder="********" name="password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="form-group py-2">
                                            <label class="form-label">Repeat Password</label>
                                            <input type="password" class="form-control" placeholder="********" name="password_confirmation">

                                            @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <button type="submit" class="btn btn-primary py-2">
                                             Submit
                                        </button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.box -->
            </div>

            <div class="col-lg-6 col-12">

                <div class="mx-2">
                    <img src="{{ asset('backend/images/fingerprint.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>


@endsection
