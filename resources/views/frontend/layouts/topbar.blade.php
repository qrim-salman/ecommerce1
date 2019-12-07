<nav class="navbar navbar-expand-xl fixed-top navbar-light bg-light">
  <div class="navbar-header d-flex col">
    <a class="navbar-brand" href="#"><i class="fas fa-cube"></i>Brand<b>Name</b></a>
    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
    <span class="navbar-toggler-icon"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
  </div>
  <!-- Collection of nav links, forms, and other content for toggling -->
  <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    <ul class="nav navbar-nav">
      <li class="nav-item active"><a href="#" class="nav-link">Beranda</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Action Figure</a></li>
      <li class="nav-item"><a href="#" class="nav-link">Kosmetik</a></li>
      <li class="nav-item dropdown">
        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Lainnya <b class="caret"></b></a>
        <ul class="dropdown-menu">
          @foreach ($categories as $item)
          <li><a href="#" class="dropdown-item">{{$item->name}}</a></li>
          @endforeach
        </ul>
      </li>
    </ul>
    <form class="navbar-form form-inline">
      <div class="input-group search-box">
        <input type="text" id="search" class="form-control" placeholder="cari produk ...">
        <span class="input-group-addon"><i class="fas fa-search"></i></span>
      </div>
    </form>
    @auth()
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item"><a href="#" class="nav-link cart"><i class="fas fa-shopping-cart"></i><span class="badge">0</span></a></li>
      <div class="vertical-divider d-sm-none d-md-inline"></div>
      <li class="nav-item dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle user-action"><img src="{{ auth()->guard()->user()->avatar }}" class="avatar" alt="Avatar"> {{ auth()->guard()->user()->name }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#" class="dropdown-item"><i class="fas fa-user"></i> Profile</a></li>
          <li><a href="#" class="dropdown-item"><i class="fas fa-cogs"></i> Settings</a></li>
          <li class="divider dropdown-divider"></li>
          <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" 
                class="dropdown-item">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </li>
    </ul>
    @endauth

    @guest
    <ul class="nav navbar-nav navbar-right ml-auto">
      <li class="nav-item">
        <a href="{{ route('login') }}" class="btn btn-primary btn-block">Masuk</a>
      </li>
      &nbsp;
      <li  class="nav-item">
        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-block">Daftar</a>
      </li>
    </ul>
    @endguest
  </div>
</nav>