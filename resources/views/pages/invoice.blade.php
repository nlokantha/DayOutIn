<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DayOutInn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

<style>

.body-main {
        background: #ffffff;
        border-bottom: 15px solid #1E1F23;
        border-top: 15px solid #1E1F23;
        margin-top: 30px;
        margin-bottom: 30px;
        padding: 50px 120px !important;
        position: center ;
        box-shadow: 0 1px 21px #808080;
        font-size:20px;   
        
    }
    .main thead {
		background: #1E1F23;
        color: #fff;
		}
    .img{
        height: 100px;}
    h1{
       text-align:center;
    }

    
</style>
    <!-- JavaScript Bundle with Popper -->
    <script src="js/app1.js" defer></script>


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

<div class="page-header">
    <h1>Invoice</h1>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-50 col-md-offset-3 body-main">
            <div class="col-md-12">
               <div class="row">
               <div class="col-12 mb-2">
                    <img class="col-md-6" src="{{ asset('img/logo.png') }}">
                </div>
                    <div class="col-md-8 text-right">
                        <h8 style="color: #F81D2D;"><strong>Largest Day Out Booking web site in Sri Lanka</strong></h8>
                        <p>University of Ruhuna<br>
                           Wellamadama, Matara<br>
                           dayoutinn@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-12 text-right" align="right">
                        <h7 style="color: #000080;"><strong>Bill To:</strong></h7>
                           <p >Customer Name<br>
                           Customer Email<br>
                           Customer Contact</p>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>INVOICE</h1>
                        <h5>#id</h5>
                    </div>
                </div>
                <br />
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-md-6"><h5>Description</h5></th>
                                <th class="col-md-3"><h5>QUANTITY</h5></th>
                                <th class="col-md-3"><h5>PRICE</h5></th>
                                <th class="col-md-3"><h5>Amount</h5></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >Day Outing</td>
                                <td > 10 </td>
                                <td > 1500 </td>
                                <td > count*unitprice </td>
                            </tr>
                          
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    
                                        <strong>Sub Total:</strong>
                                    
                                </td>
                                <td align="right">
                                    222255
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    
                                        <strong style="color:SlateBlue;">Amount Paid:</strong>
                                    
                                </td>
                                <td align="right">
                                  2000
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="text-right">
                                    
                                        <strong style="color:Tomato;">Amount Due:</strong>
                                    
                                </td>
                                <td align="right">
                                  100
                                </td>
                            </tr>
                                 
                                   
                            <tr style="color: #F81D2D;">
                                <td align="left"><h4><strong>Total:</strong></h4></td><td><td></td></td>
                                <td align="right"><h4><strong>Rs.5000 </strong></h4></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="col-md-12">
                        <p><b>Date :</b> 6 June 2019</p>
                        <br />
    
                        <strong><p align="left">TERMS AND NOTES</p></strong>
                        <p>Dear kasun ,Thank you very much.We really appreciate your business.Your booking is now confirmed and  no need to contact us.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12">

                              <a href="" @click.prevent="printme" target="_blank" class="btn btn-default ms-5"><i class="fa fa-print"></i> Print</a>
                              <button type="button" class="btn btn-primary float-right ms-5" style="margin-right: 5px;">
                                <i class="fa fa-download"></i> Generate PDF
                              </button>

                            </div>
                        </div>


</body>
</html>