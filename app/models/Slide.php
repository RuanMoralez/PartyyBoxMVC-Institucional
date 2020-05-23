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
}
