@extends('admin.master')
@section('roomtype','active')
@section('title','Room Type')
@section('content')

<div class="p-3 m-3 bg-white">
<h1 class="text-center">All Room Type</h1>

@if(session('success'))
<div id="successMessage" class="alert alert-success mb-4">
    {{ session('success') }}
</div>
@endif

<a href="{{route('admin.roomtype.create')}}" class="btn btn-primary my-2">Create</a>

<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    </thead>
    <tbody>
        @if (count($roomTypes) > 0)
        @foreach ($roomTypes as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td> <a href="{{ route('admin.roomtype.edit', $item) }}" class="btn btn-success"> Update</a>
            </td>
            <td><a href="{{ route('admin.roomtype.show', $item) }}" class="btn btn-info"> Show</a></td>
            <td>
                <form action="{{ route('admin.roomtype.destroy', $item) }}" method="POST" >

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
<div class="d-flex justify-content-center">
    {{-- {{ $hotels->links() }} --}}
    {{ $roomTypes->links('pagination::bootstrap-4') }}
</div>
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