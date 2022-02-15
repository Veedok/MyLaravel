@extends('loyouts.mainLayer')
@section('content')

    <form class="adress_form full_description" action="{{ route('admin.myAdmin.store') }}" method="POST"
        enctype="multipart/form-data">
        <section class="single_scroll">
            <label class="f-points lablefromfile" for="file_input"><input accept="image/*" class="myinput"
                    id="file_input" type="file" name="image" onchange="loadFile(event)">Загрузи что то</label>
            <img id="output" src="{{ asset('storage/') }}" />
            @error('image')
                <div class="error">{{ $message }}</div>
            @enderror
        </section>
        <section class="container product_description">
            @csrf
            <input class="f-points product_name" type="text" name="title" placeholder="Заголовок" id="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
            <input class="f-points" type="text" name="author" placeholder="Автор" id="author"
                value="{{ old('author') }}">
            @error('author')
                <div class="error">{{ $message }}</div>
            @enderror
            <textarea class="f-points editor" name="desc" id="discription" cols="300" rows="10"
                placeholder="Новость">{{ old('desc') }}</textarea>
            @error('desc')
                <div class="error">{{ $message }}</div>
            @enderror
            <select class="f-points cat" name="categories[]" id="categories" multiple>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->catigory }}</option>
                @endforeach
            </select>
            <input class="sub_form" type="submit" value="Опубликовать">
            </div>

        </section>
    </form>
@endsection

{{-- @extends('loyouts.mainLayer')
@section('content')
<aside class="container s_c_form">
    <div>
        <form class="adress_form" action='{{route('admin.myAdmin.store')}}' method="POST" enctype="multipart/form-data">
            @csrf
            <h4>Shipping Adress</h4>
            <input type="hidden" name="form1" value="1">
            <input class="f-points" type="text" name="title" placeholder="Заголовок" id="title" value="{{old('title')}}">
            <textarea class="f-points" name="desc" id="discription" cols="30" rows="10" placeholder="Новость" value="{{old('desc')}}"></textarea>
            <input class="f-points" type="text" name="author" placeholder="Автор" id="author" value="{{old('author')}}">
            <label class="f-points lablefromfile" for="file_input">
                <input accept="image/* class="myinput" id="file_input" type="file" name="image"
                    onchange="loadFile(event)">Загрузи что то</label>
            <img id="output"/>
            <select class="f-points cat" name="categories[]" id="categories" multiple>
                @foreach ($categories as $cat)
<option value="{{$cat->id}}">{{$cat->catigory}}</option>
                @endforeach
            </select>
            <input class="sub_form" type="submit" value="Опубликовать" >

        </form>
    </div>
    <div>
        <form class="cupon_form" action="{{route('admin.myAdmin.store')}}" method="POST">
            @csrf
            <h4>Shipping Adress</h4>
            <input type="hidden" name="form2" value="1">
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
@endsection --}}
@push('js')
<script>
    tinymce.init({
      selector: '.editor',

    //   inline: true,
    });
  </script>
@endpush
