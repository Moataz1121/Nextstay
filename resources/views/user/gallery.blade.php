@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center" data-src="assets/img/page_heading_bg_gallery3.jpeg">
    <div class="container">
      <h1 class="cs_white_color text-center mb-0 cs_fs_67">Popular Destinations</h1>
    </div>
  </section>
  <section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 text-center">
        <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Choose From</p>
        <h2 class="cs_fs_67 mb-0">Our MOST<br>Popular Destinations</h2>
      </div>
      <div class="cs_height_80 cs_height_lg_50"></div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($cities as $city)
                @if ($city->hasMedia('city_images'))
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="position-relative overflow-hidden rounded" style="height: 400px;">
                            <a href="{{ route('city.hotels', $city->id) }}">
                                <img src="{{ $city->getFirstMediaUrl('city_images') }}" alt="{{ $city->name }}" class="w-100 h-100"
                                    style="object-fit: cover; border-radius: 8px;">
                                <div class="position-absolute bottom-0 start-0 w-100 p-2" style="background: rgba(0, 0, 0, 0.6);">
                                    <h5 class="text-white m-0">{{ $city->name }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>



        </button>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>

  @include('user.layouts.footer')
  @include('user.layouts.script')
