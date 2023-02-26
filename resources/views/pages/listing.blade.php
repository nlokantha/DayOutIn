@extends('layouts\app')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Listing</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <!-- Booking Start -->
    <div class="container-xxl py-5">
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">List now</h6>
                <h1 class="mb-5">List A <span class="text-primary text-uppercase">Dayout plan</span></h1>
            </div>
            <div class="row g-5">
                <div class="wow fadeInUp" data-wow-delay="0.2s">

                    <form method="post" action="{{ route('package.store') }}" enctype="multipart/form-data">

                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="title" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Title</label>
                                    @error('title')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="select3" name="type">
                                        <option value="Hotel">Hotel</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                    <label for="select1">Select type</label>
                                    @error('type')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" name="description" id="message" style="height: 100px"></textarea>
                                    <label for="message">Description</label>
                                    @error('description')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" name="st_date"
                                        id="checkin" placeholder="Check In"
                                        data-toggle="datetimepicker" />
                                    <label for="checkin">Start date</label>
                                    @error('st_date')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="availability" id="name"
                                        placeholder="Your Name">
                                    <label for="name">Availability</label>
                                    @error('availability')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select" name="location" id="select3">
                                        <option value="GALLE">GALLE</option>
                                        <option value="MATARA">MATARA</option>
                                        <option value="HIKKADUWA">HIKKADUWA</option>
                                    </select>
                                    <label for="select3">Select location</label>
                                    @error('location')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Special Request" name="comments" id="message" style="height: 100px"></textarea>
                                    <label for="message">Comments</label>
                                    @error('comments')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <input type="file" class="form-control" name="images[]" id="image" multiple
                                    accept="image/*" placeholder="Select all images">
                                <label for="image">Select all images</label>
                                @error('images[]')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="price" id="price"
                                        placeholder="Package price">
                                    <label for="price">Price</label>
                                    @error('price')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-5">
                            <button class="btn btn-primary w-100 py-3" type="submit">List NOW</button>
                        </div>

                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg"
                                style="margin-top: 25%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->
@endsection
