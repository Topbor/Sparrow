<?php

namespace App\Http\Controllers;

use App\Tour;
use App\trips;
use App\blog;
use App\worker;
use App\orders;
use App\code;
use App\admins;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }

    public function homee(){
        return view('admin.home');
    }
    public function log(){
        return view('admin.logination');
    }
    public function reg(){
        return view('admin.registr');
    }
    public function registration() {
        try{  
            if(request('fn')==""||request('ln')==""||
            request('log')==""||request('pass')==""){
                return view('admin.registrErr');
            }
            else{
                \DB::insert('insert into admins (first_name, last_name, login, psssword) 
                values (?, ?, ?, ?)', [request('fn'),
                request('ln'),request('log'), request('pass')]);
               return view('admin.registrGood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.registrErr');
        }
    }
    public function home(){
        $i=code::first();
        //dd($i);
        try{  
            if(request('pass')==$i->password){
                return view('admin.logination');
            }
            else{
                return view('admin.loginfail');
               
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.loginfail');
        }
        return view('admin.logination');
    }
    public function logination(){
        try{  
            $i=admins::where('login', request('log'))->get();
            //dd($i);
            foreach($i as $ii){
            if(request('pass')==$ii->psssword||$ii==null){
                return view('admin.home',['admin'=>$ii]);
            }
            else{
                return view('admin.loginationErr');
               
            }}
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.loginationErr');
        }
        return view('admin.loginationErr');
    }
    public function about(){
        $i=worker::get();
        return view('admin.about', ['guide'=>$i]);
    }
    
    public function blog(){
        $i=blog::get();
        return view('admin.blog', [
            'article'=>$i
        ]);
    }
    public function tours(){
        $i=Tour::get();
        return view('admin.tours', [
            'tours'=>$i
        ]);
    }

    public function adminHigeLevel(){
        $i=Tour::where('level', 'hige')->get();
        return view('admin.tours', [
            'tours'=>$i
        ]);
    }

    public function adminMedLevel(){
        $i=Tour::where('level', 'medium')->get();
        return view('admin.tours', [
            'tours'=>$i
        ]);
    }

    public function adminEasyLevel(){
        $i=Tour::where('level', 'easy')->get();
        return view('admin.tours', [
            'tours'=>$i
        ]);
    }

    public function tour_view($id){
        $i=Tour::where('id',$id)->get();
        $trips=trips::where('tour_id', $id)->get();
        return view('admin.view.tour', [
            'tour'=>$i, 'trips'=>$trips
        ]);
    }
    public function trip_view($id){
        $trips=trips::where('id', $id)->get();
        return view('admin.view.trip', [
             'trips'=>$trips
        ]);
    }
    public function blog_view($id){
        $i=blog::where('id', $id)->get();
        return view('admin.view.blog_article', [
             'article'=>$i
        ]);
    }

    public function guide_view($id){
        $i=worker::where('id', $id)->get();
        return view('admin.view.guide', [
             'guide'=>$i
        ]);
    }

    public function orders(){
        $i=orders::get();
        return view('admin.orders', [
            'orders'=>$i
        ]);
    }

    public function newTour(){
        return view('admin.add.tourForm');
    }

    public function newTourStore() {
        try{  
            if(request('mount')==""||request('country')==""||
            request('hige')==""||
            request('disc')==""||request('way')==""||
            request('start')==""||request('finish')==""||
            request('url')==""){
                return view('admin.add.tourStoreErr');
            }
            else{
                \DB::insert('insert into tours (mountaine, country, hige, level, description, 
                tour_way, meet_place, finish_place, image_url) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?)', [request('mount'),
                request('country'),request('hige'), request('type'),  request('disc'), request('way'), request('start'), 
                request('finish'), request('url')]);
               return view('admin.add.tourStoreGood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.add.tourStoreErr');
        }
    }

    public function newGuide(){
        return view('admin.add.guideForm');
    }

    public function newGuideStore() {
        try{  
            if(request('first_name')==""||request('last_name')==""||request('pos')==""||
            request('disc')==""||request('det')==""||
            request('spec')==""||request('birth')==""||
            request('phone')==""||request('phone')<100000000||request('phone')>999999999||request('mail')==""
            ||request('exp')==""||request('url')==""||request('inst')==""||request('face')==""
            ){
                return view('admin.add.guideStoreErr');
            }
            else{
                \DB::insert('insert into workers (first_name, last_name, posada, description, details, specialization, 
                birth, phone, mail, exp, image_url, instagram, facebook) 
                values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)', [request('first_name'),
                request('last_name'),request('pos'),request('disc'), request('det'),  request('spec'),
                request('birth'), request('phone'),request('mail'),request('exp'), 
                request('url'), request('inst'),request('face')]);
               return view('admin.add.guideStoreGood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.add.guideStoreErr');
        }
    }
    public function newBlog(){
        return view('admin.add.blogForm');
    }

    public function newBlogStore() {
        try{  
            if(request('title')==""||request('url')==""||
            request('disc')==""||request('det')==""){
                return view('admin.add.blogStoreErr');
            }
            else{
                $ldate = date('Y-m-d H:i:s');
                \DB::insert('insert into blogs (title, description, details, image_url) 
                values (?, ?, ?, ?)', [request('title'),
                request('disc'),request('det'),request('url')]);
               return view('admin.add.blogStoreGood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.add.blogStoreErr');
        }
    }

    public function newTrip(){
        $i=worker::where('posada', 'guide')->get();
        $ii=Tour::get();
        return view('admin.add.tripForm', [
            'guides'=>$i, 'tours'=>$ii
        ]);
        
    }

    public function newTripStore() {
        $i=worker::where('posada', 'guide')->get();
        $ii=Tour::get();
        try{  
           
            if(request('trip')==""||request('tour')==""||
            request('guide')==""||request('disc')==""||
            request('start')==""||request('finish')==""
            ||request('price')==""||request('url')==""){
                return view('admin.add.tripStoreErr', [
                    'guides'=>$i, 'tours'=>$ii
                ]);
            }
            else{
                \DB::insert('insert into trips (trip_name, tour_id, guide_id, description, trip_start, trip_end, price, image_url) 
                values (?, ?, ?, ?, ?, ?, ?, ?)', [request('trip'),
                request('tour'),request('guide'),request('disc'),request('start'),request('finish'),request('price'),request('url')]);
               return view('admin.add.tripStoreGood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.add.tripStoreErr', [
                'guides'=>$i, 'tours'=>$ii
            ]);
        }
    }
    public function delTour($id){
        Tour::where('id', $id)->delete();
        $i=Tour::get();
        return view('admin.tours', [
            'tours'=>$i
        ]);    
    }
    public function delBlog($id){
        Blog::where('id', $id)->delete();
        $i=Blog::get();
        return view('admin.blog', [
            'article'=>$i
        ]);    
    }
    public function delGuide($id){
        worker::where('id', $id)->delete();
        $i=worker::get();
        return view('admin.about', [
            'guide'=>$i
        ]);    
    }
    public function delTrip($id){
        trips::where('id', $id)->delete();
        $i=Tour::get();
        return view('admin.tours', [
            'tours'=>$i
        ]);    
    }
    public function hige(){
        $i = Tour::where([
            ['hige', '>=', request('vid')],
            ['hige', '<=', request('do')],
        ])->get();
        return view('admin.tours', [
            'tours'=>$i
        ]);
    }
    public function upBlog($id){
        $atc=blog::where('id', $id)->first();
        return view('admin.update.blog', 
            compact('atc')
        );
    }
    public function upBlogStore($id){
        $atc=blog::where('id', $id)->first();
        try{  
            if(request('title')==""||request('url')==""||
            request('disc')==""||request('det')==""){
                return view('admin.update.blogerr' , 
                compact('atc'));
            }
            else{
                blog::where('id', $id)->update(['title' => request('title'), 'description'=>request('disc'),
                 'details'=>request('det'),'image_url'=> request('url')]);
                $i=blog::get();
                return view('admin.blog', [
                    'article'=>$i
                ]);
            }
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.update.blogerr', compact('atc'));
        }  
    }

    public function upGuide($id){
        $g=worker::where('id', $id)->first();
        return view('admin.update.guide', 
            compact('g')
        );
    }
    public function upGuideStore($id){
        $g=worker::where('id', $id)->first();
        try{  
            if(request('first_name')==""||request('last_name')==""||request('pos')==""||
            request('disc')==""||request('det')==""||request('url')==""){
                return view('admin.update.guideerr' , 
                compact('g'));
            }
            else{
                worker::where('id', $id)->update(['first_name' => request('first_name'), 'posada'=>request('pos'), 'description'=>request('disc'),
                 'details'=>request('det'),'last_name'=> request('last_name'),'image_url'=>request('url')]);
                $i=guide::get();
                return view('admin.about', [
                    'guide'=>$i
                ]);
            }
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.update.guideerr', compact('atc'));
        }  
    }

    public function upTour($id){
        $t=Tour::where('id', $id)->first();
        return view('admin.update.tour', 
            compact('t')
        );
    }
    public function upTourStore($id){
        $t=Tour::where('id', $id)->first();
        try{  
            if(request('mount')==""||request('way')==""||
            request('disc')==""||request('start')==""||request('finish')==""||request('url')==""){
                return view('admin.update.tourerr' , 
                compact('t'));
            }
            else{
                Tour::where('id', $id)->update(['mountaine' => request('mount'), 'description'=>request('disc'),
                 'tour_way'=>request('way'),'meet_place'=> request('start'),'finish_place'=> request('finish'),'image_url'=>request('url')]);
                $i=Tour::get();
                return view('admin.tours', [
                    'tours'=>$i
                ]);
            }
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.update.tourerr', compact('t'));
        }  
    }
    public function upTrip($id){
        $t=trips::where('id', $id)->first();
        $i=worker::where('posada', 'guide')->get();
        $ii=Tour::get();
        return view('admin.update.trip', 
            compact('t'), ['guides'=>$i, 'tours'=>$ii]
        );
    }
    public function upTripStore($id){
        $i=worker::where('posada', 'guide')->get();
        $ii=Tour::get();
        $t=trips::where('id', $id)->first();
        try{  
            if(request('trip')==""||request('tour')==""||
            request('guide')==""||request('start')==""||request('finish')==""||request('url')==""){
                return view('admin.update.triperr' , 
                compact('t'), ['guides'=>$i, 'tours'=>$ii]);
            }
            else{
                trips::where('id', $id)->update(['trip_name' => request('trip'), 'tour_id'=>request('tour'),
                 'guide_id'=>request('guide'),'trip_start'=> request('start'),'trip_end'=> request('finish'),'image_url'=>request('url')]);
                $i=Tour::get();
                return view('admin.tours', [
                    'tours'=>$i
                ]);
            }
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('admin.update.triperr', compact('t'));
        }  
    }
}
//