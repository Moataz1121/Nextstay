@extends('admin.master')

@section('content')
    <div class="container bg-white my-3 p-3">
        <h5>Contacts</h5>

        @if($contacts->isEmpty())
            <p>No contact messages found.</p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $index => $contact)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $contact->name ?? 'N/A' }}</td>
                                <td>{{ $contact->email ?? 'N/A' }}</td>
                                <td>{{ $contact->message ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
