@extends('adminaddm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
<h1>Додавання нового допису</h1>
    <div style="border:1px solid green; border-radius:10px">
        
        <p style="color:#0b6100; font-size:24px; padding:20px;">Допис успішно Додано</p>
        <p><a href="{{route('admin.home')}}">Повернутися на головну</a></p> 
    </div>
</div>

@endsection