<?php


namespace app\core;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Ruan Moralez
 */
class Controller {
    
    public function load($view, $caixa = array(),$cesta = array(),$buque = array(),$ccaixa = array(),$ccesta = array(),$cbuque = array()){
        extract($caixa);
        extract($cesta);
        extract($buque);
        
        extract($ccaixa);
        extract($ccesta);
        extract($cbuque);
        include "app/views/{$view}.php";
    }
    
    public function loadAdmin($view, $produto = array(), $categoria = array()){
        extract($produto);
        extract($categoria);
        include "app/views/{$view}.php";
    }
    
}
