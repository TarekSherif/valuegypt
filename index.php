<?php get_header(); ?>
<?php get_sidebar(); ?>


<!-- Preloader -->
<div class="preloader"></div>

<!-- Main Header-->
<header class="main-header">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="outer-container">
            <div class="clearfix">
                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" title="" /></a>
                    </div>
                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <ul class="option-list">
                        <li>
                            <span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>

                            ⁩01021017470-⁩ 01140399642-01095077604
                        </li>
                    </ul>
                </div>

                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li>
                                    <a href="#langage">
                                        <img :src="lang" @click="changeLanguage" alt="ar" />
                                    </a>
                                </li>
                                <li><a href="#contactUS">{{connect}} {{us}}</a></li>
                                <li><a href="#gallery">{{previousWorks}}</a></li>
                                <li>
                                    <a href="#features"> {{features}}</a>
                                </li>
                                <li><a href="#services">{{services}}</a></li>
                                <li><a href="#home">{{home}}</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" class="img-responsive"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-small.png" alt="" title="" /></a>
            </div>

            <!--Right Col-->
            <div class="right-col pull-right">
                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                        <ul class="navigation clearfix">
                            <li>
                                <a href="#langage">
                                    <img :src="lang" @click="changeLanguage" alt="ar" />
                                </a>
                            </li>
                            <li><a href="#contactUS">{{connect}} {{us}}</a></li>
                            <li><a href="#gallery">{{previousWorks}}</a></li>
                            <li>
                                <a href="#features"> {{features}}</a>
                            </li>
                            <li><a href="#services">{{services}}</a></li>
                            <li><a href="#home">{{home}}</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- Main Menu End-->
            </div>
        </div>
    </div>
    <!--End Sticky Header-->
</header>
<!--End Main Header -->

<!--Main Slider-->
<section class="main-slider">
    <div id="carouselMainSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main-slider/image-1.jpg" alt="First slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main-slider/image-2.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/images/main-slider/image-3.jpg" alt="Third slide" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselMainSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselMainSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--End Main Slider-->

