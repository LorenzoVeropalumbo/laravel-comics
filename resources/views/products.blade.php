@extends('layouts.app')

@section('main_content')
  <section class="products-list">
    <div class="container">
      <div class="product-cards-wrapper">
        @foreach ($comics as $comic)
          {{-- Single product --}}
          <div class="product-card">
              <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
              <h3>{{ $comic['title'] }}</h3>
          </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection