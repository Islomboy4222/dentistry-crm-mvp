<div class="row g-2">
    <div class="m-2 col-md-6">
        <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <td>№</td>
                    <td>{{$item->tooth_position}}</td>
                </tr>
                <tr>
                    <td>Muolaja turi</td>
                    <td>{{ $item->typeString }}</td>
                </tr>
                <tr>
                    <td>Muolaja vaqti</td>
                    <td>{{$item->created_at->format('d-m-Y')}}</td>
                    {{-- {{dd($item)}} --}}
                </tr>
            </tbody>
        </table>
    </div>
    <div class="m-2 col-md-4">
        @include('treatments.tooth-chart')
    </div>
</div>