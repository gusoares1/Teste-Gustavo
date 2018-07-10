<?php

class Agenda extends Crud{
      
    public function Agendar($cliente,$medico,$usuario,$data){
        
        $crud = new Crud;
       
        if(empty($cliente || $medico || $usuario || $data )){
            
            return 'informe o campo';
            
        }else {
            
            $validar = $crud->insert('agenda','id_cliente=?,id_medico=?,id_usuario=?,data=?',array($cliente,$medico,$usuario,$data));
            
                if($validar){

                }else{
                    
                    return 'erro inesperado';
                }        
        }     
    }

    public function Agenda() {
        
        $crud = new Crud;
        
        $crud->select('*','agenda','',array());
        
    }
    

}