@extends('viewm')
 
@section('title', "Sparrow - шлях до вершин" )

@section('tour_content')
<div id="page-content" style="text-align:center;" class="row h">
    <h1>Вхід</h1>
    <form action="{{route('admin.home')}}" method="POST" style="border:1px solid red">
    @csrf
    <p style="font-size:20px; color:red;padding-top:20px">Пароль не вірний</p>
        <p>Ведіть пароль</p>
        <input type="password" name="pass" style="border:none; background:white; border:1px solid red width:50%;border-radius:5px; margin:0 auto;" placeholder="Password">
        <p style=" margin-top:30px;"><button type="submit">Ввійти</button></p>
        
    </form>
</div>
@endsection