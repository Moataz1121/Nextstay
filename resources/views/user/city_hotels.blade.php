@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center"
    data-src="{{ asset('assets/img/page_heading_bg_gallery3.jpeg') }}">
    <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_67">{{ $city->name }} Hotels</h1>
    </div>
</section>

<section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Stay in</p>
            <h2 class="cs_fs_67 mb-0">{{ $city->name }}'s<br>Top Hotels</h2>
        </div>
        <div class="cs_height_80 cs_height_lg_50"></div>

        <div class="row">
            @forelse ($hotels as $hotel)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        @if ($hotel->hasMedia('hotel_images'))
                            <img src="{{ $hotel->getFirstMediaUrl('hotel_images') }}" class="card-img-top"
                                alt="{{ $hotel->name }}">
                        @else
                            <img src="{{ asset('default-hotel.jpg') }}" class="card-img-top" alt="Default Hotel">
                        @endif
                        <div class="card-body">
                            <a href="{{ route('hotel.rooms', $hotel->id) }}" class="btn btn-outline-primary mt-2">View Rooms</a>

                            <h5 class="card-title">{{ $hotel->name }}</h5>
                            <p class="card-text">{{ $hotel->address }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">No hotels found in {{ $city->name }}.</p>
            @endforelse
        </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

@include('user.layouts.footer')
@include('user.layouts.script')
