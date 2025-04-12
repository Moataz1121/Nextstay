@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <div class="row m-4">
            <form action="{{ route('admin.roomtype.update' , $roomType->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <h5>Add New Room Type</h5>

                <!-- Grid for Inputs -->
                <div class="row">
                    <!-- Hotel Name Input -->
                    <div class="col-md-6 mb-3">
                        <label for="cityName" class="form-label">Name</label>


                        <select class="form-control" id="city_id" name="name" >
                            <option value="" disabled selected>Select Room Type</option>

                            <option value="single" {{old('name')}}> Single</option>
                            <option value="double" {{old('name')}}>Double</option>
                            <option value="suite" {{old('name')}}> Suite</option>

                        </select>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- City Dropdown -->
                    <div class="col-md-6 mb-3">
                        <label for="city_id" class="form-label">Select Hotel</label>
                        <select class="form-control" id="hotel_id" name="hotel_id" >
                            <option value="" disabled selected>Select Hotel</option>
                            @foreach ($hotels as $city)
                                <option value="{{ $city->id }}" {{ old('city_id') == $city->id ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('hotel_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Address Input -->
                    <div class="col-md-6 mb-3">
                        <label for="address" class="form-label">Room Price</label>

                        <input type="text" value="{{ old('price' , $roomType->price) }}" class="form-control" id="address" name="price" >
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Image Upload (Multiple Files) -->
                    <div class="col-md-6 mb-3">
                        <label for="images" class="form-label">Set The Max Capacity</label>
                        <input type="number" value="{{ old('capacity' , $roomType->capacity) }}" class="form-control" id="images" name="capacity" >
                        @error('capacity')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
