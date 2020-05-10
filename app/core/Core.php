<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author Ruan Moralez
 */
class Core {
    
    private $controller;
    private $metodo;
    private $parametro = array();
    
    public function __construct() {
        $this->verificaUrl();
    }
    
    public function run(){
        
        $controllerCorrente = $this->getController();
        $c = new $controllerCorrente();
        
        call_user_func_array(array($c, $this->getMetodo()), $this->getParametro());
    }
    
    public function verificaUrl(){
        
        //Captura a url da página
        $url = explode('index.php',$_SERVER["PHP_SELF"]);
        
        //captura o valor da última posição do array url
        $url = end($url);
        
        //Verifica se a url está vazia
        if(!$url == null ){
            //captura controller, metodo e parametro delimitado por /
            $url = explode('/',$url);
            
            //remove a primeira posição do array com array_shift
            array_shift($url);
            
            //Pega controller
            $this->controller = ucfirst($url[0])."Controller";
            array_shift($url);
            
            if(isset($url[0])){
                //Pega metodo
                $this->metodo = $url[0];
                array_shift($url);
            }
            
            if(isset($url[0])){
                //Pega parametro
                $this->parametro = array_filter($url);
            }
            
            
        }
        else{
            $this->controller = ucfirst(CONTROLLER_PADRAO)."Controller";
        }
    }
    
    function getController() {
        if(class_exists(NAMESPACE_CONTROLLER.$this->controller)){
            return NAMESPACE_CONTROLLER.$this->controller;
        }
        return NAMESPACE_CONTROLLER.ucfirst(CONTROLLER_PADRAO)."Controller";
    }

    function getMetodo() {
            
        if(method_exists(NAMESPACE_CONTROLLER.$this->controller, $this->metodo)){
            return $this->metodo;
        }
        return METODO_PADRAO;
    }

    function getParametro() {
        return $this->parametro;
    }


    
}
