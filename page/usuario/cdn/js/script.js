$(document).ready(function(){
    
    //Variaveis locais
    var _seletorLinkAbrir = $(".jmodalabrir");
    var _seletorLinkAbrir2 = $(".jmodalabrir2");
    var _seletorLinkClose = $(".jmodalfechar");
    var _containerModal = $(".jmodal");
    var _containerModal2 = $(".jmodal2");
    var _seletorLinkSalvar = $(".jmodalsalvar");
    
    //Abrindo janela modal
    _seletorLinkAbrir.click(function(){
       _containerModal.fadeToggle(0);       
        return false;
    });
    
    //Fechando janela modal
    _seletorLinkClose.click(function(){
       _containerModal.fadeToggle(0);        
        return false;
    });
    //salvar
    _seletorLinkSalvar.click(function(){
       _containerModal.fadeToggle(0);        
        return false;
    });
    
    //Abrindo janela modal 2
    _seletorLinkAbrir2.click(function(){
       _containerModal2.fadeToggle(0);       
        return false;
    });
    
});
$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 4
});

