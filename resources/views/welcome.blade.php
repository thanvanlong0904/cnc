<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gia công cơ khí CNC ANH ĐỨC chuyên gia công các chi tiết máy.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta property="og:image" content="{{asset('assets/img/logocnc.png')}}" />
  <meta property="og:image:secure_url" content="{{asset('assets/img/logocnc.png')}}" />
  <meta property="og:image:width" content="500" />
  <meta property="og:image:height" content="361" />
  <!-- Favicons -->
  <link href="{{asset('assets/img/logocnc.png')}}" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href=" {{asset('assets/owlcarousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href=" {{asset('assets/owlcarousel/assets/owl.theme.default.min.css')}}">
  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
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
      <div class="contact-info none_768  d-md-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">cokhichinhxacanhduc@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>0985641331</span></i>
      </div>
      <div class="social-links  d-md-flex align-items-center">
        <a href="{!! route('user.change-language', ['vi']) !!}"><img width="45px" class="img-fluid" src="https://product.hstatic.net/200000122283/product/c-e1-bb-9d-vi-e1-bb-87t-nam_2c0683597d2d419fac401f51ccbae779_grande.jpg " alt=""></a>
        <a href="{!! route('user.change-language', ['en']) !!}"><img width="45px" class="img-fluid" src="https://vuongquocanh.com/wp-content/uploads/2018/04/la-co-vuong-quoc-anh.jpg" alt=""></a>
        <a href="{!! route('user.change-language', ['ja']) !!}"><img width="45px" class="img-fluid" src="https://nhatbanchotoinhe.com/wp-content/uploads/2021/04/co-nhat-4795-1497173124.png" alt=""></a>
      </div>
    </div>
  </section><!-- End Top Bar-->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">
      <div id="logo">
        <h1><a class="logo-title" href="{{route('welcome.show')}}"><img style="height:66px ;" width="65px" class="img-fluid" src="{{asset('assets/img/logocnc.png')}}" alt="">
            <div>
              <?php $language = Session()->get('website_language', config('app.locale'));
                if ($language == 'vi') {
                  echo  "<span>CÔNG TY TNHH CƠ KHÍ CHÍNH XÁC 
              </span><span>CNC ANH ĐỨC</span>";
                };
                if ($language == 'en') {
                 echo  "<span>ANH DUC MECHANICAL
              </span><span>PRECISION CO., LTD</span>";
                }
                if ($language == 'ja') {
                    echo  "<span>ANH DUC MECHANICAL
              </span><span>PRECISION CO., LTD</span>";
                }        ?>
              </div>
          </a></h1>
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="https://cncanhduc.com/#banner">{{ trans('cnc.home') }}</a></li>
          <li><a class="nav-link scrollto" href="#about">{{ trans('cnc.company') }}</a></li>
          <li><a class="nav-link scrollto" href="https://cncanhduc.com/#about1">{{ trans('cnc.strengths') }}</a></li>
          <li><a class="nav-link scrollto " href="https://cncanhduc.com/#clients">{{ trans('cnc.service') }}</a></li>
          <li><a class="nav-link scrollto" href="https://cncanhduc.com/#portfolio">{{ trans('cnc.product') }}</a></li>
          <li><a class="nav-link scrollto" href="https://cncanhduc.com/#testimonials">{{ trans('cnc.quotation') }}</a></li>
          <li><a class="nav-link scrollto" href="https://cncanhduc.com/#contact">{{ trans('cnc.access') }}</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <section id="banner">
    <div class="owl-carousel owl-carousel1 owl-theme">
      @foreach($list_banner as $item_banner)
      <div class="item">
         <img style="max-height:450px;object-fit: cover;" class="img-fluid" src="{{asset($item_banner->image)}}" alt="">
        <div class="content-banner">
          <h4> <?php $language = Session()->get('website_language', config('app.locale'));
                if ($language == 'vi') {
                  echo  $item_banner->name;
                };
                if ($language == 'en') {
                  echo  $item_banner->name_en;
                }
                if ($language == 'ja') {
                  echo  $item_banner->nam_ja;
                }        ?></h4>

          <p><?php $language = Session()->get('website_language', config('app.locale'));
              if ($language == 'vi') {
                echo  $item_banner->desc;
              };
              if ($language == 'en') {
                echo  $item_banner->desc_en;
              }
              if ($language == 'ja') {
                echo  $item_banner->desc_ja;
              }        ?></p>
          <div class="see-more-banner"><a href="#footer">{{ trans('cnc.contact') }}</a><a href="{{route('banner.detail',[$item_banner->slug,$item_banner->id])}}">{{trans('cnc.See_details') }}</a></div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <main id="main">
    <section id="about" class="mt-4">
      <div class="container" data-aos="fade-up">
        <div class="row  ">
          <div class="col-lg-6 content mb-4 mb-lg-0">
            <h2 style="color:white ;">{{ trans('cnc.ABOUT_CNC') }}</h2>
            <?php $language = Session()->get('website_language', config('app.locale'));
            if ($language == 'vi') {
              echo  $about->desc;
            };
            if ($language == 'en') {
              echo $about->desc_en;
            }
            if ($language == 'ja') {
              echo  $about->desc_ja;
            }        ?>
            <div><a href="{{route('about.detail')}}">
                 <?php $language = Session()->get('website_language', config('app.locale'));
                if ($language == 'vi') {
                  echo  "Xem thêm";
                };
                if ($language == 'en') {
                 echo  "See more";
                }
                if ($language == 'ja') {
                    echo  "続きを見る";
                }        ?>
                 <i class="bi bi-chevron-double-right"></i></a></div>
          </div>
          <div class="col-lg-6 about-img ">
            <img src="{{asset($about->img)}}" alt="">
          </div>
        </div>
      </div>
    </section>
    <section id="about1" class="mt-4">
      <div class="container" data-aos="fade-up">
      <div class="section-header"> <h2>{{ trans('cnc.strengths') }}</h2> </div>
        <div class="row  ">
        <div class="col-lg-6 about-img ">
            <img  class="img-fluid" src="{{asset($strengths->img)}}" alt="">
          </div>
          <div class="col-lg-6 content mb-4 mb-lg-0">
            <h2 style="color:white ;">
            <?php $language = Session()->get('website_language', config('app.locale'));
            if ($language == 'vi') {
              echo  "THẾ MẠNH CNC ANH ĐỨC";
            };
            if ($language == 'en') {
              echo "THE CNC STRENGTHS OF ANH DUC";
            }
            if ($language == 'ja') {
              echo  "アン・デュックのCNCの強み";
            }        ?>
          </h2>
            <?php $language = Session()->get('website_language', config('app.locale'));
            if ($language == 'vi') {
              echo  $strengths->detail;
            };
            if ($language == 'en') {
              echo $strengths->detail_en;
            }
            if ($language == 'ja') {
              echo  $strengths->detail_ja;
            }        ?>
           
          </div>
         
        </div>
      </div>
    </section>
    <section id="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>{{ trans('cnc.service') }}</h2>
        </div>
        <div class="owl-carousel owl-carousel2 owl-theme">
          @foreach($services as $service)
          <div class="item">
            <div style="padding:0px 5px ; box-sizing: border-box;">
              <a href="{{route('secvice.detail',[$service->slug,$service->id])}}">
                <div><img src="{{asset($service->img)}}" alt=""></div>
                <div class="content-technology">
                  <p><?php $language = Session()->get('website_language', config('app.locale'));
                      if ($language == 'vi') {
                        echo  $service->name;
                      };
                      if ($language == 'en') {
                        echo  $service->name_en;
                      }
                      if ($language == 'ja') {
                        echo  $service->name_ja;
                      }        ?></p>
                </div>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>{{ trans('cnc.product') }}</h2>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach($categorys as $category)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{route('product.list',[$category->slug,$category->id])}}">
              <div class="box-product">
                <div><img width="565px" style="max-height: 265px;" class="img-fluid" src="{{asset($category->img)}}" alt=""></div>
                <div class="bg-title">
                  <div style="text-align: end; text-align: end;" class="bg-title__top">
                    <?php $language = Session()->get('website_language', config('app.locale'));
                    if ($language == 'vi') {
                      echo  $category->name;
                    };
                    if ($language == 'en') {
                      echo  $category->name_en;
                    }
                    if ($language == 'ja') {
                      echo  $category->name_ja;
                    }        ?></div>
                </div>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    </div>
    </section>
    <section id="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>{{ trans('cnc.quotation') }}</h2>
        </div>
        <form action="{{route('mail.send')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row contact-info">
            <div class="col-md-6">
              <div class="input-group mb-3 col-md-6">
                <input type="file" class="form-control" id="inputGroupFile01" name="file[]" multiple required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3 col-6">
                <input type="phone" class="form-control" placeholder="Phone" name="phone" required>
              </div>
              @if ($errors->has('phone'))
              <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
              @endif
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3 col-6">
                <input type="text" class="form-control" placeholder="Email" name="email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group mb-3 col-6">
                <input type="text" class="form-control" placeholder="Address" name="add" required>
              </div>
            </div>
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="note" required></textarea>
              <label style="color:black ; margin-left: 15px;" for="floatingTextarea2" required>Comments</label>
            </div>
            <div class="col-md-12 text-center mt-3">
              <input type="submit" class="btn btn-secondary" value="Send" style="padding:5px 25px ;">
            </div>
          </div>
        </form>
      </div>
    </section>
    <section id="contact" class="mb-5">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>
            <?php $language = Session()->get('website_language', config('app.locale'));
            if ($language == 'vi') {
              echo  "ĐỐI TÁC";
            };
            if ($language == 'en') {
              echo  "PARTNER";
            }
            if ($language == 'ja') {
              echo  "相棒";
            }        ?>
          </h2>
        </div>
        <div class="owl-carousel owl-carousel3 owl-theme">
          @foreach($partners as $partner)
          <div class="item">
            <div style="padding:0px 5px ; box-sizing: border-box;">
              <a href="" title="{{$partner->name}}">
                <div><img style="max-height:134px" src="{{asset($partner->img)}}" alt=""></div>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <div id="menu-info">
      <div>
        <ul>
          <li><a href="https://www.facebook.com/anhduc.phan.3158"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="https://zalo.me/0985641331">Zalo</a></li>
          <li><a href="tel:0985641331"><i class="bi bi-telephone"></i></a></li>
        </ul>
      </div>
    </div>
  </main>
