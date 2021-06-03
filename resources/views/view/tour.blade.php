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
       @forelse ($tour as $tt)
         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

                  <h1>{{$tt->mountaine}}</h1>
                  <h3>{{$tt->country}}</h3>

                  <div class="entry-description">
                     <p><strong>Маршрут: </strong>{{$tt->tour_way}}</p>
                     <p><strong>Висота: </strong>{{$tt->hige}}</p>
                     <p><strong>Складність: </strong>{{$tt->level}}</p>
                     <p><strong>Місце початку: </strong>{{$tt->meet_place}}</p>
                     <p><strong>Місце завершення: </strong>{{$tt->finish_place}}</p>
                  </div>

            </div> 

            <div id="primary" class="eight columns">

               <div class="entry-media">
                  <img src="{{$tt->image_url}}" alt="" />
               </div>

               <div class="entry-excerpt">

               <p><strong>Опис: </strong>{{$tt->description}}</p>

					</div>
               <table>
                  <thead>
                     <tr>
                        <td>Назва туру</td>
                        <td>Гід</td>
                        <td>Дата початку</td>
                        <td>Дата завершення</td>
                        <td>Ціна</td>
                     </tr>
                  </thead>
                  @forelse($trips as $trip)
                  <tr>
                     <td><a href="{{route('trip.view', $trip->id)}}">{{$trip->trip_name}}</a></td>
                     <td>{{$trip->getGuide()->last_name}} </td>
                     <td>{{$trip->trip_start}}</td>
                     <td>{{$trip->trip_end}}</td>
                     <td>{{$trip->price}} $</td>
                  </tr>
                  @empty
                        <p></p>
                  @endforelse
                  </table>
            </div> 

         </section> 
         @empty
               <p>There are no tours for this moment </p>
          @endforelse

         
      </div>

   </div>
@endsection