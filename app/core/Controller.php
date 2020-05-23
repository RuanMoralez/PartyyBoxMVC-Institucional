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
    
    public function load($view,$viewData){
        extract($viewData);
        include "app/views/{$view}.php";
    }
}
