
@extends('adminaddm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Додати новоий допис</h1>

    <form action="{{route('admin.new.blog.store')}}" method="POST" style="border:1px solid red">
    @csrf
    <p style="font-size:20px; color:red;padding-top:20px">Поля заповнено не коректно</p>
        <p>Ведіть назву допису</p>
        <input type="text" name="title" style="border:1px solid red; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="Title">
        <p>Введіть посилання на зображення</p>
        <input type="text" name="url" placeholder="Image_url" style="border:1px solid red;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть опис</p>
        <textarea class="form-control" style="border:1px solid red; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Discription"></textarea>
        <p>Введіть деталі</p>
        <textarea class="form-control" style="border:1px solid red; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="det" placeholder="Details"></textarea>
        <p><button type="submit">Додати</button></p>
        
    </form>

</div>

@endsection