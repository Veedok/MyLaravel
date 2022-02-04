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
                    <th>Cat</th>
                    <th>Заглушка</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($news as $key => $value )
                    <tr>
                        <th>{{ $value->id }}</th>
                        <th>{{ $value->title }}</th>
                        <th><img src="{{ asset('storage/' . $value->imgPath) }}" alt=""></th>
                        <th>
                            @foreach ($value->categoriNews as $cat)
                                <p>{{ $cat->catigory }}</p>
                            @endforeach
                        </th>
                        <th>
                            <a class="redact" href="{{ route('admin.myAdmin.edit', ['myAdmin' => $value]) }}">Редактировать</a>
                            <a href="javascript:" id="222" class="destroy redact" rel="{{ $value->id }}">Удалить</a>
                        </th>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $news->links('components.pagination') }}
    </div>
    @push('js')
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                let element1 = document.querySelectorAll('.destroy');
                element1.forEach(function(el, key) {
                    el.addEventListener('click', function() {
                        const id = this.getAttribute('rel');
                        if (confirm('Удалить запись с № ' + id + ' ?')) {
                            destroyEl('myAdmin/' + id).then(() => {
                                location.reload();
                                alert('Елемент ' + id + ' удален');
                            })
                        }
                    })
                });
            });
            async function destroyEl(url) {
                let response = await fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                let res = await response.json();
                return res.ok;
            }
        </script>
    @endpush

@endsection
