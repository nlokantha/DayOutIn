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
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
            @endif
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
                    <h2 class="mb-5 text-uppercase"><span class="text-black">My Orders</h2>
                </div>
        </div>
        <div class="row g-4">
                @foreach ($CustomerOrders as $packages)
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0 text-capitalize">{{ Str::limit($packages->fname, 50) }}</h5>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-home text-primary me-2"></i>{{ $packages->email }}</small>
                                    <small class="border-end me-3 pe-3"><i
                                            class="fa fa-map-marker text-primary me-2"></i>{{ $packages->email }}</small>
                                    <small class="text-danger"><i class="fa fa-users text-primary me-2"></i>
                                        <b>{{ $packages->no_of_persons }} more left!</b>
                                    </small>
                                </div>
                                <p class="text-body mb-3">{{ Str::limit($packages->contact, 30) }} </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{url ('package_details',$packages->id)}}">Cancel Order</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
@endsection
