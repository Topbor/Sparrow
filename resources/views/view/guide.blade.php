
@extends('viewm')

@section('tour_content')

   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->


   <div class="content-outer">

      <div id="page-content" class="row portfolio">
       
            @forelse($gg as $g)
            
            
         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h1>{{$g->first_name}} {{$g->last_name}}</h1>

                  <div class="entry-description">
                     <p><strong>Дата народження: </strong>{{$g->birth}}</p>
                     <p><strong>Спеціалізація: </strong>{{$g->specialization}}</p>
                     <p><strong>Досвід: </strong>{{$g->exp}} роки</p>
                     <p><strong>Номер телефону: </strong>+380{{$g->phone}}</p>
                     <p><strong>Поштова скринька: </strong>{{$g->mail}}</p>
                     <p>{{$g->description}}$</p>
                  </div>

            </div> 

            <div id="primary" class="eight columns">

               <div class="entry-media">
                  <img src="{{$g->image_url}}" alt="" />
               </div>
               <div class="entry-excerpt">

               <p><strong>Опис: </strong>{{$g->details}}</p>

					</div>
            </div> 

         </section> 
         @empty

@endforelse

         
      </div>

   </div>
@endsection



