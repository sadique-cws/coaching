@extends('base')

@section('data')
    <div class="container">
        <div class="col-4 mx-auto">
            <div class="card">
                <div class="card-header">signup Here</div>
                <div class="card-body">
                    <form action="{{route('signup')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror">
                            @error('contact')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email/username</label>
                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                            @error('email')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" name="send" value="create an account" class="btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection