@extends('layouts.app')
@section('content')
    <div class="row g-2">
        <div class="col-md-4">
            @include('alerts.main')
            <div class="card-header m-3 py-3">
                <h5 class="m-0 font-weight-bold text-primary ">
                    {{$patient->first_name}} - ma'lumoti
                </h5> 
            </div>
            <div class="card-body text-gray-900">
                <div class="card mb-3">
                    <div class="">
                        <a href="{{route('treatments', $patient->id)}} " class="btn btn-sm btn-success float-right mr-2 mt-2"><i class="fa fa-plus"></i> Qo'shish</a>
                    </div>
                    <div class="card-body flex">
                        <table class="table table-striped table-striped-bg-default ">
                            <tbody>
                                <tr>
                                    <td>Ismi </td>
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

        <div class="mt-2 col-md-8">
            <div class="card-header m-2 py-3">
                <h5 class="m-0 font-weight-bold text-primary ">
                    {{$patient->first_name}} - kassalik tarixi
                    <a href="{{route('patients.index')}} " class="btn btn-sm btn-success  float-right"><i class="fa fa-arrow-left"></i> Orqaga</a>
                </h5> 
            </div>
            <div class="card-body text-gray-900 mt-2">
                <div class="card mb-3">
                    <div class="card-body flex">
                        <table class="table table-striped table-hover">
                            <thead>
                                <th>№</th>
                                <th>Muolaja turi</th>
                                <th>Muolaja vaqti</th>
                            </thead>
                            <tbody>
                                @foreach ($patient->treatment as $item)
                                    <tr>
                                        <td>{{$item->tooth_position}}</td>
                                        <td>{{$type[$item->treated_id]}}</td>
                                        <td>{{$item->created_at->format('d-m-Y')}}</td>
                                        <td>
                                        <td>
                                            <button class="btn btn-sm btn-primary load-treatment" data-url="{{ route('modal', $item->id) }}">Ko'rish</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('outer-elements')
    @include('treatments.modal')
@endpush