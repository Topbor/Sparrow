@extends('adminm')

@section('admin_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Оновити тур</h1>

    <form action="{{route('admin.update.trip.store',['id'=>$t->id])}}" method="POST" style="border:1px solid red">
    @csrf
    <p style="font-size:20px; color:red;padding-top:20px">Поля заповнено не коректно</p>
        <p>Ведіть назву</p>
        <input value="{{$t->trip_name}}" type="text" name="trip" style="border:1px solid red; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="Trip_title">
        <p>Виберіть туp</p>
        <select class="form-control" size="3" name="tour" style="border:1px solid red;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;">
          <option disabled>Тури</option>
          @forelse ($tours as $t)
            <option value="{{$t->id}}">{{$t->mountaine}}</option>
          @empty
              <p>There are no tours for this moment </p>
            @endforelse

        </select>
        <p>Виберіть гіда</p>
        <select class="form-control" size="3" name="guide" style="border:1px solid red;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;">
          <option disabled>Гіди</option>
          @forelse ($guides as $g)
            <option value="{{$g->id}}">{{$g->first_name}} {{$g->last_name}}</option>
          @empty
              <p>There are no tours for this moment </p>
            @endforelse

        </select>
        <p>Ведіть дату початку</p>
        <input  type="date" name="start" style="padding:20px;font-size:15px;border:1px solid red; width:40%;background:white; border-radius:5px; margin:0 auto; margin-bottom:10px;" placeholder="Start date">
        <p>Введіть дату завершення</p>
        <input type="date" name="finish" placeholder="Finish date" style="padding:20px;font-size:15px;border:1px solid red;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id=""> 
        <p>Введіть посилання на зображення</p>
        <input value="{{$t->image_url}}" type="text" name="url" placeholder="Image_url" style="border:1px solid red;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p><button type="submit">Оновити</button></p>
        
    </form>

</div>

@endsection