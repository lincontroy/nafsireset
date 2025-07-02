<!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/lightcase.css">

    <!-- main css for template -->
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body class="home-3">

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->



    <!-- ================> header section start here <================== -->
    <header class="header" id="navbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="/"><img src="logo.png" alt="Nafsireset" width="100" height="100"></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler--icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="menu">
                    <ul>
    <li>
        <a href="/" class="active">Home</a>
    </li>

    <li>
        <a href="/about">About Us</a>
        <ul>
            <li><a href="/about">Our Story</a></li>
            <li><a href="/about">Founder</a></li>
            <li><a href="/about">Our Team</a></li>
        </ul>
    </li>

    <li>
        <a href="/services">Services</a>
       
    </li>

    <li>
        <a href="/gallery">Gallery</a>
       
    </li>

   

   

    <li><a href="/contact">Contact</a></li>
</ul>

                    </div>
                    <a href="/donate" class="default-btn move-right"><span>Donate <i class="fas fa-heart"></i></span></a>
                </div>
            </nav>
        </div>
    </header>
    <!-- ================> header section end here <================== -->





@yield('content')
<!-- ================> Footer section start here <================== -->
<footer class="footer">
    <div class="footer__bottom">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Copyright -->
                <div class="col-lg-6 col-12">
                    <div class="footer__copyright">
                        <p>&copy; Nafsi Reset <?= date("Y") ?>, All Rights Reserved | Built with ❤️ in Kenya</p>
                    </div>
                </div>
                <!-- Social Icons -->
                <div class="col-lg-6 col-12">
                    <div class="footer__social">
                        <ul>
                            <li><a href="https://facebook.com/nafsireset" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/nafsireset" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://instagram.com/nafsireset" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://linkedin.com/company/nafsireset" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="mailto:info@nafsireset.org"><i class="fas fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================> Footer section end here <================== -->


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="fas fa-arrow-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->



    

    <!-- vendor plugins -->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/all.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/lightcase.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>

</body></html>