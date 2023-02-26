@extends('layouts\app')
@section('content')


<!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Review</h1>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- review Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Review</h6>
                    <h1 class="mb-5"><span class="text-primary text-uppercase">Write</span> a Review</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h6 class="section-title text-start text-primary text-uppercase">dayoutInn</h6>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>dayoutinn@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://maps.google.com/maps?q=university%20of%20ruhuna,%20A2,%20Matara,%20Sri%20Lanka&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                 <h3 class="mb-5">Review<span class="text-primary text-uppercase">Form</span></h3>
                            </div>
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('storeReview') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                              
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                            <label for="name">{{Auth::user()->name}}</label>
                                            @error('name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                            <label for="email">{{Auth::user()->email}}</label>
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="review" placeholder="Leave a review here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Write a Review</label>
                                            @error('review')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                     <button class="btn btn-primary w-100 py-3" type="submit">Submit Review</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- review End -->
@endsection
