@extends('layouts.app')
  @section('content')
  <div class="container-fluid">
    
    <div class="card">
        @include('alerts.main')
      <div>
        <table class="table">
          <thead>
              <tr>
                  <th scope="col">Ismi</th>
                  <th scope="col">Familyasi</th>
                  <th scope="col">Sharifi</th>
                  <th scope="col">Tug'lgan kuni</th>
                  <th scope="col">Telefon nomer</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($patients as $patient)
                  <tr>
                      <td>{{$patient->first_name}}</td>
                      <td>{{$patient->last_name}}</td>
                      <td>{{$patient->middle_name}}</td>
                      <td>{{$patient->birth_day}}</td>
                      <td>{{$patient->phone_number}}</td>
                      <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                          <a href="{{route('patients.show',$patient->id)}}" class="btn btn-primary">
                              <i class="fa fa-eye"></i> Ko'rish
                          </a>
                          <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="{{route('patients.edit', $patient->id)}}"><i class="fa fa-edit"></i> Tahrirlash</a>
                              <form method="POST" onsubmit="return confirm('O`chirish aniqmi?')" action="{{route('patients.destroy', $patient->id)}}">
                                  @csrf
                                  @method('DELETE')
                                  <button class="dropdown-item" type="submit"><i class="fa fa-trash"></i> O'chirish</button>
                              </form> 
                            </div>
                          </div>
                        </div>
                    </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
        <nav class="mb-4">
            {{$patients->links('pagination::bootstrap-4')}}
        </nav>
      </div>
    </div>
  </div>
  @endsection