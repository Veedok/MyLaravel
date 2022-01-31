@extends('loyouts.mainLayer')
@section('content')

    <aside class="container s_c_form">

        <div class="total">
            <a href="/admin/myAdmin/create">Добавить Новость</a>
        </div>
    </aside>
    <div class="container">
        <table class="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>IMG</th>
                    <th>Заглушка</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($news as $key => $value )
                    <tr>
                        <th>{{ $value->id }}</th>
                        <th>{{ $value->title }}</th>
                        <th><img src="{{ asset('storage/' . $value->imgPath) }}" alt=""></th>
                        <th class="right_text"><a class="redact"
                                href="{{ route('admin.myAdmin.edit', ['myAdmin' => $value]) }}">Редактировать</a><a
                                class="redact"
                                href="{{ route('admin.myAdmin.edit', ['myAdmin' => $value]) }}">Удалить</a></th>
                    </tr>
                @empty

                @endforelse
            </tbody>
        </table>
        {{$news->links('components.pagination')}}
    </div>
@endsection
