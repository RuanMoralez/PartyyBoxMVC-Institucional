<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;
use app\core\Controller;
use app\models\Produto;

/**
 * Description of IndexController
 *
 * @author Ruan Moralez
 */
class IndexController extends Controller{
    
    public function index(){
        
        $p = new Produto();

        $caixa = $p->listarProduto(1);
        $cesta = $p->listarProduto(2);
        $buque = $p->listarProduto(3);
        
        $this->load('template',$caixa,$cesta,$buque);  
    }
}
