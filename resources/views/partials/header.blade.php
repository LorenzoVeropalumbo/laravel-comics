<header> 
  <div class="header-top">
    <div class="container">
      <span class="visa-content">DC POWER VISA&reg;</span><span class="fake-select">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></span>
    </div>
  </div>
  <div class="header-bottom">
    <div class="container">
      <nav class="menu">
        <div class="logo-dc">
          <img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"> 
        </div>      
        <ul class="manu-ul">
          <li><a>characters</a></li>
          <li class="{{ Route::current()->getName() === 'home' ? 'current' : '' }}"><a href="{{ route('home') }}">comics</a></li>
          <li><a>movies</a></li>
          <li><a>tv</a></li>
          <li><a>games</a></li>
          <li><a>collectibles</a></li>
          <li><a>videos</a></li>
          <li><a>fans</a></li>
          <li><a>news</a></li>
          <li class="{{ Route::current()->getName() === 'single-item' ? 'current' : '' }}"><a>shop <i class="fa-solid fa-caret-down"></i></a></li>
        </ul>
        <div class="search-bar">
          <input type="text" placeholder="Search"><i class="fa fa-search"></i>
        </div>
      </nav>   
    </div>
  </div>
</header>