@extends('loyouts.mainLayer')
@section('content')

    <aside class="container s_c_form">
        <div>
            <form class="adress_form" action="{{ route('admin.myAdmin.update', ['myAdmin' => $news]) }}" method="POST"
                enctype="multipart/form-data">
                {{-- @dump($news) --}}
                @csrf
                @method('put')
                <h4>Shipping Adress</h4>
                <input type="hidden" name="form1" value="1">
                <input class="f-points" type="text" name="title" placeholder="Заголовок" id="title"
                    value="{{ $news->title }}">
                <textarea class="f-points" name="desc" id="discription" cols="30" rows="10"
                    placeholder="Новость">{{ $news->desc }}</textarea>
                <input class="f-points" type="text" name="author" placeholder="Автор" id="author"
                    value="{{ $news->author }}">
                <label class="f-points lablefromfile" for="file_input">
                    <input accept="image/* class=" myinput" id="file_input" type="file" name="image"
                        onchange="loadFile(event)">Загрузи что то</label>
                <img id="output" src="{{ asset('storage/' . $news->imgPath) }}"/>
                <select class="f-points cat" name="categories[]" id="categories" multiple>

                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @if (in_array($cat->id, $selected))
                            selected
                    @endif
                    >{{ $cat->catigory }}</option>
                    @endforeach
                </select>
                <input class="sub_form" type="submit" value="Опубликовать">


                <script>

                </script>

            </form>
        </div>


    </aside>
@endsection
