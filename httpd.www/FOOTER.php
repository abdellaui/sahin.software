<?php
if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
  die('(c) 2023-' . date("Y") . ' by Abdullah Sahin @ https://sahin.uk/. All rights reserved.');
  exit;
}
?>

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>sahin<span>.software</span></h3>
          <p>
          <p>Hofsteder Str. 141</p>
          <p>44809 Bochum, NRW</p>
          <p>Germany</p>
          <hr>
          <p>Panama City</p>
          <p>0801 Panamá</p>
          <p>Panama</p>
          <hr>
          <strong>Phone:</strong> <?= getTelefonNumber(); ?><br>
          <strong>Email:</strong> <?= getMail('contact'); ?><br>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#about">About</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#references">References</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#contact">Contact Us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="https://cats.sahin.software/careers<?= getProjectURL(); ?>/index.php?m=careers&p=showAll">Careers</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="/privacy-policy.php">Privacy Policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Project-Management</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Cloud-Computing</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Development</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Operations</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">DevOps</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">SEO Optimization</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Coaching</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?= getProjectURL(); ?>/index.php#services">Pentesting & Cyber-Security and Auditing</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Social Networks</h4>
          <p>We do not manage other social media accounts.</p>
          <div class="social-links mt-3">
            <a href="https://instagram.com/sahin.software/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://linkedin.com/company/sahin-software/" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            <a href="https://twitter.com/sahin_software/" target="_blank" class="twitter"><i class="bi bi-twitter"></i></i></a>
            <a href="https://github.com/sahin-software/" target="_blank" class="github"><i class="bi bi-github"></i></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong>sahin<span>.software</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://sahin.uk/">sahin.uk</a>
    </div>
  </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="https://app.enzuzo.com/apps/enzuzo/static/js/__enzuzo-cookiebar.js?uuid=7702c176-97c2-11ed-b754-778fe7ccd63b"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.bundle.min.js" integrity="sha512-i9cEfJwUwViEPFKdC1enz4ZRGBj8YQo6QByFTF92YXHi7waCqyexvRD75S5NVTsSiTv7rKWqG9Y5eFxmRsOn0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js" integrity="sha512-S/H9RQ6govCzeA7F9D0m8NGfsGf0/HjJEiLEfWGaMCjFzavo+DkRbYtZLSO+X6cZsIKQ6JvV/7Y9YMaYnSGnAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.6/swiper-bundle.min.js" integrity="sha512-s/ili339Sh6gM9omfUC6fRwZPU6MPcGJxvDqlbBzPcFcD649iqeO96YQr3VKj/jZSMd2/T9Qr2mp2w4DyCIOPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>

</body>

</html>