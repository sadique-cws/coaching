@extends('base')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h4 class="display-6">Manage Students</h4>
                <hr>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>mother Name</th>
                        <th>Date of Birth</th>
                        <th>Education</th>
                        <th>address</th>
                        <th>gender</th>
                        <th>action</th>
                    </tr>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->user->name}}</td>
                            <td>{{$student->father_name}}</td>
                            <td>{{$student->mother_name}}</td>
                            <td>{{$student->dob}}</td>
                            <td>{{$student->education}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->gender}}</td>
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