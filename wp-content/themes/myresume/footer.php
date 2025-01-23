<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myresume
 */

?>


</main>

<footer id="footer" class="footer position-relative light-background">

  <div class="container">
	<div class="copyright text-center ">
	<p>
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
    </p>
	  <!-- <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p> -->
	</div>

  </div>
  <?php wp_footer(); ?>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-solid fa-arrow-up-long"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/php-email-form/validate.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/aos/aos.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/typed.js/typed.umd.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="<?php echo bloginfo('template_directory');?>/assets/js/main.js"></script>

</body>

</html>