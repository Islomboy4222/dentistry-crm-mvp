@extends('layouts.app')
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
       <h5 class="m-0 font-weight-bold text-primary ">
           {{$patient->first_name}} - bemorni ko'rish
        </h5> 
    </div>
    <div class="card-body text-gray-900">
        <div class="card mb-3">
            Ma`lumoti
            <div class="card-body flex">
                <a href="{{route('patients.index')}} " class="btn btn-sm btn-success float-right mb-2"><i class="fa fa-arrow-left"></i> Orqaga</a>
                <table class="table table-striped table-striped-bg-default ">
                    <tbody>
                        <tr>
                            <td>Ismi: </td>
                            <td>{{$patient->first_name}}</td>
                        </tr>
                        <tr>
                            <td>Familyasi</td>
                            <td>{{$patient->last_name}}</td>
                        </tr>
                        <tr>
                            <td>Sharifi</td>
                            <td>{{$patient->middle_name}}</td>
                        </tr>
                        <tr>
                            <td>Tug`ilgan kun</td>
                            <td>{{$patient->birth_day}}</td>
                        </tr>
                        <tr>
                            <td>Telefon nomer</td>
                            <td>{{$patient->phone_number}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
         
    </div>   
</div>
    
@endsection