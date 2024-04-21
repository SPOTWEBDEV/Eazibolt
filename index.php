<?php

include('./backend/config/connection.php')

?>

<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

  <head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <title><?php echo $sitename ?> || HomePage</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/lineicons.css" />
    <link rel="stylesheet" href="./assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
  </head>

  <body>

    <section class="navbar-area navbar-nine">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html">
                <h3 style="color: white;"><?php echo $sitename ?></h3>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
                aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="page-scroll active" href="#hero-area">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#owner">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#blog">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="page-scroll" href="#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="navbar-btn d-none d-lg-inline-block">
                <a class="menu-bar" href="#side-menu-left"><i class="lni lni-menu"></i></a>
              </div>
            </nav>

          </div>
        </div>

      </div>

    </section>


    <div class="sidebar-left">
      <div class="sidebar-close">
        <a class="close" href="#close"><i class="lni lni-close"></i></a>
      </div>
      <div class="sidebar-content">
        <div class="sidebar-logo">
          <img style="height: 50px; width: 100px;" src="./assets/images/eazibolt png4.png" alt="Logo" />
        </div>
        <p class="text"> <?php echo $sitename ?> is a mobility solution that will allow users book and share the cost of a ride with similar transit patterns.</p>

        <div class="sidebar-menu">
          <h5 class="menu-title">Quick Links</h5>
          <ul>
            <li><a href="javascript:void(0)">About Us</a></li>
             <li><a href="#pricing">Pricing</a></li>
            <li><a href="#blog">Latest News</a></li>
            <li><a href="#contact">Contact Us</a></li>
            <li><a href="./views/users/login.php">Login</a></li>
          </ul>
        </div>

        

      </div>

    </div>
    <div class="overlay-left"></div>


    <section id="hero-area" class="header-area header-eight">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 col-12">
            <div class="header-content">
              <h1>Book A Ride To Start Moving In Style</h1>
              <p>
               <?php echo $sitename ?>is a mobility solution that will allow users book and share the cost of a ride with similar transit patterns.
              </p>
              
              <div class="button">
                <a href="./views/users/registeration.php" class="btn primary-btn">Get Started</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <div class="header-image">
              <img  src="./assets/images/e-ride2.jpg" alt="#" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="col-12">
        <img style="object-fit:fill;" loading="lazy" src="./assets/images/eazibolt.jpg" alt="">
      </div>
    </section>


    <section class="about-area about-five">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 col-12">
            <div class="about-image-five">
              <svg class="shape" width="106" height="134" viewbox="0 0 106 134" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="1.66654" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="1.66654" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="16.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="16.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="16.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="16.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="16.333" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="30.9998" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="74.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="30.9998" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="74.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="30.9998" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="74.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="30.9998" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="74.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="31" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="74.6668" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="45.6665" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="89.3333" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="60.3333" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="1.66679" r="1.66667" fill="#DADADA" />
                <circle cx="60.3333" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="16.3335" r="1.66667" fill="#DADADA" />
                <circle cx="60.3333" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="31.0001" r="1.66667" fill="#DADADA" />
                <circle cx="60.3333" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="45.6668" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="60.3335" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="88.6668" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="117.667" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="74.6668" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="103" r="1.66667" fill="#DADADA" />
                <circle cx="60.333" cy="132" r="1.66667" fill="#DADADA" />
                <circle cx="104" cy="132" r="1.66667" fill="#DADADA" />
              </svg>
              <img src="assets/images/ride.jpg" alt="about" />
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <div class="about-five-content">
              <h6 class="small-title text-lg">OUR STORY</h6>
              <h2 class="main-title fw-bold">Our Driver comes with the experience and knowledge</h2>
              <div class="about-five-tab">
                <nav>
                  <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-who-tab" data-bs-toggle="tab" data-bs-target="#nav-who"
                      type="button" role="tab" aria-controls="nav-who" aria-selected="true">Who We Are</button>
                    <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision"
                      type="button" role="tab" aria-controls="nav-vision" aria-selected="false">our Vision</button>
                    <button class="nav-link" id="nav-history-tab" data-bs-toggle="tab" data-bs-target="#nav-history"
                      type="button" role="tab" aria-controls="nav-history" aria-selected="false">our History</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                    <p>Welcome to <?php echo $sitename ?>, the future of hassle-free and efficient transportation.Our core values represent the heart and soul of <?php echo $sitename ?>, guiding our actions and decisions in everything we do.</p>
                    
                  </div>
                  <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                    <p>At <?php echo $sitename ?>, our vision is to provide a seamless transportation experience for riders and drivers alike. We believe that getting around town should be effortless, reliable, and safe.</p>
                    
                    <p>Our platform leverages cutting-edge technology to connect riders with nearby drivers, making transportation accessible at the tap of a button.</p>

                    
                  </div>
                  <div class="tab-pane fade" id="nav-history" role="tabpanel" aria-labelledby="nav-history-tab">
                    <p>A reliable ride can be a deal-breaker or a day-maker. That’s why all kinds of organizations in all kinds of industries
                    rely on <?php echo $sitename ?> Business to provide access to rides for their customers, employees, patients, students, and guests.</p>
                    <!-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have in some
                      form,
                      by injected humour.</p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


    <section id="services" class="services-area services-eight">

      <div class="section-title-five">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content">
                <h6>Services</h6>
                <h2 class="fw-bold">Our Best Services</h2>
                <!-- <p>
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p> -->
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single-services">
              <div class="service-icon">
                <img width="90%" src="./assets/images/car-svgrepo-com.svg" alt="car">
                <!-- <i class="lni lni-capsule"></i> -->
              </div>
              <div class="service-content">
                <h4>Ride with <?php echo $sitename ?></h4>
                <p>
                  Join hundreds of people enjoying a seamless transit experience in Enugu
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-services">
              <div class="service-icon">
                <img width="100%" src="assets/images/online-shop-ecommerce-svgrepo-com.svg" alt="">
              </div>
              <div class="service-content">
                <h4>Online Shopping</h4>
                <p>
                  With point hean with each ride, you can uses it to shopoing on <?php echo $sitename ?>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="single-services">
              <div class="service-icon">
                <img width="100%" src="assets/images/customer-care.svg" alt="">
              </div>
              <div class="service-content">
                <h4>Customer Care</h4>
                <p>
                  We provided 24 hours customer care service
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    

 
    <section id="pricing" class="pricing-area pricing-fourteen">

      <div class="section-title-five">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content">
                <h6>Pricing</h6>
                <h2 class="fw-bold">Pricing & Plans</h2>
                <!-- <p>
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p> -->
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <div class="pricing-style-fourteen">
              <div class="table-head">
                <h6 class="title">Starter</h4>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and industry.</p> -->
                  <div class="price">
                    <h2 class="amount">
                      <span class="currency">$</span>0<span class="duration">/mo </span>
                    </h2>
                  </div>
              </div>
              <div class="light-rounded-buttons">
                <a href="javascript:void(0)" class="btn primary-btn-outline">
                  Start free trial
                </a>
              </div>
              <div class="table-content">
                <ul class="table-list">
                  <li> <i class="lni lni-checkmark-circle"></i> 3 free ride</li>
                  <li> <i class="lni lni-checkmark-circle"></i>2 <?php echo $sitename ?> Coin a ride</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="pricing-style-fourteen middle">
              <div class="table-head">
                <h6 class="title">Exclusive</h4>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and industry.</p> -->
                  <div class="price">
                    <h2 class="amount">
                      <span class="currency">$</span>99<span class="duration">/mo </span>
                    </h2>
                  </div>
              </div>
              <div class="light-rounded-buttons">
                <a href="javascript:void(0)" class="btn primary-btn">
                  Start Now
                </a>
              </div>
              <div class="table-content">
                <ul class="table-list">
                  <li> <i class="lni lni-checkmark-circle"></i> 15 ride per month</li>
                  <li> <i class="lni lni-checkmark-circle"></i> 8 <?php echo $sitename ?> Coin a ride </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <div class="pricing-style-fourteen">
              <div class="table-head">
                <h6 class="title">Premium</h4>
                  <!-- <p>Lorem Ipsum is simply dummy text of the printing and industry.</p> -->
                  <div class="price">
                    <h2 class="amount">
                      <span class="currency">$</span>150<span class="duration">/mo </span>
                    </h2>
                  </div>
              </div>
              <div class="light-rounded-buttons">
                <a href="javascript:void(0)" class="btn primary-btn-outline">
                  Start Now
                </a>
              </div>
              <div class="table-content">
                <ul class="table-list">
                  <li> <i class="lni lni-checkmark-circle"></i> 23 ride per month</li>
                  <li> <i class="lni lni-checkmark-circle"></i> 16 <?php echo $sitename ?> Coin a ride </li>
                </ul>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="team" class="team-area">

      <div class="section-title-five">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div id="owner" class="content">
                <h6>Owner</h6>
                <h2 class="fw-bold">Our Creative Owner</h2>
                <p>
                  My name is Ugwu Grace Uchechi and I am incredibly excited to embark on this groundbreaking journey as the founder and CEO of <?php echo $sitename ?>. With a passion for disruptive technology and a deep understanding of the transportation industry, I envisioned Eazibolt as a transformative force that will revolutionize how people travel from point A to B
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-sm-6">
            <div class="team-style-six text-center">
              <div class="team-image">
                <img src="assets/images/owner.jpeg" alt="Team" />
              </div>
              <div class="team-content">
                <div class="team-social">
                  <ul class="social">
                    <li>
                      <a href="javascript:void(0)"> <i class="lni lni-facebook-filled"></i> </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="lni lni-twitter-original"></i>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">
                        <i class="lni lni-linkedin-original"></i>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0)"> <i class="lni lni-pinterest"></i> </a>
                    </li>
                  </ul>
                </div>
                <h4 class="team-name">Grace Ugwu</h4>
                <span class="sub-title">Web Developer And Founder <?php echo $sitename ?> Organisation</span>
              </div>
            </div>

          </div>
        
        </div>

      </div>

    </section>


    <section id="call-action" class="call-action">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9">
            <div class="inner-content">
              <h2>We love to make perfect <br />solutions for your business</h2>
              <p>
                Why I say old chap that is, spiffing off his nut cor blimey
                guvnords geeza<br />
                bloke knees up bobby, sloshed arse William cack Richard. Bloke
                fanny around chesed of bum bag old lost the pilot say there
                spiffing off his nut.
              </p>
              <div class="light-rounded-buttons">
                <a href="javascript:void(0)" class="btn primary-btn-outline">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="testimonial" class="testimonial-5">

      <div class="section-title-five">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content">
                <h6>Customer Reviews</h6>
                <h2 class="fw-bold">Our Testimonials</h2>
                <!-- <p>
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p> -->
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row testimonial-slider">
          <div class="col-lg-6 col-12">

            <div class="single-testimonial">
              <svg class="shape1" width="62" height="31" viewbox="0 0 62 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                  fill="#FF8686" />
              </svg>
              <svg class="shape2" width="82" height="74" viewbox="0 0 82 74" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="45.0005" cy="37" r="37" fill="#FE9955" />
                <path
                  d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                  fill="#7C451F" />
              </svg>
              <div class="inner-content">
                <div class="qote-icon">
                  <i class="lni lni-quotation"></i>
                </div>
                <p class="text">
                  I can't say enough good things about my experiences with <?php echo $sitename ?> rides. The drivers are always friendly and professional,
                  and the app is so easy to use. Whether I'm heading to work or a night out, I know I can count on <?php echo $sitename ?> to get me there
                  safely and comfortably.</p>
                <div class="author">
                  <div class="image">
                    <img src="assets/images/testimony.jpg" alt="Author" />
                  </div>
                  <h4 class="name">
                    Musharof Chowdhury
                    <span class="deg">Web Entrepreneur</span>
                  </h4>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-12">

            <div class="single-testimonial">
              <svg class="shape1" width="62" height="31" viewbox="0 0 62 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                  fill="#FF8686" />
              </svg>
              <svg class="shape2" width="82" height="74" viewbox="0 0 82 74" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="45.0005" cy="37" r="37" fill="#FE9955" />
                <path
                  d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                  fill="#7C451F" />
              </svg>
              <div class="inner-content">
                <div class="qote-icon">
                  <i class="lni lni-quotation"></i>
                </div>
                <p class="text">
                <?php echo $sitename ?> has made my daily commute a breeze. The drivers are consistently on time, and I appreciate the affordable pricing.
                  It's the most convenient and efficient ride-hailing app I've ever used.
                </p>
                <div class="author">
                  <div class="image">
                    <img src="assets/images/testimony2.jpg" alt="Author" />
                  </div>
                  <h4 class="name">
                    David Warner
                    <span class="deg">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-12">

            <div class="single-testimonial">
              <svg class="shape1" width="62" height="31" viewbox="0 0 62 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                  fill="#FF8686" />
              </svg>
              <svg class="shape2" width="82" height="74" viewbox="0 0 82 74" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="45.0005" cy="37" r="37" fill="#FE9955" />
                <path
                  d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                  fill="#7C451F" />
              </svg>
              <div class="inner-content">
                <div class="qote-icon">
                  <i class="lni lni-quotation"></i>
                </div>
                <p class="text">
                  As a frequent traveler, I rely on <?php echo $sitename ?> in cities all over the Enugu State. It's comforting to know that no matter where I am,
                  I can always find a reliable and affordable ride. <?php echo $sitename ?> has become an essential part of my travel routine.</p>
                <div class="author">
                  <div class="image">
                    <img src="assets/images/testimony1.jpg" alt="Author" />
                  </div>
                  <h4 class="name">
                    Jems Gilario
                    <span class="deg">Graphics Designer</span>
                  </h4>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-12">

            <div class="single-testimonial">
              <svg class="shape1" width="62" height="31" viewbox="0 0 62 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                  fill="#FF8686" />
              </svg>
              <svg class="shape2" width="82" height="74" viewbox="0 0 82 74" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="45.0005" cy="37" r="37" fill="#FE9955" />
                <path
                  d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                  fill="#7C451F" />
              </svg>
              <div class="inner-content">
                <div class="qote-icon">
                  <i class="lni lni-quotation"></i>
                </div>
                <p class="text">
                I've tried various ride-hailing apps, but Bolt stands out for its exceptional service. The drivers are polite, the cars
                are clean, and the fares are competitive. Bolt has earned my trust, and I wouldn't choose any other service.
                </p>
                <div class="author">
                  <div class="image">
                    <img src="assets/images/testimony5.jpg" alt="Author" />
                  </div>
                  <h4 class="name">
                    David Warner
                    <span class="deg">Web Developer</span>
                  </h4>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-12">

            <div class="single-testimonial">
              <svg class="shape1" width="62" height="31" viewbox="0 0 62 31" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M-1.10459e-06 -3.51286e-06C-1.46049e-06 4.07097 0.801837 8.10209 2.35973 11.8632C3.91763 15.6243 6.20107 19.0417 9.07969 21.9203C11.9583 24.7989 15.3757 27.0824 19.1368 28.6403C22.8979 30.1982 26.929 31 31 31C35.071 31 39.1021 30.1982 42.8632 28.6403C46.6243 27.0824 50.0417 24.7989 52.9203 21.9203C55.7989 19.0417 58.0824 15.6243 59.6403 11.8632C61.1982 8.10209 62 4.07098 62 -8.02757e-07L31 -8.02758e-07L-1.10459e-06 -3.51286e-06Z"
                  fill="#FF8686" />
              </svg>
              <svg class="shape2" width="82" height="74" viewbox="0 0 82 74" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle cx="45.0005" cy="37" r="37" fill="#FE9955" />
                <path
                  d="M0.175359 2.73871C1.17682 4.85939 2.2739 6.88145 3.46802 8.90242C4.46524 10.732 5.46811 12.9497 6.94627 14.4811C7.73528 15.3431 9.37218 14.4457 8.96708 13.287C8.96708 13.287 8.96566 13.1899 8.86863 13.1913C9.05846 12.8974 9.2497 12.7003 9.53657 12.4052C9.63361 12.4037 9.82627 12.304 9.92331 12.3026C10.116 12.2027 10.3072 12.0059 10.4985 11.8088C15.7794 14.5465 21.0575 17.0902 25.9574 20.3188C27.4271 21.268 28.8012 22.3157 30.081 23.5587C25.1774 26.7359 19.5257 31.8654 20.6822 37.9632C22.255 45.996 30.8275 41.5036 33.678 37.2886C37.1963 32.2874 36.94 28.0206 33.4815 23.8005C36.7525 21.8117 40.4199 20.3993 44.0133 20.5412C52.6538 20.7066 54.2222 28.4483 52.0851 34.9823C49.548 34.0486 46.6328 33.7999 44.1182 34.4189C39.5716 35.4557 35.5978 42.5017 38.8594 46.5306C42.1196 50.4625 50.1618 42.8719 51.7762 40.422C52.2515 39.7356 52.7252 38.9523 53.1021 38.1703C53.2005 38.266 53.2977 38.2645 53.396 38.3602C60.4477 42.7221 54.5176 48.729 49.6083 51.5181C48.8377 51.9175 49.5325 52.975 50.3045 52.6726C55.415 50.3659 61.3648 45.7175 57.7824 39.6551C56.8879 38.2123 55.6081 36.9692 54.0428 36.1184C56.0998 30.7503 56.0094 24.5398 51.101 20.7292C45.211 16.1562 37.6845 19.1774 32.1017 22.3646C32.0032 22.2691 32.0032 22.2691 31.9048 22.1733C26.4872 16.7199 18.8689 13.4339 12.0254 10.0395C12.5007 9.3532 12.9746 8.56968 13.4499 7.88351C13.7339 7.39393 13.627 6.71609 13.2332 6.33375C9.89298 3.56774 5.88339 1.49089 1.50686 0.875232C0.435374 0.599667 -0.325372 1.67822 0.175359 2.73871ZM33.341 27.4905C35.5295 31.1468 32.9632 34.8724 30.4799 37.6262C27.2329 41.2646 21.8818 40.372 22.8688 34.8253C23.41 32.0028 25.9005 29.7342 27.9114 27.8608C28.9646 26.8749 30.2118 25.886 31.5576 24.9929C32.2483 25.7593 32.8433 26.6243 33.341 27.4905ZM51.1458 37.131C49.8256 39.7708 47.913 41.7398 45.5099 43.3277C44.4523 44.0226 43.2964 44.6217 42.0392 44.9312C38.7541 45.9496 40.3273 40.6856 40.9868 39.3172C42.9709 35.6001 47.6329 35.8234 51.1458 37.131ZM10.7274 7.53494C10.7288 7.63198 10.6318 7.63339 10.6332 7.73043C10.3421 7.73467 10.0538 7.93314 9.86536 8.32395C9.58414 9.00745 9.20589 9.69236 8.82764 10.3774C8.63781 10.6714 8.06407 11.2621 8.25814 11.2592C8.16111 11.2607 8.06548 11.3591 8.0669 11.4561C7.46913 10.3974 6.67729 9.34112 6.07953 8.28236C5.28345 6.93515 4.48596 5.4909 3.68846 4.0465C6.12426 4.69011 8.56855 5.91625 10.7274 7.53494Z"
                  fill="#7C451F" />
              </svg>
              <div class="inner-content">
                <div class="qote-icon">
                  <i class="lni lni-quotation"></i>
                </div>
                <p class="text">
                I was introduced to Bolt by a friend, and it has changed the way I get around the city. The drivers are courteous, and
                the app's features, like estimated fares and driver ratings, make every ride a pleasant experience. I'm a Bolt loyalist
                now!</p>
                <div class="author">
                  <div class="image">
                    <img src="assets/images/testimony5.jpg" alt="Author" />
                  </div>
                  <h4 class="name">
                    Naimur Rahman
                    <span class="deg">Ui/UX Designer</span>
                  </h4>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    <div id="blog" class="latest-news-area section">

      <div class="section-title-five">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="content">
                <h6>latest news</h6>
                <h2 class="fw-bold">Latest News & Blog</h2>
                <!-- <p>
                  There are many variations of passages of Lorem Ipsum available,
                  but the majority have suffered alteration in some form.
                </p> -->
              </div>
            </div>
          </div>

        </div>

      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">

            <div class="single-news">
              <div class="image">
                <a href="javascript:void(0)"><img class="thumb" src="assets/images/1.jpg" alt="Blog" /></a>
                <div class="meta-details">
                  <img class="thumb" src="assets/images/owner.jpeg" alt="Author" />
                  <span>BY TIM NORTON</span>
                </div>
              </div>
              <div class="content-body">
                <h4 class="title">
                  <a href="javascript:void(0)">Welcome to new clients </a>
                </h4>
                <p>
                  My name is Ugwu Grace Uchechi and I am incredibly excited to embark on this groundbreaking journey as the founder and
                  CEO of <?php echo $sitename ?>. With a passion for disruptive technology and a deep understanding of the transportation industry, I
                  envisioned <?php echo $sitename ?> as a transformative force that will revolutionize how people travel from point A to B

                </p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-12">

            <div class="single-news">
              <div class="image">
                <a href="javascript:void(0)"><img class="thumb" src="https://images.pexels.com/photos/2155552/pexels-photo-2155552.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog" /></a>
                <div class="meta-details">
                  <img class="thumb" src="assets/images/owner.jpeg" alt="Author" />
                  <span>BY TIM NORTON</span>
                </div>
              </div>
              <div class="content-body">
                <h4 class="title">
                  <a href="javascript:void(0)">
                    New Project Online Shopping
                  </a>
                </h4>
                <p>
                   You can now buy online goods from <?php echo $sitename ?> website
                </p>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-12">

            <div class="single-news">
              <div class="image">
                <a href="javascript:void(0)"><img class="thumb" src="https://images.pexels.com/photos/210600/pexels-photo-210600.jpeg?auto=compress&cs=tinysrgb&w=600" alt="Blog" /></a>
                <div class="meta-details">
                  <img class="thumb" src="assets/images/owner.jpeg" alt="Author" />
                  <span>BY TIM NORTON</span>
                </div>
              </div>
              <div class="content-body">
                <h4 class="title">
                  <a href="javascript:void(0)">
                    How to earn <?php echo $sitename ?> coin
                  </a>
                </h4>
                <p>
                  you can earn <?php echo $sitename ?> coin buy book a ride and having an active activity status
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <section id="contact" class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-xl-4">
            <div class="contact-item-wrapper">
              <div class="row">
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="lni lni-phone"></i>
                    </div>
                    <div class="contact-content">
                      <h4>Contact</h4>
                      <p>09030287232</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="lni lni-envelope"></i>
                    </div>
                    <div class="contact-content">
                      <h4>Email</h4>
                      <p><a href="" class="">graceugwu294@gmail.com</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="lni lni-map-marker"></i>
                    </div>
                    <div class="contact-content">
                      <h4>Address</h4>
                      <p>175 5th Ave, New York, NY 10010</p>
                      <p>United States</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-12">
                  <div class="contact-item">
                    <div class="contact-icon">
                      <i class="lni lni-alarm-clock"></i>
                    </div>
                    <div class="contact-content">
                      <h4>Schedule</h4>
                      <p>24 Hours / 7 Days Open</p>
                      <!-- <p>Office time: 4 AM - 12 AM</p> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <div class="contact-form-wrapper">
              <div class="row">
                <div class="col-xl-10 col-lg-8 mx-auto">
                  <div class="section-title text-center">
                    <span> Get in Touch </span>
                    <h2>
                      Ready to Get Started
                    </h2>
                    <!-- <p>
                      At vero eos et accusamus et iusto odio dignissimos ducimus
                      quiblanditiis praesentium
                    </p> -->
                  </div>
                </div>
              </div>
              <form action="#" class="contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="name" id="name" placeholder="Name" required />
                  </div>
                  <div class="col-md-6">
                    <input type="email" name="email" id="email" placeholder="Email" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="phone" id="phone" placeholder="Phone" required />
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="subject" id="email" placeholder="Subject" required />
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <textarea style="resize: none;" name="message " id="message" placeholder="Type Message" rows="5"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="button text-center rounded-buttons">
                      <button type="submit" class="btn primary-btn rounded-full">
                        Send Message
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="map-section map-style-9 mt-5">
      <div class="map-container">
        <object style="border:0; height: 500px; width: 100%;"
          data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.7887109309127!2d-77.44196278417968!3d38.95165507956235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzjCsDU3JzA2LjAiTiA3N8KwMjYnMjMuMiJX!5e0!3m2!1sen!2sbd!4v1545420879707"></object>
      </div>
      </div>
    </section>


    <footer class="footer-area footer-eleven mt-5">

      <div class="footer-top">
        <div class="container">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12">

                <div class="footer-widget f-about">
                  <div class="logo">
                    <a href="index.html">
                      <img src="assets/images/logo.svg" alt="#" class="img-fluid" />
                    </a>
                  </div>
                  <p>
                    Getting ready for work or running late for a meeting? Save your daily fixed routes and a ride will automatically come to
                    you in time to take you where you want to go.
                  </p>
                  <p class="copyright-text">
                    <span>© 2023 By SPOTWEDDEV.COM</span>Designed and Developed by
                    <a href="javascript:void(0)" rel="nofollow"> UniCab</a>
                  </p>
                </div>

              </div>
              <div class="col-lg-2 col-md-6 col-12">

                <div class="footer-widget f-link">
                  <h5>Solutions</h5>
                  <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Service</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                    <li><a href="javascript:void(0)">Blog</a></li>
                  </ul>
                </div>

              </div>
              <div class="col-lg-2 col-md-6 col-12">

                <div class="footer-widget f-link">
                  <h5>Support</h5>
                  <ul>
                    <li><a href="javascript:void(0)">Pricing</a></li>
                    <li><a href="javascript:void(0)">Documentation</a></li>
                    <li><a href="javascript:void(0)">Guides</a></li>
                  </ul>
                </div>

              </div>
              <div class="col-lg-4 col-md-6 col-12">

                <div class="footer-widget newsletter">
                  <h5>Subscribe</h5>
                  <p>Subscribe to our newsletter for the latest updates</p>
                  <form action="#" method="get" target="_blank" class="newsletter-form">
                    <input name="EMAIL" placeholder="Email address" required="required" type="email" />
                    <div class="button">
                      <button class="sub-btn">
                        <i class="lni lni-envelope"></i>
                      </button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>

    <div class="made-in-ayroui mt-4">
      <!-- <a href="https://ayroui.com/" target="_blank" rel="nofollow">
        <img style="width:220px" src="assets/images/ayroui.svg">
      </a> -->
    </div>
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <script src="./assets/js/bootstrap.bundle.min.js" type="17f285bf2a35d5a2c09c897d-text/javascript"></script>
    <script src="./assets/js/glightbox.min.js" type="17f285bf2a35d5a2c09c897d-text/javascript"></script>
    <script src="./assets/js/main.js" type="17f285bf2a35d5a2c09c897d-text/javascript"></script>
    <script src="./assets/js/tiny-slider.js" type="17f285bf2a35d5a2c09c897d-text/javascript"></script>
    <script type="">
      

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    // GLightbox({
    //   'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
    //   'type': 'video',
    //   'source': 'youtube', //vimeo, youtube or local
    //   'width': 900,
    //   'autoplayVideos': true,
    // });

    //============== isotope masonry portfolio-three
    const filters = document.querySelectorAll(".portfolio-menu button");

    filters.forEach((filter) => {
      filter.addEventListener("click", function () {
        // ==== Filter btn toggle
        let filterBtn = filters[0];
        while (filterBtn) {
          if (filterBtn.tagName === "BUTTON") {
            filterBtn.classList.remove("active");
          }
          filterBtn = filterBtn.nextSibling;
        }
        this.classList.add("active");

        // === filter
        let selectedFilter = filter.getAttribute("data-filter");
        let itemsToHide = document.querySelectorAll(
          `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
        );
        let itemsToShow = document.querySelectorAll(
          `.grid [data-filter='${selectedFilter}']`
        );

        if (selectedFilter == "all") {
          itemsToHide = [];
          itemsToShow = document.querySelectorAll(".grid [data-filter]");
        }

        itemsToHide.forEach((el) => {
          el.classList.add("hide");
          el.classList.remove("show");
        });

        itemsToShow.forEach((el) => {
          el.classList.remove("hide");
          el.classList.add("show");
        });
      });
    });

    //========= glightbox
    // const myGallery3 = GLightbox({
    //   selector: ".glightbox3",
    //   type: "image",
    //   width: 900,
    // });

    //========= testimonial
    tns({
      container: ".testimonial-slider",
      items: 3,
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      nav: true,
      controls: false,
      controlsText: [
        '<i class="lni lni-arrow-left"></i>',
        '<i class="lni lni-arrow-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        1170: {
          items: 2,
        },
      },
    });

  </script>
    <script src="./assets/vendors/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
      data-cf-settings="17f285bf2a35d5a2c09c897d-|49" defer></script>
  </body>

 

</html>