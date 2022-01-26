@extends('loyouts.mainLayer')
@section('content')
<div class="container all_products">
    <aside class="choice_menu">
        <details class="choise_menu">
            <summary class="your_choice">Category</summary>
            <ul>
                <li><a class="choice_menu_a" href="#">Accessories</a></li>
                <li><a class="choice_menu_a" href="#">Bags</a></li>
                <li><a class="choice_menu_a" href="#">Denim</a></li>
                <li><a class="choice_menu_a" href="#">Hoodies &amp; Sweatshirts</a></li>
                <li><a class="choice_menu_a" href="#">Jackets &amp; Coats</a></li>
                <li><a class="choice_menu_a" href="#">Pants</a></li>
                <li><a class="choice_menu_a" href="#">Polos</a></li>
                <li><a class="choice_menu_a" href="#">Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Shoes</a></li>
                <li><a class="choice_menu_a" href="#">Shorts</a></li>
                <li><a class="choice_menu_a" href="#">Sweaters &amp; Knits</a></li>
                <li><a class="choice_menu_a" href="#">T-Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Tanks</a></li>
            </ul>

        </details>
        <details class="choise_menu">
            <summary class="your_choice">BRAND</summary>
            <ul>
                <li><a class="choice_menu_a" href="#">Accessories</a></li>
                <li><a class="choice_menu_a" href="#">Bags</a></li>
                <li><a class="choice_menu_a" href="#">Denim</a></li>
                <li><a class="choice_menu_a" href="#">Hoodies &amp; Sweatshirts</a></li>
                <li><a class="choice_menu_a" href="#">Jackets &amp; Coats</a></li>
                <li><a class="choice_menu_a" href="#">Pants</a></li>
                <li><a class="choice_menu_a" href="#">Polos</a></li>
                <li><a class="choice_menu_a" href="#">Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Shoes</a></li>
                <li><a class="choice_menu_a" href="#">Shorts</a></li>
                <li><a class="choice_menu_a" href="#">Sweaters &amp; Knits</a></li>
                <li><a class="choice_menu_a" href="#">T-Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Tanks</a></li>
            </ul>

        </details>
        <details class="choise_menu">
            <summary class="your_choice">DESIGNER</summary>
            <ul>
                <li><a class="choice_menu_a" href="#">Accessories</a></li>
                <li><a class="choice_menu_a" href="#">Bags</a></li>
                <li><a class="choice_menu_a" href="#">Denim</a></li>
                <li><a class="choice_menu_a" href="#">Hoodies &amp; Sweatshirts</a></li>
                <li><a class="choice_menu_a" href="#">Jackets &amp; Coats</a></li>
                <li><a class="choice_menu_a" href="#">Pants</a></li>
                <li><a class="choice_menu_a" href="#">Polos</a></li>
                <li><a class="choice_menu_a" href="#">Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Shoes</a></li>
                <li><a class="choice_menu_a" href="#">Shorts</a></li>
                <li><a class="choice_menu_a" href="#">Sweaters &amp; Knits</a></li>
                <li><a class="choice_menu_a" href="#">T-Shirts</a></li>
                <li><a class="choice_menu_a" href="#">Tanks</a></li>
            </ul>

        </details>
    </aside>
    <section class="showroom">
        <article class="product_catalog">
            <h2 class="hidden">All product</h2>

            @forelse($new as $key => $value)

            <a href="/singleNews/{{$value->id}}">
                <div class="catalog_card">
                    <div class="item_mask item_mask_product">
                            <div class="buy_item">
                                <img src="img/cart.png" alt="">
                            <span>Add to Cart</span></div>
                        </div>
                        @if ($value->id%4 ==0)
                            <img src="img/Product/image_placeholder_1657.jpg" alt="">
                        @elseif ($value->id%4 ==1)
                            <img src="img/Product/image_placeholder_1877.png" alt="">
                        @elseif ($value->id%4 ==2)
                            <img src="img/Product/image_placeholder_1907.png" alt="">
                        @elseif ($value->id%4 ==3)
                            <img src="img/Product/image_placeholder_1937.jpg" alt="">
                        @endif

                    <p class="catalog_text">{{$value->title}}</p>

                    <p class="catalog_price"> {{$value->author}}</p>
                    <div class="catalog_text_desc">{{$value->desc}}</div>
                </div>
            </a>

            @empty
            <div>Запесей нет</div>
            @endforelse



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





