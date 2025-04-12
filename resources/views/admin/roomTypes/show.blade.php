@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <h5>Hotel Details</h5>

        <div>
            <h6>Type: {{ $roomType->name }}</h6>
            <p>Price: {{ $roomType->price }}</p>
            <p>Capacity: {{ $roomType->capacity }}</p>
            <p>Hotel Name: {{ $roomType->hotel->name }}</p>
        </div>


    </div>
@endsection
