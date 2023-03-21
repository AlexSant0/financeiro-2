jQuery(function($) {
    // nova entrada
    $('.new-entrada').on('submit', function(e){
        e.preventDefault();
        _this = $(this);
        $.ajax({
            url : _this.attr('action'),
            type: _this.attr('method'),
            data : _this.serialize(),
            dataType: 'json',
            success: function(res){
                if(res.status == 'success'){
                    Swal.fire(
                        'Sucesso',
                        'Entrada adicionada com sucesso!',
                        'success'
                    )
                    console.log(_this.serialize())
                }else{
                    Swal.fire(
                        'Erro',
                        'Falha ao adicionar entrada',
                        'error'
                    )
                }
            },
            error: function(){

            }
        })
    })
});