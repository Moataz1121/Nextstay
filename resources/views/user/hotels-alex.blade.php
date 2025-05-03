@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" style="background-image: url('{{ $hotels->getFirstMediaUrl('hotel_images') }}');">
    <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_67">Seaview Hotel {{ $hotels->name }}</h1>
    </div>
</section>
  <!-- End Page Heading Section -->

  <!-- Start Room Details Section -->
  <section>
    <div class="cs_height_80 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_plr_70">
        <h2 class="cs_fs_50 mb-0 text-center">Seaview {{ $hotels->name }}: Nestled in the heart of Dahab, this charming hotel boasts breathtaking views of the Red Sea and the majestic mountains. Each room is elegantly furnished, providing a comfortable stay for guests</h2>
      </div>
    </div>
    <div class="cs_height_80 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-lg-15">
          <div class="cs_room_details">
            <h2 class="cs_fs_50 cs_mb_29 cs_mb_lg_20">About Accommodation</h2>
            <p class="cs_mb_49 cs_mb_lg_30">Dahab offers a variety of accommodations, from luxury beachfront resorts to budget-friendly hostels and cozy boutique hotels. Many hotels provide beach access, pools, and dive centers, while guesthouses and private villas offer a more personalized stay. Whether you're here for adventure or relaxation, Dahab’s accommodations cater to every traveler’s needs.</p>
            <h3 class="cs_fs_31 cs_mb_29 cs_mb_lg_20">Facilities</h3>

              <ul class="cs_list cs_style_3 cs_mp_0">
              @foreach($hotels->amenities as $hotel)
              <li><img src="{{ asset('assets/img/icons/facility_icon_1.svg') }}" alt="Icon">{{ $hotel->name }}</li>
              @endforeach
            </ul>
          </div>
        </div>

          <div class="container">
              <div class="row cs_row_gap_lg_10">
                  <div class="col-3">
                      <div class="overflow-hidden cs_radius_5">
                          <div class="cs_gallery_slider_nav slick-slider">
                              @foreach($hotels->getMedia('hotel_images') as $image)
                                  <div class="cs_gallery_slider_thumb_mini">
                                      <img src="{{ $image->getUrl() }}" alt="Thumb">
                                  </div>
                              @endforeach
                          </div>
                      </div>
                  </div>

                  <div class="col-9">
                      <div class="position-relative overflow-hidden cs_radius_5 cs_gallery_hover_show_nav cs_primary_bg">
                          <div class="cs_gallery_slider_thumb slick-slider">
                              <div class="cs_gallery_slider_thumb_item">
                                  <img src="{{ asset('assets/img/first1.jpg') }}" alt="Thumb">
                              </div>
                              <div class="cs_gallery_slider_thumb_item">
                                  <img src="{{ asset('assets/img/first3copy.jpg') }}" alt="Thumb">
                              </div>
                              <div class="cs_gallery_slider_thumb_item">
                                  <img src="{{ asset('assets/img/first2copy.jpg') }}" alt="Thumb">
                              </div>
                              <div class="cs_gallery_slider_thumb_item">
                                  <img src="{{ asset('assets/img/first4.jpg') }}" alt="Thumb">
                              </div>
                          </div>

                          <!-- arrows عادي تحت -->
                          <div class="cs_left_arrow_gallery cs_center">
                              <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM21 7L1 7V9L21 9V7Z" fill="currentColor"/>
                              </svg>                          </div>
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
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Why CHOOSE SEAVIEW HOTEL?</p>
        <h2 class="cs_fs_67 mb-0"> Unveiling Unmatched Coastal <br>Luxury and Hospitality</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container">
      <div class="row cs_row_gap_50 cs_gap_y_75">
              @foreach($hotels->amenities as $hotel)
        <div class="col-lg-4 col-md-6">
          <div class="cs_iconbox cs_style_1">
            <div class="cs_iconbox_icon cs_mb_29"><img src="{{ asset('assets/img/icons/restaurant.svg') }}" alt="Icon"></div>
            <h3 class="cs_iconbox_title cs_mb_19 cs_fs_38">{{ $hotel->name }}</h3>
            <p class="cs_iconbox_subtitle mb-0">Exceptional dining awaits at our resort. Immerse yourself in exquisite  flavors with view to match. Pure indulgence, effortlessly delivered.</p>
          </div>
        </div>
              @endforeach
      </div>
    </div>
  </section>
  <!-- End Feature Section -->

  <!-- Start Related Rooms Section -->
          <section>
              <div class="cs_height_140 cs_height_lg_70"></div>
              <div class="container">
                  <div class="cs_section_heading cs_style_1 text-center">
                      <h2 class="cs_fs_67 mb-0">Available Rooms</h2>
                  </div>
                  <div class="cs_height_80 cs_height_lg_50"></div>
              </div>
              <div class="cs_slider cs_style_1 cs_slider_gap_24 cs_hover_show_arrows">
                  <div class="container">
                      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="3" data-add-slides="3">
                          <div class="cs_slider_wrapper">
                              @foreach($moreRooms as $more)
                                  <div class="cs_slide">
                                      <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                                              <a href="{{ route('details.room', $more->id) }}" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                                                  <img src="{{ asset('assets/img/single-dahab.jpg') }}" alt="Room">
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
{{--                                 @foreach($more->rooms as $room)--}}
{{--                                    <h2 class="cs_card_title cs_fs_50 cs_mb_4"><a href="{{ route('details.room', $more->id) }}">{{ $more->roomType->name }}</a></h2>--}}
{{--                                  @endforeach--}}
                      <div class="cs_card_price cs_mb_17">
                                                      <span class="cs_primary_color">From</span>
                                                      <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP{{ $more->roomType->price }}/Night</span>
                                                  </div>
                                              </div>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                          <div class="cs_pagination cs_style_1 cs_mobile_show"></div>
                      </div>
                      <div class="cs_slider_arrows cs_style_2 cs_mobile_hide">
                          <div class="cs_left_arrow slick-arrow">
                              <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0.292893 7.29289C-0.0976311 7.68342 -0.0976311 8.31658 0.292893 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292893 7.29289ZM56 7L1 7V9L56 9V7Z" fill="currentColor"/>
                              </svg>
                          </div>
                          <div class="cs_right_arrow slick-arrow">
                              <svg width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M55.7071 8.70711C56.0976 8.31659 56.0976 7.68342 55.7071 7.2929L49.3431 0.928937C48.9526 0.538412 48.3195 0.538412 47.9289 0.928936C47.5384 1.31946 47.5384 1.95263 47.9289 2.34315L53.5858 8L47.9289 13.6569C47.5384 14.0474 47.5384 14.6805 47.9289 15.0711C48.3195 15.4616 48.9526 15.4616 49.3431 15.0711L55.7071 8.70711ZM-8.74228e-08 9L55 9L55 7L8.74228e-08 7L-8.74228e-08 9Z" fill="currentColor"/>
                              </svg>
                          </div>
                      </div>
                  </div>
                  <div class="cs_height_150 cs_height_lg_80"></div>
          </section>

@include('user.layouts.footer')
  @include('user.layouts.script')
