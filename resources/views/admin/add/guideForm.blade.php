@extends('adminvievsm')

@section('adm_view_content')

<div id="page-content" style="text-align:center;" class="row h">
    <h1>Додати нового гіда</h1>

    <form action="{{route('admin.new.guide.store')}}" method="POST" style="border:1px solid white">
    @csrf
        <p>Ведіть ім'я</p>
        <input type="text" name="first_name" style="border:none; background:white; border-radius:5px; width:40%; margin:0 auto; margin-bottom:10px;" placeholder="First_name">
        <p>Введіть прізвище</p>
        <input type="text" name="last_name" placeholder="Last_name" style="border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <select class="form-control" size="4" name="pos" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;">
          <option disabled>Посада</option>
          <option selected value="guide">Гід</option>
          <option value="turagent">Турагент</option>
          <option value="turoperator">Туроператер</option>
          <option value="sisadmin">Системний адміністратор</option>
          <option value="derector">Керуючий</option>
        </select>
        <p>Введіть опис</p>
        <textarea class="form-control" style="border:none; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="disc" placeholder="Discription"></textarea>
        <p>Введіть деталі</p>
        <textarea class="form-control" style="border:none; width:40%; border-radius:5px;  margin:0 auto;  margin-bottom:10px;" rows="10" name="det" placeholder="Details"></textarea>
        <p>Введіть спеціалізацію</p>
        <input type="text" name="spec" placeholder="Specialization" style="border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть дату народження</p>
        <input type="date" name="birth" placeholder="Birth" style="padding:20px;font-size:15px;color:#647373;border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть номер телефону</p>
        +380 <input type="number" name="phone" placeholder="Phone" style="padding:20px;font-size:15px;color:#647373;border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть E-mail</p>
        <input type="mail" name="mail" placeholder="E-mail" style="padding:20px;font-size:15px;color:#647373;border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Введіть досвід</p>
        <input type="number" name="exp" placeholder="Experience" style="padding:20px;font-size:15px;color:#647373;border:none;background:white; width:40%; border-radius:5px; margin:0 auto;  margin-bottom:10px;" id=""> 
        <p>Ведіть посилання на фото</p>
        <input type="text" name="url" style="border:none; width:40%;background:white; border-radius:5px; margin:0 auto; margin-bottom:10px;" placeholder="Image_url">
        <p>Введіть посилання на Instagram</p>
        <input type="text" name="inst" placeholder="Instagram" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id=""> 
        <p>Введіть посилання на Facebook</p>
        <input type="text" name="face" placeholder="Facebook" style="border:none;background:white; width:40%; margin:0 auto; border-radius:5px;  margin-bottom:10px;" id="">
        <p><button type="submit">Додати</button></p>
        
    </form>

</div>

@endsection