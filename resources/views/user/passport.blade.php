@extends('user.layouts.app')
@section('content')
<style>
    .custom-shadow {
        box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2) !important;
        border: 0.5px solid #2F2E43;
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
                            timer: 3000
                        });
        </script>
        @endif


        <section class="content">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="box">
                        <div class="card bg-dark custom-shadow">
                            <div class="card-body">
                                <form action="{{ route('store.passport') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="box-body">
                                        <h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Upload Profile Picture
                                        </h4>
                                        <hr class="my-15">
                                        <div class="row">
                                            <div class="form-group py-2">
                                                <label class="form-label">Upload profile</label>
                                                <input type="file" class="form-control" name="profile_image" id="profileImageInput"
                                                    accept="image/*" onchange="previewImage(event)">
                                                @error('profile_image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="py-3 d-flex align-items-center">
                                            <button type="submit" class="btn btn-primary py-2">
                                                Submit
                                            </button>

                                            <!-- Image preview container -->
                                            <div class="ms-3">
                                                <img id="profileImagePreview" src="#" alt="Profile Image"
                                                    class="rounded-circle d-none" width="100" height="100"
                                                    style="object-fit: cover;">
                                            </div>
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
                        <img src="{{ asset('backend/images/profile.svg') }}" alt="" width="300">
                    </div>
                </div>
            </div>


        </section>

        @section('scripts')
            <script>
                function previewImage(event) {
                        const input = event.target;
                        const preview = document.getElementById('profileImagePreview');

                        if (input.files && input.files[0]) {
                            const reader = new FileReader();
                            reader.onload = function(e) {
                                preview.src = e.target.result;
                                preview.classList.remove('d-none'); // Show the preview
                            }
                            reader.readAsDataURL(input.files[0]); // Convert to base64 string
                        }
                }
            </script>
        @endsection
@endsection
