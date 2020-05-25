<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use app\core\Model;

/**
 * Description of Slide
 *
 * @author Ruan Moralez
 */
class Slide extends Model {
    
    public function __construct() {
        parent::__construct();
    }
 
    public function adicionar($titulo, $descricao, $endereco){
        
        try{
            $stmt = $this->db->prepare("
                    INSERT INTO slide (titulo,descricao,endereco)
                    VALUES (:titulo, :descricao, :endereco)
                "    
            );
            $stmt->bindParam(':titulo',$titulo);
            $stmt->bindParam(':descricao',$descricao);
            $stmt->bindParam(':endereco',$endereco);
        
            $stmt->execute();
        }catch(Exception $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    
    
    public function listar(){
        try{
            
            $query = "
                SELECT *
                FROM slide 
            ";
            
            $res = $this->db->query($query);
            $res->execute();
            
            return $res->fetchAll();
            
        }catch(Excecption $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    
    public function atualizar($id,$titulo,$descricao,$endereco){
        try{
            
            $stmt = $this->db->prepare('
                UPDATE slide SET 
                titulo = :titulo,
                descricao = :descricao,
                endereco = :endereco,
                WHERE id = :id
            ');
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':descricao', $descricao);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->execute();        
            
        }catch(Exception $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    
    public function remover($id){
        $stmt = $this->db->prepare('
            DELETE
            FROM slide 
            WHERE id = :id
        ');
        $stmt->bindParam(':id',$id);
        $stmt->execute();
    }
}
