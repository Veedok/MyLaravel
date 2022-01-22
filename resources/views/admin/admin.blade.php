@extends('loyouts.mainLayer')
@section('content')
<article class="container basket">
    <div class="header_bascet">
        <span>Product Details</span>
        <span>unite Price</span>
        <span>Quantity</span>
        <span>shipping</span>
        <span>Subtotal</span>
        <span>ACTION</span>
    </div>
    <div class="goods">
        <div class="product_details"><img src="{{asset('img/shopping-cart/rectangle_26_2879.jpg')}}" alt="product-imege">
            <h4>Mango People T-shirt</h4>
            <span class="const">Color:<span class="vari">Red</span></span><br>
            <span class="const">Size:<span class="vari">Xll</span></span>
        </div>
        <div class="unite_price"><span>$150</span></div>
        <div class="quantity"><input type="number" placeholder="2"></div>
        <div class="shipping"><span>FREE</span></div>
        <div class="subtotal"><span>$150</span></div>
        <div class="actoon"><button><i class="fas fa-times-circle"></i></button></div>
    </div>
    <div class="goods">
        <div class="product_details"><img src="{{asset('img/shopping-cart/rectangle_26_2905.jpg')}}" alt="product-imege">
            <h4>Mango People T-shirt</h4>
            <span class="const">Color:<span class="vari">Red</span></span><br>
            <span class="const">Size:<span class="vari">Xll</span></span>
        </div>
        <div class="unite_price"><span>$150</span></div>
        <div class="quantity"><input type="number" placeholder="2"></div>
        <div class="shipping"><span>FREE</span></div>
        <div class="subtotal"><span>$150</span></div>
        <div class="actoon"><button><i class="fas fa-times-circle"></i></button></div>
    </div>
    <div class="goods">
        <div class="product_details"><img src="{{asset('img/shopping-cart/rectangle_26_2920.jpg')}}" alt="product-imege">
            <h4>Mango People T-shirt</h4>
            <span class="const">Color:<span class="vari">Red</span></span><br>
            <span class="const">Size:<span class="vari">Xll</span></span>
        </div>
        <div class="unite_price"><span>$150</span></div>
        <div class="quantity"><input type="number" placeholder="2"></div>
        <div class="shipping"><span>FREE</span></div>
        <div class="subtotal"><span>$150</span></div>
        <div class="actoon"><button><i class="fas fa-times-circle"></i></button></div>
    </div>
    <div class="s_c_button"><button>cLEAR SHOPPING CART</button><button>cONTINUE sHOPPING</button></div>
</article>
<aside class="container s_c_form">
    <div>
        <form class="adress_form" action="#">
            <h4>Shipping Adress</h4>
            <div class="select"><select class="f-points f_p_s">
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                    <option>Bangladesh</option>
                </select></div>
            <input class="f-points" type="text" placeholder="State">
            <input class="f-points" type="number" placeholder="Postcode / Zip">
            <input class="sub_form" type="submit" value="get a quote">
        </form>
    </div>
    <div>
        <form class="cupon_form" action="#">
            <h4>Shipping Adress</h4>
            <h5>Enter your coupon code if you have one</h5>
            <input class="f-points" type="text" placeholder="State">
            <input class="sub_form" type="submit" value="Apply coupon">
        </form>
    </div>
    <div class="total">
        <h6>Sub total<span>$900</span></h6>
        <h4>GRAND TOTAL<span class="total_pink">$900</span></h4>
        <hr>
        <button>proceed to checkout</button>
    </div>
</aside>
@endsection

