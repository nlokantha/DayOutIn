<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DayOutInn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif
}

p {
    margin: 0
}

.container {
    max-width: 900px;
    margin: 30px auto;
    background-color: #e8eaf6;
    padding: 35px;
}

.box-right {
    padding: 30px 25px;
    background-color: white;
    border-radius: 15px
}

.box-left {
    padding: 20px 20px;
    background-color: white;
    border-radius: 15px
}

.textmuted {
    color: #7a7a7a
}

.bg-green {
    background-color: #d4f8f2;
    color: #06e67a;
    padding: 3px 0;
    display: inline;
    border-radius: 25px;
    font-size: 11px
}

.p-blue {
    font-size: 14px;
    color: #1976d2
}

.fas.fa-circle {
    font-size: 12px
}

.p-org {
    font-size: 14px;
    color: #fbc02d
}

.h7 {
    font-size: 15px
}

.h8 {
    font-size: 12px
}

.h9 {
    font-size: 10px
}

.bg-blue {
    background-color: #dfe9fc9c;
    border-radius: 5px
}

.form-control {
    box-shadow: none !important
}

.card input::placeholder {
    font-size: 14px
}

::placeholder {
    font-size: 14px
}

input.card {
    position: relative
}

.far.fa-credit-card {
    position: absolute;
    top: 10px;
    padding: 0 15px
}

.fas,
.far {
    cursor: pointer
}

.cursor {
    cursor: pointer
}

.btn.btn-primary {
    box-shadow: none;
    height: 40px;
    padding: 11px
}

.bg.btn.btn-primary {
    background-color: transparent;
    border: none;
    color: #1976d2
}

.bg.btn.btn-primary:hover {
    color: #539ee9
}

@media(max-width:320px) {
    .h8 {
        font-size: 11px
    }

    .h7 {
        font-size: 13px
    }

    ::placeholder {
        font-size: 10px
    }
}

</style>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>


    <!-- Favicon -->
    <!-- <link href="img/logo.png" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
    <div class="row m-0">
        <div class="col-md-7 col-12">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="row box-right">
                        <div class="col-md-8 ps-0 ">
                            <p class="ps-3 textmuted fw-bold h6 mb-0">SUB TOTAL</p>
                            <p class="h1 fw-bold d-flex"> <span
                                    class=" h6 align-text-top mt-1"></span>Rs. 
                                <span class="textmuted">{{$package[0]->price*$OrderDetails[0]->no_of_persons}}.00</span> </p>
                            <p class="ms-3 px-2 bg-green">10% pay to book</p>
                            <p class="ms-3 px-2 bg-green text-danger">Status: <b>UNPAID</b></p>
                        </div>
                        <div class="col-md-4">
                            <p class="p-blue"> <span class="fas fa-circle pe-2"></span>Pay to hotel </p>
                            <p class="fw-bold mb-3"><span class="fas fa-sl-rupee-sign pe-1"></span>Rs. <span
                                    class="textmuted">{{$package[0]->price*$OrderDetails[0]->no_of_persons-$OrderDetails[0]->advance}}.00</span> </p>
                            <p class="p-org"><span class="fas fa-circle pe-2"></span>Advance Payment</p>
                            <p class="fw-bold"><span class=""></span>Rs. <span
                                    class="textmuted">{{$OrderDetails[0]->advance}}.00</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0 mb-4">
                    <div class="box-right">
                        <div class="d-flex pb-2">
                            <p class="fw-bold h7">{{$package[0]->title}}</p>
                        </div>
                        <div class="bg-blue p-2">
                            <P class="h8 textmuted">{{$package[0]->discription}}
                            </P>
                            <P class="h8 textmuted">Checking date : {{$OrderDetails[0]->order_date}}</P>
                        </div>
                        <div class="bg-blue p-2">
                            <P class="h8 textmuted">{{$package[0]->location}}
                            </P>
                            <P class="h8 textmuted text-danger">Notice : You must check in after 10.00AM and check out before 10.00PM</P>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="box-right">
                        <div class="d-flex mb-2">
                            <p class="fw-bold"> DayoutInn.lk</p>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-2">
                                <p class="textmuted h8">Largest Day Out Booking web site in Sri Lanka.</p>
                                <img class="col-md-10" src="{{ asset('img/logo.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-12 ps-md-5 p-0 ">
            <div class="box-left">
                <p class="textmuted h8">Invoice</p>
                <p class="fw-bold h7">{{$OrderDetails[0]->fname}}</p>
                <p class="textmuted h8">{{$OrderDetails[0]->booking_date}}</p>
                <div class="h8">
                    <div class="row m-0 border mb-3">
                        <div class="col-3 h8 pe-0 ps-2">
                            <p class="textmuted py-2">Type</p> <span class="d-block py-2 border-bottom ">{{$package[0]->type}}</span> <span class="d-block py-2">Sub Total (Rs.)</span>
                        </div>
                        <div class="col-3 text-center p-0">
                            <p class="textmuted p-2"># of persons</p> <span class="d-block p-2 border-bottom">{{$OrderDetails[0]->no_of_persons}}</span> 
                        </div>
                        <div class="col-3 p-0 text-center h8 border-end">
                            <p class="textmuted p-2">Per person</p> <span class="d-block border-bottom py-2"><span
                                    class=""></span>{{$package[0]->price}}</span> <span class="d-block py-2 ">
                        </div>
                        <div class="col-3 p-0 text-center">
                            <p class="textmuted p-2">Total</p> <span class="d-block py-2 border-bottom"><span
                                    class=""></span>{{$OrderDetails[0]->no_of_persons}}*{{$package[0]->price}}.00</span> <span class="d-block py-2"><span
                                    class=""></span>{{$OrderDetails[0]->no_of_persons*$package[0]->price}}.00</span>
                        </div>
                    </div>
                    <div class="d-flex h7 mb-2">
                        <p class="">Payment Amount (Sub total * 10%) :</p>
                        <p class="ms-auto"><span class="">Rs.</span>{{$OrderDetails[0]->no_of_persons*$package[0]->price*0.1}}.00</p>
                    </div>
                  
                </div>
                <div class="">
                    <p class="h7 fw-bold mb-1">Pay by your VISA</p>
                    <p class="textmuted h8 mb-2">Make payment for this invoice by filling in the details</p>
                    <div class="form">
                        <div class="row">
                            <div class="col-12">
                                <div class="card border-0"> <input class="form-control ps-5" type="text"
                                        placeholder="Card number"> <span class="far fa-credit-card"></span> </div>
                            </div>
                            <div class="col-6"> <input class="form-control my-3" type="text" placeholder="MM/YY"> </div>
                            <div class="col-6"> <input class="form-control my-3" type="text" placeholder="cvv"> </div>
                            <p class="p-blue h8 fw-bold mb-3">MORE PAYMENT METHODS</p>
                        </div>
                        <form method="post" action="{{Route('forCustomerDashboard')}}">
                            @csrf <input type="hidden" name="orderId" value="{{$OrderDetails[0]->id}}">
                        <button type = "submit">
                        <div class="btn btn-primary d-block h8">PAY <span
                                class=""></span>Rs. {{$OrderDetails[0]->no_of_persons*$package[0]->price*0.1}}.00<span class="ms-3 fas fa-arrow-right"></span>
                        </div></button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>