@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <div class="row m-4">
            <!-- Change the method to PUT and pass the hotel object to route for updating -->
            <form action="{{ route('admin.hotel.update', $hotel->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')  <!-- Indicate that the request is an update (PUT method) -->

                <h5>Edit Hotel</h5>

                <!-- Grid for Inputs -->
                <div class="row">
                    <!-- Hotel Name Input -->
                    <div class="col-md-6 mb-3">
                        <label for="cityName" class="form-label">Hotel Name</label>
                        <input type="text" value="{{ old('name', $hotel->name) }}" class="form-control" id="cityName" name="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- City Dropdown -->
                    <div class="col-md-6 mb-3">
                        <label for="city_id" class="form-label">Select City</label>
                        <select class="form-control" id="city_id" name="city_id">
                            <option value="" disabled>Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}" {{ old('city_id', $hotel->city_id) == $city->id ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('city_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Address Input -->
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Hotel Address</label>
                        <input type="text" value="{{ old('address', $hotel->address) }}" class="form-control" id="address" name="address">
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Image Upload (Multiple Files) -->
                    <div class="col-md-6 mb-3">
                        <label for="images" class="form-label">Upload Hotel Images</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
