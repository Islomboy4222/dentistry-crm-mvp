@extends('layouts.app')
@section('content')

  <div class="container-fluit mt-3">
      @include('alerts.main')
      <table class="table">
          <thead>
              <tr>
                  <th scope="col">Ismi</th>
                  <th scope="col">Familyasi</th>
                  <th scope="col">Sharifi</th>
                  <th scope="col">Tug'lgan kuni</th>

              </tr>
          </thead>
          <tbody>
              @foreach ($patients as $patient)
                  <tr>
                      <td>{{$patient->first_name}}</td>
                      <td>{{$patient->last_name}}</td>
                      <td>{{$patient->middle_name}}</td>
                      <td>{{$patient->birth_day}}</td>
                      <td>
                          <a class="dropdown-item" href="{{route('patients.edit', $patient->id)}}"><i class="fa fa-edit"></i> Tahrirlash</a>
                          <button class="dropdown-item delete-btn" data-url="{{route('patients.destroy', $patient->id)}}"><i class="fa fa-trash"></i> O'chirish</button>
                            
                    </td>
                  </tr>
              @endforeach
              @include('components.modal')
          </tbody>
      </table>
        {{$patients->links()}}
  </div>
  
@endsection