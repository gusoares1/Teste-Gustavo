<?php

class Medico extends Crud{
      
    public function cadastrarMedico($nome){
        
        $crud = new Crud;
       
        if(empty($nome)){
            
            return 'informe o nome';
            
        }else {
            
            $validar =$crud->insert('medico','nome=?',array($nome));
            
                if($validar){

                }else{
                    
                    return 'erro inesperado';
                }        
        }     
    }
    
    public function cadastrarPaciente($nome){
        
        $crud = new Crud;
       
        if(empty($nome)){
            
            return 'informe o nome';
            
        }else {
            
            $validar =$crud->insert('cliente','nome=?',array($nome));
            
                if($validar){

                }else{
                    
                    return 'erro inesperado';
                }        
        }     
    }
    
    public function cadastrarUsuario($nome){
        
        $crud = new Crud;
       
        if(empty($nome)){
            
            return 'informe o nome';
            
        }else {
            
            $validar =$crud->insert('usuario','nome=?',array($nome));
            
                if($validar){

                }else{
                    
                    return 'erro inesperado';
                }        
        }     
    }

    public function getMedico() {
        
        $crud = new Crud;
        
        $crud->select('*','medico','',array());
        
    }
    

}