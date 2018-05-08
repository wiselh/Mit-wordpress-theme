<?php 
/**
 * Template Name: Home
 * 
 */
	get_header(); 
?>
  <!-- Header -->
<header class="text-center" name="home">
    <div class="intro-text">
        <p>Find Your Favorite</p>
        <h1>
        <span class="color">RECIPES</span>
        </h1>
        <div class="clearfix"></div>
        <a href="#" class="btn btn-default btn-lg page-scroll">GET STARTED</a>
    </div>
</header>

  <!-- Services Section -->
<section id="services-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-4 col-sm-4 col-xs-12 service text-center">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/burger.png" width="50px">
          <br>
          <h4>GET INSPIRED</h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 service text-center">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/cash.png" height="50px" width="50px">
          <br>
          <h4>GET REWARDED</h4>
          <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12 service text-center">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/chef.png" width="50px">
          <br>
          <h4>GET SOCIAL</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisc Pellentesque vel enim a elit viverra elementuma.</p>
        </div>
      </div>
    </div>
</section>

  <!-- app Section -->
<section id="phone-section">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 col-sm-12 phone text-center">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/phone.png" height="581px" alt="...">
        </div>
        <div class="col-md-6 col-sm-12 text-center">
          <h3>INTRODUCING THE FUDI APP</h3><br>
          <p>Morbi eget posuere dolor. Pellentesque cursus aliquet aliquet. Aeneanet felis sit amet diam mollis ullamcorper.
            Nullam consequat sem a ante vest ibulum tristique. Suspendisse tristique lacus ac mattis porta. Vivamus ligula
            quam, vehicula non lacinia sed, faucibus sit amet libero. In libero dui, eleifend eu nisi id, egestas fringilla
            odio. In varius quam a mas sa hendrerit ullamcorper a eu justo. Suspendisse porta mattis convallis. Aenean tempus
            ligula ac odio rhoncus, quis aliquam dolor accumsan. Suspendisse aliquet felis consectetur libero congue, sed
            pulvinar diam malesuada. Duis vehicula a nibh id hendrerit. Donec sit amet ultrices ante, a mattis massa.</p>
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/appstore.png" alt="...">
          <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/playstore.png" alt="...">
        </div>
      </div>
    </div>
</section>

<!-- Team Section -->
<section id="team-section">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
                <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="1" class="active"></li>
                <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item">
                <div class="profile-circle">
                    <img class="profile-circle" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/team/01.jpg" alt="">
                </div>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam
                    tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus
                    nisi accusamus.</p>
                </blockquote>
                </div>
                <div class="item">
                <div class="profile-circle">
                    <img class="profile-circle" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/team/02.jpg" alt="">
                </div>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam
                    tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus
                    nisi accusamus.</p>
                </blockquote>
                </div>
                <div class="active item">
                <div class="profile-circle">
                    <img class="profile-circle" src="<?php bloginfo( 'template_directory' ) ?>/assets/img/team/03.jpg" alt="">
                </div>
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam
                    tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus
                    nisi accusamus.</p>
                </blockquote>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
   
  <!-- Foods Section -->
<section id="food-section">
    <div class="container">
      <div class="section-title text-center">
        <h4>BROWSE BY CUISINES</h4>
        <hr>
      </div>
      <div class="team-container" style="position: relative;">
        <div id="team-box" class="team-box animate-box">
          <ul style="list-style: none;display: block;width: 100%;margin: 0;padding: 0;">
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/1.png"  rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>MOROCCAIN</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/1.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/2.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>ITALIAN</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/2.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/3.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>FRENCH</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/3.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/4.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>INDIAN</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/4.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/5.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>AMERICAN</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/5.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/6.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>MEXICAN</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/6.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/7.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>GERMANY</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/7.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/8.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>FASTFOOD</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/8.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/9.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>PIZZA</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/9.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
            <li>
              <div class="portfolio-item">
                <div class="hover-bg">
                  <a href="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/10.png" rel="prettyPhoto">
                    <div class="hover-text">
                      <h4>SUSHI</h4>
                      <div class="clearfix"></div>
                    </div>
                    <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/foods/10.png" class="img-responsive" alt="Project Title"> </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
</section>
  <!-- Services Section -->
<section id="countTo-section" class="counter">
    <div class="counter">
      <div class="container text-center">
        <div class="row">
          <div class="col-xs-6 col-sm-3 col-md-3 ">
            <div class="employees">
              <p class="counter-count">879.00</p>
              <p class="employee-p">Employee</p>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 ">
            <div class="customer">
              <p class="counter-count">954</p>
              <p class="customer-p">Customer</p>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 ">
            <div class="design">
              <p class="counter-count">252.55</p>
              <p class="design-p">Design</p>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3 col-md-3 ">
            <div class="order">
              <p class="counter-count">652.002</p>
              <p class="order-p">Orders</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<?php
	get_footer();
?>
