<!DOCTYPE html>
<html>
    <head>
        <title>Pomelo Cookies | Cart</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="{{ asset('assets/cart/cart.css') }}" />
        <script src="{{ asset('assets/cart/cart.js') }}" async></script>
    </head>
    <body>
        <section class="container content-section">
            <h2 class="section-header">ITEM</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Ketan Hitam</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/ketan.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 55.000</span>&nbsp;
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Kue Keju</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/keju.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 63.000</span>&nbsp;
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Brownies Coklat</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/bronis.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 47.000</span>&nbsp;
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Nastar</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/nastar.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 30.000</span>&nbsp;
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Putri Salju</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/putrisalju.jpg') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 35.000</span>&nbsp;
                        
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Kastangel</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/kastengel.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 32.000</span>&nbsp;
                        
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Sagu Keju</span>
                    <img class="shop-item-image" src="{{ asset('assets/cart/kue/sagu.png') }}">
                    <div class="shop-item-details">
                        <span class="shop-item-price">Rp. 32.000</span>&nbsp;
                        
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">Rp. 0</span>
            </div>
            <a href="/cart/order-tracking"><button class="btn btn-primary btn-purchase" type="button">PURCHASE</button></a>
        </section>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">Pomelo Cookies</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://play.google.com" target="_blank">
                            <img src="{{ asset('assets/cart/Images/googleplay.png') }}">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="{{ asset('assets/cart/Images/fb.svg') }}">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com" target="_blank">
                            <img src="{{ asset('assets/cart/Images/ig.png') }}">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
    </body>
</html>