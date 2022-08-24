@extends('layouts.app')

@section('main_content')
  <section class="products-list">
    <div class="container">
      <span class="current-series">CURRENT SERIES</span>
      <div class="product-cards-wrapper">
        @foreach ($comics as $comic)
          {{-- Single product --}}
          <div class="product-card">
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
              <h3>{{ $comic['series'] }}</h3>
          </div>
        @endforeach
      </div>
      <div class="center-margin" ><span class="load-more-btn">LOAD MORE</span></div>
    </div>
  </section>
@endsection


@section('cta_content')
  <section class="cta">
    <div class="container">
      <div class="content-cta">
        <img src="{{ asset('images\buy-comics-digital-comics.png') }}" alt="">
        <span>digital comics</span>
      </div>
      <div class="content-cta">
        <img src="{{ asset('images\buy-comics-merchandise.png') }}" alt="">
        <span>dc merchandise</span>
      </div>
      <div class="content-cta">
        <img src="{{ asset('images\buy-comics-subscriptions.png') }}" alt="">
        <span>subscription</span>
      </div>
      <div class="content-cta">
        <img src="{{ asset('images\buy-comics-shop-locator.png') }}" alt="">
        <span>comic shop locator</span>
      </div>
      <div class="content-cta">
        <img src="{{ asset('images\buy-dc-power-visa.svg') }}" alt="">
        <span>dc power visa</span>
      </div>
    </div>
  </section>
@endsection