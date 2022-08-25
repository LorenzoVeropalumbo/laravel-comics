<div class="product-info-bg">
  <div class="product-info">
    <div class="talent-section col-width">
      <h3>Talent</h3>
      <div class="art-description">
        <div class="col-width-small">
          <span class="color-primary">Art by:</span>       
        </div>
        <div class="col-width-big">
          @foreach ( $current_comics['artists']  as $artist)
            <span class="color-secondary">{{$artist}}</span>
            @if(!$loop->last), @endif
          @endforeach
        </div>
      </div>
      <div class="art-description">
        <div class="col-width-small">
          <span class="color-primary">Written by:</span>       
        </div>
        <div class="col-width-big">
          @foreach ( $current_comics['writers']  as $artist)
            <span class="color-secondary">{{$artist}}</span>
            @if(!$loop->last), @endif
          @endforeach
        </div>
      </div>
    </div>
    <div class="specs-section col-width">
      <h3>Specs</h3>
      <div class="art-description">
        <div class="col-width-small">
          <span class="color-primary">Series:</span>       
        </div>
        <div class="col-width-big">
            <span class="color-secondary text-upper">{{$current_comics['series']}}</span>
        </div>
      </div>
      <div class="art-description">
        <div class="col-width-small">
          <span class="color-primary">U.S. Price:</span>       
        </div>
        <div class="col-width-big">
          <span>{{$current_comics['price']}}</span>
        </div>
      </div>
      <div class="art-description">
        <div class="col-width-small">
          <span class="color-primary">On Sale Date:</span>       
        </div>
        <div class="col-width-big">
          <span>{{$current_comics['sale_date']}}</span>
        </div>
      </div>
    </div>
  </div>
</div>
