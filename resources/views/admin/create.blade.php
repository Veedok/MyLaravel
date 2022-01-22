@extends('loyouts.mainLayer')
@section('content')
<aside class="container s_c_form">
    <div>
        <form class="adress_form" action='{{route('admin.myAdmin.store')}}' method="POST">
            @csrf
            <h4>Shipping Adress</h4>
            <input class="f-points" type="text" name="title" placeholder="Заголовок" id="title">
            <textarea class="f-points" name="desc" id="discription" cols="30" rows="10" placeholder="Новость"></textarea>
            <input class="f-points" type="text" name="author" placeholder="Автор" id="author">
            <input type="checkbox" name="myCheck" id="1">
            <input class="sub_form" type="submit" value="Опобликовать" >
            {{-- <div class="select"><select class="f-points f_p_s" id="city">
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                </select></div>
            <input class="f-points" type="number" placeholder="Postcode / Zip"> --}}
        </form>
    </div>
    <div>
        <form class="cupon_form" action="#">
            <h4>Shipping Adress</h4>
            <h5>Enter your coupon code if you have one</h5>
            <input class="f-points" type="text" placeholder="State">
            <input class="sub_form" type="submit" value="Apply coupon">
        </form>
    </div>

</aside>
@endsection

