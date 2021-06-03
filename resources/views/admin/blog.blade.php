@extends('adminm')

@section('title', "Blog | Sparrow" ) 

@section('admin_content')
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Наш Блог<span>.</span></h1>

            <p>Дізнавайтеся найцікавіше саме тут.</p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">
      <div class="sub" style="background: #0a7d00; padding: 10px;
                  width:40%; margin: 0 auto; margin-bottom:30px; text-align:center; border-radius:7px;">
                  <a href="{{route('admin.new.blog')}}" style="color:white;">Додати новий</a></div>

         <div id="primary" class="eight columns">
         @forelse ($article as $atc)
            <article class="post">

               <div class="entry-header cf">

                  <h1><a href="{{route('admin.blog.view' ,['id' => $atc->id])}}" title="">{{$atc->title}}</a></h1>
                  <p class="post-meta" style="margin:10px;">
                     <time class="date">Додано: {{$atc->added_on}}</time>
                  </p>
                  <p>{{$atc->description}}<a href="{{route('admin.blog.view' ,['id' => $atc->id])}}"> Дізнайтесь більше тут</a>
               <br>  <div style="display:flex;padding-left:30px;  margin-top:10px;">
                    <div style="padding:5px; padding-right:20px; margin-right:30px; padding-left:20px; background:#e1a900; border-radius:3px;">
                    <a style="color:white;" href="{{route('admin.update.blog', ['id' => $atc->id])}}"><i class="fas fa-edit"></i></a></div>
                    <div style="padding:5px; padding-right:20px; padding-left:20px; background:#f20000; border-radius:3px;">
                    <a style="color:white;" href="{{route('admin.delete.blog', ['id' => $atc->id])}}"><i class="fas fa-trash"></i></a></div>
                </div></p>
                
               </div>

               <div class="post-thumb">
                  <a href="{{route('admin.blog.view' ,['id' => $atc->id])}}" title=""><img src="{{$atc->image_url}}" alt="post-image" title="post-image"></a>
               </div>

               <div class="post-content">
               
               </div>

            </article>
            @empty
            <p></p>
            @endforelse
         </div> 
         <div id="secondary" class="four columns end">

            <aside id="sidebar">

               
               <div class="widget widget_text">
                  <h5 class="widget-title">Всім туристам привіт!</h5>
                  <div class="textwidget"> Дякуємо за інтерес до наших походів і нашої діяльності.
                      Якщо вже ви читаєте цей текст, то, швидше за все, хочете відправитися в гори, отримати заряд нових емоцій,
                       запастися враженнями і познайомитися з новими людьми.
                      Щиро вас вітаю - ви на вірному шляху! У даній статті я по пунктах розповім, чого вам варто очікувати, вирушаючи в походи з нами. </div>
		         </div>

               <div class="widget widget_contact">
					   <h5>Address and Phone</h5>
					   <p class="address">
						   Sparrow Studio<br>
						   1600 Amphitheatre Parkway <br>
						   Mountain View, CA 94043 US<br>
						   <span>(123) 456-7890</span>
					   </p>

					   <h5>Email and Social</h5>
					   <p>
                     E-mail: info{@}sparrow.com<br>
                     Twitter: <a href="#">@sparrow</a><br>
                     Facebook: <a href="#">sparrow FB Page</a><br>
                     Google+: <a href="#">sparrow G+ Page</a>
                  </p>
				   </div>

              

            </aside>

         </div>

   </div> 
   @endsection