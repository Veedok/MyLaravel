@extends('loyouts.mainLayer');

@section('content')
    <div class="container all_products">
        <section class="showroom1">
            <article class="product_catalog">
                <h2 class="hidden">All product</h2>

                <a href="/categoryNews/0">
                    <div class="catalog_card">
                        <div class="item_mask item_mask_product">
                            <div class="buy_item">
                                <img src="img/cart.png" alt="">
                                <span>Add to Cart</span>
                            </div>
                        </div>
                        <img src="{{ asset('img/Product/image_placeholder_1657.jpg') }}" alt="">
                        <p class="catalog_price">Категория № 1</p>

                    </div>
                </a>
                <a href="/categoryNews/1">
                    <div class="catalog_card">
                        <div class="item_mask item_mask_product">
                            <div class="buy_item">
                                <img src="img/cart.png" alt="">
                                <span>Add to Cart</span>
                            </div>
                        </div>
                        <img src="{{ asset('img/Product/image_placeholder_1877.png') }}" alt="">
                        <p class="catalog_price">Категория № 2</p>
                    </div>
                </a>
                <a href="/categoryNews/2">
                    <div class="catalog_card">
                        <div class="item_mask item_mask_product">
                            <div class="buy_item">
                                <img src="img/cart.png" alt="">
                                <span>Add to Cart</span>
                            </div>
                        </div>
                        <img src="{{ asset('img/Product/image_placeholder_1907.png') }}" alt="">
                        <p class="catalog_price">Категория № 3</p>
                    </div>
                </a>
                <a href="/categoryNews/3">
                    <div class="catalog_card">
                        <div class="item_mask item_mask_product">
                            <div class="buy_item">
                                <img src="img/cart.png" alt="">
                                <span>Add to Cart</span>
                            </div>
                        </div>
                        <img src="{{ asset('img/Product/image_placeholder_1937.jpg') }}" alt="">
                        <p class="catalog_price">Категория № 4</p>
                    </div>
                </a>
            </article>
            <div class="view_pages">
                <div class="pager">
                    <ul>
                        <li class="pager_number"><a href="#">&lt;</a></li>
                        <li class="pager_number activ_page"><a href="#">1</a></li>
                        <li class="pager_number"><a href="#">2</a></li>
                        <li class="pager_number"><a href="#">3</a></li>
                        <li class="pager_number"><a href="#">4</a></li>
                        <li class="pager_number"><a href="#">5</a></li>
                        <li class="pager_number"><a href="#">6</a></li>
                        <li class="pager_number">.....</li>
                        <li class="pager_number"><a href="#">20</a></li>
                        <li class="pager_number activ_page"><a href="#">&gt;</a></li>
                    </ul>
                </div>
                <button class="view_all">View All</button>
            </div>
        </section>
    </div>
@endsection
