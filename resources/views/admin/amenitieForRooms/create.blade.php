@extends('admin.master')

@section('content')
<div class="container bg-white my-3 p-3">

    <div class="row m-4">
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <h5 class="">Add New Amenity For Rooms</h5>
            <form action="{{ route('admin.amenities-room.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="cityName" class="form-label">Amenity Name</label>
                    <input type="text"  value="{{ old('name') }}" class="form-control" id="cityName" name="name" required>
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <label for="HotelName" class="form-label">Room Name</label>
                    <select class="form-control" id="hotel_id" name="room_type_id" >
                        <option value="" disabled selected>Select Room</option>
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}" {{ old('room_type_id') == $room->id ? 'selected' : '' }}>
                                {{ $room->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('room_type_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
