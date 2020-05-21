<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\core\Controller;
use app\models\Produto;
use app\models\Categoria;

/**
 * Description of IndexController
 *
 * @author Ruan Moralez
 */
class IndexController extends Controller{
    
    public function categoria(){
        
        $p = new Produto();
        $c = new Categoria();
        
        $caixa = $p->listar(1);
        $cesta = $p->listar(2);
        $buque = $p->listar(3);
        
        $ccaixa = $c->listar(1);
        $ccesta = $c->listar(2);
        $cbuque = $c->listar(3);
        
        $this->load('template',$caixa,$cesta,$buque, $ccaixa, $ccesta, $cbuque);  
    }
}
