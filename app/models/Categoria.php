<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use app\core\Model;
/**
 * Description of Categoria
 *
 * @author Ruan Moralez
 */
class Categoria extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function listar(){
        $query =
            "SELECT 
                 categoria_id
                ,categoria_titulo
                ,categoria_descricao
                ,categoria_endereco
             FROM categoria
             ORDER BY categoria_id" ;
        $res = $this->db->query($query);
                
        return $res->fetchAll();
    }
    
    public function listarCategoria($num){
        $query =
            "SELECT 
                 categoria_id
                ,categoria_titulo
                ,categoria_descricao
                ,categoria_endereco
             FROM categoria
             WHERE categoria_id = {$num}
             ORDER BY categoria_id" ;
        $res = $this->db->query($query);
                
        return $res->fetchAll();
    }
       
    public function atualizar($id, $endereco, $titulo, $descricao){
        
        try{
            $stmt = $this->db->prepare("
                UPDATE categoria SET
                categoria_titulo = :titulo,
                categoria_descricao = :descricao,
                categoria_endereco = :endereco
                WHERE categoria_id = :id
            ");
            $res = $stmt->execute(array(
                ':id' => $id,
                ':titulo' => $titulo,     
                ':descricao' => $descricao,     
                ':endereco' => $endereco   
            ));
            
        }catch(PDOException $e){    
            echo "Error ".$e->getMessage();
        }
        
    }
}
