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
                  @foreach($hotels as $hotel)
                      <div class="col-xl-6 col-lg-12 col-md-6">
                          <div class="cs_card cs_style_7 cs_radius_5 overflow-hidden">
                              <a href="{{ route('details.hotel', $hotel->id) }}" class="cs_card_thumb d-block overflow-hidden position-relative cs_primary_bg">
                                  <img src="{{ $hotel->getFirstMediaUrl('hotel_images') }}" alt="Room">
                                  <span class="cs_card_btn position-absolute cs_zindex_2">
              <span class="cs_btn cs_style_2 cs_accent_btn cs_medium cs_radius_5 cs_fs_15">
                <b>Details View</b>
              </span>
            </span>
                              </a>
                              <div class="cs_card_info position-relative">
                                  <h2 class="cs_card_title cs_fs_50 cs_mb_4">
                                      <a href="{{ route('details.hotel', $hotel->id) }}">{{ $hotel->name }}</a>
                                  </h2>
                                  @foreach($hotel->roomTypes as $type)
                                  <div class="cs_card_price cs_mb_17">
                                      <span class="cs_primary_color">From</span>
                                      <span class="cs_accent_color cs_fs_38 cs_primary_font">EGP {{ $type->price ?? '' }}/Night</span>
                                  </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>

  @include('user.layouts.footer')
  @include('user.layouts.script')
