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
use app\models\Categoria;

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
    
    public function categoria($num=1){
        
        $p = new Produto();
        $c = new Categoria();
        
        $produto = $p->listar($num);
        $categoria = $c->listar($num);
              
        $this->loadAdmin('adm/painel',$produto,$categoria);
    }
    
    public function adicionarProduto(){
                  
        if($_POST){
            
            $categoria = $_POST['categoria'];
            
            if($categoria != 0){
                
                if( !empty($_FILES['img']['name']) && !empty($_POST['titulo']) && !empty($_POST['descricao'])){
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
                        
                        $titulo = $_POST['titulo'];
                        $descricao = $_POST['descricao'];
                        $categoria = $_POST['categoria'];
                        
                        $produto = new Produto();
                        $produto->inserir($titulo, $descricao, $imagem,$categoria);
                        
                        echo '
                            <script>
                                location.reload();
                            </script>
                        ';
                    } 
                }
            }else{
                echo '
                        <script>
                            $(document).ready( function(){

                                swal({
                                    title: "Oops!",
                                    text: "Preencha todos os campos...",
                                    icon: "warning"
                                })
                            });
                        </script>
                    ';
            }
        }else{
            echo '
                <script>
                    $(document).ready( function(){

                        swal({
                            title: "Erro!",
                            text: "Categoria nao existe...",
                            icon: "error"
                        })
                    });
                </script>
                ';
            }
        }
    }
   
    public function removerProduto(){
        
        $id = $_POST['id'];
        
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
        
        //$this->index($data);
                 
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
        
        $this->categoria();
    }
    
    public function atualizarSessao(){
        
        $categoria_id = $_POST['categoria'];
        $imagem = "";
        
        if( $categoria_id >= 1 && $categoria_id <= 3 ){
           
            $img = array_filter($_FILES['img']);
            
            if(!isset($img['error'])){
                $error = array();
                
                if(!\preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $img["type"])){
                    $error[1] = "Isso não é uma imagem.";
                } 
                
                if(count($error)==0){
                    
                    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $img["name"], $ext);
                    
                    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
                    
                    if($categoria_id == 1){
                        $caminho_imagem =  "assets/img/festa_caixa/".$nome_imagem;
                    }else if($categoria_id == 2){
                        $caminho_imagem =  "assets/img/cesta/".$nome_imagem;
                    }else {
                        $caminho_imagem =  "assets/img/buque_chocolate/".$nome_imagem;
                    }
                    
                    move_uploaded_file($img['tmp_name'], $caminho_imagem);    
                
                    $imagem = $caminho_imagem;
                }
            }else{
                $imagem = $_POST['default'];
            }
        
            $titulo = $_POST['titulo'];
            $descricao = nl2br($_POST['descricao']);
            
            $categoria = new Categoria();
            $categoria->atualizar($categoria_id, $imagem, $titulo, $descricao);
            
            echo '
                <script>    
                
                    swal({
                        title: "Sucesso!",
                        text: "Sessao edita com sucesso...",
                        icon: "success"
                    })
                    
                    //Hibilitar editar Sessao
                    $(document).ready(function() {
                        $(".swal-button").click(function (){
                            // desabilitar o campo 
                            $(".editar-sessao").prop("disabled", true);
                        });
                    });    
                </script>
                ';
        }
    }
    
    public function doLogout($token){
        $token_session = md5(session_id());
        if(isset($token) && $token === $token_session){
            session_destroy();
            header('location: /partyyboxMVC/login');
        }
    }
    
    
       
}
