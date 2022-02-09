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
                    <form method="POST" enctype="multipart/form-data" action="{{route('patients.store')}}">
                        @csrf

                        <div class="form-group">
                            <label for="successInput">Ismi</label>
                            <input type="text" id="first_name" name="first_name" class="form-control">
                            <small class="form-text text-muted">Bemorning ismini yozing.</small>
                        </div>
                        <div class="form-group">
                            <label for="successInput">Familyasi</label>
                            <input type="text" id="last_name" name="last_name" class="form-control">
                            <small class="form-text text-muted">Bemorning familyasini yozing.</small>
                        </div>
                        <div class="form-group">
                            <label for="successInput">Sharifi</label>
                            <input type="text" id="middle_name" name="middle_name" class="form-control">
                            <small class="form-text text-muted">Bemorning sharifini yozing.</small>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="errorInput">Tug'lgan kun oy yil</label>
                            <input type="date" id="birth_day" name="birth_day" class="form-control">
                            <small class="form-text text-muted">Bemorninf tug'ilgan kun oy yilini yozing.</small>
                        </div>
                        <div class="form-group">
                            <label for="successInput">Telefon nomer</label>
                            <input type="number" id="phone_number" name="phone_number" class="form-control">
                            <small class="form-text text-muted">Telefon nomerni yozing.</small>
                        </div>
                        <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection