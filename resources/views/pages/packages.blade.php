@extends('layouts\app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Packages</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Booking Start -->
    <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="bg-white shadow" style="padding: 35px;">
                <div class="row align-items-center">
                    <div class="col">
                        <form method="post" action="{{Route('filter')}}" enctype="multipart/form-data"> @csrf
                            
                        <div class="row align-items-center">
                                <div class="col-md-4">
                                    <div class="date" id="date2" data-target-input="nearest" name="date">
                                        <input type="date" class="form-control date"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <select class="form-select" name="type" placeholder="Type">
                                    <option selected value="Villa" >VILLA</option>
                                    <option value="Hotel">HOTEL</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="location" placeholder="Location">
                                    <option value="GALLE">GALLE</option>
                                    <option value="MATARA">MATARA</option>
                                    <option value="HIKKADUWA">HIKKADUWA</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary w-100" type="submit">Filter</button>
                            </div>
                        </div>
                        </form>
                            


                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Booking End -->
    <!-- Room Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our packages</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">packages</span></h1>
            </div>
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


            <div class="row g-4">
                @foreach ($packages as $packages)
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
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{url ('package_details',$packages->id)}}">View
                                        Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{url ('package_details',$packages->id)}}">Book
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Room End -->
@endsection

