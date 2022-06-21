@extends("base")


@section('title')
    Apply for admission 
@endsection

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Apply for admission</div>
                    <div class="card-body">
                        <form action="{{}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">Your Name</label>
                                <input type="text" name="name" value="" class="form-control" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="">Father Name</label>
                                <input type="text" name="fatherName" value="{{old('fatherName')}}" class="form-control">
                                @error('fatherName')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">Mother Name</label>
                                <input type="text" name="motherName" value="{{old('MotherName')}}" class="form-control">
                                @error('motherName')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">DOB</label>
                                <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                                @error('dob')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">education</label>
                                <input type="text" value="{{old('education')}}" name="education" class="form-control">
                                @error('education')
                                <p class="text-danger small">{{$message}}</p>
                            @enderror
                            </div>
                            <div class="mb-3">
                                <label for="">gender</label>
                                <select name="gender" class="form-select">
                                    <option value="m">Male</option>
                                    <option value="f">female</option>
                                    <option value="o">Other</option>
                                </select>
                                @error('gender')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Apply for CWS" class="btn btn-success w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection