<?php

class Validar{
   
    public function setValidarNome($nome){
        
        if(empty($nome)){
            
            return 'informe o nome';
            
        }else{
            
            return 'Nome Valido';
                   
        }
        
    }
    
    
}

