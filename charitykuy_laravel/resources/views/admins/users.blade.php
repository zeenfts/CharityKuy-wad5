@extends('admins.dashboard', ['title' => 'Users'])

@section('content_dsh')
<div class="custom pt-5 pl-5 ml-5">
    <div class="row justify-content-center px-5" style="margin-left: 5.8em">
        {{-- <h3>users</h3> --}}
        <div class="row pt-4">
            <table class="table text-center table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Last Update</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{!! ($user->id == auth()->user()->id) ? '<i class="fa fa-diamond" style="color:coral"></i>'
                            : '' !!}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles}}</td>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop