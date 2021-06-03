<?php

namespace App\Http\Controllers;

use App\Tour;
use App\trips;
use App\blog;
use App\worker;
use App\orders;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        $i=worker::get();
        return view('about', ['guide'=>$i]);
    }
    
    public function blog(){
        $i=blog::get();
        return view('blog', [
            'article'=>$i
        ]);
    }
    public function tours(){
        $i=Tour::get();
        return view('tours', [
            'tours'=>$i
        ]);
    }

    public function tour_view($id){
        $i=Tour::where('id',$id)->get();
        $trips=trips::where('tour_id', $id)->get();
        return view('view.tour', [
            'tour'=>$i, 'trips'=>$trips
        ]);
    }
    public function trip_view($id){
        $trips=trips::where('id', $id)->get();
        return view('view.trip', [
             'trips'=>$trips
        ]);
    }
    public function blog_view($id){
        $i=blog::where('id', $id)->get();
        return view('view.blog_article', [
             'article'=>$i
        ]);
    }

    public function guide_view($id){
        $i=worker::where('id', $id)->get();
        return view('view.guide', [
             'gg'=>$i
        ]);
    }

    public function orderForm($id){
        $i=trips::where('id', $id)->get();
        return view('orderform', [
            'i'=>$i
       ]
             
        );
    }

    public function orderStore($id) {
        try{  
            $i=trips::where('id', $id)->first();
            if(request('name')==""||request('phone')==""||request('phone')<100000000){
                return view('storeerr', compact( 'i')
                   
               );
            }
            else{
                \DB::insert('insert into orders (name, phone, trip_id, date, price) values (?, ?, ?, ?, ?)', [request('name'),
                request('phone'), $i->id, $i->trip_start, $i->price]);
               return view('storegood');
            }
           
        }
        catch (Exception $e) {
            $file="../errors/errors.txt";
            file_put_contents($file, $e->getMessage(), FILE_APPEND | LOCK_EX); 
            return view('storeerr');
        }
    }
    public function HigeLevel(){
        $i=Tour::where('level', 'hard')->get();
        return view('tours', [
            'tours'=>$i
        ]);
    }

    public function MedLevel(){
        $i=Tour::where('level', 'medium')->get();
        return view('tours', [
            'tours'=>$i
        ]);
    }

    public function EasyLevel(){
        $i=Tour::where('level', 'easy')->get();
        return view('tours', [
            'tours'=>$i
        ]);
    }
    public function hige(){
        $i = Tour::where([
            ['hige', '>=', request('vid')],
            ['hige', '<=', request('do')],
        ])->get();
        return view('tours', [
            'tours'=>$i
        ]);
    }
}

