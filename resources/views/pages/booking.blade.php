@extends('layouts\app')
@section('content')   


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <!-- Booking Start -->
        <div class="containe">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Dayout plan</span></h1>
                </div>
            </div>
        </div>
        <section class="rooms spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6 align-items-center">
                        <div class="room__text">
                            <h3>Hotel MARRIOT</h3>
                            <h5><sup style="color: rgba(0, 0, 0, 0.496);">GALLE</span></h5>
                            <div>
                                <p style="width: 500px;">There are many items hereThere are many items hereThere are many items
                                    hereThere are many items hereThere are many items hereThere are many items hereThere are
                                    many items hereThere are many items hereThere are many items here</p>
                                <li><span>Type:</span>30 ft</li>
                                <li><span>Capacity:</span>Max persion 3</li>
                                <li><span>Events:</span>King Beds</li>
                                <li><span>Contact:</span>Wifi, Television, Bathroom,...</li>
                                <li><span>Duration:</span>Sea View</li>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6 align-items-center" style="height:500px; width:500px; margin-bottom: 50px   ">
                        <div class="carousel-inner" style="margin-top:10px">
                            <div class="carousel-item active">
                                <img class="w-100" src="img/gallery-img1.jpg" alt="Image" style="height:500px">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="img/gallery-img2.jpg" alt="Image" style="height:500px">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="w-100" src="img/gallery-img3.jpg" alt="Image" style="height:500px">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                  <a href="{{Route('bookingform')}}"> <button class="btn btn-primary w-100 py-3" >Book Now</button></a> 
                </div>
        </section>
        <!-- Booking End -->
@endsection