@extends('layouts.app')

@section('content')
<!-- Header -->
<header class="py-5 bg-white text-dark">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <!-- Profile Picture Column -->
            <div class="col-lg-6">
                <div class="text-center text-lg-start">
                    <div class="mb-4">
                        <div class="">
                            <img class="profile-img rounded-circle img-fluid" src="{{ asset('img/ppp.jpg') }}" alt="{{ $homepage ? $homepage->title : 'Profile Picture' }}" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text Content Column -->
            <div class="col-lg-6">
                <div class="text-center text-lg-start">
                    <h1 class="display-3 fw-bolder mb-3">
                        <span class="text-dark">
                            @if($homepage)
                            {{ $homepage->title }}
                            @else
                            Muhammad Dani Pradana
                            @endif
                        </span>
                    </h1>
                    <div class="fs-5 fw-light mb-4">
                        @if($homepage)
                        {{ $homepage->description }}
                        @else
                        Welcome To My Page!
                        @endif
                    </div>
                    <div class="fs-5 mb-4">
                        @if($homepage)
                        Alamat: {{ $homepage->address }}
                        @else
                        -----------------------------
                        @endif
                    </div>

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-lg-start">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="/about">About Me</a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="/contact">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection