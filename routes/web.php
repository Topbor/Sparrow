<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@home')->name('home');

Route::get('/about', 'MainController@about')->name('about');

Route::get('/blog', 'MainController@blog')->name('blog');

Route::get('/tours', 'MainController@tours')->name('tours');

Route::get('/tour/{id}', 'MainController@tour_view')->name('tour.view');

Route::get('/trip/{id}', 'MainController@trip_view')->name('trip.view');

Route::get('/blog/{id}', 'MainController@blog_view')->name('blog.view');

Route::get('/guide/{id}', 'MainController@guide_view')->name('guide.view');

Route::get('/order/{id}', 'MainController@orderForm')->name('order');

Route::POST('/order/store/{id}', 'MainController@orderStore')->name('order.store');

Route::get('/admin/login', 'AdminController@login')->name('admin.login');

Route::post('/admin/home', 'AdminController@home')->name('admin.home');

Route::get('/admin/homee', 'AdminController@homee')->name('admin.homee');

Route::get('/admin/about', 'AdminController@about')->name('admin.about');

Route::get('/admin/blog', 'AdminController@blog')->name('admin.blog');

Route::get('/admin/tours', 'AdminController@tours')->name('admin.tours');

Route::get('/tour_level_hige', 'MainController@HigeLevel')->name('lhige');

Route::get('/tour_level_med', 'MainController@MedLevel')->name('med');

Route::get('/tour_level_easy', 'MainController@EasyLevel')->name('easy');

Route::post('/tour_hige', 'MainController@hige')->name('hige');

Route::post('/admin/tour_hige', 'AdminController@hige')->name('admin.hige');

Route::get('/admin_tour/level_hige', 'AdminController@adminHigeLevel')->name('level_hige');

Route::get('/admin_tour/level_med', 'AdminController@adminMedLevel')->name('level_med');

Route::get('/admin_tour/level_easy', 'AdminController@adminEasyLevel')->name('level_easy');

Route::get('/admin/orders', 'AdminController@orders')->name('admin.orders');

Route::get('/admin/tour/{id}', 'AdminController@tour_view')->name('admin.tour.view');

Route::get('/admin/trip/{id}', 'AdminController@trip_view')->name('admin.trip.view');

Route::get('/admin/blog/{id}', 'AdminController@blog_view')->name('admin.blog.view');

Route::get('/admin/guide/{id}', 'AdminController@guide_view')->name('admin.guide.view');

Route::get('/admin/new/tour', 'AdminController@newTour')->name('admin.new.tour');

Route::POST('/admin/new/tour/store', 'AdminController@newTourStore')->name('admin.new.tour.store');

Route::get('/admin/new/guide', 'AdminController@newGuide')->name('admin.new.guide');

Route::POST('/admin/new/guide/store', 'AdminController@newGuideStore')->name('admin.new.guide.store');

Route::get('/admin/new/blog', 'AdminController@newBLog')->name('admin.new.blog');

Route::POST('/admin/new/blog/store', 'AdminController@newBlogStore')->name('admin.new.blog.store');

Route::get('/admin/new/trip', 'AdminController@newTrip')->name('admin.new.trip');

Route::POST('/admin/new/trip/store', 'AdminController@newTripStore')->name('admin.new.trip.store');

Route::get('/admin_tours_del/{id}', 'AdminController@delTour')->name('admin.delete.tour');

Route::get('/admin_trips_del/{id}', 'AdminController@delTrip')->name('admin.delete.trip');

Route::get('/admin_blog_del/{id}', 'AdminController@delBlog')->name('admin.delete.blog');

Route::get('/admin_guides_del/{id}', 'AdminController@delGuide')->name('admin.delete.guide');

Route::get('/admin/blog/up/{id}', 'AdminController@upBlog')->name('admin.update.blog');

Route::post('/admin_blog_up_store/{id}', 'AdminController@upBlogStore')->name('admin.update.blog.store');

Route::get('/admin/guides/up/{id}', 'AdminController@upGuide')->name('admin.update.guide');

Route::post('/admin_guides_up_store/{id}', 'AdminController@upGuideStore')->name('admin.update.guide.store');

Route::get('/admin/tour/up/{id}', 'AdminController@upTour')->name('admin.update.tour');

Route::post('/admin_tour_up_store/{id}', 'AdminController@upTourStore')->name('admin.update.tour.store');

Route::get('/admin/trip/up/{id}', 'AdminController@upTrip')->name('admin.update.trip');

Route::post('/admin_trip_up_store/{id}', 'AdminController@upTripStore')->name('admin.update.trip.store');

Route::post('/admin/logination', 'AdminController@logination')->name('admin.logination');

Route::get('/admin/log', 'AdminController@log')->name('admin.log');

Route::get('/admin/reg', 'AdminController@reg')->name('admin.reg');

Route::post('/admin/registration', 'AdminController@registration')->name('admin.registration');