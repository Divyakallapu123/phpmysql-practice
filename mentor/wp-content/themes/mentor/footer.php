<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
		

 <!-- ======= Footer ======= -->
 <footer id="footer">

<div class="footer-top">
  <div class="container">
	<div class="row">

	  <div class="col-lg-3 col-md-6 footer-contact">
		<h3><?php echo get_field('mentor',147);?></h3>
		<p>
		<?php echo get_field('mentor_address',147);?>
		  <strong>Phone:</strong><?php echo get_field('phone',147);?><br>
		  <strong>Email:</strong><?php echo get_field('email',147);?><br>
		</p>
	  </div>

	  <div class="col-lg-2 col-md-6 footer-links">
		<h4><?php echo get_field('user_links',147);?></h4>
		<?php while(have_rows('user_link',147)): the_row();?>
		<ul>
		
		  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo get_sub_field('user_link_name',147);?></a></li>
		  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
		 
		</ul>
		<?php  endwhile; ?>
	  </div>

	  <div class="col-lg-3 col-md-6 footer-links">
		<h4><?php echo get_field('our_service',147);?></h4>
		<?php while(have_rows('our_services',147)): the_row();?>
		<ul>
		  <li><i class="bx bx-chevron-right"></i> <a href="#"><?php echo get_sub_field('our_services',147);?></a></li>
		  <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
		  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> -->
		</ul>
		<?php  endwhile; ?>
	  </div>

	  <div class="col-lg-4 col-md-6 footer-newsletter">
		<h4><?php echo get_field('join_our_newsletter',147);?></h4>
		<p><?php echo get_field('join_our_newsletters',147);?></p>
		<form action="" method="post">
		  <input type="email" name="email"><input type="submit" value="Subscribe">
		</form>
	  </div>

	</div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
	<div class="copyright">
	  &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
	</div>
	<div class="credits">
	  <!-- All the links in the footer should remain intact. -->
	  <!-- You can delete the links only if you purchased the pro version. -->
	  <!-- Licensing information: https://bootstrapmade.com/license/ -->
	  <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
	  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
	</div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
	<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
	<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
	<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
	<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
	<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->



<?php wp_footer(); ?>





