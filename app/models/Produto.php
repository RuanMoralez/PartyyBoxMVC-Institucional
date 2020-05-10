<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listarProduto($num=0){
        
        $query = "SELECT * FROM Produto WHERE categoria = {$num}";
        $res = $this->db->query($query);
                
        return $res->fetchAll();
        
    }
}