@extends('admin.master')
@section('amenities','active')
@section('title','City')
@section('content')

<div class="p-3 m-3 bg-white">
<h1 class="text-center">All Amenities For Rooms</h1>

@if(session('success'))
<div id="successMessage" class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

<a href="{{route('admin.amenities-room.create')}}" class="btn btn-primary my-2">Create</a>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody>
        @if (count($amenities) > 0)
        @foreach ($amenities as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td> <a href="{{ route('admin.amenities.edit', $item) }}" class="btn btn-success"> Update</a>
            </td>
            <td>
                <form action="{{ route('admin.amenities.destroy', $item) }}" method="POST" >

                    @csrf
                    @method('DELETE')

                    <input onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>

        </tr>
    @endforeach
        @endif



    </tbody>

</table>
</div>
<script>
    // Check if success message exists
    window.onload = function() {
        const successMessage = document.getElementById('successMessage');
        if (successMessage) {
            // Set a timeout to hide the success message after 5 seconds
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 5000); // 5000ms = 5 seconds
        }
    };
</script>
@endsection
