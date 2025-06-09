<header class="cs_site_header cs_style_1 cs_primary_color cs_sticky_header">
    <div class="cs_main_header">
      <div class="container-fluid">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="index.php">
              <img src="{{asset('assets')}}/img/l2ogo_next_stay - Copy copy.png" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <div class="cs_nav cs_fs_13 cs_semibold">
              <ul class="cs_nav_list">
                <!-- <li class="menu-item-has-children cs_mega_menu"> -->
                <li><a href="{{ route('index') }}">Home</a></li>
{{--              <li><a href="Index.php">About Us</a></li>--}}
                  <li><a href="{{ url('gallery') }}">Popular Destinations</a></li>
              <li><a href="{{ route('contact') }}">Contact Us</a></li> <br>

                </ul>

                <div class="cs_main_header_right">
                    @guest
                        <a href="{{ route('register') }}" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15">
                            Register
                        </a>
                        <a href="{{ route('login') }}" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15">
                            Login
                        </a>
                    @endguest

                    @auth
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15"
                                style="border: none; background: none; padding: 0; cursor: pointer;">
                                Logout
                            </button>
                        </form>
                    @endauth  </div>
        </div>
      </div>
    </div>
  </header>
