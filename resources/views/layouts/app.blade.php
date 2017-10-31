<!DOCTYPE html>
<html lang="en">
<head>
<title>Journey</title>
<meta charset="utf-8">
<link rel="icon" href="{{URL('/images/favicon.ico')}}">
<link rel="shortcut icon" href="{{URL('/images/favicon.ico')}}">
<link rel="stylesheet" href="{{URL('/css/style.css')}}">
<link rel="stylesheet" href="{{URL('/css/slider.css')}}">
<link rel="stylesheet" href="{{URL('/path/to/font-awesome/css/font-awesome.min.css')}}">
<script src="{{URL('/js/jquery.js')}}"></script>
<script src="{{URL('/js/jquery-migrate-1.1.1.js')}}"></script>
<script src="{{URL('/js/superfish.js')}}"></script>
<script src="{{URL('/js/sForm.js')}}"></script>
<script src="{{URL('/js/jquery.jqtransform.js')}}"></script>
<script src="{{URL('/js/jquery.equalheights.js')}}"></script>
<script src="{{URL('/js/jquery.easing.1.3.js')}}"></script>
<script src="{{URL('/js/tms-0.4.1.js')}}"></script>
<script src="{{URL('/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
<script src="{{URL('/js/jquery.ui.totop.js')}}"></script>
<script>
$(window).load(function () {
    $('.slider')._TMS({
        show: 0,
        pauseOnHover: false,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'random',
        pagination: false, //'.pagination',true,'<ul></ul>'
        pagNums: false,
        slideshow: 8000,
        numStatus: false,
        banners: true,
        waitBannerAnimation: false,
        progressBar: false
    });
    $("#tabs").tabs();
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<link rel="stylesheet" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body class="page1">
<header>
  <div class="container_12">
    <div class="grid_12">
      <h1><a href="index.html"><img src="{{URL('images/logo.png')}}" alt=""></a></h1>
      <div class="clear"></div>
    </div>
    <div class="menu_block">
      <nav>
        <ul class="sf-menu">
          <li class="current"><a href="index.html">Home</a></li>
          <li class="with_ul"><a href="about.html">About</a>
            <ul>
              <li><a href="#">Agency</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Team</a></li>
            </ul>
          </li>
          <li><a href="{{URL('/rent')}}">Rent</a></li>
          <li><a href="{{URL('/tours.html')}}">Tours</a></li>
          <li><a href="{{URL('/blog.html')}}">Blog</a></li>
          <li><a href="{{URL('/pdf')}}">PDF</a></li>
        </ul>
      </nav>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
</header>
<div class="main">
  <div class="container_12">
    <div class="grid_12">
      <div class="slider-relative">
        <div class="slider-block">
          <div class="slider"> <a href="#" class="prev"></a><a href="#" class="next"></a>
            <ul class="items">
              <li><img src="{{URL('images/slide.jpg')}}" alt="">
                <div class="banner">
                  <div>THERE ARE PLENTY OF PLACES</div>
                  <br>
                  <span> that are worth seeing</span> </div>
              </li>
              <li><img src="{{URL('images/slide1.jpg')}}" alt=""></li>
              <li><img src="{{URL('images/slide2.jpg')}}" alt=""></li>
              <li><img src="{{URL('images/slide3.jpg')}}" alt=""></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container_12">
      <div class="grid_12">
      </div>
        <div class="clear"></div>
      </div>
       @yield('content')
   
      <div class="clear"></div>
    </div>
  </div>
  <div class="bottom_block">
    <div class="container_12">
      <div class="grid_2 prefix_2">
        <ul>
          <li><a href="#">FAQS Page</a></li>
          <li><a href="#">People Say</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Useful links</a></li>
          <li><a href="#">Partners</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <ul>
          <li><a href="#">Insurance</a></li>
          <li><a href="#">Family Travel</a></li>
        </ul>
      </div>
      <div class="grid_2">
        <h4>Contact Us:</h4>
        TEL: 1-800-234-5678<br>
        <a href="#">info@demolink.org</a> </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<footer>
  <div class="container_12">
    <div class="grid_12">
      <div class="socials"> <a href="#"></a> <a href="#"></a> <a href="#"></a> <a href="#"></a> </div>
      <div class="copy"> Journey &copy; 2045 | <a href="#">Privacy Policy</a> | Design by: <a href="{{URL('http://www.templatemonster.com/')}}">TemplateMonster.com</a> </div>
    </div>
    <div class="clear"></div>
  </div>
</footer>
</body>
</html>