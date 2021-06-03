@extends('master')
 
@section('title', "About | Sparrow" )

@section('content')
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Про нас<span>.</span></h1>

            <p>У нас прописані етапи походу і є обов'язкові пункти, які повинні бути зроблені гідом. Такі, як знайомство учасників,
                інструктажі з техніки безпеки та використання спорядження, прощальна вечеря і т.п... Але в той же час, намагаємося не
                обмежувати гідів жорсткими стандартами в усьому, залишаючи місце для творчості.
                Адже у кожного гіда є свої «фішки» і особливості, часто саме вони роблять похід незабутнім і неповторним.</p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row page">

         <div id="primary" class="eight columns">

            <section>

               <h1>Гіди - головні люди в поході </h1>

               <p class="lead">Робота гіда - не просто стежити за безпекою і провести групу за маршрутом, 
                  а й створити правильний психологічний клімат в групі. По-простому - зробити, щоб всі посміхалися, 
                  були задоволені і щасливі. Раз на рік ми збираємося разом з гідами (ой, як це непросто, адже зазвичай всі в горах) 
                  і ділимося своїми напрацюваннями, ідеями та "лайфхаками". Обговорюємо, 
                  як зробити, щоб всі учасники були здорові, задоволені і сміливо рекомендували нас своїм друзям.</p>

               <p>Ми регулярно проводимо сходку команды Кулуар. Подивіться відео зі сходки  в лютому 2020 року.
                   Цього разу було три блоки:  організаційний, психологія в групі і домедична допомога. 
                  Придивіться до цих лиць та посмішок, адже саме з цими людьми вам йти в гори. </p>

               <div class="row">

                  <div id="team-wrapper" class="bgrid-halves cf">

                     @forelse($guide as $g)
                     <div class="column member">

                        <img src="{{$g->image_url}}" alt=""/>

                        <div class="member-name">
                           <h5><a href="{{route('guide.view', ['id' => $g->id])}}">{{$g->first_name}} {{$g->last_name}}</a></h5>
                           <span>{{$g->posada}}</span>
                        </div>

                        <p>{{$g->description}}</p>

                        <ul class="member-social">
                           <li><a href="{{$g->facebook}}"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="{{$g->instagram}}"><i class="fa fa-instagram"></i></a></li>
                        </ul>

            			</div>
                     @empty
                     <p></p>
                     @endforelse

                     
                  </div> <!-- Team wrapper End -->

               </div> <!-- row End -->

            </section> <!-- section end -->

         </div> <!-- primary end -->

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

         </div> <!-- secondary End-->

      </div> <!-- page-content End-->

   </div> <!-- Content End-->
@endsection