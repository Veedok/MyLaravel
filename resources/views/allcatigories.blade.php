@extends('loyouts.mainLayer');
@section('content')
    <div class="container all_products">
        <section class="showroom1">
            <article class="product_catalog">
                <h2 class="hidden">All product</h2>
                {{-- @dump($allcat) --}}
                @foreach ($allcat as $cat)
                    <a href="/categoryNews/{{$cat->id}}">
                        <div class="catalog_card">
                            <div class="item_mask item_mask_product">
                                <div class="buy_item">
                                    <img src="img/cart.png" alt="">
                                    <span>Add to Cart</span>
                                </div>
                            </div>
                            <img src="{{ asset('img/Product/image_placeholder_1657.jpg') }}" alt="">
                            <p class="catalog_price">{{$cat->catigory}}</p>

                        </div>
                    </a>
                @endforeach
            </article>
            {{ $allcat->links('components.pagination') }}
        </section>
    </div>
@endsection
