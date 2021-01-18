 @php
 function checkRouteActive($route){
 if(Route::current()->uri == $route) return 'active';
}
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">TOKOPAKEDI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/images/poto.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('admin/beranda')}}" class="d-block">
           @if(Auth::check())
             {{request()->user()->nama}}
           @elseif(Auth::guard('pembeli')->check())
             {{Auth::guard('pembeli')->user()->nama}}
             <br>Pembeli


           @elseif(Auth::guard('penjual')->check())
             {{Auth::guard('penjual')->user()->nama}}
             <br>Penjual
           @else
             Silahkan Login
           @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('beranda')}}" class="nav-link {{checkRouteActive('beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/produk')}}" class="nav-link {{checkRouteActive('admin/produk')}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Produk
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('admin/kategori')}}" class="nav-link {{CheckRouteActive('admin/kategori')}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>

           <li class="nav-item">
            <a href="{{url('admin/artikel')}}" class="nav-link {{CheckRouteActive('admin/artikel')}}">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Artikel
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{url('admin/user')}}" class="nav-link {{CheckRouteActive('admin/user')}}">
              <i class="nav-icon fa fa fa-users"></i>
              <p>
                User
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('login')}}" class="nav-link {{CheckRouteActive('login')}}">
              <i class="nav-icon fa fa fa-child"></i>
              <p>
                Login
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('register')}}" class="nav-link {{checkRouteActive('register')}}">
              <i class="nav-icon fa fa fa-address-book"></i>
              <p>
              Register
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>