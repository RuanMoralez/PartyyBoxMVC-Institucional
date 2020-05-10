<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;
use app\core\Model;

/**
 * Description of Usuario
 *
 * @author Ruan Moralez
 */
class Usuario extends Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function isLogged(){
        session_start ();
        if(isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])){
            return true;
        }else {
            return false;
        }
    }
    
    public function verificaUsuario($user,$pass){
        $query = $this->db->query("SELECT * FROM Usuario WHERE usuario = '{$user}' AND senha = '{$pass}'");
        if($query->rowCount() > 0 ){
            $uid = $query->fetch();
            return $uid['id'];
        }
    }
}
