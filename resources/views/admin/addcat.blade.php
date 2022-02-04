@extends('loyouts.mainLayer')
@section('content')

<form class="adress_form full_description" action="{{ route('admin.cat.store') }}" method="POST"
    enctype="multipart/form-data">
            @csrf
            <input class="f-points product_name" type="text" name="catigory" placeholder="Новая категория" id="catigory" value="{{old('catigory')}}">
        <input class="sub_form" type="submit" value="Добавить">
</section>
</form>
@endsection
