@extends('adminm') 

@section('title', "Tours | Sparrow" )

@section('admin_content')
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Наші найцікавіші тури<span>.</span></h1>

            <p>Тут зібрані тури у найкращі гірські закутки нашої планети. Їх відвідування принесе вам максимум задоволення.</p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

               <div id="secondary" class="four columns portfolio-list">
                  <h3>Сходження на гірські вершини</h3>
                  <p>Клуб "Sparrow" відкриває "великі" гори для сильних і сміливих. 
                     Наша команда гідів стане провідником на найвищі гірські вершини світу, 
                     роблячи сходження безпечними і цікавими. Ми хочемо зробити сходження доступними, 
                     комфортними і безпечними, так як самі розуміємо чого вартий ризик.
                     <br>  
                     І коли мова заходить про підйом в "великі" гори, важливим фактором для сходження на вершину є погода.
                      Ми знаємо, як прикро, коли після довгих місяців підготовки саме погодні умови в вирішальний момент не 
                      дають здійснити задумане. Але ми прагнемо до того, щоб наші учасники отримували тільки позитивні емоції 
                      від турів. Тому, якщо сходження на гору не вдасться через негоду, ми компенсуємо 10-30% в рахунок наступного
                      сходження! Таким чином, у вас з'явиться фінансова "страховка" для здійснення наступної спроби зійти на
                      бажану гору.</p>
                </div>

            <div id="primary" class="eight columns portfolio-list">

               <div id="portfolio-wrapper" class="bgrid-halves cf">
               <div class="filter">
                     <p style="text-align:center;"><button class="fil"  style="font-size:24px; color:grey;"><i class="fas fa-filter"></i></button></p>
                  <div class="fill_point" style="display:none;">
                     <div style="display:flex; width:100%; justify-content:space-around; margin:0 auto;">
                     <p class="f1" style="text-align:center;  width:40%; font-size:18px;  color:grey;"><button><i style="font-size:24px;" class="fas fa-arrows-alt-v"></i> За висотою</button></p>
                     <p class="f2" style="text-align:center;   width:40%; font-size:18px;  color:grey;"><button><i style="font-size:24px;" class="fas fa-layer-group"></i> За складністю</button></p>
                     </div>
                  </div>
                  <div class="fpoint" style="display:none;">
                     <div style="display:flex; width:100%; justify-content:space-around; margin:0 auto;">
                     <p style="text-align:center; padding:10px; border:1px solid grey; border-radius:5px; width:30%;"><a href="{{route('hige')}}" style="font-size:18px;  color:grey; ">Висока</a></p>
                     <p style="text-align:center; padding:10px; border:1px solid grey; border-radius:5px;  width:30%;"><a href="{{route('med')}}" style="font-size:18px; color:grey; ">Середня</a></p>
                     <p style="text-align:center; padding:10px; border:1px solid grey; border-radius:5px;  width:30%;"><a href="{{route('easy')}}" style="font-size:18px; color:grey; ">Низька</a></p>
                     </div></div>
                     <div class="fp" style="display:none;">
                     <div style=" width:100%;  margin:0 auto;">
                     <p style="">
                     <form action="{{route('admin.hige')}}" method="post">
                     @csrf
                     <p>Висота від <input style="padding:5px; border:1px solig grey;border-radius:3px; " type="number" name="vid" id="" value="0">
                      до <input style="padding:5px; border:1px solig grey;border-radius:3px; " value="9000" type="number" name="do" id=""><button style="padding:5px; margin-left:20px;" type="submit">Шукати</button></p>
                     
                     </form>
                     </p>
                    
                     </div>
                  </div>


                  <div class="sub" style="background: #0a7d00; padding: 10px;
                  width:40%; margin: 0 auto; margin-bottom:30px; text-align:center; border-radius:7px;">
                  <a href="{{route('admin.new.tour')}}" style="color:white;">Додати новий</a></div>

                   @forelse ($tours as $t)
                        @include('admin.tourcard',$t)
                   @empty
                            <p>There are no tours for this moment </p>
                   @endforelse
                   
               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->
@endsection