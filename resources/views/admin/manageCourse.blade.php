@extends('base')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h4 class="display-6">Manage Courses</h4>
                    </div>
                    <div class="col-4">
                        <a href="{{route('course.create')}}" class="btn btn-success">Create new Course</a>
                    </div>
                </div>
                <hr>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Discount Fee</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>category</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->title}}</td>
                            <td>{{$course->duration}}</td>
                            <td>{{$course->fee}}</td>
                            <td>{{$course->discount_fee}}</td>
                            <td>{{$course->image}}</td>
                            <td>{{$course->description}}</td>
                            <td>{{$course->category}}</td>
                            <td>{{$course->status}}</td>
                            <td>
                                <form action="{{route('course.destroy',['course'=>$course])}}" method="POST">
                                    @method("delete")
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="X">
                                </form>
                                <a href="{{route('course.edit',['course'=>$course->id])}}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection