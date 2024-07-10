<!--start sidebar-->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="../assets/images/logo-icon.png" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-0">Maxton</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
          <li>
            <a href="{{url('/admin')}}">
              <div class="parent-icon"><i class="material-icons-outlined">home</i>
              </div>
              <div class="menu-title">Dashboard</div>
            </a>
          </li>
          <li>
            <a href="{{url('/admin/user')}}">
              <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
              </div>
              <div class="menu-title">User managerment</div>
            </a>
          </li>
          <li>
          </li>
          <li><a href="{{route('kategori.index')}}"><i
            class="material-icons-outlined">arrow_right</i>kategori</a>
        </li>
        <li><a href="{{route('produk.index')}}"><i
            class="material-icons-outlined">arrow_right</i>Produk</a>
        </li>
              <ul>
        <!--end navigation-->
    </div>
  </aside>
<!--end sidebar-->
