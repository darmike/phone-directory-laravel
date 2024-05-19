@extends('layout')


@section('content')

    @if(count($users))

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John Doe</td>
                <td>john@mail.com</td>
                <td>555 555-55-55</td>
            </tr>

            </tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                </tr>
            @endforeach
        </table>

    </div><!-- ./table-responsive-->

        {{ $users->links() }}
    @endif
@endsection
