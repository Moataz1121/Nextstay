@include('user.layouts.head')

@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section class="cs_bg_filed" data-src="assets/img/ss.JPEG">
    <div class="cs_height_230 cs_height_lg_160"></div>
    <div class="container">
      <h2 class="text-center cs_white_color cs_fs_50 mb-0 cs_form_heading_1">Secure Your Spot: Reserve Your <br>Stay at Seapearl Hostel</h2>
      <div class="cs_height_76 cs_height_lg_55"></div>
      <form action="search-result.php" class="cs_form cs_style_4 cs_type_2 cs_accent_bg cs_radius_5 position-relative cs_zindex_10">
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
          <label class="cs_white_color">Children :</label>
          <div class="cs_quantity_wrap">
            <span class="cs_quantity_btn" data-initial-number="00"></span>
            <div class="cs_quantity_dropdown cs_primary_color">
              <div class="cs_quantity_dropdown_item">
                <span class="cs_quantity_title">Children :</span>
                <div class="cs_count">
                  <button class="cs_quantity_decrement cs_center" type="button">
                    <i class="fa-solid fa-minus"></i>
                  </button>
                  <span class="cs_quantity_number" data-min-value="0" data-max-value="10"></span>
                  <button class="cs_quantity_increment cs_center" type="button">
                    <i class="fa-solid fa-plus"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_form_item_btn">
          <button class="cs_btn cs_style_1 cs_color_1 cs_fs_15 cs_medium cs_radius_5 w-100">Check Availability</button>
        </div>
      </form>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>
  <!-- End Search Form Section -->

  <!-- Start Rooms Section -->
  <section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Rooms & Suites</p>
        <h2 class="cs_fs_67 mb-0">Our Exquisite Rooms & Suites Collection</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Deluxe Room.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Deluxe Room</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$320/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Standard Room.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Standard Room</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$450/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Superior Room.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Superior Room</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$520/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Pearl Suite.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Pearl Suite</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$320/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Sunrise Villa.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Sunrise Villa</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$450/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="cs_card cs_style_7 cs_type_1 cs_radius_5 overflow-hidden">
            <a href="room-details.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
              <img src="assets/img/Sea View.jpg" alt="Room">
            </a>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Sea View</a></h2>
              <div class="cs_card_price cs_mb_12">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$520/Night</span>
              </div>
              <p class="cs_mb_15">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</p>
              <div class="cs_mb_20">
                <ul class="cs_card_list cs_mp_0">
                  <li>110 Sq</li>
                  <li>3-5 Guests</li>
                  <li>Free Wi-Fi</li>
                </ul>
              </div>
              <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>View Details</b>
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
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Rooms Section -->

  <!-- Start Rooms Section -->
  <section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">EVENTS SPACE</p>
        <h2 class="cs_fs_67 mb-0">Event Accommodation: Elevate Your <br>Experience with Us</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container">
      <div class="row cs_gap_y_80">
        <div class="col-lg-6">
          <div class="cs_card cs_style_2 text-center">
            <div class="cs_card_thumb d-block position-relative cs_primary_bg">
              <img src="assets/img/Corporate Center.jpg" alt="Room">
              <div class="cs_card_hover cs_center position-absolute">
                <div class="cs_card_btn position-relative cs_zindex_2">
                  <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                    <b>View Details</b>
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
                  </a>
                </div>
              </div>
              <div class="cs_card_hover_overlay position-absolute h-100 w-100 start-0 top-0"></div>
            </div>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Corporate Center</a></h2>
              <div class="cs_card_price cs_mb_17">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$900/Day</span>
              </div>
              <ul class="cs_card_list cs_mp_0">
                <li>1200 Sq</li>
                <li>250-300 Guests</li>
                <li>Free Wi-Fi</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_card cs_style_2 text-center">
            <div class="cs_card_thumb d-block position-relative cs_primary_bg">
              <img src="assets/img/Party Center.jpg" alt="Room">
              <div class="cs_card_hover cs_center position-absolute">
                <div class="cs_card_btn position-relative cs_zindex_2">
                  <a href="room-details.php" class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                    <b>View Details</b>
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
                  </a>
                </div>
              </div>
              <div class="cs_card_hover_overlay position-absolute h-100 w-100 start-0 top-0"></div>
            </div>
            <div class="cs_card_info position-relative">
              <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="room-details.php">Party Center</a></h2>
              <div class="cs_card_price cs_mb_17">
                <span class="cs_primary_color">From</span>
                <span class="cs_accent_color cs_fs_38 cs_primary_font">$1000/Day</span>
              </div>
              <ul class="cs_card_list cs_mp_0">
                <li>1500 Sq</li>
                <li>300-350 Guests</li>
                <li>Free Wi-Fi</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_140 cs_height_lg_70"></div>
  </section>

  @include('user.layouts.footer')
  @include('user.layouts.script')