<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sherlock shoes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{BASE_URL . 'public/'}}user/assets/img/favicon.png" rel="icon">
  <link href="{{BASE_URL . 'public/'}}user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{BASE_URL . 'public/'}}user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{BASE_URL . 'public/'}}user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{BASE_URL . 'public/'}}user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{BASE_URL . 'public/'}}user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{BASE_URL . 'public/'}}user/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS Files -->
  <link href="{{BASE_URL . 'public/'}}user/assets/css/variables.css" rel="stylesheet">
  <link href="{{BASE_URL . 'public/'}}user/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: ZenBlog - v1.0.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{BASE_URL .'admin'}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{BASE_URL . 'public/'}}user/assets/img/logo.png" alt=""> -->
        <h1>Sherlock shoes</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{BASE_URL .'lst-pro'}}">Sản phẩm</a></li>
          <li><a href="{{BASE_URL .'lst-cate'}}">Danh mục sản phẩm</a></li>
          <li><a href="#">Về chúng tôi</a></li>
          <li><a href="#">Liên hệ</a></li>
        </ul>
      </nav><!-- .navbar -->

      <div class="position-relative">
        <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
        <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
        <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

        <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
        <i class="bi bi-list mobile-nav-toggle"></i>

        <!-- ======= Search Form ======= -->
        <div class="search-form-wrap js-search-form-wrap">
          <form action="#" class="search-form">
            <span class="icon bi-search"></span>
            <input type="text" placeholder="Search" class="form-control">
            <button class="btn js-search-close"><span class="bi-x"></span></button>
          </form>
        </div><!-- End Search Form -->

      </div>

    </div>

  </header><!-- End Header -->


  <article>
    <section class="py-5">
      <div class=" px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
              @yield('content')
          </div>
        </div>
    </section>
  </article>

  <aside>
    <div class="border-end bg-white thanhben" id="sidebar-wrapper">
      <div class="list-group list-group-flush">
        @yield('aside')
      </div>
    </div>
  </aside>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">

        <div class="row g-5">
          <div class="col-lg-4">
            <h3 class="footer-heading">About Sherlock shoes</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
            <p><a href="about.html" class="footer-link-more">Learn More</a></p>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Navigation</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#link"><i class="bi bi-chevron-right"></i> Home</a></li>
              <li><a href="#link"><i class="bi bi-chevron-right"></i> Blog</a></li>
              <li><a href="#link"><i class="bi bi-chevron-right"></i> Categories</a></li>
            </ul>
          </div>
          <div class="col-6 col-lg-2">
            <h3 class="footer-heading">Categories</h3>
            <ul class="footer-links list-unstyled">
              <li><a href="#"><i class="bi bi-chevron-right"></i> Business</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="#"><i class="bi bi-chevron-right"></i> Sport</a></li>

            </ul>
          </div>

          <div class="col-lg-4">
            <h3 class="footer-heading">Recent Posts</h3>

            <ul class="footer-links footer-blog-entry list-unstyled">
              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="{{BASE_URL . 'public/'}}user/assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">lắp vào đỡ trống</span></div>
                    <span>quạc quạc quác quác quạc quạc quạc</span>
                  </div>
                </a>
              </li>

              <li>
                <a href="#" class="d-flex align-items-center">
                  <img src="{{BASE_URL . 'public/'}}user/assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                  <div>
                    <div class="post-meta d-block"><span class="date">lắp vào đỡ trống</span></div>
                    <span>quạc quạc quác quác quạc quạc quạc</span>
                  </div>
                </a>
              </li>
            </ul>

          </div>
        </div>
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{BASE_URL . 'public/'}}user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{BASE_URL . 'public/'}}user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{BASE_URL . 'public/'}}user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{BASE_URL . 'public/'}}user/assets/vendor/aos/aos.js"></script>
  <script src="{{BASE_URL . 'public/'}}user/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{BASE_URL . 'public/'}}user/assets/js/main.js"></script>

</body>

</html>