<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?? 'Real-Estate' ?></title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet" />

    <!-- Font awesome and Icon fonts stylesheet-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />

    <!-- Bootstrap 5 stylesheet -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />

    <!-- Libraries Stylesheets -->
    <link rel="stylesheet" href="./libraries/animate/animate.min.css" />
    <link rel="stylesheet" href="./libraries/owlcarousel/assets/owl.carousel.min.css" />
</head>

<body>
    <div class="container-xxl p-0">
        <!-- Navbar  -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="/home" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="./images/logo.png" alt="logo" style="width: 40px; height: 40px" />
                    </div>
                    <h1 class="m-0 text-primary">Rental</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/home" class="nav-item nav-link active">Home</a>
                        <a href="/about" class="nav-item nav-link">About</a>
                        <a href="/property_list" class="nav-item nav-link">Property List</a>
                        <a href="/testimonial" class="nav-item nav-link">Testimonial</a>
                        <a href="/contact-us" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>

        <!--dynamic contnet rendering-->
        <?php echo $content; ?>

        <!-- Footer -->
        <div class="container-fluid bg-dark text-white-50 footer mt-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2">
                            <i class="fa fa-map-marker-alt me-3"></i>22 Mirugi Goma,
                            North-Kivu
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-phone-alt me-3"></i>+243 992 984 499
                        </p>
                        <p class="mb-2">
                            <i class="fa fa-envelope me-3"></i>jimmybasele@gmail.com
                        </p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="/about">About Us</a>
                        <a class="btn btn-link text-white-50" href="/contact-us">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg" alt="" />
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2016/04/25/23/30/house-1353389__340.jpg" alt="" />
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg" alt="" />
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2013/07/18/10/56/house-163526__340.jpg" alt="" />
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2016/11/18/17/46/house-1836070__340.jpg" alt="" />
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="https://cdn.pixabay.com/photo/2017/03/30/04/14/house-2187170__340.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <form method="post" action="https://formspree.io/f/xwkzonbr" class="position-relative mx-auto" style="max-width: 400px">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"  id="email" name="email" placeholder="Your email" />
                            <button type="submit" id="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                                SignUp
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">HouseRental</a>, All
                            Right Reserved. Designed By
                            <a class="border-bottom" href="https://github.com/Chrissiku">Chris Siku & Jodrack</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/home">Home</a>
                                <a href="">Cookies</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./libraries/wow/wow.min.js"></script>
    <script src="./libraries/easing/easing.min.js"></script>
    <script src="./libraries/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="./libraries/owlcarousel/owl.carousel.min.js"></script>

    <!-- Javascript -->
    <script src="./js/main.js"></script>
</body>

</html>