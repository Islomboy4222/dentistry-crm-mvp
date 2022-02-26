@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Profilni tahrirlash
                    </h6>
                </div>
                <div class="card-body">
                    @include('alerts.main')
                    <form method="POST" action="{{route('profileUpdate')}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="">Ismi</label>
                                    <input class="form-control" value="{{$user->name}}" name="name" type="text" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input class="form-control" value="{{$user->email}}" name="email"  type="text" required>
                                    </div>
                                </div>    
                                <button type="submit" class="btn btn-success">Saqlash</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">
                    Parolni tahrirlash
                    </h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('profilePassword')}}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Yangi parol</label>
                            <input class="form-control" name="password" type="password" required>
                        </div>
                        <div class="form-group">
                            <label for="">Yangi parolni tastiqlash</label>
                            <input class="form-control"  name="password_confirmation"  type="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection