@extends('loyouts.mainLayer')
@section('content')
<form class="adress_form full_description" action="{{ route('admin.myAdmin.update', ['myAdmin' => $news]) }}" method="POST"
    enctype="multipart/form-data">
<section class="single_scroll">
    <label class="f-points lablefromfile" for="file_input">
        <input accept="image/* class=" myinput" id="file_input" type="file" name="image"
            onchange="loadFile(event)">Загрузи что то</label>
    <img id="output" src="{{ asset('storage/' . $news->imgPath) }}"/>
    @error('image')
        <div class="error">{{ $message }}</div>
        @enderror
</section>
<section class="container product_description">
            @csrf
            @method('put')
            <input type="hidden" name="form1" value="{{$referer}}">
        <input class="f-points product_name" type="text" name="title" placeholder="Заголовок" id="title" value="{{ $news->title }}">
        @error('title')
        <div class="error">{{ $message }}</div>
        @enderror
        <input class="f-points" type="text" name="author" placeholder="Автор" id="author"
        value="{{ $news->author }}">
        @error('author')
        <div class="error">{{ $message }}</div>
        @enderror
        <textarea class="f-points" name="desc" id="discription" cols="300" rows="10" placeholder="Новость">{{ $news->desc }}</textarea>
        @error('desc')
        <div class="error">{{ $message }}</div>
        @enderror
        <select class="f-points cat" name="categories[]" id="categories" multiple>
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}" @if (in_array($cat->id, $selected))
                    selected
            @endif
            >{{ $cat->catigory }}</option>
            @endforeach
        </select>
        <input class="sub_form" type="submit" value="Опубликовать">
        </div>

</section>
</form>
@endsection
