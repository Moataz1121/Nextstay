@extends('admin.master')

@section('content')
<div class="container bg-white my-3 p-3">

    <div class="row m-4">
        <div class="col-lg-6 col-md-8 col-sm-10 ">
            <h5 class="">Add New City</h5>
            <form action="{{ route('admin.city.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text"  value="{{ old('name') }}" class="form-control" id="cityName" name="name" required>
                    <label for="cityName" class="form-label">City Name</label>
                    @error('name')
                        <span class="text-danger"> {{ $message }}</span>
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
