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
    
    public function load($view, $caixa = array(),$cesta = array(),$buque = array()){
        extract($caixa);
        extract($cesta);
        extract($buque);
        include "app/views/{$view}.php";
    }
    
}
