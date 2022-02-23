@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Bemorni ro'yhatdan o'tkazish</div>
                </div>
                <div class="card-body">
                    <a href="{{route('patients.index')}} " class="btn btn-sm btn-success float-right mb-2"><i class="fa fa-arrow-left"></i> Orqaga</a>
                    @include('alerts.main')
                    <form method="POST" enctype="multipart/form-data" class="needs-validation" novalidate action="{{route('patients.store')}}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label">Ismi</label>
                            <input type="text" value="{{old("first_name")}}" name="first_name" class="form-control @error('first_name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                Iltimos bemorning ismini yozing.
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="successInput">Familyasi</label>
                            <input type="text" value="{{old('last_name')}}" name="last_name" class="form-control @error('last_name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                Iltimos bemorning familyasini yozing.
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sharifi</label>
                            <input type="text" value="{{old('middle_name')}}" id="middle_name" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror">
                            <div class="invalid-feedback">
                                Iltimos bemorning sharifini yozing.
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Tug'lgan sanasi</label>
                            <input type="date" value="{{old('birth_day')}}" name="birth_day" class="form-control @error('birth_day') is-invalid @enderror">
                            <div class="invalid-feedback">
                                Iltimos bemorning tug'ulgan sanasini yozing.
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Telefon nomeri</label>
                            <input type="number" value="{{old('phone_number')}}" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror">
                            <div class="invalid-feedback">
                                Iltimos bemorning telefon nomerini yozing.
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection