@include('user.layouts.head')

@include('user.layouts.Preloader')

<header class="cs_site_header cs_style_1 cs_transparent_header cs_primary_color cs_sticky_header">
    <div class="cs_main_header">
      <div class="container">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="index.php">
              <img src="assetassetss/img/logo_next_stay.png" alt="Logo">
            </a>
          </div>
          <div class="cs_main_header_center">
            <nav class="cs_nav cs_fs_13 cs_semibold">
              <ul class="cs_nav_list">
              <li><a href="Index.php">Home</a></li>
              <li><a href="Index.php">About Us</a></li>
              <li><a href="gallery.php">Popular Destinations</a></li>
              <!-- <li><a href="search-result.php">Search</a></li> -->

              </ul>
            </nav>
          </div>
          <div class="cs_main_header_right">
            <a href="Register.php" class="cs_btn cs_style_2 cs_medium cs_radius_20 cs_fs_15">
              Register
            </a>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- 2 Header  -->

  <!-- 1 Body  -->
  <section>
    <div class="cs_parallax_slider loading overflow-hidden position-relative">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="cs_hero cs_style_1 cs_center text-center position-relative">
            <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/Home_bg_1.jpeg"></figure>
            <div class="container position-relative cs_zindex_3">
              <div class="cs_hero_text">
                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                  <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                  Your dream stay is just a click away
                  <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                </p>
                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0">We Find The Best Hotels For You <br>Hotel & Resort</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="cs_hero cs_style_1 cs_center text-center position-relative">
            <figure class="cs_swiper_parallax_bg cs_hero_bg cs_bg_filed h-100 w-100 position-absolute top-0 start-0 mb-0" data-src="assets/img/home_bg_2.jpeg"></figure>
            <div class="container position-relative cs_zindex_3">
              <div class="cs_hero_text">
                <p class="cs_hero_subtitle cs_white_color text-uppercase d-inline-flex position-relative cs_mb_25 cs_letter_spacing_1">
                  <img class="cs_hero_subtitle_icon_1 position-absolute start-0" src="assets/img/icons/star.svg" alt="Star">
                  Your Journey Begins with the Perfect Hotel
                  <img class="cs_hero_subtitle_icon_2 position-absolute end-0" src="assets/img/icons/star.svg" alt="Star">
                </p>
                <h1 class="cs_hero_title cs_fs_89 cs_white_color mb-0"> Discover Your Perfect Stay with us <br>Hotel & Resort</h1>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- navigation buttons -->
      <div class="cs_slider_navigation cs_white_color">
        <div class="cs_swiper_button_prev">
          <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor"/>
          </svg>
        </div>
        <div class="cs_swiper_button_next">
          <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="cs_half_ternary_bg position-relative">
      <div class="container">
        <form action="search-result.php" class="cs_form cs_style_4 cs_accent_bg cs_radius_5 position-relative cs_zindex_10">
          <div class="cs_date_items">
            <input type="text" name="datetimes" class="cs_datetimes">
            <div class="cs_form_item cs_date_item">
              <label class="cs_white_color">Check in :</label>
              <span class="cs_start_date cs_start_date_value cs_white_color">Start Date:</span>
            </div>
            <div class="cs_form_item cs_date_item">
              <label class="cs_white_color">Check out :</label>
              <span class="cs_end_date cs_end_date_value cs_white_color">End Date:</span>
            </div>
          </div>
          <div class="cs_form_item">
            <label class="cs_white_color">Rooms :</label>
            <div class="cs_quantity_wrap">
              <span class="cs_quantity_btn" data-initial-number="1"></span>
              <div class="cs_quantity_dropdown cs_primary_color">
                <div class="cs_quantity_dropdown_item">
                  <span class="cs_quantity_title">Rooms :</span>
                  <div class="cs_count">
                    <button class="cs_quantity_decrement cs_center" type="button">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <span class="cs_quantity_number" data-min-value="1" data-max-value="50"></span>
                    <button class="cs_quantity_increment cs_center" type="button">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_form_item">
            <label class="cs_white_color">Adults :</label>
            <div class="cs_quantity_wrap">
              <span class="cs_quantity_btn" data-initial-number="1"></span>
              <div class="cs_quantity_dropdown cs_primary_color">
                <div class="cs_quantity_dropdown_item">
                  <span class="cs_quantity_title">Adults :</span>
                  <div class="cs_count">
                    <button class="cs_quantity_decrement cs_center" type="button">
                      <i class="fa-solid fa-minus"></i>
                    </button>
                    <span class="cs_quantity_number" data-min-value="1" data-max-value="30"></span>
                    <button class="cs_quantity_increment cs_center" type="button">
                      <i class="fa-solid fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_form_item">
