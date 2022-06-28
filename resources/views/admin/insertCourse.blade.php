@extends('base')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <h3 class="display-6">Insert new Course</h3>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('course.store')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">title</label>
                                        <input type="text" name="title" value="{{old('title')}}" class="form-control">
                                        @error('title')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">duration</label>
                                        <input type="text" name="duration" value="{{old('duration')}}" class="form-control">
                                        @error('duration')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">fee</label>
                                        <input type="text" name="fee" value="{{old('fee')}}" class="form-control">
                                        @error('fee')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">discount_fee</label>
                                        <input type="text" name="discount_fee" value="{{old('discount_fee')}}" class="form-control">
                                        @error('discount_fee')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">description</label>
                                        <input type="text" name="description" value="{{old('description')}}" class="form-control">
                                        @error('description')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">category</label>
                                        <input type="text" value="{{old('category')}}" name="category" class="form-control">
                                        @error('category')
                                        <p class="text-danger small">{{$message}}</p>
                                    @enderror
                                    </div>
                                   
                                    <div class="mb-3">
                                        <input type="submit" value="Create new Course" class="btn btn-success w-100">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection