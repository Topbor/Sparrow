<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title> Sparrow | Order</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="../../css/default.css">
	<link rel="stylesheet" href="../../css/layout.css">
   <link rel="stylesheet" href="../../css/media-queries.css">
   <link rel="stylesheet" href="../../css/style.css">
   <!-- Script
   ================================================== -->
	<script src="../../js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" > 
   <style>
   input{
      background:white!important;
      width:70%;
      padding:10px!important;
      border:none;
      border-radius:10px;
      font-size:15px;
      color:#647373;
   }
   input:number{
      background:white!important;
      width:70%;
      padding:10px;
      font-size:15px;
      color:#647373;
    
   }
 
   form{
      padding:30px;
      border-radius:10px;
      text-align:center;
      font-size:18px;
     
   }
   p{
     margin-bottom:10px!important;
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
               <a href="{{route('home')}}"><img alt="" src="../../images/logo.png"></a>
            </div>

            <nav id="nav-wrap">

               <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	            <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

               <ul id="nav" class="nav">

	               <li><a href="{{route('blog')}}">Блог</a></li>
                  <li><a href="{{route('tours')}}">Тури</a></li>
	               <li><a href="{{route('about')}}">Про нас</a></li>
                  <li> <a href="{{route('admin.home')}}">Вхід</a></li>     

               </ul> 

            </nav> 

         </div>

      </div>

   </header> 
<div id="page-content" style="text-align:center;" class="row h">
    <h1>Оформлення замовлення</h1>
    <form action="{{route('order.store', $i )}}" method="POST" style="border:1px solid red">
        @csrf
        <p style="font-size:20px; color:red;">Поля заповнено не коректно</p>
        <p>Ведіть ваше ім'я</p>
        <input type="text" name="name" style="border:1px solid red; border-radius:5px; margin:0 auto;" placeholder="Name">
        <p>Введіть ваш номер телефону</p>
        +380 <input type="number" name="phone" placeholder="Phone" style="border:1px solid red; border-radius:5px;  margin-bottom:20px;" id=""> 
        <p><button type="submit">Забронювати</button></p>
        
    </form>

</div>
<footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="footer-nav">
            <li><a href="{{route('blog')}}">Блог</a></li>
                  <li><a href="{{route('tours')}}">Тури</a></li>
	               <li><a href="{{route('about')}}">Про нас</a></li>
                  <li> <a href="{{route('admin.login')}}">Вхід</a></li>
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
   <script>window.jQuery || document.write('<script src="../../js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="../../js/jquery-migrate-1.2.1.min.js"></script>

   <script src="../../js/jquery.flexslider.js"></script>
   <script src="../../js/doubletaptogo.js"></script>
   <script src="../../js/init.js"></script>

</body>

</html>