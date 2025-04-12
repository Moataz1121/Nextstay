@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <h5>Hotel Details</h5>

        <div>
            <h6>Number: {{ $room->room_number }}</h6>
            <p>Status: {{ $room->status }}</p>
            <p>Room Type: {{ $room->roomType->name ?? 'N/A' }}</p>
        </div>

        <div class="mt-4">
            <h6>Images:</h6>
            {{-- @dump($images) --}}
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-md-3 mb-3">
                        <img src="{{ $image->getUrl() }}" alt="room Image" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
