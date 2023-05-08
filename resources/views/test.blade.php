<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reveal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logocnc.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href=" {{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href=" {{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
  <script src=" {{asset('assets/owlcarousel/owl.carousel.min.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <!-- Template Main CSS File -->
  <link href=" {{asset('assets/css/style.css')}}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Reveal
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a
            href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div id="logo">
        <h1><a href="index.html"><img style="height:auto ;" width="75px" class="img-fluid" src="assets/img/logocnc.png"
              alt=""></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#banner">Trang chủ</a></li>
          <li><a class="nav-link scrollto" href="#about">Giới thiệu</a></li>
          <li><a class="nav-link scrollto" href="#services">Dịch vụ</a></li>
          <li><a class="nav-link scrollto " href="#clients">Công nghệ CNC</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Sản phẩm</a></li>
          <li class="dropdown"><a href="#testimonials"><span>Báo giá</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#post-new">Tin tức</a></li>
          <li><a class="nav-link scrollto" href="#contact">Liên hệ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <main id="list-post-detail">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <img   class="img-fluid img-main-detail" src="{{asset($banner->image)}}" alt="">
            </div>
            <div class="col-12 meta_showing">
                <div class="content-meta_showing">
                    <span>BÀI VIẾT</span> <span>/</span> <span>21-03-2023</span>
                </div>
               
            </div>
            <div class="content-detail-post">
                <div class="title">
                    {{$banner->name}}
                </div>
                <div class="detail">
                  {!!$banner->detail!!}
                </div>
            </div>
        </div>
    </div>
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <div class="row">
         <div class="col-md-4">
           <h4 style="text-align: center;">CÔNG TY TNHH CNC ANH ĐỨC</h4>
           <div style="text-align: center;">
            <a href=""><img style="width: 40%;" class="img-fluid" src="assets/img/logocnc.png" alt=""></a>
           </div>
         
         </div>
          <div class="col-md-1"></div>
         <div class="col-md-3">
           <H5>CHÍNH SÁCH</H5>
           <div class="row">
            <div class="col-12">Bảo mật cao</div>
            <div class="col-12">Khách hàng là hàng đầu</div>
            <div class="col-12">Bảo hành tốt tận tình</div>
            <div class="col-12">Luôn bảo đàm tiến độ gia công</div>
           </div>
         </div>
        
         <div class="col-md-3">
          <H5>CÁC DỊCH VỤ</H5>
           <div class="row">
            <div class="col-12">Cắt laze chính xác cao</div>
            <div class="col-12">Các chi tiết máy</div>
            <div class="col-12">Cắt tiện các chi tiết máy  theo yêu cầu</div>
            <div class="col-12">Phun sơn tự động an toàn</div>
         </div>
        </div>
       </div>
      
    </div>
  </footer><!-- End Footer -->
  <div class="credits" style="text-align: center; padding: 5px 0px;">
    <!--
    All the links in the footer should remain intact.
    You can delete the links only if you purchased the pro version.
    Licensing information: https://bootstrapmade.com/license/
    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
  -->
   @copyright CNC ANH ĐỨC
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/aos/aos.js')}} "></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/js/owl.js')}}"></script>
  <!-- Template Main JS File -->
  <script src=" {{asset('assets/js/main.js')}}"></script>
</body>

</html>