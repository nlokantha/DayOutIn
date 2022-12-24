<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DayOutInn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start-->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="{{ Route('welcome') }}"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <img class="col-md-10" src="{{ asset('img/logo.png') }}">
                    </a>
                </div>

                <!-- navbar start -->
                {{-- {{dd(Auth::user())}} --}}
                <div class="col-lg-9 d-flex flex-row-reverse">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="{{ Route('welcome') }}" class="navbar-brand d-block d-lg-none"></a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="{{ Route('welcome') }}" class="nav-item nav-link active">Home</a>
                                <a href="{{ Route('packages') }}" class="nav-item nav-link">Packages</a>
                                @if (Auth::check())
                                    @if (Auth::user()->role_as == 2 )
                                        <a href="{{ Route('listing') }}" class="nav-item nav-link">Listing</a>
                                    @endif
                                @endif

                                @if (!(Auth::check()))
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown">Register</a>
                                    <div class="dropdown-menu rounded-0 m-0">
                                        <a href="{{ Route('createCustomer') }}" class="dropdown-item">Customer</a>
                                        <a href="{{ Route('createOwner') }}" class="dropdown-item">Property Owner</a>
                                    </div>
                                </div>
                                @endif
                                <a href="" class="nav-item nav-link">About us</a>
                                <a href="{{ Route('createContact') }}" class="nav-item nav-link">Contact</a>
                            </div>
                            <div>
                                @if (Auth::check())
                                    <button class="rounded-circle"
                                        style="width: 50px; height: 50px;margin-right: 25px; border-color: transparent; border: none;
                                        background-color: transparent;"
                                        alt="Avatar">
                                        <div style="color: white;" onclick="myfun1()"><i
                                                class="fas fa-sign-out-alt fa-2x"></i></div>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->





        @yield('content')

        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4"><span class="text-primary text-uppercase">Contact us</span>
                            </h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Enter your email">
                                <button type="button"
                                    class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html">
                                <h1 class="text-white text-uppercase mb-3">Dayoutinn</h1>
                            </a>
                            <p class="text-white mb-0">
                                The national emblem of Sri Lanka[1][2][3] is used by the State of Sri Lanka and the Sri
                                Lankan government in connection
                                with the administration and government of the country</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Wellamadama, Matara.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0112456789</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>www.dayoutinn.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i
                                    class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link"
                                    href="{{ Route('welcome') }}>home</a>
                                <a class="btn
                                    btn-link" href="{{ Route('booking') }}">booking</a>
                                <a class="btn btn-link" href="{{ Route('packages') }}">Packages</a>
                                <a class="btn btn-link" href="{{ Route('listing') }}">Listing</a>
                                <a class="btn btn-link" href="{{ Route('createContact') }}">contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- login modal -->

        <!-- Modal HTML -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 850px; background-color:transparent; border: none;">
                    <section class="vh-100">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col col-xl-10">
                                    <div class="card" style="border-radius: 1rem;">
                                        <div class="row g-0">
                                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                                                    alt="login form" class="img-fluid"
                                                    style="border-radius: 1rem 0 0 1rem;" />
                                            </div>
                                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                                <div class="card-body p-4 p-lg-5 text-black">

                                                    <form method="POST" action="{{ route('login') }}">
                                                        @csrf
                                                        <div class="d-flex align-items-center mb-3 pb-1">
                                                            <img src="{{ asset('img/logo.png') }}" alt=""
                                                                style="height: 30px; width:240px; ">
                                                        </div>

                                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">
                                                            Sign into your account
                                                        </h5>

                                                        <div class="form-outline mb-4">
                                                            <input type="email" id="email"
                                                                class="form-control form-control-lg" name="email" />
                                                            <label class="form-label" for="form2Example17">Email
                                                                address</label>
                                                        </div>

                                                        <div class="form-outline mb-4">
                                                            <input type="password" id="password"
                                                                class="form-control form-control-lg"
                                                                name="password" />
                                                            <label class="form-label"
                                                                for="form2Example27">Password</label>
                                                        </div>

                                                        <div class="pt-1 mb-4">
                                                            <button class="btn btn-dark btn-lg btn-block"
                                                                type="submit">Login</button>
                                                        </div>

                                                        <button class="small" href=""
                                                            style="color: #393f81; border: none; background-color: transparent;">Forgot
                                                            password?</button><br>
                                                        <button class="small" href="loginform.html"
                                                            style="color: #393f81; border: none; background-color: transparent;">Don't
                                                            have an account? </button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <!-- logout modal -->

        <div class="modal bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="logoutmod">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Logout <i class="fa fa-lock"></i></h4>
                    </div>
                    <div class="modal-body"><i class="fa fa-question-circle"></i> Are you sure you want to log out?
                    </div>
                    <div class="modal-footer"><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            class="btn btn-primary btn-block">Logout</a></div>



                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </div>
            </div>
        </div>

        <!-- java function to modal -->

        <script>
            function myfun() {
                var myModal = new bootstrap.Modal(document.getElementById("myModal"));
                myModal.show()
            };

            function myfun1() {
                var myModal = new bootstrap.Modal(document.getElementById("logoutmod"));
                myModal.show()
            };
        </script>




        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