<!--Welcome Section-->
<section class="welcome-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title"></div>
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-4 col-md-12 col-sm-12">
                <div class="inner-column wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/resource/welcome-1.jpg" alt="" />
                    </div>
                </div>
            </div>

            <!--Content Column-->
            <div class="content-column col-lg-8 col-md-12 col-sm-12" :style="{ 'text-align':  textAlign}">
                <div class="inner-column">
                    <h2><span class="theme_color">upvc </span> {{enjoyCalm}}</h2>
                    <div class="text">
                        <p>{{enjoyCalmDetails1}}</p>
                        <p>{{enjoyCalmDetails2}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Address Box-->
    <section class="address-box" :style="{ 'text-align':  textAlign}">
        <div class="inner-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/pattern-1.png);">
            <div class="icon-box">
                <span class="icon flaticon-place"></span>
            </div>
            <h2>
                {{address}}
            </h2>
            <div class="text">
                {{addressDetails}}
            </div>
        </div>
    </section>
    <!--End Address Box-->
</section>
<!--End Welcome Section-->

<section id="services" class="services-section">
    <div class="outer-container">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <div class="title-inner">
                    <h2>{{some}} <span class="theme_color">{{services}}</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!--Services Block-->
            <!-- col-md-4 col-sm-12 -->
            <div class="services-block col-md-4 col-sm-12">
                <div class="inner-box">
                    <div class="image-outer">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/service-1.jpg" alt="" />
                            <a href="<?php echo get_template_directory_uri(); ?>/images/resource/service-1.jpg" class="overlay-box lightbox-image" data-fancybox="services-gallery" data-caption=""><span class="plus flaticon-plus-symbol"></span></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="big-icon flaticon-window"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-window"></span>
                        </div>
                        <h3>
                            <a href="#">
                                {{services1}}
                            </a>
                        </h3>
                        <div class="text" :style="{ 'text-align':  textAlign}">
                            {{services1Details}}
                        </div>
                    </div>
                </div>
            </div>

            <!--Services Block-->
            <div class="services-block col-md-4 col-sm-12" style="background-color: white;">
                <div class="inner-box">
                    <div class="image-outer">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/service-2.jpg" alt="" />
                            <a href="<?php echo get_template_directory_uri(); ?>/images/resource/service-2.jpg" class="overlay-box lightbox-image" data-fancybox="services-gallery" data-caption=""><span class="plus flaticon-plus-symbol"></span></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="big-icon flaticon-doorway"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-doorway"></span>
                        </div>
                        <h3>
                            <a href="#">
                                {{services2}}
                            </a>
                        </h3>
                        <div class="text" :style="{ 'text-align':  textAlign}">
                            {{services2Details}}
                        </div>
                    </div>
                </div>
            </div>

            <!--Services Block-->
            <div class="services-block col-md-4 col-sm-12">
                <div class="inner-box">
                    <div class="image-outer">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/resource/service-3.jpg" alt="" />
                            <a href="<?php echo get_template_directory_uri(); ?>/images/resource/service-3.jpg" class="overlay-box lightbox-image" data-fancybox="services-gallery" data-caption=""><span class="plus flaticon-plus-symbol"></span></a>
                        </div>
                    </div>
                    <div class="lower-content">
                        <div class="big-icon flaticon-car-parts"></div>
                        <div class="icon-box">
                            <span class="icon flaticon-car-parts"></span>
                        </div>
                        <h3>
                            <a href="#">
                                {{services3}}
                            </a>
                        </h3>
                        <div class="text" :style="{ 'text-align':  textAlign}">
                            {{services3Details}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Gallery Section-->
<section id="gallery" class="gallery-section">
    <div class="inner-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/background/pattern-2.png);">
        <!--Title Box-->
        <div class="title-box">
            <div class="sec-title centered">
                <div class="title-inner">
                    <h2>
                        {{some}}
                        <span class="theme_color">{{previousWorks}}</span>
                    </h2>
                </div>
            </div>
        </div>
        <div id="carouselpreviousWorks" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php
                $args = array(
                    'post_type' => 'previousworks', //  previousWork
                    'orderby'   => 'ID',
                    'order' => 'ASC',
                    'post_status' => 'publish'

                );
                $c = 1;
                $previousWorks_query = new WP_Query($args); // Serves category 
                while ($previousWorks_query->have_posts()) : $previousWorks_query->the_post();
                    $class = ($c++ == 1) ? 'active' : '';
                ?>
                    <div class="carousel-item <?php echo $class; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('', array('class' => 'd-block w-50', "style" => "margin: 0 auto;")); ?>
                        </a>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); // reset the query 


                ?>

            </div>
            <a class="carousel-control-prev" href="#carouselpreviousWorks" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselpreviousWorks" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--End Gallery Section-->

<!--Fluid Section One-->
<section id="features" class="fluid-section-one" :style="{ 'text-align':  textAlign}">
    <div class="outer-container clearfix">
        <!--Content Column-->
        <div class="content-column clearfix">
            <div class="inner-column">
                <div class="sec-title">
                    <h2>
                        Upvc
                        <span class="theme_color">{{features}}</span>
                    </h2>
                </div>

                <div class="single-vertical-carousel">
                    <div class="slide">
                        <!--Key Block-->
                        <div class="key-block">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-rain"></span>
                                    <span class="number">1</span>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="#">
                                            {{features1}}
                                        </a>
                                    </h3>
                                    <div class="text">
                                        {{features1Details}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Key Block-->
                        <div class="key-block">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-handle"></span>
                                    <span class="number">2</span>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="#">
                                            {{features2}}
                                        </a>
                                    </h3>
                                    <div class="text">
                                        {{features2Details}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Key Block-->
                        <div class="key-block">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <span class="icon flaticon-speaker-1"></span>
                                    <span class="number">3</span>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="#">
                                            {{features3}}
                                        </a>
                                    </h3>
                                    <div class="text">
                                        {{features3Details}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Image Column-->
        <div class="image-column" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/resource/image-1.jpg);">
            <figure class="image-box">
                <img src="<?php echo get_template_directory_uri(); ?>/images/resource/image-1.jpg" alt="" />
            </figure>
        </div>
    </div>
</section>
<!--End Fluid Section One Section-->
<br />
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.091204476964!2d31.161941815113543!3d29.97680878190702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU4JzM2LjUiTiAzMcKwMDknNTAuOSJF!5e0!3m2!1sen!2seg!4v1587181353221!5m2!1sen!2seg" style="width: 100%;" height="450" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<!--Estimate Section-->
<section id="contactUS" class="estimate-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>
                {{connect}}
                <span class="theme_color">{{us}}</span>
            </h2>
        </div>
        <div class="row clearfix" :style="{ 'text-align':  textAlign}">
            <!--Form Column-->

            <!--Info Column-->
            <div class="info-column col-sm-12">
                <div class="inner-column">
                    <div class="row clearfix">
                        <!--Column-->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <!--Info Block-->
                            <div class="info-block">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-place"></span>
                                    </div>
                                    <h3>
                                        <a href="https://www.google.com/maps/place/29%C2%B058'36.5%22N+31%C2%B009'50.9%22E/@29.9768088,31.1619418,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d29.9768088!4d31.1641305?hl=en">
                                            {{visitUs}}
                                        </a>
                                    </h3>
                                    <ul>
                                        <li>
                                            {{addressDetails}}
                                        </li>
                                    </ul>

                                    <a href="#"><span class="icon flaticon-calendar-2"></span><strong>10:00 AM - 7:00 PM</strong></a>
                                </div>
                            </div>
                        </div>

                        <!--Column-->
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <!--Info Block-->
                            <div class="info-block padd-left">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-mail"></span>
                                    </div>
                                    <h3>{{phoneMail}}</h3>
                                    <ul>
                                        <li>
                                            <span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
                                            01140399642
                                        </li>
                                        <li>
                                            ⁩<span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
                                            01021017470
                                        </li>
                                        <li>
                                            <span class="icon flaticon-phone-symbol-of-an-auricular-inside-a-circle"></span>
                                            01095077604
                                        </li>
                                        <li>valuegypt.upvc@gmail.com</li>
                                    </ul>

                                    <!--Social Icon One-->
                                    <ul class="footer_social">
                                        <li class="">
                                            <a href="https://www.facebook.com/Value-for-UPVC-Aluminum-and-Facades-102928154452817" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="">
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="">
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a>
                                        </li>

                                        <li class="">
                                            <a href="#" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--End Estimate Section-->
<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section"></div>
    </div>

    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="column col-lg-7 col-md-12 col-sm-12">
                    <div class="logo">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>