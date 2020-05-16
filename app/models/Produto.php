<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listarProduto($num=0){
        $query = "SELECT * FROM Produto WHERE categoria = {$num} ORDER BY id DESC" ;
        $res = $this->db->query($query);
                
        return $res->fetchAll();
    }
    
    public function inserir($titulo,$descricao,$endereco){
        try{
            
            $stmt = $this->db->prepare("
                INSERT INTO Produto (titulo, descricao, endereco, categoria)
                VALUES (:titulo, :descricao, :endereco, :categoria)
            ");
            $stmt->execute(array(
                ':categoria' => 1,
                ':titulo' => $titulo,
                ':descricao' => $descricao,
                ':endereco' => $endereco
            ));
                    
        }catch(Exception $e){
            echo "Error ".$e->getMessage();
        }
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
            echo "Error ".$e->getMessage();
        }
    }
    
    public function remover($id){
        try{
            
            $stmt = $this->db->prepare("
                DELETE FROM Produto WHERE id = :id
            ");
            $res = $stmt->execute(array(
                ':id' => $id
            ));
            
            if($res){
                return true;
            }
           
            return false;
            
        }catch(Exception $e){
            echo "Erro ".$e->getMessage();
        }
    }
   
}