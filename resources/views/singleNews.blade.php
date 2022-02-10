@extends('loyouts.mainLayer')
@section('content')
    <div class="single_news">
        <img class="img_card" src="{{ asset('storage/' . $news->imgPath) }}" alt="">
        <div class="text_single_news">
            <p class="catalog_text">{{ $news->title }}</p>
            <p class="catalog_price"> {{ $news->author }}</p>
            <div class="catalog_text_desc1">{{ $news->desc }}</div>
        </div>
    </div>
    
@endsection
