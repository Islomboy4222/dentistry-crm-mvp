@extends('layouts.app')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
       <h5 class="m-0 font-weight-bold text-primary ">
           {{$patient->first_name}} - bemorni ko'rish
        </h5> 
    </div>
    <div class="card-body text-gray-900">
        <a href="{{route('patients.index')}} " class="btn btn-sm btn-success mb-2"><i class="fa fa-arrow-left"></i> Orqaga</a>
        <div class="card mb-3">
            <div class="card-body flex">
                <table class="table table-striped table-striped-bg-default ">
                    <thead>
                        <tr>
                            <th scope="col">Ismi</th>
                            <th scope="col">Familyasi</th>
                            <th scope="col">Sharifi</th>
                            <th scope="col">Tug'ulgan kuni</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->middle_name}}</td>
                            <td>{{$patient->birth_day}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
         
    </div>   
</div>
    
@endsection