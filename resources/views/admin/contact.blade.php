@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <h5>Contacts</h5>

        <div>
            @foreach($contacts as $contact) @endforeach
            <h6>Name: {{ $contact->name }}</h6>
            <p>Email: {{ $contact->email }}</p>
            <p>Message: {{ $contact->message }}</p>
            <p>User Id: {{ $contact->user_id }}</p>
            <hr>
        </div>
    </div>
@endsection
