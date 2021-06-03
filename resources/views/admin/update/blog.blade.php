
@extends('adminaddm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Оновити допис</h1>
    
    <form action="{{route('admin.update.blog.store', ['id' => $atc->id])}}" method="POST" style="border:1px solid #e1a900">
    @csrf
        <p>Ведіть назву допису</p>
        <input value="{{$atc->title}}" type="text" name="title" style="border:1px solid #e1a900; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="Title">
        <p>Введіть посилання на зображення</p>
        <input value="{{$atc->image_url}}" type="text" name="url" placeholder="Image_url" style="border:1px solid #e1a900;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть опис</p>
        <textarea  class="form-control" style="border:1px solid #e1a900; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Discription">{{$atc->description}}</textarea>
        <p>Введіть деталі</p>
        <textarea  class="form-control" style="border:1px solid #e1a900; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="det" placeholder="Details">{{$atc->details}}</textarea>
        <p><button type="submit">Оновити</button></p>
        
    </form>

</div>

@endsection