<label class="cs_white_color">City :</label>
<div class="cs_quantity_wrap">
  <span class="cs_quantity_btn" id="selectedCity" data-initial-number="1">Cairo</span>
  <div class="cs_quantity_dropdown cs_primary_color">
    <div class="cs_quantity_dropdown_item">
      <span class="cs_quantity_title">Select a City :</span>
      <div class="cs_city_list">
        <select class="cs_city_dropdown" id="citySelect">
          <?php
            $cities = ["Cairo", "Alexandria", "Giza", "Sharm El Sheikh", "Hurghada", "Luxor", "Aswan", "Marsa Alam"];
            foreach ($cities as $city) {
                echo "<option value='$city'>$city</option>";
            }
          ?>
        </select>
      </div>
    </div>
  </div>
</div>
</div>

<script>
document.getElementById("citySelect").addEventListener("change", function() {
  document.getElementById("selectedCity").textContent = this.value;
});
</script>

          <div class="cs_form_item_btn">
            <button class="cs_btn cs_style_1 cs_color_1 cs_fs_15 cs_medium cs_radius_5 w-100">Check Availability</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- End Hero Section -->

  <!-- Start About Section -->
  <section class="cs_gray_bg">
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_about cs_style_1">
        <div class="cs_section_heading cs_style_1 text-center">
          <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">WHY CHOOSE US</p>
          <h2 class="cs_fs_67 cs_mb_45">Curated to match your preferences and desires, our selection includes luxury resorts, exclusive tours, and transfers for an unparalleled  experience</h2>
          </a>
        </div>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>
  <!-- End About Section -->

  <!-- Start Rooms Section -->
  <section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Hotels</p>
        <h2 class="cs_fs_67 mb-0 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Most Popular Hotels</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container-fluid">
      <div class="cs_slider cs_style_1 cs_slider_gap_40 cs_hover_show_arrows">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
          <div class="cs_slider_wrapper">
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-dahab.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_1.jpg" alt="Room">
                  <img src="assets/img/home_hotel_1.jpg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-dahab.php">Dahab Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 3200/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-Aswan.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_2.jpeg" alt="Room">
                  <img src="assets/img/home_hotel_2.jpeg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-Aswan.php">Aswan Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 2450/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-cairo.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_3.jpg" alt="Room">
                  <img src="assets/img/home_hotel_3.jpg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-cairo.php">Cairo hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 5200/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-luxor.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_4.jpg" alt="Room">
                  <img src="assets/img/home_hotel_4.jpg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-luxor.php">Luxor hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 3200/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-hurghada.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_5.jpg" alt="Room">
                  <img src="assets/img/home_hotel_5.jpg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-hurghada.php">Hurghada hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 4500/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1">
                <a href="popular-alex.php" class="cs_card_thumb d-block cs_radius_5 overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/home_hotel_6.jpg" alt="Room">
                  <img src="assets/img/home_hotel_6.jpg" alt="Room">
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="popular-alex.php">Alexandria Hotel<a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 1020/Night</span>
                  </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_slider_arrows cs_style_1 cs_mobile_hide">
          <div class="cs_left_arrow cs_center cs_primary_color">
            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM22 7L1 7V9L22 9V7Z" fill="currentColor"/>
            </svg>
          </div>
          <div class="cs_right_arrow cs_center cs_primary_color">
            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.29289L15.3431 0.928932C14.9526 0.538408 14.3195 0.538408 13.9289 0.928932C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 9H21V7H0L0 9Z" fill="currentColor"/>
            </svg>
          </div>
        </div>
        <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
      </div>
    </div>
    <div class="cs_height_145 cs_height_lg_75"></div>
  </section>
  <!-- End Rooms Section -->

  <!-- Start Video Section -->
  <a href="https://www.youtube.com/embed/ueMPkXu1trw?si=_nTJJPni5-BO-Gqe" class="cs_video_block cs_style_1 cs_video_open text-center cs_center position-relative">
    <h2 class="cs_video_block_title cs_fs_150 mb-0 position-relative cs_zindex_3">Next Stay</h2>
    <div class="cs_video_block_bg h-100 w-100 position-absolute start-0 top-0 cs_bg_filed cs_primary_bg" data-src="assets/img/sayedeeshta.jpg"></div>
    <span class="cs_play_btn">
      <svg width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M35 0C15.7004 0 0 15.7004 0 35C0 54.2996 15.7004 70 35 70C54.2996 70 70 54.2996 70 35C70 15.7004 54.2996 0 35 0ZM35 64.1667C18.9175 64.1667 5.83333 51.0825 5.83333 35C5.83333 18.9175 18.9175 5.83333 35 5.83333C51.0825 5.83333 64.1667 18.9175 64.1667 35C64.1667 51.0825 51.0825 64.1667 35 64.1667ZM23.3333 51.4704L52.6167 35L23.3333 18.5296V51.4733V51.4704ZM29.1667 28.5017L40.7167 35L29.1667 41.4983V28.5017Z" fill="currentColor"/>
      </svg>
    </span>
  </a>
  <!-- End Video Section -->
  <!-- Start Testimonial Section -->
  <section class="cs_gray_bg">
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="cs_slider cs_style_1 cs_slider_gap_40">
      <div class="container">
        <div class="cs_testimonial_1_wrap">
          <div class="cs_slider_container position-relative cs_zindex_3" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="1">
            <div class="cs_slider_wrapper">
              <div class="cs_slide">
                <div class="cs_testimonial cs_style_1 text-center position-relative">
                  <div class="position-relative cs_zindex_2">
                    <div class="cs_testimonial_avatar cs_mb_50 cs_mb_lg_20">
                      <img src="assets/img/ghady.jpg" alt="Avatar" class="cs_mb_10">
                      <h3 class="cs_fs_28 mb-0">Ghady Rashad</h3>
                      <p class="mb-0">Website User</p>
                    </div>
                    <blockquote class="cs_testimonial_blockquote cs_fs_50 cs_primary_font cs_primary_color fst-normal cs_mb_75 cs_mb_lg_30">Super easy to use and found the best hotel deal in minutes! The booking was seamless, and my stay was perfect. Highly recommend!</blockquote>
                  </div>
                </div>
              </div>
              <div class="cs_slide">
                <div class="cs_testimonial cs_style_1 text-center position-relative">
                  <div class="position-relative cs_zindex_2">
                    <div class="cs_testimonial_avatar cs_mb_50 cs_mb_lg_20">
                      <img src="assets/img/david.jpg" alt="Avatar" class="cs_mb_10">
                      <h3 class="cs_fs_28 mb-0">Ahmed Malek</h3>
                      <p class="mb-0">Website User</p>
                    </div>
                    <blockquote class="cs_testimonial_blockquote cs_fs_50 cs_primary_font cs_primary_color fst-normal cs_mb_75 cs_mb_lg_30">Great experience! Smooth booking, amazing hotel options, and no hassle at all. Will definitely use this site again!</blockquote>
                    <div class="cs_height_75 cs_height_lg_30"></div>
                  </div>
                </div>
              </div>
              <div class="cs_slide">
                <div class="cs_testimonial cs_style_1 text-center position-relative">
                  <div class="position-relative cs_zindex_2">
                    <div class="cs_testimonial_avatar cs_mb_50 cs_mb_lg_20">
                      <img src="assets/img/marya.jpg" alt="Avatar" class="cs_mb_10">
                      <h3 class="cs_fs_28 mb-0">Maryan Hany</h3>
                      <p class="mb-0">VIP User</p>
                    </div>
                    <blockquote class="cs_testimonial_blockquote cs_fs_50 cs_primary_font cs_primary_color fst-normal cs_mb_75 cs_mb_lg_30">Loved it! Fast, reliable, and got the best deal for my trip. Everything went perfectly. 5 stars!</blockquote>
                    <div class="cs_height_75 cs_height_lg_30"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_testimonial_quote cs_accent_color">
            <svg width="512" height="379" viewBox="0 0 512 379" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_76_354)">
              <path d="M245.642 151.008C242.682 227.992 207.168 293.133 136.139 334.586C97.6648 358.273 59.1909 370.117 14.7978 376.039C8.87872 376.039 5.91918 373.078 2.95965 367.156C0.000108577 364.195 0.000108577 358.273 5.91918 355.312C14.7978 352.352 20.7169 346.43 29.5955 343.469C47.3527 331.625 65.1099 319.781 76.9481 302.016C85.8267 287.211 91.7458 272.406 85.8267 254.641C82.8672 239.836 76.9481 230.953 62.1504 227.992C41.4336 222.07 29.5955 210.227 17.7573 192.461C-5.91897 148.047 -8.87851 88.8281 26.6359 44.414C47.3527 20.7265 73.9885 5.92183 106.543 -4.75645e-05C165.734 -5.92192 213.087 26.6484 230.844 79.9453C239.723 100.672 245.642 124.359 245.642 151.008Z" fill="currentColor" fill-opacity="0.1"/>
              <path d="M512 151.008C509.041 227.992 473.526 293.133 402.497 337.547C364.023 361.234 325.549 373.078 281.156 379C275.237 379 272.278 376.039 269.318 370.117C266.359 364.195 266.359 358.273 272.278 355.312C284.116 349.391 292.994 343.469 304.833 337.547C322.59 325.703 340.347 310.898 349.226 290.172C358.104 272.406 358.104 257.602 349.226 242.797C346.266 236.875 340.347 230.953 331.468 227.992C310.752 225.031 295.954 210.227 284.116 189.5C260.439 145.086 257.48 88.8281 292.994 47.375C313.711 20.7265 340.347 5.92183 372.902 2.96089C432.093 -2.96099 479.445 29.6093 497.202 82.9062C506.081 100.672 509.041 124.359 512 151.008Z" fill="currentColor" fill-opacity="0.1"/>
              </g>
              <defs>
              <clipPath id="clip0_76_354">
              <rect width="512" height="379" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
        </div>
      </div>
      <div class="cs_slider_number cs_style_1 cs_fs_38 cs_primary_font cs_primary_color cs_mobile_hide"></div>
      <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>
  <!-- End Testimonial Section -->
  <footer class="cs_footer cs_primary_bg cs_ternary_color">
    <div class="cs_footer_main">
      <div class="container">
        <div class="cs_footer_grid_4">
          <div class="cs_footer_grid_item">
            <div class="cs_footer_item">
              <h2 class="cs_widget_title cs_fs_28 cs_white_color"><span>Contact Us</span></h2>
              <ul class="cs_menu_widget cs_mp0">
                <li class="cs_white_color">Call : <a href="tel:+20123456789">+20 123456789</a></li>
                <li class="cs_white_color">Email : <a href="mailto:info@nextstay.com">info@nextstay.com</a></li>
              </ul>

            </div>
          </div>
          <div class="cs_footer_grid_item">
            <div class="cs_footer_item">
              <h2 class="cs_widget_title cs_fs_28 cs_white_color"><span>Address</span></h2>
              <div class="cs_text_widget">
                <p>Suez Canal University EELU</p>
              </div>
            </div>
          </div>
          <div class="cs_footer_grid_item">
            <div class="cs_footer_item">
              <h2 class="cs_widget_title cs_fs_28 cs_white_color"><span>Links</span></h2>
              <ul class="cs_menu_widget cs_mp0">
                <li><a href="index.php">Home</a></li>
                <li><a href="Index.php">About us</a></li>
                <li><a href="Index.php">Popular Destinations</a></li>
                <li><a href="Index.php">Register</a></li>
                <li><a href="Index.php">Login</a></li>
              </ul>
            </div>
          </div>
          <div class="cs_footer_grid_item">
            <div class="cs_footer_item">
              <h2 class="cs_widget_title cs_fs_28 cs_white_color"><span>Map Location</span></h2>
              <div class="cs_footer_map cs_primary_bg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858.3443999578885!2d32.26693654006353!3d30.62331414425144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f8597f201556e7%3A0x9bd6053867337ff3!2sSuez%20Canal%20University!5e0!3m2!1sen!2seg!4v1738436167095!5m2!1sen!2seg" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_bottom_footer_wrap">
      <div class="container">
        <div class="cs_bottom_footer position-relative">
          <div class="cs_copyright">Copyright ©  <span class="cs_copyright_year">2025</span> <a href="#">NextStay</a></div>
          <span class="cs_scrollup cs_center">
            <svg width="15" height="7" viewBox="0 0 15 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 6.18793L14.1169 7L7.93687 1.31723C7.81958 1.20941 7.66053 1.14885 7.49468 1.14885C7.32884 1.14885 7.16978 1.20941 7.0525 1.31723L0.884376 6.99022L0 6.177L6.16812 0.505163C6.51998 0.181708 6.99715 0 7.49468 0C7.99222 0 8.46938 0.181708 8.82125 0.505163L15 6.18793Z" fill="white"/>
            </svg>
            <span class="cs_scrollup_bg_dotted cs_accent_color">
              <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="28" cy="28" r="27.5" stroke="currentColor" stroke-dasharray="5 5"/>
              </svg>
            </span>
          </span>
          <div class="cs_bottom_footer_right">
            <ul class="cs_footer_links cs_mp_0">
              <li>
                <a href="#">Privacy & Cookie Policy</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  @include('user.layouts.script')
  <div class="chat-container">
    <div id="chat-button" class="chat-button">
        <img src="assets/img/logo1.png" alt="Chat">
    </div>

    <!-- Chat Box -->
    <div id="chat-box" class="chat-box">
        <div class="chat-header">
            <img src="assets/img/chat-icon1.png" class="chat-logo" alt="Next Stay">
            <span>Chat with NextStay 🤖</span>
            <button id="close-chat" class="close-chat">&times;</button>
        </div>
        <div class="chat-body">
            <p>Hello! I'm NextStay. Need help finding the best hotel deals? I'm here to assist! 🏨✨</p>
            <input type="text" id="chat-input" placeholder="Type your message...">
            <button id="send-btn">Send</button>
        </div>
    </div>
</div>
