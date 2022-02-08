@extends('loyouts.mainLayer')
@section('content')
    <aside class="container s_c_form">
        <div class="total">
            <a href="/admin/cat/create">Новая категория</a>
        </div>
    </aside>
    <div class="container">
        <table class="myTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Заглушка</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($cat as $catigory)
                    <tr>
                        <th>{{ $catigory->id }}</th>
                        <th>{{ $catigory->catigory }}</th>
                        <th class="right_text">
                            <a class="redactCat" href="{{ route('admin.cat.edit', ['cat' => $catigory]) }}">Редактировать</a>
                            <a href="javascript:" id="222" class="destroy redact" rel="{{ $catigory->id }}">Удалить</a></th>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
        {{ $cat->links('components.pagination') }}
    @endsection
    @push('js')
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                let element1 = document.querySelectorAll('.destroy');
                element1.forEach(function(el, key) {
                    el.addEventListener('click', function() {
                        const id = this.getAttribute('rel');
                        if (confirm('Удалить запись с № ' + id + ' ?')) {
                            destroyEl('cat/' + id).then(() => {
                                location.reload();
                                alert('Елемент ' + id +' удален');
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
