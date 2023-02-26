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
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="room__text mb-4">
                            <h3>{{$packages->title}}</h3>
                            <h5><sup style="color: rgba(0, 0, 0, 0.496);">
                            <i class="fa fa-map-marker text-primary me-2"></i>{{$packages->location}}</span></h5>
                            <div class="mt-3">                        
                                <small class="me-3 pe-3"><i
                                            class="fa fa-home text-primary me-2"></i>Type: {{$packages->type}}</small>
                                <!-- <small class="me-3 pe-3"><i
                                            class="fa fa-map-marker text-primary me-2"></i>location: {{$packages->location}}</small> -->
                                <small class="me-3 pe-3"><i
                                class="fa fa-university text-primary me-2"></i>price: {{$packages->price}}</small>
                                <small class="me-3 pe-3"><i
                                            class="fa fa-spinner text-primary me-2"></i>Availability: {{$packages->availability}}</small>
                                <p class="mt-4 ms-2 mb-4 me-5">{{$packages->discription}}</p>
                            </div>
                        </div>
                        <div class="col-lg-11 mb-4 mt-6">
                        
                            <form method="post" action="{{Route('orderstore',[$packages->id])}}">
                            @csrf 
                                <div class="row g-3">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h1 class="mb-2 mt-5">RESER<span class="text-primary text-uppercase">VATION</span>
                                        </h1>
                                    </div>
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h6 class="section-title text-center text-primary text-uppercase">Personal Info
                                        </h6>
                                    </div>
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="fname" value="{{ $customer->fname }} {{ $customer->lname }}"
                                                placeholder="Your Name">
                                            <label for="fname">Your Name</label>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="lname" value="{{ $packages->powner->lname }}"
                                                placeholder="Last Name">
                                            <label for="lname">Last Name</label>
                                        </div>
                                    </div> -->
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name="email" value="{{ $customer->email }}" 
                                            placeholder="Email">
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nic" value="{{ $customer->nic }}" placeholder="NIC">
                                            <label for="nic">NIC</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="address" value="{{ $customer->address }}"
                                                placeholder="Address">
                                            <label for="address">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="contact" value="{{ $customer->contact }}"
                                                placeholder="Contact Number">
                                            <label for="contact">Contact Number</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="price" id="price"  disabled value="{{$packages->price}}.00">
                                            <label for="childs">Per person price (Rs.)</label>
                                        </div>
                                    </div>
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                        <h6 class="section-title text-center text-primary text-uppercase">Booking Info
                                        </h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="date" class="form-control datetimepicker-input" name="date"
                                            placeholder="date" data-toggle="datetimepicker"
                                            min="{{ \Carbon\Carbon::parse($packages->st_date)->format('Y-m-d') }}" />
                                            <label for="date">Date</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <select class="form-select" name="adults" id="persons">
                                                @for($i=1; $i<=$packages->availability; $i++) <option  value="{{$i}}">{{$i}}</option>
                                                    @endfor

                                            </select>
                                            <label for="adults">Persons</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="advance" id="advance" readonly value="{{$packages->price*0.1}}.00">
                                            <label for="childs">Advance amount (Rs.)</label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    // Get the price, persons and advance fields
                                    var priceField = document.getElementById('price');
                                    var advanceField = document.getElementById('advance');
                                    var personsField = document.getElementById('persons');

                                    // Listen for changes to the persons field
                                    personsField.addEventListener('input', function() {
                                        // Parse the price and persons values as floats
                                        var price = parseFloat(priceField.value);
                                        var persons = parseFloat(personsField.value);

                                        // Calculate the advance (10% of the price times the number of persons)
                                        var advance = price * 0.1 * persons;

                                        // Set the value of the advance field to the calculated value, rounded to 2 decimal places
                                        advanceField.value = advance.toFixed(2);
                                    });
                                </script>

                            
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-6 p-0 order-lg-5 order-md-5 col-md-6 align-items-center mt-2 mb-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($photos as $photo)
                                <div class="carousel-item active">
                                <img src="{{ asset('product_images/'.$photo->image) }}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                  <button  class="btn btn-primary w-100 py-3" >Book Now</button>
                </div>
                </form>
        </section>
        <!-- Booking End -->
@endsection