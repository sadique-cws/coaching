@extends('base')


@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h2 class="display-2">{{$total_students}}</h2>
                                <h6>total students</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h2 class="display-2">{{$total_users}}</h2>
                                <h6 >total Users</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h2 class="display-2">30+</h2>
                                <h6>total Payment</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection