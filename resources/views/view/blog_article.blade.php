@extends('viewm')

@section('tour_content')

<div class="content-outer">

<div id="page-content" class="row">

   <div id="primary" class="eight columns">
   @forelse ($article as $atc)
      <article class="post">

         <div class="entry-header cf">

            <h1>{{$atc->title}}</h1>
            <p class="post-meta" style="margin:10px;">
               <time class="date">Додано: {{$atc->added_on}}</time>
            </p>
            <p>{{$atc->description}}</p>
            
         </div>

         <div class="post-thumb">
           <img src="{{$atc->image_url}}" alt="post-image" title="post-image">
         </div>

         <div class="post-content">
         <p>{{$atc->details}}</p>
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