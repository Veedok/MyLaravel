@extends('loyouts.mainLayer')
@section('content')
<div class="container">
    <table class="myTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Admin?</th>
                <th>avatar</th>
                <th>Email</th>
                <th>Name</th>
                <th>Действие</th>

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
                    <th>@if ($value->avatar)
                        <img src="{{$value->avatar}}" alt="">
                    @endif</th>
                    <th>{{ $value->email }}</th>
                    <th>{{ $value->name }}</th>
                    <th>
                        <a class="redact" href="{{ route('admin.user.edit', ['user' => $value]) }}">Статус админа вкл/выкл</a>
                        {{-- <a href="javascript:" id="222" class="destroy redact" rel="{{ $value->id }}">Удалить</a> --}}
                    </th>
                </tr>
            @empty
            @endforelse
        </tbody>
    </table>
</div>
@endsection
