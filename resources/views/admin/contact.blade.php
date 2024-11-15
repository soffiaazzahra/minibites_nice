@extends('admin.page')

@section('content')
<body>
    <div class="container admin-container" style="margin-top: 100px;"> <!-- Menggunakan margin-top agar konten lebih jauh turun -->
        
        <h2 class="mb-4">User Contacts</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->number }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>{{ $contact->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
@endsection
