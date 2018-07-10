<?php
function __autoload($class){
    require_once "{$class}.class.php";
}


abstract class ConDB{
    
    private static  $cnx;

    private function setConn(){
      
        return
        is_null(self::$cnx)?
                self::$cnx =  new PDO("mysql:host = localhost;dbname=estagio","root",""): 
                self::$cnx;
       
    }

    public function getConn(){
       
        return $this->setConn(); 
    
    }
    
}
//$crud = new Crud;
//                $sel = $crud->select('
//                       a.id,
//                        m.nome medico, 
//                        c.nome cliente,
//                        u.nome usuario,
//                        a.data',
//                        'agenda a,medico m,usuario u,cliente c ',
//                        'where a.id_medico = m.id
//                        and a.id_cliente = c.id 
//                        and a.id_usuario = u.id ',
//                        array());  
//                var_dump($sel) ;
//                foreach ($sel as $dados){
//                var_dump($dados) ;} 
//   