<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Sparrow </title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   
	<link rel="stylesheet" href="../../../css/layout.css">
   <link rel="stylesheet" href="../../../css/media-queries.css">
   <link rel="stylesheet" href="../../../css/default.css">
   <link rel="stylesheet" href="../../../css/style.css">
   <!-- Script
   ================================================== -->
	<script src="../../../js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 
    <style>
      body{
         background: #D2D8D8 url(../../../images/bg.jpg);
      }
      select, textarea{
         background:white;
      }
      footer{
         margin-top: 66px;
         margin-bottom: 84px;
         font-size: 14px;
      }
   </style>
</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="{{route('admin.homee')}}"><img alt="" src="../../../images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li><a href="{{route('admin.blog')}}">Блог</a></li>
                  <li><a href="{{route('admin.tours')}}">Тури</a></li>
                  <li><a href="{{route('admin.about')}}">Про нас</a></li>
                  <li><a href="{{route('admin.new.trip')}}">Створити подорож</a></li>
                  <li><a href="{{route('admin.orders')}}">Замовлення</a></li>


               </ul> 

            </nav> 

         </div>

      </div>

   </header> 
   @yield('adm_view_content');
   <footer>

<div class="row">

   <div class="twelve columns">

      <ul class="footer-nav">
      <li><a href="{{route('admin.homee')}}">Головна.</a></li>
           <li><a href="{{route('admin.blog')}}">Блог.</a></li>
           <li><a href="{{route('admin.tours')}}">Тури.</a></li>
           <li><a href="{{route('admin.about')}}">Про нас.</a></li>
           <li><a href="{{route('admin.orders')}}">Замовлення.</a></li>
      </ul>

      <ul class="footer-social">
         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
         <li><a href="#"><i class="fa fa-skype"></i></a></li>
      </ul>

      <ul class="copyright">
         <li>Copyright &copy; 2020 Borovyk</li> 
         <li>Design by Borovyk</li>   
                       
      </ul>

   </div>

   <div id="go-top" style="display: block;"><a title="Back to Top" href="#">Go To Top</a></div>

</div>

</footer> <!-- Footer End-->

<!-- Java Script
================================================== -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../../js/jquery-1.10.2.min.js"><\/script>')</script>
<script type="text/javascript" src="../../../js/jquery-migrate-1.2.1.min.js"></script>
<script src="https://kit.fontawesome.com/a9832039fe.js" crossorigin="anonymous"></script>
<script src="../../../js/jquery.flexslider.js"></script>
<script src="../../../js/doubletaptogo.js"></script>
<script src="../../../js/init.js"></script>

</body>

</html>