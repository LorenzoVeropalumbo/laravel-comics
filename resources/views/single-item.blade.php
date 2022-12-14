@extends('layouts.app')


@section('main_content')
  <section class="product-item">
    <div class="item-image-box">
      <div class="comics-container">
        <img src="{{ $current_comics['thumb'] }}" alt="{{ $current_comics['title'] }}">
        <span class="comic-desc">{{ $current_comics['type'] }}</span>
        <div class="view-gallery">
          <span>View gallery</span>
        </div>
      </div>   
    </div>
    <div class="product-description">
      <div class="descpition-section">
        <h1>{{ $current_comics['title'] }}</h1>
        <div class="check-box">
          <div class="price-box">
            <span class="color-light">U.S. Price: <span class="color-white">{{ $current_comics['price'] }}</span></span>
            <span class="color-light">AVAILABLE</span>
          </div>
          <div class="aviability color-white">
            <span>Check Availability</span>
            <i class="fa-solid fa-caret-down"></i>
          </div>
        </div>
        <p class="comic-description">{{ $current_comics['description'] }}</p>
      </div>
      <div class="descpition-image">
        <h2>Advertisement</h2>
        <img src="{{asset('../images/adv.jpg')}}" alt="">
      </div>
    </div>
    @include('partials.product_info')
  </section>
@endsection

@section('cta_content')
  <div class="cta-content">
    <div class="cta-container">
      <div class="cta-col border-left">
        <span>Digital Comics</span>
        <div class="image-box1"></div>       
      </div>
      <div class="cta-col">
        <span>Shop dc</span>
        <div class="image-box4"></div> 
      </div>
      <div class="cta-col">
        <span>Comics Shop Locator</span>
        <div class="image-box3"></div> 
      </div>
      <div class="cta-col">
        <span>Subscription</span>
        <div class="image-box2"></div> 
      </div>
    </div> 
  </div>

@endsection