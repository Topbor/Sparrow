@extends('master')
 
@section('title', "Sparrow - шлях до вершин" )

@section('content')
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1> Відкрийте "великі" гори для себе<span>.</span></h1>
							   <p> Наша команда гідів стане провідником на найвищі гірські вершини світу, роблячи
                            сходження безпечними і цікавими</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/everest.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Ми проведемо до ваших цілей<span>.</span></h1>
							   <p> Ми хочемо зробити сходження доступними, комфортними і безпечними, так як самі розуміємо чого вартий ризик</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/mount.jpg" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Ми любимо гори.</h2>

              <p>В нашій роботі немає місця конвеєру, до кожного сходження ми підходимо індивідуально,
                  з великою турботою і увагою.
              </p>
           </div>

           <div class="columns">
              <h2>Кращі гіди.</h2>

              <p>У наших сходженнях працюють гіди, які мають колосальний досвід, а також безліч досягнень і нагород.
              </p>
           </div>

           <div class="columns s-first">
              <h2>Гарантія сходження.</h2>

              <p>Можливість скасування туру до його старту наближається до нуля. 
                 Ми завжди йдемо в гори, навіть якщо число учасників мінімальне.
              </p>
           </div>

           <div class="columns">
              <h2>Тільки цікаві програми.</h2>

              <p> Для своїх сходжень ми вибираємо або знакові гори, або просто цікаві і гарні вершини .
              </p>
           </div>

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Наші найпопулярніші сходження.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="{{route('tours')}}">
                     <img alt="" src="images/portfolio/everest.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="{{route('tours')}}">Еверест</a></h5>
                     <p>Непал</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="{{route('tours')}}">
                     <img alt="" src="images/portfolio/Island Peak.JPG">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="{{route('tours')}}">Айленд пік</a></h5>
                     <p>Непал</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item s-first">
               <div class="item-wrap">
    				   <a href="{{route('tours')}}">
                     <img alt="" src="images/portfolio/monblan.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="{{route('tours')}}">Монблан</a></h5>
                     <p>Франція</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="{{route('tours')}}">
                     <img alt="" src="images/portfolio/elbrus.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="{{route('tours')}}">Ельбрус</a></h5>
                     <p>Росія</p>
    					</div>
               </div>
    			</div>

         </div>

      </div>

   </section> <!-- Works Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>7 причин зійти на гірські вершини з нами.</h1>
         </div>
      </div>

      <div class="blog-entries">

         <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">


            </div>

            <div class="ten columns offset-2 post-content">
            <h3><a href="">Ми поважаємо і любимо гори.</a></h3>
               <p>В нашій роботі немає місця конвеєру, до кожного сходження ми підходимо індивідуально, з великою турботою і увагою. Тільки злагоджена робота
                   всіх залучених до сходження гідів дозволяє зробити учасників щасливими.</p>
            </div>

         </article> <!-- Entry End -->
         <article class="row entry">

            <div class="ten columns offset-2 post-content">
            <h3><a href="">Кращі гіди.</a></h3>
               <p>У наших сходженнях працюють гіди, які мають колосальний досвід, а також безліч досягнень і нагород. Наприклад, 
                  Микита Балабанов - володар "Золотого льодоруба", найпрестижнішої нагороди в світі альпінізму.</p>
            </div>
            
         </article>
         <article class="row entry">



            <div class="ten columns offset-2 post-content">
            <h3><a href="{{route('tours')}}">Безпека учасників - головний пріоритет.</a></h3>
               <p>Ми робимо все можливе, щоб наші учасники здійснили бажане і зійшли на вершину.
                   Але при цьому безпека кожного з вас залишається на першому місці, і саме про це в першу чергу думають наші гіди.
                   У наших високогірних турах дуже велика увага приділяється акліматизації і стану здоров'я учасників.</p>
            </div>
            
         </article>
         <article class="row entry">


            <div class="ten columns offset-2 post-content">
            <h3><a href="{{route('tours')}}">Гарантія сходження.</a></h3>
               <p>Можливість скасування туру до його старту наближається до нуля. Ми завжди йдемо в гори, навіть якщо число учасників мінімальне.
                   Що стосується сходження на саму вершину, то тут багато що залежить від метеоумов.</p>
            </div>
            
         </article>
         <article class="row entry">


            <div class="ten columns offset-2 post-content">
            <h3><a href="{{route('tours')}}">Тільки цікаві програми.</a></h3>
               <p>Для своїх сходжень ми вибираємо або знакові гори (наприклад, найвищі гори континентів - Кіліманджаро, Аконкагуа),
                   або просто цікаві і гарні вершини (такі, як Айленд Пік в Непалі).
                   Весь час намагаємося йти вище і далі і кличемо вас із собою!</p>
            </div>
            
         </article>
         <article class="row entry">


            <div class="ten columns offset-2 post-content">
            <h3><a href="{{route('tours')}}">Знижки та бонуси.</a></h3>
               <p>Зрозуміло, сходження на високі гори - дуже витратні заходи. Щоб зменшити ваші витрати,
                   ми постійно пропонуємо всілякі знижки та програми лояльності для бувалих туристів.
                   До того ж, ми дбаємо про ваше спорядження і допомагаємо вам його підібрати.
                   Крім того, у нас є знижки для учасників наших походів в магазинах України та Росії. Про програму знижок на спорядження тут.
             </p>
            </div>
            
         </article>
         <article class="row entry">

            <div class="ten columns offset-2 post-content">
            <h3><a href="{{route('tours')}}">Допомога при підготовці.</a></h3>
               <p>На попередньому етапі ви можете розраховувати на нашу всебічну допомогу: від вибору 
                  спорядження до допомоги з придбанням авіаквитків.
               </p>
            </div>
            
         </article>
        
      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->

   <!-- Call-To-Action Section
   ================================================== -->
   <section id="call-to-action">

      <div class="row">

         <div class="eight columns offset-1">

            <h1>Давно мріяли та ніяк не наважувалмсь?</h1>
            <p>Перегляньте наші найзахоплюючі тури, завдяки яким, ви отримаєте надзвичайну порцію прекпасних емоцій та вражень. </p>

         </div>

         <div class="three columns action">

            <a href="{{route('tours')}}" class="button">Переглянути</a>

         </div>

      </div>

   </section> 
@endsection