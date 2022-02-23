$('button.load-treatment').click(function(){
    $url = $(this).data('url');
    $.ajax({
     type: 'GET',
     url: $url,
     dataType: 'html',
    success: function(data) {
        $("#modal-threatment .modal-body").html(data);
        $("#modal-threatment").modal('show');
        $('.modal-backdrop').css({zIndex: 5});
     }
   });
});