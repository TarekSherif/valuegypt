  <!-- /wrapper -->
  </div>

  <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-arrow-up"></i></a>

  <script src="<?php echo get_template_directory_uri(); ?>/node_modules\jquery\dist\jquery.min.js"></script>


  <script src="<?php echo get_template_directory_uri(); ?>/node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>


  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>


  </body>
  <!-- /body -->

  </html>



  </div>
  <!--End pagewrapper-->
  <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-arrow-up"></i></a>

  <script src="<?php echo get_template_directory_uri(); ?>/node_modules\jquery\dist\jquery.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>

  <!-- Master Slider -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/masterslider/jquery.easing.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/masterslider/masterslider.min.js"></script>
  <!--End Master Slider -->

  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js\Langage.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/node_modules\vue\dist\vue.min.js"></script>
  <script>
    lang["lang"] = "<?php echo get_template_directory_uri(); ?>/" + lang["lang"];
    new Vue({
      el: "#home",
      data: lang,
      methods: {
        changeLanguage: function() {
          var language = localStorage.getItem("language");
          if (language == "Ar") {
            localStorage.setItem("language", "En");
          } else {
            localStorage.setItem("language", "Ar");
          }
          location.reload();
        },
      },
    });
  </script>

  <?php wp_footer(); ?>
  </body>

  </html>