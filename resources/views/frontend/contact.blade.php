<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ValitSport</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ url('/home') }}">
            <img src="{{asset('images/valit.png')}}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/products') }}"> Products </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('/about-us') }}">About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/contact-us') }}">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Login </a>
                </li>
              </ul>
              <div class="quote_btn-container ">
                <a href="" class="cart_link">
                  <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                  <span class="cart_number">
                    0
                  </span>
                </a>
                <form class="form-inline ">
                  <button class="btn  nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- contact section -->

  <section class="contact_section">
    <div class="contact_container">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <div class="contact_form layout_padding">
              <div class="heading_container heading_center">
                <h2>
                  Get in touch
                </h2>
              </div>
              <form action="">
                <input type="text" placeholder="Full name ">
                <div class="top_input">
                  <input type="email" placeholder="Email">
                  <input type="text" placeholder="Phone Number">
                </div>
                <input type="text" placeholder="Message" class="message_input">
                <div class="btn-box">
                  <button>
                    Send
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo_detail">
                        <div class="logo-box">
                            <a class="navbar-brand" href="{{ url ('/home')}}">
                                <img src="{{asset('images/valit.png')}}" alt="">
                            </a>
                        </div>
                        <p>
                        "Gear up and play your best with ValitSport. Discover top-quality sportswear and equipment for every athlete."
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mx-auto">
                    <div class="address_box">
                        <h5>
                            Adderess
                        </h5>
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Northbridge Road
                            P.O. Box 917
                            Sangkat Toek Thla, Khan Sen Sok
                            Phnom Penh, Kingdom of Cambodia 12000
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            (+855) 97 47 69 798
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            thonchhavalit@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_form">
                        <h5>
                            Newsletter
                        </h5>
                        <form action="">
                            <input type="text" placeholder="Enter Your Email" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                    <div class="social_box">
                        <a href="https://www.facebook.com/Thon.Chhavalit/">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="https://www.instagram.com/chha_valit/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container-fluid">
            <p>
                &copy; 2024 All Rights Reserved By Valit
              
            </p>
        </div>
    </footer>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/cutom.js"></script>

</body>

</html>