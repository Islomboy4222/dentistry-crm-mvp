<form action="" method="POST" enctype="multipart/form-data">
    <div class="modal fade text-left" id="ModalTable" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ko'rish</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <div class="m-2 col-md-6">
                            <table class="table table-striped table-hover">
                                <tbody>
                                    @foreach ($patient->treatment as $key => $treatment)
                                        <tr>
                                            <td>№</td>
                                            <td>{{$treatment->tooth_position}}</td>
                                        </tr>
                                        <tr>
                                            <td>Muolaja turi</td>
                                            <td>{{$treatment->treated_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Muolaja vaqti</td>
                                            <td>{{$treatment->created_at}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="m-2 col-md-4">
                            @include('treatments.tooth-chart')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>