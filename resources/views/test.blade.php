@extends('loyouts.mainLayer')
@section('content')
@dump($allusers)
<div class="container">
    <table class="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>IMG</th>
                <th>Cat</th>
                <th>Заглушка</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($allusers as $key => $value )
                <tr>
                    <th>{{ $value->id }}</th>
                    <th>              @if ($value->admin)
                        <p>yes</p>
                        @else
                        <p>no</p>
                        @endif
                    </th>
                    <th>{{ $value->email }}</th>
                    <th>{{ $value->name }}</th>
                    <th>
                        <a class="redact" href="{{ route('admin.user.edit', ['User' => $value]) }}">Редактировать</a>
                        <a href="javascript:" id="222" class="destroy redact" rel="{{ $value->id }}">Удалить</a>
                    </th>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
@endsection
