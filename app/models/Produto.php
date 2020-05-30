<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function listar(){
        $query =
            "SELECT 
                 id
                ,titulo
                ,descricao
                ,endereco
                ,categoria
             FROM produtos
             ORDER BY id" ;
        $res = $this->db_loja->query($query);
                
        return $res->fetchAll();
    }
    
    public function listarCategoria($num){
        $query =
            "SELECT 
                 id
                ,titulo
                ,descricao
                ,endereco
                ,categoria
             FROM produtos
             WHERE categoria = {$num}
             ORDER BY id" ;
        $res = $this->db_loja->query($query);
                
        return $res->fetchAll();
    }
    
    public function inserir($titulo,$descricao,$endereco,$categoria){
        try{
            
            $stmt = $this->db_loja->prepare("
                INSERT INTO produtos (titulo, descricao, endereco, categoria)
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
            $stmt = $this->db_loja->prepare("
            UPDATE Produtos SET
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
            
            $stmt = $this->db_loja->prepare("
                DELETE FROM produtos WHERE id = :id
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