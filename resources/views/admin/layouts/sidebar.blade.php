<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo">

        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">DashBoard</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item @yield('home')">
        <a href="{{route('admin.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>


      <li class="menu-item @yield('cites') ">
        <a href="{{route('admin.city.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Cites</div>
        </a>
      </li>

      <li class="menu-item @yield('hotels') ">
        <a href="{{route('admin.hotel.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Hotels</div>
        </a>
      </li>

      <li class="menu-item @yield('roomtype') ">
        <a href="{{route('admin.roomtype.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Room Types</div>
        </a>
      </li>

      <li class="menu-item @yield('room') ">
        <a href="{{route('admin.room.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Room</div>
        </a>
      </li>

      <li class="menu-item @yield('amenities') ">
        <a href="{{route('admin.amenities.index')}}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Amenities</div>
        </a>
      </li>

    </ul>
  </aside>
