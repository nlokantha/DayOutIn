@extends('layouts\app')
@section('content')


<!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown"> customer Dashboard</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">www.DayOutIn.com</h6>
                    <h1 class="mb-5 text-uppercase"><span class="text-primary">welcome&nbsp;&nbsp;</span>"{{Auth::user()->name}}"</h1>
                </div>
            </div>
        </div>
        <div>
        <div class="container wow fadeInUp mb-5" data-wow-delay="0.1s">
                <div class="text-center">
                    <h2 class="mb-5 text-uppercase"><span class="text-black">My Profile</h2>
                </div>
        </div>
        </div>
        <div class="card mb-5">
            <div class="card-body text-center">
                <h5 class="card-title">Edit your profile</h5>
                <p class="card-text">Lets click here to edit your profile</p>
                <a href="#" class="btn btn-primary">Edit Here</a>
            </div>
        </div>
        <div class="container wow fadeInUp mb-5" data-wow-delay="0.1s">
                <div class="text-center">
                    <h2 class="mb-5 text-uppercase"><span class="text-black">My Listings</h2>
                </div>
        </div>
        <div class="row g-4">
                @foreach ($PownerListings as $packages)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">

                                <img  style="width:350px;height:300px"
                                    src="{{ asset('product_images/' . $packages->image) }}" alt="">


                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Rs
                                    {{ $packages->price }}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0 text-capitalize">{{ Str::limit($packages->title, 50) }}</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-home text-primary me-2"></i>{{ $packages->type }}</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-map-marker text-primary me-2"></i>{{ $packages->location }}</small>
                                    <small class="text-danger"><i class="fa fa-users text-primary me-2"></i>
                                        <b>{{ $packages->availability }} more left!</b>
                                    </small>
                                </div>
                                <p class="text-body mb-3">{{ Str::limit($packages->discription, 30) }} </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url ('package_details',$packages->id)}}">Edit</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{url ('package_details',$packages->id)}}">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection
