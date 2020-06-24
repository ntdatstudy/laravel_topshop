@extends('layouts.app')

@push('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
<div class="banner-sale-off">
    <img class="img-sale-off" src="{{ asset('img/json-0000156327_TS-WK43-WED-HERO-LOCK-UP-DESK-UKpng.png') }}">
    <div class="container py-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-2 offset-sm-2 col-sm-4">
                <a class="type" href="#">@lang('app.shop_all')</a>
            </div>
            <div class="col-lg-2 col-sm-4">
                <a class="type" href="#">@lang('app.tops')</a>
            </div>
            <div class="col-lg-2 col-sm-4">
                <a class="type" href="#">@lang('app.dresses')</a>
            </div>
            <div class="col-lg-2 col-sm-4">
                <a class="type" href="#">@lang('app.shoes')</a>
            </div>
            <div class="col-lg-2 col-sm-4">
                <a class="type" href="#">@lang('app.skirts')</a>
            </div>
        </div>
    </div>
    <b>@lang('app.selected_styles')</b>
</div>
@endsection