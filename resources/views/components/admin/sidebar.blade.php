<nav id="sidebar" class="preload">
    <ul>
        <li>
            <a class="@if (request()->is('admin')) active @endif" href="{{ route('admin.dashboard') }}">
                <img src="{{ asset('img/dashboard.png') }}">
                <span>@lang('app.dashboard')</span>
            </a>
        </li>
        <li>
            <a class="@if (request()->is('admin/users*')) active @endif" href="{{ route('admin.users') }}">
                <img src="{{ asset('img/user.png') }}">
                <span>@lang('app.users')</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category.png') }}">
                <span>@lang('app.categories')</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/product.png') }}">
                <span>@lang('app.products')</span>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/order.png') }}">
                <span>@lang('app.orders')</span>
            </a>
        </li>
    </ul>
</nav>