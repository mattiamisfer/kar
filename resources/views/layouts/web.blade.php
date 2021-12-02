<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.kar-group.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 11:18:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KAR GROUP :: @yield('title') </title>
    <link rel="shortcut icon" href="{{ asset('web/favicon.ico')}}" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="{{ asset('web/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('web/slider/css/slider.css')}}">
    <link rel="stylesheet" href="{{ asset('web/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('web/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css')}}"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('headerJs')
  </head>
  <body>
 <header data-spy="affix" data-offset-top="197">
  <div class="container">
  <div class="row">
  <div class="col-md-2">
  <div class="logo">
  <img src="{{ asset('web/images/main-logo.png')}}" width="100"/>
  </div>
  </div><!--col-md-2-->
  <div class="col-md-10">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li> <a href='/'>HOME</a></li>
          <li><a href='{{ route('home.about')}}'>ABOUT US</a></li>
          <li><a href='{{ route('home.chairman')}}'>CHAIRMAN</a></li>
          <li><a href='{{ route('home.company')}}'>COMPANIES</a> </li>
          <li><a href='{{ route('home.news')}}'>NEWS</a></li>
          <li><a href='{{ route('home.contact')}}'>CONTACT US</a>    </li>
      </ul>
    </div>
  </div>
</nav>



  </div><!--col-md-10-->
  </div><!--row-->
  </div><!--container-->
  </header>

<div class="clearfix"></div>

@yield('content');


<footer>
<div class="container">
<div class="row">
<div class="col-md-3">
<div class="clearfix"></div>
<div class="footer-navnew"></div>
<ul class="list-unstyled list-inline footer-social">
     <li>
              <a href="#" target="_blank" title="Follow @kbw_investments on Twitter">
                <i class="fa fa-facebook margin-r-1"></i>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="Follow @kbw_investments on Twitter">
                <i class="fa fa-twitter margin-r-1"></i>
              </a>
            </li>
            <li>
              <a href="#" target="_blank" title="View KBW Investments on LinkedIn">
                <i class="fa fa-linkedin margin-r-1"></i>
              </a>
            </li>
          </ul>
<div class="clearfix"></div>
<div class="copyright">© 2017 KAR Group &nbsp; All rights reserved.</div>

</div><!--col-md-3-->
<div class="col-md-7">
<div class="footer-navnew"></div>
<ul class="list-inline footer-nav text-center">
  <li>Cebarco Tower <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> Building &nbsp;&nbsp; 249 <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> Road&nbsp;&nbsp;  3306 <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> Block&nbsp;&nbsp;  333 <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> Kingdom Of Bahrain<br /> T&nbsp;  +973 17823232 <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> F &nbsp; +973 17722001 <span class="red-bg">&nbsp;&nbsp;|&nbsp;&nbsp;</span> E&nbsp; contact@kar-group.com</li>

</ul>
</div><!--col-md-7-->

<div class="col-md-2">
<img src="{{ asset('web/images/main-logo.png')}}" class="footer-logo center-block" width="80"/>

</div><!--col-md-3-->
</div><!--row-->
</div><!--container-->
</footer>



@yield('footerScript')

  </body>

<!-- Mirrored from www.kar-group.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Nov 2021 11:19:44 GMT -->
</html>
