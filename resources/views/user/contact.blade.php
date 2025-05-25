@include('user.layouts.head')

@include('user.layouts.Preloader')
<div class="cs_main_header">
    <div class="container">
      <div class="cs_main_header_in">
        <div class="cs_main_header_left">
          <a class="cs_site_branding" href="{{ route('index') }}">
            <img src=" {{ asset('assets/img/logo-black.svg') }} " alt="Logo">
          </a>
        </div>
        <div class="cs_main_header_center">
          <div class="cs_nav cs_fs_13 cs_semibold">
            <ul class="cs_nav_list">
              <li class="menu-item-has-children cs_mega_menu">
                <a href="{{ route('index') }}">Home</a>
                  <ul class="cs_mega_wrapper cs_with_thumb">
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-1.jpeg') }}" alt="">Default Hotel & Resort
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-2.jpeg') }}" alt="">Hotel & Resort V2
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-3.jpeg') }}" alt="">Hotel & Resort V3
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-4.jpeg') }}" alt="">Hotel & Resort V4
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-5.jpeg') }}" alt="">Hotel & Resort V5
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-6.jpeg') }}" alt="">Hotel & Resort V6
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-7.jpeg') }}" alt="">Hotel & Resort V7
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-8.jpeg') }}" alt="">Hotel & Resort V8
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-9.jpeg') }}" alt="">Hostel
                          </a>
                      </li>
                      <li>
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets/img/demo/home-10.jpeg') }}" alt="">Luxury Hotel
                          </a>
                      </li>
                  </ul>

              </li>
{{--              <li><a href="about.php">About Us</a></li>--}}
{{--              <li class="menu-item-has-children">--}}
{{--                <a href="rooms.php">Rooms</a>--}}
{{--                <ul>--}}
{{--                  <li><a href="rooms.php">Room Grid View</a></li>--}}
{{--                  <li><a href="rooms-list-view.php">Room List View</a></li>--}}
{{--                  <li><a href="room-details.php">Room Details V1</a></li>--}}
{{--                  <li><a href="room-details-v2.php">Room Details V2</a></li>--}}
{{--                  <li><a href="room-details-v3.php">Room Details V3</a></li>--}}
{{--                  <li><a href="search-result.php">Room Search Result</a></li>--}}
{{--                  <li><a href="complete-reservation.php">Payment Page</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
{{--              <li><a href="services.php">Services</a></li>--}}
{{--              <li><a href="restaurant.php">Restaurant</a></li>--}}
{{--              <li class="menu-item-has-children">--}}
{{--                <a href="">Pages</a>--}}
{{--                <ul>--}}
{{--                  <li><a href="restaurant.php">Restaurant & Bar</a></li>--}}
{{--                  <li><a href="spa-wellness.php">SPA & Wellness</a></li>--}}
{{--                  <li><a href="infinity-pool.php">Infinity Pool</a></li>--}}
{{--                  <li><a href="team.php">Team</a></li>--}}
{{--                  <li><a href="gallery.php">Gallery</a></li>--}}
{{--                  <li><a href="faq.php">FAQ</a></li>--}}
{{--                  <li><a href="404.php">Error 404</a></li>--}}
{{--                </ul>--}}
{{--              </li>--}}
                <li><a href="{{ url('gallery') }}">Popular Destinations</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li> <br>
            </ul>
          </div>
        </div>
        <div class="cs_main_header_right">
          <a href="{{ route('index') }}" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15">
            Reservation
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- End Header Section -->

<!-- Start Page Heading Section -->
<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="assets/img/happy_night.jpg">
  <div class="container">
    <h1 class="cs_white_color text-center mb-0 cs_fs_67">Contact Us</h1>
  </div>
</section>
<!-- End Page Heading Section -->

<!-- Start Contact Section -->
<section>
  <div class="cs_height_150 cs_height_lg_72"></div>
  <div class="container">
    <div class="row cs_gap_y_50">
      <div class="col-lg-6">
        <div class="cs_pr_100">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">GETTING TOUCH</p>
            <h2 class="cs_fs_67 cs_mb_18">Contact Seapearl Resort Today</h2>
            <p class="mb-0">Reach out to us via phone, email, or through our convenient online form.  We look forward to hearing from you and helping you plan your  unforgettable experience at Seapearl Resort.</p>
          </div>
          <div class="cs_height_37 cs_height_lg_37"></div>
          <form action="{{ route('contact.store') }}" method="POST" class="cs_form cs_style_2">
              @if(session('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <i class="fa fa-check-circle me-2"></i>
                      {{ session('success') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif

              @csrf
            <label>Full Name*</label>
            <input type="text" name="name" class="cs_form_field_2 cs_radius_20">
            <div class="cs_height_16 cs_height_lg_16"></div>
            <label>Email*</label>
            <input type="email" name="email" class="cs_form_field_2 cs_radius_20">
            <div class="cs_height_16 cs_height_lg_16"></div>
            <label>Write Your Comment*</label>
            <textarea name="message" cols="30" rows="6" class="cs_form_field_2 cs_radius_20"></textarea>
            <div class="cs_height_25 cs_height_lg_25"></div>
            <button class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_20 cs_fs_15">
              <b>Send Message</b>
              <span>
                <i>
                  <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                  </svg>
                </i>
                <i>
                  <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.00431 0.872828C9.00431 0.458614 8.66852 0.122828 8.25431 0.122828L1.50431 0.122827C1.0901 0.122827 0.754309 0.458614 0.754309 0.872828C0.754309 1.28704 1.0901 1.62283 1.50431 1.62283H7.50431V7.62283C7.50431 8.03704 7.84009 8.37283 8.25431 8.37283C8.66852 8.37283 9.00431 8.03704 9.00431 7.62283L9.00431 0.872828ZM1.53033 8.65747L8.78464 1.40316L7.72398 0.342497L0.46967 7.59681L1.53033 8.65747Z" fill="currentColor"></path>
                  </svg>
                </i>
              </span>
            </button>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cs_image_layer cs_style_3 position-relative">
          <img src= " {{ asset('assets/img/C Suites Hotel _ Apartment interior _ Hotel and leisure photography.jpg') }}" alt="Contact" class="cs_radius_5">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<!-- Start Contact Info -->
<section>
  <div class="cs_height_150 cs_height_lg_72"></div>
  <div class="container">
    <div class="cs_contact_info_boxes">
      <div class="cs_contact_info_box">
        <div class="cs_iconbox cs_style_4">
          <div class="cs_iconbox_icon cs_center rounded-circle">
            <img src="assets/img/icons/contact_icon_1.svg" alt="Icon">
          </div>
          <div class="cs_iconbox_right">
            <h3 class="cs_fs_28 cs_mb_5">SeaPearl Address</h3>
            <p class="mb-0">452 15h Street, Office 741, Ohio, De 47754, USA</p>
          </div>
        </div>
      </div>
      <div class="cs_contact_info_box">
        <div class="cs_iconbox cs_style_4">
          <div class="cs_iconbox_icon cs_center rounded-circle">
            <img src="assets/img/icons/contact_icon_2.svg" alt="Icon">
          </div>
          <div class="cs_iconbox_right">
            <h3 class="cs_fs_28 cs_mb_5">Email address</h3>
            <p class="mb-0"><a href="mailto:info@seapearl.com">info@seapearl.com</a></p>
          </div>
        </div>
      </div>
      <div class="cs_contact_info_box">
        <div class="cs_iconbox cs_style_4">
          <div class="cs_iconbox_icon cs_center rounded-circle">
            <img src="assets/img/icons/contact_icon_3.svg" alt="Icon">
          </div>
          <div class="cs_iconbox_right">
            <h3 class="cs_fs_28 cs_mb_5">For Reservation</h3>
            <p class="mb-0"><a href="tel:+214544512009">+21 454 451 2009</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_150 cs_height_lg_80"></div>
</section>
<!-- End Contact Info -->

<!-- Start Google Map Section -->
<div class="cs_google_map cs_style_1">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
</div>
<!-- End Google Map Section -->

@include('user.layouts.footer')
@include('user.layouts.script')
