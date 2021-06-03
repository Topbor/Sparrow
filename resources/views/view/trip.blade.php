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
       @forelse ($trips as $trip)
         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h1>{{$trip->trip_name}}</h1>

                  <div class="entry-description">
                     <p><strong>Гід: </strong><a href="{{route('guide.view', ['id' => $trip->getGuide()->id])}}">{{$trip->getGuide()->first_name}} {{ $trip->getGuide()->last_name}}</a></p>
                     <p><strong>Дата старту: </strong>{{$trip->trip_start}}</p>
                     <p><strong>Дата завершення: </strong>{{$trip->trip_end}}</p>
                     <p><strong>Вартість: </strong>{{$trip->price}}$</p>
                  </div>

            </div> 

            <div id="primary" class="eight columns">

               <div class="entry-media">
                  <img src="{{$trip->image_url}}" alt="" />
               </div>
               <div class="entry-excerpt">

               <p><strong>Опис: </strong>{{$trip->description}}</p>
               <div class="sub" style="background: #007696; padding: 10px;
               width:30%; margin: 0 auto; text-align:center; border-radius:7px;">
               <a href="{{route('order', ['id'=>$trip->id])}}" style="color:white;">Забронювати</a></div>
					</div>
            </div> 

         </section> 
         @empty
               <p>There are no tours for this moment </p>
          @endforelse

         
      </div>

   </div>
@endsection
