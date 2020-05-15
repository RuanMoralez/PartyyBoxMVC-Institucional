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
    
    public function atualizar($id,$titulo,$descricao,$endereco){
        try{
            $stmt = $this->db->prepare("
            UPDATE Produto SET
            titulo = :titulo,
            descricao = :descricao,
            endereco = :endereco
            WHERE id = :id
            ");
            $stmt->execute(array(
                ':id' => $id,
                ':titulo' => $titulo,     
                ':descricao' => $descricao,     
                ':endereco' => $endereco   
            ));
        
        }catch(PDOException $e){    
            echo 'Error'.$e->getMessage();
        }
        
        
    }
}