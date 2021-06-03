@extends('viewm')
 
@section('title', "Sparrow - шлях до вершин" )

@section('tour_content')
<div id="page-content" style="text-align:center;" class="row h">
    <h1>Вхід</h1>
    <h2>Невірний логін або пароль</h2>
    <form action="{{route('admin.logination')}}" method="POST" style="border:1px solid white">
    @csrf
        <p>Ведіть логін</p>
        <input type="text" name="log" style="border:1px solid red; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="Login">
        <p>Ведіть пароль</p>
        <input type="password" name="pass" style="border:1px solid red; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="Password">
        <p style=" margin-top:30px;"><button type="submit">Ввійти</button></p>
        
    </form>
    <p>Не зареєстровані?<a href="{{route('admin.reg')}}"> Зареєструйтесь</a></p>
</div>
@endsection