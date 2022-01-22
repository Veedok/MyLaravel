@extends('loyouts.mainLayer')
@section('content')
<aside class="container s_c_form">
    <div>
        <form class="adress_form" action='{{route('admin.myAdmin.store')}}' method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Shipping Adress</h4>
            <input class="f-points" type="text" name="title" placeholder="Заголовок" id="title" value="{{old('title')}}">
            <textarea class="f-points" name="desc" id="discription" cols="30" rows="10" placeholder="Новость" value="{{old('desc')}}"></textarea>
            <input class="f-points" type="text" name="author" placeholder="Автор" id="author" value="{{old('author')}}">
            <label class="f-points lablefromfile" for="file_input"><input class="myinput" id="file_input"  type="file" name="image">Загрузи что то</label>
            <input class="sub_form" type="submit" value="Опобликовать" >
            {{-- <label class="lable_checkbox">
                <input type="checkbox" name="myCheck" id="1">
                <span>Галочка</span>
                </label>
            <input class="f-points" type="number" placeholder="Postcode / Zip"> --}}
        </form>
    </div>
    <div>
        <form class="cupon_form" action="{{route('admin.myAdmin.store')}}" method="POST">
            @csrf
            <h4>Shipping Adress</h4>
            <input class="f-points" type="text" placeholder="Your Name" name="name">
            <input class="f-points" type="tel" name="tel" id="phone" placeholder="Your phone">
            <input class="f-points" type="email" name="email" id="mail" placeholder="Your Email">
            <div class="select">
                <select class="f-points f_p_s" id="city" name="info" placeholder="ggg">
                    <option>Количество Авторов</option>
                    <option>Количество статей</option>
                    <option>Статей в каждой теме</option>
                    <option selected>Ничего не выбрано</option>

                </select>
            </div>
            <input class="sub_form" type="submit" value="Apply coupon">
        </form>
    </div>

</aside>
@isset($path)
<img src="{{ asset('/storage/' . $path)}}" alt="#">
@endisset
@endsection

