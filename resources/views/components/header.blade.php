<header id="header">
    <section class="header__banner">
        <div class="container">
            <div class="big-banner">
                <div class="row">
                    <div class="col-6 text-center banner">
                        <a href="#">
                            <b>@lang('app.online_and_in_store')</b>
                            <b>@lang('app.sale_up_to', ['number' => 60])</b>
                            <small>@lang('app.selected_styles')</small>
                        </a>
                    </div>
                    <div class="col-6 text-center banner">
                        <a href="#">
                            <b>@lang('app.free_standard_delivery')</b>
                            <b>@lang('app.on_orders_over', ['number' => 30])</b>
                            <u>@lang('app.shop_now')</u>
                        </a>
                    </div>
                </div>
            </div>
            <div class="banner-carousel">
                <div id="header__banner-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="col-12 text-center banner">
                                <a href="#">
                                    <b>@lang('app.online_and_in_store')</b>
                                    <b>@lang('app.sale_up_to', ['number' => 60])</b>
                                    <small>@lang('app.selected_styles')</small>
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="col-12 text-center banner">
                                <a href="#">
                                    <b>@lang('app.free_standard_delivery')</b>
                                    <b>@lang('app.on_orders_over', ['number' => 30])</b>
                                    <u>@lang('app.shop_now')</u>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="header__nav">
        <div class="content">
            <div class="container-fluid container-content">
                <button id="btn-open-menu" class="btn-menu">
                    <img src="{{ asset('img/menu.png') }}">
                </button>
                <form>
                    <input placeholder="@lang('app.search')">
                    <button><span class="topshop-icon__search"></span></button>
                </form>
                <a class="link-account" href="{{ route('login') }}">
                    <span class="topshop-icon__account"></span>
                </a>
                <button class="btn-flag">
                    <span>@lang('app.denomination_symbol')</span>
                    <span class="flag-icon__uk"></span>
                </button>
                <a class="link-wishlist" href="#">
                    <span class="topshop-icon__wishlist"></span>
                </a>
                <button class="btn-flag">
                    <span class="topshop-icon__cart"></span>
                </button>
            </div>
        </div>
        <nav class="nav">
            <div class="container-fluid nav__container">
                <a class="logo" href="/"><img src="{{ asset('img/logo.svg') }}"></a>
                <button id="btn-close-menu" class="btn-close">
                    <img src="{{ asset('img/close.png') }}">
                </button>
                <ul class="nav-list">
                    <li>
                        <a href="#">New In</a>
                        <div class="nav-list__subnav">
                            <div class="dropdown">
                                <ul>
                                    <li><a href="#">New In Fashion</a></li>
                                    <li><a href="#">New In Dresses</a></li>
                                    <li><a href="#">New In Shoes</a></li>
                                    <li><a href="#">New In Bags & Accessories</a></li>
                                    <li><a href="#">New In Lingerie & Nightwear</a></li>
                                    <li><a href="#">New In Brands</a></li>
                                    <li><a href="#">New In Botique</a></li>
                                    <li><a href="#">Swim Shop</a></li>
                                </ul>
                                <img src="{{ asset('img/categories/new_in/json-0000139861_WK41-NEW-IN-UKjpg.jpg') }}">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Clothing</a>
                        <div class="nav-list__subnav">
                            <div class="dropdown">
                                <ul>
                                    <li><a href="#">New In Fashion</a></li>
                                    <li><a href="#">New In Dresses</a></li>
                                    <li><a href="#">New In Shoes</a></li>
                                    <li><a href="#">New In Bags & Accessories</a></li>
                                    <li><a href="#">New In Lingerie & Nightwear</a></li>
                                    <li><a href="#">New In Brands</a></li>
                                    <li><a href="#">New In Botique</a></li>
                                    <li><a href="#">Swim Shop</a></li>
                                </ul>
                                <img src="{{ asset('img/categories/new_in/json-0000139861_WK41-NEW-IN-UKjpg.jpg') }}">
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">Stay At Home</a>
                        <div class="nav-list__subnav">
                            <div class="dropdown">
                                <ul>
                                    <li><a href="#">New In Fashion</a></li>
                                    <li><a href="#">New In Dresses</a></li>
                                    <li><a href="#">New In Shoes</a></li>
                                    <li><a href="#">New In Bags & Accessories</a></li>
                                    <li><a href="#">New In Lingerie & Nightwear</a></li>
                                    <li><a href="#">New In Brands</a></li>
                                    <li><a href="#">New In Botique</a></li>
                                    <li><a href="#">Swim Shop</a></li>
                                </ul>
                                <img src="{{ asset('img/categories/new_in/json-0000139861_WK41-NEW-IN-UKjpg.jpg') }}">
                            </div>
                        </div>
                    </li>
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Jeans</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Bags & Accessories</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Sale</a></li>
                </ul>
            </div>
        </nav>
    </section>
</header>