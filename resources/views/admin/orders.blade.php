@extends('adminm')
 
@section('title', "Sparrow | Orders" )

@section('admin_content')

<table style="padding:20px; margin:0 auto; margin-top:40px; margin-bottom:50px; width:90%;">
     <thead>
            <tr>
                <td>ID</td>
                <td>Ім'я замовника</td>
                <td>Номер телефону</td>
                <td>Подорож</td>
                <td>Дата початку</td>
                <td>Ціна</td>
            </tr>
     </thead>
           @forelse($orders as $o)
            <tr>
                <td>{{$o->id}} </td>
                <td>{{$o->name}} </td>
                <td>+380{{$o->phone}}</td>
                <td><a href="{{route('admin.trip.view', $o->trip_id)}}">{{$o->getTrip()->trip_name}}</a></td>
                <td>{{$o->date}}</td>
                <td>{{$o->price}} $</td>
            </tr>
           @empty
                <p></p>
           @endforelse
</table>

@endsection