<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Print Pro | Professional Printing Solutions in Pakistan</title>
    <meta name="description" content="Premium printing services in Pakistan. Business cards, banners, flyers, wedding cards, and custom printing with quality assurance.">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
        <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/piccc.png">
</head>
<body>
     <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <span class="brand-text">PremiumPrint Pro</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?order">Order Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="public.php?login">Login</a>
                    </li>
                </ul>
                
                <!-- Theme Toggle -->
                <div class="ms-lg-3 mt-2 mt-lg-0">
                    <button id="themeToggle" class="btn btn-outline-secondary">
                        <i class="bi bi-moon"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- BODY -->

        <?php

    if(isset($_GET['index'])){

        include 'index.php';
    }
    if(isset($_GET['services'])){

        include 'services.php';
    }
    if(isset($_GET['order'])){

        include 'order.php';
    }
    if(isset($_GET['gallery'])){

        include 'gallery.php';
    }
    if(isset($_GET['about'])){

        include 'about.php';
    }
    if(isset($_GET['contact'])){

        include 'contact.php';
    }
    if(isset($_GET['login'])){

        include 'login.php';
    }
    if(isset($_GET['register'])){

        include 'register.php';
    }
        ?>

        <!-- BODY  -->


 <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-brand">
                        <span class="brand-text">PremiumPrint Pro</span>
                    </div>
                    <p class="mt-3">Professional printing services in Pakistan delivering quality, reliability, and excellence since 2010.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                    <h5>Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="public.php?index">Home</a></li>
                        <li><a href="public.php?services">Services</a></li>
                        <li><a href="public.php?order">Order Now</a></li>
                        <li><a href="public.php?gallery">Gallery</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <h5>Services</h5>
                    <ul class="footer-links">
                        <li><a href="public.php?services#business-cards">Business Cards</a></li>
                        <li><a href="public.php?services#id-cards">ID Cards</a></li>
                        <li><a href="public.php?services#flyers">Flyers & Brochures</a></li>
                        <li><a href="public.php?services#wall-calendars">Wall Calendars</a></li>
                        <li><a href="public.php?services#drop-cards">Drop Cards</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <h5>Contact Us</h5>
                    <ul class="footer-contact">
                        <li><i class="bi bi-geo-alt"></i> Main Street, Karachi, Pakistan</li>
                        <li><i class="bi bi-telephone"></i> +92 300 1234567</li>
                        <li><i class="bi bi-envelope"></i> info@premiumprintpro.com</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2026 PremiumPrint Pro. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Designed with <i class="bi bi-heart-fill text-danger"></i> for quality printing</p>
                </div>
            </div>
        </div>
    </footer>


        <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Theme Toggle JS -->
    <script src="js/theme-toggle.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
</body>
</html>