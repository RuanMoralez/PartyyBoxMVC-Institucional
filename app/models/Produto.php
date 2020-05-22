<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listar($categoria){
        $query =
            "SELECT 
                 id
                ,titulo
                ,descricao
                ,endereco
             FROM produto
             WHERE id_categoria = {$categoria}
             ORDER BY id" ;
        $res = $this->db->query($query);
                
        return $res->fetchAll();
    }
    
    public function inserir($titulo,$descricao,$endereco,$categoria){
        try{
            
            $stmt = $this->db->prepare("
                INSERT INTO Produto (titulo, descricao, endereco, id_categoria)
                VALUES (:titulo, :descricao, :endereco, :categoria)
            ");
            $stmt->execute(array(
                ':categoria' => $categoria,
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