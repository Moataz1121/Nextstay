@include('user.layouts.head')

@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<div class="container">
    <h1 class="cs_white_color text-center mb-0 cs_fs_67">ALEXANDRIA HOTELS</h1>
  </div>
</section>

<section>
    <div class="cs_height_100 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_50">
        <div class="col-lg-4">
          <form action="search-result.php" class="cs_form cs_style_4 cs_type_6 cs_sticky_top_100">
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
            <div class="cs_form_item">
  <label class="cs_white_color">Location:</label>
  <div class="cs_quantity_wrap">
      <span class="cs_quantity_btn" id="selectedCity">Cairo</span>
      <div class="cs_quantity_dropdown cs_primary_color">
          <div class="cs_quantity_dropdown_item">
              <span class="cs_quantity_title">Choose a City:</span>
              <select class="cs_city_dropdown" id="cityDropdown">
                  <option value="Cairo">Cairo</option>
                  <option value="Alexandria">Alexandria</option>
                  <option value="Giza">Giza</option>
                  <option value="Sharm El Sheikh">Sharm El Sheikh</option>
                  <option value="Hurghada">Hurghada</option>
                  <option value="Luxor">Luxor</option>
                  <option value="Aswan">Aswan</option>
                  <option value="Marsa Alam">Marsa Alam</option>
              </select>
          </div>
      </div>
  </div>
</div>

<script>
  document.getElementById('cityDropdown').addEventListener('change', function() {
      document.getElementById('selectedCity').textContent = this.value;
  });
</script>

            <div class="cs_form_item_btn">
              <button class="cs_btn cs_style_2 cs_primary_btn cs_fs_15 cs_medium cs_radius_5 w-100">Check Availability</button>
            </div>
          </form>
        </div>
        <div class="col-lg-8">
          <div class="row cs_gap_y_60">
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_4.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php">Tolip Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 3200/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_5.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php">SUNRISE Avenue</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 4295/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_6.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php">Hilton Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 4570/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_22.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php"> Green Plaza</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 4828/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_23.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php">Romance Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 2917/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-6">
              <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                <a href="hotel-dahab.php" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                  <img src="assets/img/Alex/room_24.jpeg" alt="Room">
                  <span class="cs_card_btn position-absolute cs_zindex_2">
                    <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                      <b>Details View</b>
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
                    </span>
                  </span>
                </a>
                <div class="cs_card_info position-relative">
                  <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="hotel-dahab.php">Royal Hotel</a></h2>
                  <div class="cs_card_price cs_mb_17">
                    <span class="cs_primary_color">From</span>
                    <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP 2200/Night</span>
                  </div>
                  <!-- <ul class="cs_card_list cs_mp_0">
                    <li>110 Sq</li>
                    <li>3-5 Guests</li>
                    <li>Free Wi-Fi</li>
                  </ul> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>

  @include('user.layouts.footer')
  @include('user.layouts.script')
