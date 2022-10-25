<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Galaxy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="{{asset('Template/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">
</head>


<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Gymnast</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="/index" class="nav-item nav-link active">Home</a>
                    <a href="/tam" class="nav-item nav-link">Tools and Machine</a>
                    <a href="/upload" class="nav-item nav-link">Upload</a>
                    <a href="/expoint" class="nav-item nav-link">Exchange Point</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <a href="/login" class="navbar-item nav-link">Login</a>
                    <a href="/register" class="navbar-item nav-link">Register</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
</body>
</html>
@yield('contactDash')

<body>
    @yield('contactFooter')
  <!-- Footer Start -->
  <div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Get In Touch</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
            <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Tools and Machine</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Upload</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Exchange Point</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Popular Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>-</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>-</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>-</a>
                <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>-</a>
                <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>-</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Opening Hours</h4>
            <h5 class="text-white">Monday - Friday</h5>
            <p>8.00 AM - 8.00 PM</p>
            <h5 class="text-white">Saturday - Sunday</h5>
            <p>2.00 PM - 8.00 PM</p>
        </div>
    </div>
    <div class="container border-top border-dark pt-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-bold" href="#">Galaxy</a>. All Rights Reserved.
        </p>
    </div>
</div>
<!-- Footer End -->
</body>