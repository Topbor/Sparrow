@extends('adminaddm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Оновити гіда</h1>

    <form action="{{route('admin.update.guide.store',['id'=>$g->id])}}" method="POST" style="border:1px solid #e1a900">
    @csrf
    
        <p>Ведіть ім'я</p>
        <input value="{{$g->first_name}}" type="text" name="first_name" style="border:1px solid #e1a900; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="First_name">
        <p>Введіть прізвище</p>
        <input value="{{$g->last_name}}" type="text" name="last_name" placeholder="Last_name" style="border:1px solid #e1a900;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть опис</p>
        <textarea class="form-control" style="border:1px solid #e1a900; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Discription">{{$g->description}}</textarea>
        <p>Введіть деталі</p>
        <textarea class="form-control" style="border:1px solid #e1a900; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="det" placeholder="Details">{{$g->details}}</textarea>
        <select class="form-control" size="4" name="pos" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;">
          <option disabled>Посада</option>
          <option selected value="guide">Гід</option>
          <option value="turagent">Турагент</option>
          <option value="turoperator">Туроператер</option>
          <option value="sisadmin">Системний адміністратор</option>
          <option value="derector">Керуючий</option>
        </select>
        <p>Введіть посилання на зображення</p>
        <input value="{{$g->image_url}}" type="text" name="url" placeholder="Image_url" style="border:1px solid #e1a900;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p><button type="submit">Оновити</button></p>
    </form>

</div>

@endsection