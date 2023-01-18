<?php
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
    die('(c) 2023-' . date("Y") . ' by Abdullah Sahin @ https://sahin.uk/. All rights reserved.');
    exit;
}
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <h3>Contact <span>Us</span></h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>Our Address</h3>
                    <p>Panama City, Panamá</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>Email Us</h3>
                    <p><?= getMail('contact'); ?></p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">

                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>Call Us</h3>
                    <p><?= getTelefonNumber(); ?></p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-12 ">
                <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252147.61370157567!2d-79.59322394471208!3d9.08138850845874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca8f1dbe80363:0xaba25df1f042c10e!2sPanama%20City,%20Panama!5e0!3m2!1sde!2sde!4v1674024794345!5m2!1sde!2sde" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->