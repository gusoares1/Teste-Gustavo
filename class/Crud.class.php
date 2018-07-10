<?php

class Crud extends ConDB {
    
    public $query;
    
    private function prepExec($prep,$exec){
        
        $this->query = $this->getConn()->prepare($prep);
        $this->query->execute($exec);
        
    }
    
    public function insert($table,$prep,$exec){
        
        $this->prepExec('INSERT INTO '.$table.' SET '.$prep.'',$exec);
        
        return $this->getConn()->lastInsertID();
       
    }
    
    public function select ($fields,$table,$prep,$exec){
        
        $this->prepExec('SELECT '.$fields.' FROM '.$table.''.$prep.'',$exec);
        
        return $this->query;
         
    }
    
    public function update ($table,$prep,$exec){
        
        $this->prepExec('UPDATE `'.$table.' SET '.$prep.'',$exec);
        
    }

    public function delete ($table,$prep,$exec) {
        
        $this->prepExec('DELETE FROM '.$table.''.$prep.'',$exec);
          
    }
    
    
}


