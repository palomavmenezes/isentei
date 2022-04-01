<?php

	/**
	 * FOOTER TEMPLATE
	 */

?>

</body>
</html>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">

  <section id="menus-footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 medias-sociais">
          <img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="isentei" class="img-fluid">
          <!-- <div><a href="https://facebook.com/isentei" target="_blank" class="hvr-icon-pop"><i class="fa fa-facebook hvr-icon"></i></a>
          <a href="https://instagram.com/isentei" target="_blank" class="hvr-icon-pop"><i class="fa fa-instagram hvr-icon"></i></a>
          <a href="https://youtube.com/isentei" target="_blank" class="hvr-icon-pop"><i class="fa fa-youtube hvr-icon"></i></a></div>
          <a href="mailto:contato@isentei.com.br" target="_blank"><li>contato@isentei.com.br</li></a>
          <a href="tel:1126268364" target="_blank"><li>(11) 2626-8364</li></a> -->
        </div>

        <div class="col-md-9 content-align-mid">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-footer-colum1' ) ); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 copyright txt-footer border-top">
          <div class="copy-left">Copyright &copy; 2020 isentei</div> <div class="datacartes"><a class="datacartes" href="https://datacartes.com.br">Data Cartes</a></div>
        </div>
      </div>
    </div>
  </section>

  </footer><!-- #footer -->


  <!-- JavaScript Libraries -->
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/wow/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/counterup/counterup.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

  <!-- Script dos Ícones Bootstrap -->
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


<?php wp_footer(); ?>
</body>
</html>