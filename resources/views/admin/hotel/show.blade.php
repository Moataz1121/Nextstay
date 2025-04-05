@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <h5>Hotel Details</h5>

        <div>
            <h6>Name: {{ $hotel->name }}</h6>
            <p>Address: {{ $hotel->address }}</p>
            <p>City: {{ $hotel->city->name }}</p>
        </div>

        <div class="mt-4">
            <h6>Images:</h6>
            {{-- @dump($images) --}}
            <div class="row">
                @foreach ($images as $image)
                    <div class="col-md-3 mb-3">
                        <img src="{{ $image->getUrl() }}" alt="Hotel Image" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
