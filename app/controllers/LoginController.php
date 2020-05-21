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
 * Description of LoginController
 *
 * @author Ruan Moralez
 */
class LoginController extends Controller{
    
    public function categoria (){
        session_start();
                
        $data = array(
            'aviso' => ''
        );
        
        $usuario = new Usuario();
        
        if( 
            isset($_POST['user']) && !empty($_POST['user']) &&
            isset($_POST['pass']) && !empty($_POST['pass']) 
        ){
            $user = addslashes($_POST['user']);
            $pass = md5(addslashes($_POST['pass']));
            
            $uid = $usuario->verificaUsuario($user,$pass);
            
            if($uid > 0 ){
                session_start ();
                $_SESSION['usuario'] = $uid;
                header('location: /partyyboxMVC/admin/categoria/1');
                
            }else{
                unset($_POST);
                $data['aviso'] = '
                    <script>
                        $(document).ready( function(){

                        swal({
                                title: "Oops!",
                                text: "Usuario ou senha incorretos...",
                                icon: "warning"
                            })
                
                        });
                    </script>    
                ';
            }
        }
        $this->load('adm/login',$data);
    }
}
