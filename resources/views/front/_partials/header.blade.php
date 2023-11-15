<header class="header-area header-sticky" style="">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="{{ url('assets/frontend/images/logo.png')}}" alt="">
          </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Search End ***** -->
          <div class="search-input">
            <form id="search" action="#">
              <input type="text" placeholder="Type Something" id="searchText" name="searchKeyword" onkeypress="handle">
              <i class="fa fa-search"></i>
            </form>
          </div>
          <!-- ***** Search End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><a href="/" class="active">Beranda</a></li>
            <li><a href="{{ route ('tentang')}}">Tentang</a></li>
            <li class="has-sub">
              <a class="has-sub dropdown-toggle" href="javascript:void(0)">Kategori</a>
              <ul class="sub-menu">
                
              <li><a href="{{('kategori')}}">Kosong</a></li><br>
              
              </ul>
            </li>
            <li><a href="{{ route ('kontak') }}">Kontak</a></li>
            <li><a href="profile.html">Profile <img src="assets/frontend/images/profile-header.jpg" alt=""></a></li>

          </ul>
          <a class="menu-trigger">
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>