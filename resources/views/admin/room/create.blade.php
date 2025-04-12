@extends('admin.master')

@section('content')
<div class="container bg-white my-3 p-3">
    <div class="row m-4">
        <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h5>Add New Room</h5>

            <div class="row">
                <!-- Room Number -->
                <div class="col-md-6 mb-3">
                    <label for="room_number" class="form-label">Room Number</label>
                    <input type="text" value="{{ old('number') }}" class="form-control" id="room_number" name="room_number">
                    @error('room_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Room Type -->
                <div class="col-md-6 mb-3">
                    <label for="room_type_id" class="form-label">Room Type</label>
                    <select class="form-control" id="room_type_id" name="room_type_id">
                        <option value="" disabled selected>Select Type</option>
                        @foreach($roomTypes as $type)
                            <option value="{{ $type->id }}" {{ old('room_type_id') == $type->id ? 'selected' : '' }}>
                                {{ ucfirst($type->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('room_type_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Price -->
                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" value="{{ old('price') }}" class="form-control" id="price" name="price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Status -->
                <div class="col-md-6 mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control" id="status" name="status">
                        <option value="" disabled selected>Select Status</option>
                        <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                        <option value="booked" {{ old('status') == 'booked' ? 'selected' : '' }}>Booked</option>
                        <option value="maintenance" {{ old('status') == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                    </select>
                    @error('status')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Images Upload -->
                <div class="col-md-12 mb-3">
                    <label for="images" class="form-label">Room Images</label>
                    <input type="file" name="images[]" multiple class="form-control" id="images">
                    @error('images')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    @error('images.*')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary mt-3">Save</button>

        </form>
    </div>
</div>
@endsection
