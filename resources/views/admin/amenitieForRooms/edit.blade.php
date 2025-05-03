@extends('admin.master')

@section('content')
<div class="container bg-white my-3 p-3">

    <div class="row m-4">
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <h5 class="">Edit City</h5>
            <form action="{{ route('admin.amenities.update' , $amenities) }}" method="post">
                @method('put')
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" value="{{ $amenities->name }}" id="cityName" name="name" required>
                    <label for="cityName" class="form-label">City Name</label>
                    @error('name')
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
