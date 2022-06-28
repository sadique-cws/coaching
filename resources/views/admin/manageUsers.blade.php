@extends('base')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h4 class="display-6">Manage Users</h4>
                <hr>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>contact</th>
                        <th>Email</th>
                        <th>created at</th>
                        <th>action</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->contact}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                <a href="" class="btn btn-danger">X</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection