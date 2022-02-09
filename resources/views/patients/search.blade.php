@extends('layouts.app')
@section('content')
    @if(!count($search) || empty($search))
        <div class="alert alert-danger">
            Sizning "{{ request()->get('term') }}" so'rovingiz bo'yicha hech nima topilmadi.
        </div>
    @endif
    <a href="{{route('patients.index')}} " class="btn btn-success btn-border btn-round float-right mb-2"><i class="fa fa-arrow-left"></i> Orqaga</a>
        <div class="blog_details">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Ismi</th>
                        <th scope="col">Familyasi</th>
                        <th scope="col">Telefon nomer</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($search as $item)
                            <tr>
                                <td> <a href="{{route('patients.show', $item->id)}}">{{$item->first_name}}</a></td>
                                <td> <a href="{{route('patients.show', $item->id)}}">{{$item->last_name}}</a></td>
                                <td> <a href="{{route('patients.show', $item->id)}}">{{$item->phone_number}}</a></td>
                            </tr>
                    @endforeach
            </table>
            <nav class="mb-4">
                {{$search->links('pagination::bootstrap-4')}}
            </nav>
        </div>
  
@endsection