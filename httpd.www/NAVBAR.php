<?php
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('(c) 2023-' . date("Y") . ' by Abdullah Sahin @ https://sahin.uk/. All rights reserved.');
    exit;
}
?>


<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><?= getMail('contact'); ?></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span><?= getTelefonNumber(); ?></span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.html">sahin<span>.software</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>                
                <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#services">Project Management</a></li>
                        <li><a href="#services">Cloud</a></li>
                        <li><a href="#services">Development</a></li>
                        <li><a href="#services">Operations</a></li>
                        <li><a href="#services">DevOps</a></li>
                        <li><a href="#services">SEO Optimization</a></li>
                        <li><a href="#services">Coaching</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#references">References</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="#team">Career</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->