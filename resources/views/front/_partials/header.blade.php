<header class="header-area header-sticky" style="">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="assets/images/logo.png" alt="">
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
            <li class="has-sub">
              <a class="has-sub dropdown-toggle" href="javascript:void(0)">Kategori</a>
              <ul class="sub-menu">
                <li><a href="{{('kategori_index')}}">Tambah Kategori</a></li><br>
                <li><a href="{{('kategori')}}">About Us</a></li><br>
                <li><a href="faqs.html">FAQs</a></li>
              </ul>
            </li>
            <li><a href="{{('home.index')}}" class="active">Home</a></li>
            <li><a href="browse.html">Browse</a></li>

            <li><a href="streams.html">Streams</a></li>
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