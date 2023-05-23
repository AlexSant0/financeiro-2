jQuery(function($) {
    // nova transacao
    $('.new-transaction').on('submit', function(e){
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
                        res.message,
                        'success'
                    )
                    _this[0].reset();
                }else{
                    Swal.fire(
                        'Erro',
                        res.message,
                        'error'
                    )
                }
            },
            error: function(){

            }
        })
    })

  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});

  $( ".select-method" ).on( "click", function() {
    console.log($('.select-method').val)
    // if($( this ).val){}
  });
});