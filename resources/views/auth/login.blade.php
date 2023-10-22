<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Admin Login</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('/')}}backend/assets/images/admin-fav.png" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('/')}}backend/dist/css/style.min.css" />
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="{{route('home')}}" class="text-nowrap logo-img text-center d-block mb-5 w-100">
                                <img src="{{asset('/')}}frontend/images/logo.svg" width="180" alt="">
                            </a>
                            <div class="row">
                                <div class="col-6 mb-2 mb-sm-0">
                                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/google-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>Google
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a class="btn btn-white text-dark border fw-normal d-flex align-items-center justify-content-center rounded-2 py-8" href="javascript:void(0)" role="button">
                                        <img src="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/svgs/facebook-icon.svg" alt="" class="img-fluid me-2" width="18" height="18">
                                        <span class="d-none d-sm-block me-1 flex-shrink-0">Sign in with</span>FB
                                    </a>
                                </div>
                            </div>
                            <div class="position-relative text-center my-4">
                                <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">or sign in with</p>
                                <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Email</label>
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                                        <label class="form-check-label text-dark" for="flexCheckChecked">
                                            Remeber this Device
                                        </label>
                                    </div>
                                    <a class="text-primary fw-medium" href="authentication-forgot-password.html">Forgot Password ?</a>
                                </div>
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2" value="Sign In">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('/')}}backend/dist/libs/jquery/dist/jquery.min.js"></script>
<script src="{{asset('/')}}backend/dist/libs/simplebar/dist/simplebar.min.js"></script>
<script src="{{asset('/')}}backend/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--  core files -->
<script src="{{asset('/')}}backend/dist/js/app.min.js"></script>
<script src="{{asset('/')}}backend/dist/js/app.init.js"></script>
<script src="{{asset('/')}}backend/dist/js/app-style-switcher.js"></script>
<script src="{{asset('/')}}backend/dist/js/sidebarmenu.js"></script>

<script src="{{asset('/')}}backend/dist/js/custom.js"></script>
</body>

<!-- Mirrored from demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/html/main/authentication-login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 13:53:19 GMT -->
</html>
