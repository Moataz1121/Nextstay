@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')


<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src= "{{ asset('assets/img/ssss.jpg') }}">
    <div class="container">
      <h1 class="cs_white_color text-center mb-0 cs_fs_67">{{ $rooms->roomType->name }}</h1>
    </div>
  </section>
  <!-- End Page Heading Section -->

  <!-- Start Room Details Section -->
  <section>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_plr_70">
        <h2 class="cs_fs_67 mb-0 text-center">Enjoy a cozy and well-appointed room, complete with breakfast and unlimited access to our thermal pools, Spa & Wellness facilities. Please note that extra beds are not available in this room category</h2>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-lg-6">
          <div class="cs_room_details">
            <h3 class="cs_fs_38 cs_mb_29 cs_mb_lg_20">About Accommodation</h3>
            <p class="cs_mb_49 cs_mb_lg_30">Relax in our cozy, compact room featuring a 140cm bed, satellite TV,  coffee and tea set, minibar, desk, air conditioning, and complimentary  Wi-Fi. Unwind in the bathroom with a shower, and find bathrobe and  slippers for added comfort. Our non-smoking rooms also include  SeaPearl's inclusive service, ensuring a delightful stay. Your  accommodation price covers breakfast and unrestricted entry to our  thermal pools and Wellness & Spa.</p>
            <h3 class="cs_fs_31 cs_mb_29 cs_mb_lg_20">Facilities</h3>
            <ul class="cs_list cs_style_3 cs_mp_0">
                @foreach($rooms->roomType->amenities as $amenity)
                    <li><img src="{{ asset('assets/img/icons/facility_icon_1.svg') }}" alt="Icon">{{ $amenity->name }}</li>
              @endforeach

          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_pl_110">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

              <form action="{{ route('complete.booking') }}"  method="POST" class="cs_book_now_card cs_accent_bg cs_radius_5">
                  @csrf
                  @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <i class="fa fa-check-circle me-2"></i>
                          {{ session('success') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @endif

                  {{-- رسائل الخطأ (Error Messages) --}}
                  @if(session('error'))
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="fa fa-exclamation-circle me-2"></i>
                          {{ session('error') }}
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @endif

                  <div class="cs_book_now_card_head cs_mb_30">
                      <h2 class="cs_book_now_card_title cs_fs_38 cs_white_color mb-0 text-center">Reservation</h2>
                      <h2 class="cs_book_now_card_price cs_fs_38 cs_white_color mb-0 text-center">{{ $rooms->roomType->price }}<span class="cs_secondary_font cs_fs_21">/Night</span></h2>
                  </div>
                  <div class="cs_form cs_style_4 cs_type_7 cs_mb_35">
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
                              <input type="hidden" name="capacity" id="capacity_input" value="1">
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
                      <div class="cs_form_item_group">
                          <div class="cs_form_item">
                              <label class="cs_white_color">Adults :</label>
                              <div class="cs_quantity_wrap">
                                  <span class="cs_quantity_btn" data-initial-number="1"></span>
                                  <input type="hidden" name="adult" id="adult_input" value="1">
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
                                  <input type="hidden" name="children" id="children_input" value="0">
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
                      </div>
                  </div>
                  <h3 class="cs_fs_28 cs_white_color cs_mb_20">Extra Services</h3>
                  <div class="cs_extra_service_item_list cs_mb_35">
                      <div class="cs_extra_service_item">
                          <div class="cs_checkbox">
                              <input type="checkbox" name="room_clean" value="yes">
                              <label>Room Clean</label>
                          </div>
                          <div class="cs_extra_service_item_right">
                              <span>$20 /Night</span>
                          </div>
                      </div>
                      <div class="cs_extra_service_item">
                          <div class="cs_checkbox">
                              <input type="checkbox" name="spa" value="yes">
                              <label>Wellness & Spa</label>
                          </div>
                          <div class="cs_extra_service_item_right">
                              <span>$10 /Person</span>
                              <div class="cs_form_item">
                                  <div class="cs_quantity_wrap">
                                      <span class="cs_quantity_btn" data-initial-number="1"></span>
                                      <input type="hidden" name="spa_quantity" id="spa_quantity" value="1">
                                      <div class="cs_quantity_dropdown cs_primary_color">
                                          <div class="cs_quantity_dropdown_item">
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
                          </div>
                      </div>
                      <div class="cs_extra_service_item">
                          <div class="cs_checkbox">
                              <input type="checkbox" name="massage" value="yes">
                              <label>Massage</label>
                          </div>
                          <div class="cs_extra_service_item_right">
                              <span>$15 /Person</span>
                              <div class="cs_form_item">
                                  <div class="cs_quantity_wrap">
                                      <span class="cs_quantity_btn" data-initial-number="1"></span>
                                      <input type="hidden" name="massage_quantity" id="massage_quantity" value="1">
                                      <div class="cs_quantity_dropdown cs_primary_color">
                                          <div class="cs_quantity_dropdown_item">
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
                          </div>
                      </div>
                  </div>
{{--                  <input type="hidden" name="room_id" value="{{ $rooms->id }}">--}}
                  <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                  <input type="hidden" name="total_price" id="total_price_input">
                  <button class="cs_btn cs_style_1 cs_color_1 cs_fs_15 cs_medium cs_radius_5 w-100">Book Room Now</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_70"></div>
  </section>
  <!-- End Room Details Section -->

  <!-- Image Gallery Section -->
  <div class="container">
    <div class="row cs_row_gap_lg_10">
      <div class="col-3">
        <div class="overflow-hidden cs_radius_5">
            <div class="cs_gallery_slider_nav slick-slider">
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe1.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe2.jpeg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe3.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe4.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe5.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_mini">
                    <img src="{{ asset('assets/img/Deluxe6.jpg') }}" alt="Thumb">
                </div>
            </div>

        </div>
      </div>
      <div class="col-9">
        <div class="position-relative overflow-hidden cs_radius_5 cs_gallery_hover_show_nav cs_primary_bg">
            <div class="cs_gallery_slider_thumb slick-slider">
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe11.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe22.jpeg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe33.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe44.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe55.jpg') }}" alt="Thumb">
                </div>
                <div class="cs_gallery_slider_thumb_item">
                    <img src="{{ asset('assets/img/Deluxe66.jpg') }}" alt="Thumb">
                </div>
            </div>

            <div class="cs_left_arrow_gallery cs_center">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z" fill="currentColor"/>
            </svg>
          </div>
          <div class="cs_right_arrow_gallery cs_center">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.2929L14.3431 0.928933C13.9526 0.538409 13.3195 0.538409 12.9289 0.928933C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM-8.74228e-08 9L20 9L20 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Image Gallery Section -->

  <!-- Start Feature Section -->
  <section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Why CHOOSE SEAPEARL?</p>
        <h2 class="cs_fs_67 mb-0"> Unveiling Unmatched Coastal <br>Luxury and Hospitality</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container">
      <div class="row cs_row_gap_50 cs_gap_y_75">
        <div class="col-lg-4 col-md-6">
          <div class="cs_iconbox cs_style_1">
              @foreach($rooms->roomType->amenities as $amenity)
            <div class="cs_iconbox_icon cs_mb_29"><img src="{{ asset('assets/img/icons/restaurant.svg') }}" alt="Icon"></div>
            <h3 class="cs_iconbox_title cs_mb_19 cs_fs_38">{{ $amenity->name }}</h3>
            <p class="cs_iconbox_subtitle mb-0">Exceptional dining awaits at our resort. Immerse yourself in exquisite  flavors with view to match. Pure indulgence, effortlessly delivered.</p>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature Section -->

  <!-- Start Related Rooms Section -->


  @include('user.layouts.footer')
  @include('user.layouts.script')
