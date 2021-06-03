@extends('viewm')
 
@section('title', "Sparrow - шлях до вершин" )

@section('tour_content')
<div id="page-content" style="text-align:center;" class="row h">
    <h1>Реєстрація</h1>
    <form action="{{route('admin.registration')}}" method="POST" style="border:1px solid white">
    @csrf
        <p>Ваше ім'я</p>
        <input type="text" name="fn" style="border:none; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="First name">
        <p>Ваше прізвище</p>
        <input type="text" name="ln" style="border:none; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="Last name">
        <p>Ведіть логін</p>
        <input type="text" name="log" style="border:none; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="Login">
        <p>Ведіть пароль</p>
        <input type="password" name="pass" style="border:none; background:white; width:50%;border-radius:5px; margin:0 auto;" placeholder="Password">
        <p style=" margin-top:30px;"><button type="submit">Зареєструватись</button></p>
        
    </form>
    <p>Зареєстровані? <a href="{{route('admin.log')}}">Ввійти</a></p>
</div>
@endsection