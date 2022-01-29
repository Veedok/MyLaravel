<div>
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>img</th>
        </tr>
    </thead>
    <tbody>
@forelse ($news as $key => $value )

<tr>
<th>{{$value->id}}</th>
            <th>{{$value->title}}</th>
            <th>{{$value->desc}}</th>
            <th>{{$value->imgPath}}</th>
        </tr>
@empty

@endforelse
</tbody>
</table>
</div>
