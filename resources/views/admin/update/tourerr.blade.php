
@extends('adminm')

@section('admin_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Оновити тур</h1>
    
    <form action="{{route('admin.update.tour.store',['id'=>$t->id])}}" method="POST" style="border:1px solid red">
    @csrf
    <p style="font-size:20px; color:red;padding-top:20px">Поля заповнено не коректно</p>
        <p>Ведіть назву гори</p>
        <input value="{{$t->mountaine}}" type="text" name="mount" style="border:1px solid red; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="Mountaine">
        <p>Введіть опис</p>
        <textarea class="form-control" style="border:1px solid red; background:white; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Description">{{$t->description}}</textarea>
        <p>Введіть маршрут</p>
        <textarea class="form-control" style="border:1px solid red; background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" rows="10" name="way" placeholder="Way">{{$t->tour_way}}</textarea>
        <p>Ведіть місце початку</p>
        <input value="{{$t->meet_place}}" type="text" name="start" style="border:1px solid red; width:40%;background:white; border-radius:5px; margin:0 auto; margin-bottom:10px;" placeholder="Start place">
        <p>Введіть місце завершення</p>
        <input value="{{$t->finish_place}}" type="text" name="finish" placeholder="Finish place" style="border:1px solid red;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id=""> 
        <p>Введіть посилання на зображення</p>
        <input value="{{$t->image_url}}" type="text" name="url" placeholder="Image_url" style="border:1px solid red;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p><button type="submit">Додати</button></p>
        
    </form>

</div>

@endsection