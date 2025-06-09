@include('user.layouts.head')
@include('user.layouts.Preloader')
@include('user.layouts.header_2')

<section class="cs_page_heading cs_primary_bg cs_bg_filed cs_center"
    data-src="{{ asset('assets/img/page_heading_bg_gallery3.jpeg') }}">
    <div class="container">
        <h1 class="cs_white_color text-center mb-0 cs_fs_67">{{ $hotel->name }} Rooms</h1>
    </div>
</section>

<section>
    <div class="cs_height_141 cs_height_lg_75"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 text-center">
            <p class="cs_section_subtitle cs_medium cs_letter_spacing_1 cs_mb_28 cs_mb_lg_15 text-uppercase">Available
                Rooms</p>
            <h2 class="cs_fs_67 mb-0">{{ $hotel->name }}<br>Rooms & Prices</h2>
        </div>
        <div class="cs_height_80 cs_height_lg_50"></div>

        @forelse ($roomTypes as $type)
            <h3 class="mb-4">{{ $type->name }} - ${{ $type->price }}</h3>
            <div class="row">
                @forelse ($type->rooms as $room)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('details.room', $room->id) }}" class="text-decoration-none text-dark">
                            <div class="card shadow-sm border-0">
                                @if ($room->hasMedia('room_images'))
                                    <img src="{{ $room->getFirstMediaUrl('room_images') }}" class="card-img-top" alt="Room {{ $room->room_number }}">
                                @else
                                    <img src="{{ asset('default-room.jpg') }}" class="card-img-top" alt="Default Room">
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">Room #{{ $room->room_number }}</h5>
                                    <p class="card-text">Status: {{ ucfirst($room->status) }}</p>
                                    <p class="text-muted small">Click for details</p>
                                </div>
                            </div>
                        </a>
                    </div>

                @empty
                    <p>No rooms found for this type.</p>
                @endforelse
            </div>
            <div class="cs_height_50"></div>
        @empty
            <p class="text-center">No room types found for this hotel.</p>
        @endforelse
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
</section>

@include('user.layouts.footer')
@include('user.layouts.script')
