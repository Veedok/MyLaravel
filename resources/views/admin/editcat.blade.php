@extends('loyouts.mainLayer')
@section('content')

<form class="adress_form full_description" action="{{ route('admin.cat.update', ['cat' => $cat]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" name="form1" value="{{$r}}">
            <input class="f-points product_name" type="text" name="catigory" placeholder="Новая категория" id="cat" value="{{ $cat->catigory }}">
        <input class="sub_form" type="submit" value="Добавить">
</section>
</form>
@endsection
