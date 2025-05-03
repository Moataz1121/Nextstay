@extends('admin.master')

@section('content')
<div class="container bg-white my-3 p-3">

    <div class="row m-4">
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <h5 class="">Add New Amenity</h5>
            <form action="{{ route('admin.amenities.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="cityName" class="form-label">Amenity Name</label><br>
                    <input type="text"  value="{{ old('name') }}" class="form-control" id="cityName" name="name" required>
                    @error('name')
                    <span class="text-danger"> {{ $message }}</span>
                    @enderror

                    <label for="HotelName" class="form-label">Hotel Name</label>
                    <select class="form-control" id="hotel_id" name="hotel_id" >
                        <option value="" disabled selected>Select Hotel</option>
                        @foreach ($hotels as $hotel)
                            <option value="{{ $hotel->id }}" {{ old('hotel_id') == $hotel->id ? 'selected' : '' }}>
                                {{ $hotel->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('hotel_id')
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
