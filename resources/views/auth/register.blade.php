<!doctype html>
<html lang="en">


<!-- Mirrored from themesbrand.com/dason/layouts/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 07:10:07 GMT -->
<head>

        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}">

        <!-- preloader css -->
        <link rel="stylesheet" href="{{ asset('assets/css/preloader.min.css')}}" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark">

    <!-- <body data-layout="horizontal"> -->
        <div class="auth-page">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5">
                        <div class="auth-full-page-content d-flex p-sm-5 p-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="assets/images/Seagull.png" alt="" height="100">
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Register Account</h5>
                                            <p class="text-muted mt-2">Get your free account now.</p>
                                        </div>
                                        <form class="needs-validation mt-4 pt-2" method="POST"    action="{{ route('register') }}">
                                            @csrf
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="email"
                                                  id="input-email"
                                                  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                                 placeholder="Enter Email" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Email
                                                </div>
                                                <label for="input-email">Email</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="mail"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                                id="input-username" placeholder="Enter User Name" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Username
                                                </div>
                                                <label for="input-username">Username</label>
                                                <div class="form-floating-icon">
                                                   <i data-feather="users"></i>
                                                </div>
                                            </div>

                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"

                                                 id="input-password" placeholder="Enter Password" required>
                                                <div class="invalid-feedback">
                                                    Please Enter Password
                                                </div>
                                                <label for="input-password">Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>
                                            <div class="form-floating form-floating-custom mb-4">
                                                <input type="password"

                                                id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                <div class="invalid-feedback">
                                                    Please Enter Password
                                                </div>
                                                <label for="input-password">Confirm Password</label>
                                                <div class="form-floating-icon">
                                                    <i data-feather="lock"></i>
                                                </div>
                                            </div>
                                            {{-- @csrf --}}
                                            <div class="mb-4">
                                                <p class="mb-0">By registering you agree to the Seagull <a href="#" class="text-primary">Terms of Use</a></p>
                                            </div>
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                            </div>
                                        </form>



                                        {{-- <div class="mt-4 pt-2 text-center">
                                            <div class="signin-other-title">
                                                <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign up using -</h5>
                                            </div>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-primary text-white border-primary">
                                                        <i class="mdi mdi-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-info text-white border-info">
                                                        <i class="mdi mdi-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="javascript:void()"
                                                        class="social-list-item bg-danger text-white border-danger">
                                                        <i class="mdi mdi-google"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div> --}}

                                        <div class="mt-5 text-center">
                                            <p class="text-muted mb-0">Already have an account ? <a href="{{ route('login')}}"
                                                    class="text-primary fw-semibold"> Login </a> </p>
                                        </div>
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <script>document.write(new Date().getFullYear())</script> Seagull International
                                        by Affinity Interactive</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
                            <div class="bg-overlay"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-end">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                        <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                             <div class="carousel-indicators auth-carousel carousel-indicators-rounded justify-content-center mb-0">
                                                    {{-- <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                                                        <img src="{{ asset('assets/bg.jpg')}}" class="avatar-md img-fluid rounded-circle d-block" alt="...">
                                                    </button> --}}

                                                </div>
                                            <!-- end carouselIndicators -->
                                            {{-- <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="testi-contain text-center text-white">
                                                        <i class="bx bxs-quote-alt-left text-success display-6"></i>
                                                        <h4 class="mt-4 fw-medium lh-base text-white">“Welcome to Seagull
                                                            International, where the pursuit of excellence is a dynamically
                                                            refreshed habit, not just a random occurrence. Give us the
                                                            privilege, to bridge the gap between employer and employee.”
                                                        </h4>
                                                        <div class="mt-4 pt-1 pb-5 mb-5">
                                                            <h5 class="font-size-16 text-white">Dr. Sureshkumar Madhusudhanan, MBA, PhD
                                                            </h5>
                                                            <p class="mb-0 text-white-50">Managing Director</p>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div> --}}
                                            <!-- end carousel-inner -->
                                        </div>
                                        <!-- end review carousel -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container fluid -->
        </div>



    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('assets/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
    <!-- pace js -->
    <script src="{{ asset('assets/libs/pace-js/pace.min.js')}}"></script>

    <script src="{{ asset('assets/js/pages/pass-addon.init.js')}}"></script>

    <script src="{{ asset('assets/js/pages/feather-icon.init.js')}}"></script>

    </body>


<!-- Mirrored from themesbrand.com/dason/layouts/default/auth-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Nov 2021 07:10:07 GMT -->
</html>