<footer id="footer">
    <div class="container">
        <div class="row">
          <div class="col-12 text-center text-white">
            <h4 class="text-white mb-5">
                 <?php $language = Session()->get('website_language', config('app.locale'));
            if ($language == 'vi') {
              echo  "Liên hệ với chúng tôi";
            };
            if ($language == 'en') {
              echo  "Contact Us";
            }
            if ($language == 'ja') {
              echo  "お問い合わせ";
            }        ?>
            </h4>
          </div>
          <div class="col-md-6 col-lg-3 px-4 ">
            <div class="item-footer">
              <h5 class="text-center fw-bold" style="color:#006666 ;">ANH DUC MECHANICAL <br>
PRECISION CO., LTD</h5>
              <div class="text-center">
                <a href=""><img style="width: 50%;" class="img-fluid" src="{{asset('assets/img/logocnc.png')}}" alt=""></a>
              </div>
            </div>
             
             
          </div>
          <div class="col-md-6 col-lg-3 px-4 mt-4 mt-md-0">
            <div class="item-footer">
              <h4 class="text-center fw-bold" style="color:#006666 ; font-size: 29px;"><i class="bi bi-geo-alt-fill"></i></h4>
              <h5 class="text-center fw-bold text-white">Address</h5>
              <div class="mx-2">
                <strong style="display: block;"> <b>VN:</b> {!! $contact->adress!!}</strong><br>

              </div>
            </div>
          </div>
           <div class="col-md-6 col-lg-3 px-4 mt-4 mt-lg-0">
            <div class="item-footer">
              <h4 class="text-center fw-bold" style="color:#006666 ; font-size: 29px;"><i class="bi bi-building-check"></i></h4>
              <h5 class="text-center fw-bold text-white">Office</h5>
              <div class="mx-2 ">
                <strong>US: {!!$contact->adress1!!}</strong><br>
               
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 px-4 mt-4 mt-lg-0">
            <div class="item-footer">
              <h4 class="text-center fw-bold" style="color:#006666 ; font-size: 29px;"><i class="bi bi-envelope-at-fill"></i></h4>
              <h5 class="text-center fw-bold text-white">Email</h5>
              <div class="mx-2 text-center">
                <strong>{{$contact->Email}}</strong><br>
               
              </div>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <div class="credits bg-white text-black" style="text-align: center; padding: 5px 0px;">
    @copyright CNC ANH ĐỨC
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="{{asset('assets/vendor/aos/aos.js')}} "></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/js/owl.js')}}"></script>
  <script src=" {{asset('assets/js/main.js')}}"></script>
</body>
</html>