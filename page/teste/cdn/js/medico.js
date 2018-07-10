function fctlogin()
{
    $.post('cdn/php/medico.js.php',
    {
        
        nome:$('#nome').val()
        
    },function(res){
        
        if(res)
           $('#mensagem').html(res).css({color:'#f00'});
       else
           $('#mensagem').html('cadastro relaizado com sucesso ')
        });

}

