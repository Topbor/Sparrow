@extends('adminvievsm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Додати новий тур</h1>

    <form action="{{route('admin.new.tour.store')}}" method="POST" style="border:1px solid white">
    @csrf
        <p>Ведіть назву гори</p>
        <input type="text" name="mount" style="border:none; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="Mountaine">
        <p>Введіть назву країни</p>
        <input type="text" name="country" placeholder="Country" style="border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть висоту</p>
        <input type="number" name="hige" placeholder="Hige" style="padding:20px;font-size:15px;color:#647373;border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Виберіть складність</p>
        <select class="form-control" size="4" name="type" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;">
          <option disabled>Складність</option>
          <option selected value="hard">Hard</option>
          <option value="medium">Medium</option>
          <option value="easy">Easy</option>
        </select>
        <p>Введіть опис</p>
        <textarea class="form-control" style="border:none; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Discription"></textarea>
        <p>Введіть маршрут</p>
        <textarea class="form-control" style="border:none; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" rows="10" name="way" placeholder="Way"></textarea>
        <p>Ведіть місце початку</p>
        <input type="text" name="start" style="border:none; width:40%;background:white; border-radius:5px; margin:0 auto; margin-bottom:10px;" placeholder="Start place">
        <p>Введіть місце завершення</p>
        <input type="text" name="finish" placeholder="Finish place" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id=""> 
        <p>Введіть посилання на зображення</p>
        <input type="text" name="url" placeholder="Image url" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id="">
        <p><button type="submit">Додати</button></p>
        
    </form>

</div>

@endsection