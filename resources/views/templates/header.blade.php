<div class="container">
    <img src="/img/dc-logo.png" alt="logo" />
    <ul>
      <li >
          <a href="#">Characters</a>
      </li>
      <li><a href="#">Comics</a></li>
      <li><a href="#">Movies</a></li>
      <li><a href="#">Tv</a></li>
      <li><a href="#">Games</a></li>
      <li class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}">
          <a href="{{ route('home') }}">Collection</a>
      </li>
      <li><a href="#">Videos</a></li>
      <li><a href="#">Fans</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Shop</a></li>
    </ul>
</div>