@if (session('success'))
<div class="alert alert-success" style="background: #28a745; color:#ffffff">
    <i class="uil uil-check-circle"></i>{{ session('success') }}.
    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger alert-icon alert-dismissible fade show" role="alert">
    <i class="uil uil-times-circle"></i><span style="font-family: 'Poppins';">{{ session('error') }}</span>
    {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
</div>
@endif
