<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.konnectplugins.com/herald/site/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 16:29:46 GMT -->
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Herald Blog template</title>
<!-- Favicon -->
<link href="img/fav.png" rel="shortcut icon" type="image/x-icon"/>
<!-- Bootstrap Core CSS -->
<link href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Theme CSS -->
<link href="{{asset('frontend/css/styles.css')}}" rel="stylesheet">

<!-- Custom Fonts -->
<link href="{{asset('frontend/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

@include('components.navbar')

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
    @yield('banner')

<!-- ===== Main Content ======-->
<div class="container">
  <div class="row">
        @yield('content')

    <!-- ==== Sidebar Starts Here ==== -->
        @yield('sidebar')
    <!-- ==== Sidebar Ends Here ==== -->
  </div>
</div>
<!-- ===== Main Content ENDS here ===== -->

<!-- ===== Footer ===== -->
<footer>
  <div class="footer-info">
    <div class="container">
      <div class="row">
        <!----footer logo---->
        <div class="col-md-6 "> <img src="img/logo.png"  alt="footer logo"/>
          <p>Curabitur efficitur malesuada velit, in ultricies nisi ornare eu. In a tortor non dolor vestibulum fermentum. Curabitur mattis nulla sem, vel vestibulum erat rutrum nec. Aenean libero tellus, tempus a mi eu, fringilla ullamcorper dui.</p>
        </div>
        <div class="col-md-6">
          <!--- subscribtion form--->
          <h3 class="footer-heading">Subscirbe for Weekly News From Our Blog</h3>
          <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control email-btn" placeholder="Enter Your Email here">
            </div>
            <button type="submit" class="btn btn-default">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright  -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p class="copyright text-muted text-center">&copy; Copyright 2017  Konnect plugins</p>
      </div>
    </div>
  </div>
</footer>
<!--- goto top button--->
<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><img src="img/arrow-top.png" alt="go-to-top"></a>

<!-- jQuery v3.1.1 -->
<script src="{{asset('frontend/assets/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Theme JavaScript -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77800499-1', 'auto');
  ga('send', 'pageview');
</script>
</body>

<!-- Mirrored from www.konnectplugins.com/herald/site/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Feb 2022 16:29:57 GMT -->
</html>
