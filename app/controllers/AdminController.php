<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;
use app\models\Produto;

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
    
    public function index($m = array()){
        $produto = new Produto();
        $caixa = $produto->listarProduto(1);
        
        $this->load('adm/painel',$caixa,$m);
         
    }
    
    public function adicionarProduto(){
        if($_POST){
            
            $img = array_filter($_FILES['img']);
            
            if( !empty($_POST['titulo']) || !empty($_POST['descicao']) || !empty($_FILES['img'])){
                
                if(!isset($img['error'])){
                    $error = array();
                
                    if(!\preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img["type"])){
                        $error[1] = "Isso não é uma imagem.";
                    } 
                    
                    if(count($error)==0){
                    
                        preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
                    
                        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                
                        $caminho_imagem =  "assets/img/festa_caixa/". $nome_imagem;
                
                        move_uploaded_file($img['tmp_name'], $caminho_imagem);    
                
                        $imagem = $caminho_imagem;
                        
                        $titulo = $_POST['titulo'];
                        $descricao = $_POST['descricao'];
                        
                        $produto = new Produto();
                        $produto->inserir($titulo, $descricao, $imagem);
                        
                        header("location: /partyyboxMVC/admin");
                    } 
                }
            }
           
        }
        
        $this->index();
    }
    
    public function removerProduto($id){
        $data = array(
            'aviso'=>''
        );
        
        $produto = new Produto();
        $res = $produto->remover($id);
        
        if($res == true){
            $data['aviso'] = '
                <script>    
                
                    swal({
                        title: "Sucesso!",
                            text: "Produto removido...",
                            icon: "success"
                    })
                </script>
            ';
            header("location: /partyyboxMVC/admin");
        }else{
            $data['aviso'] = '
                Erro ao remover produto
            ';
        }
        
        $this->index($data);
    }
    
    public function atualizarProduto(){
        $imagem = "";
        
        if($_POST){
            $img = array_filter($_FILES['img']);
            
            if(!isset($img['error'])){
                $error = array();
                
                if(!\preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img["type"])){
                    $error[1] = "Isso não é uma imagem.";
                } 
                
                if(count($error)==0){
                    
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
                    
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                
                    $caminho_imagem =  "assets/img/festa_caixa/". $nome_imagem;
                
                    move_uploaded_file($img['tmp_name'], $caminho_imagem);    
                
                    $imagem = $caminho_imagem;
                }
            }else{
                $imagem = $_POST['default'];
            }
        
            $titulo = $_POST['titulo'];
            $descricao = $_POST['descricao'];
            $id = $_POST['id'];
        
        
        
            $produto = new Produto();
            $produto->atualizar($id, $titulo, $descricao, $imagem);
        
            header("location: /partyyboxMVC/admin");
        }
        
        $this->index();
    }
    
    
    
    
    
    
    public function doLogout($token){
        $token_session = md5(session_id());
        if(isset($token) && $token === $token_session){
            session_destroy();
            header('location: /partyyboxMVC/login');
        }
    }
    
    
       
}
