@extends('layouts.app')

@section('content')
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-dark">About Me</span></h2>
                    @if($about)
                    <div class="profile-content mt-4">
                        <div class="profile-img-wrapper mb-4">
                            <img class="profile-img img-fluid rounded-circle" src="{{ asset('storage/img/' . $about->image) }}" alt="{{ $about->title }}" />
                        </div>
                        <p class="lead fw-bold mb-4">{{ $about->title }}</p>
                        <p class="text-muted">{{ $about->content }}</p>
                        <div class="fs-5 text-muted mb-5">
                            Alamat: {{ $about->address }}
                        </div>
                    </div>
                    @else
                    <p>Belum ada konten profil</p>
                    @endif
                    <!-- Social media icons with animation -->
                    <div class="social-icons mt-4">
                        <a href="#!" class="text-gradient me-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#!" class="text-gradient me-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#!" class="text-gradient me-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="GitHub"><i class="bi bi-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection