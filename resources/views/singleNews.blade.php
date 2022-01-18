@extends('loyouts.mainLayer')
@section('content')
<div class="single_news">



        @if ($news['id_category']==0)
            <img src="{{asset('img/Product/image_placeholder_1657.jpg')}}" alt="">
        @elseif ($news['id_category']==1)
            <img src="{{asset('img/Product/image_placeholder_1877.png')}}" alt="">
        @elseif ($news['id_category']==2)
            <img src="{{asset('img/Product/image_placeholder_1907.png')}}" alt="">
        @elseif ($news['id_category']==3)
            <img src="{{asset('img/Product/image_placeholder_1937.jpg')}}" alt="">
        @endif
<div class="text_single_news">
    <p class="catalog_text">{{$news['title']}}</p>

    <p class="catalog_price"> {{$news['author']}}</p>
    <div class="catalog_text_desc1">{{$news['disc']}}</div></div>
</div>
@endsection
