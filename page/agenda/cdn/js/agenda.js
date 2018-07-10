function fctlogin()
{
    $.post('cdn/php/agenda.js.php',
    {
        
        paciente:$('#paciente').val(),
        medico:$('#medico').val(),
        usuario:$('#usuario').val(),
        data:$('#data').val() 
        
    },function(res){
        
        if(res)
           $('#mensagem').html(res).css({color:'#f00'});
       else
           $('#mensagem').html('agendamento relaizado com sucesso ')
        });

}

