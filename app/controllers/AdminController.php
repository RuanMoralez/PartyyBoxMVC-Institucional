<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;

/**
 * Description of AdminController
 *
 * @author Ruan Moralez
 */
class AdminController extends Controller{
    
    public function __construct(){
        $usuario = new Usuario();
        
        if($usuario->isLogged() == false){
            header('location: /partyyboxMVC/login');
        }
    }
    
    public function index(){
        $this->load('adm/painel');
    }
    
    public function doLogout($token){
        $token_session = md5(session_id());
        if(isset($token) && $token === $token_session){
            session_destroy();
            header('location: /partyyboxMVC/login');
        }
    }
    
}
