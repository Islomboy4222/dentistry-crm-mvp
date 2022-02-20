@extends('layouts.app')

@section('content')

  <div class="container-fluid">
    <div class="row">
        <div class="card shadow col-md-6 mt-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Muolaja qo'shish</div>
                </div>
                <div class="card-body">
                    <a href="{{route('patients.index')}} " class="btn btn-sm btn-success float-right mb-2"><i class="fa fa-arrow-left"></i> Orqaga</a>
                    @include('alerts.main')
                    <form class="form_val" method="POST" aria-required="" enctype="multipart/form-data" action="{{route('store')}}">
                        @csrf
                        <input type="hidden" name="tooth_position" required>
                        <input type="hidden" name="patient_id" value="{{$id}}">
                        <div class="form-group">
                            <label for="successInput">Muolajani tanlang</label>
                            <select name="treated_id" class="form-select" aria-label="Default select example">
                                <option selected>Muolaja turini tanlang</option>
                                @foreach ($treatments as $key => $treatment)
                                    <option class="" value="{{$treatment}}">{{$key}}</option>
                                @endforeach
                            </select>
                        </div>
                           
                        <div class="card-action">
                            <button class="btn btn-success">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="card shadow col-md-6 mt-2">
            <div class="card">
                <div class="card-body">
                    @include('treatments.tooth-chart')
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(".form_val").validate({
        rules: {
            tooth_position: {
                required: true
            },
            treated_id: {
                required: true
            }
        },
        ignore: ':hidden:not("#attach")', 
        submitHandler: function (form) {
        alert('successful submit');
        return false;
    }
        
    });
</script>

@endsection