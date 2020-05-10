<?php

namespace app\controllers;
use app\models\Produto;
use app\core\Controller;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProdutoController
 *
 * @author Ruan Moralez
 */
class ProdutoController extends Controller{
    
    public function index(){
        //echo "index Produto";
        
        $p = new Produto;
        
        $caixa = $p->listarProduto(1);
        $cesta = $p->listarProduto(2);
        $buque = $p->listarProduto(3);
        
        $this->load('template', $caixa,$cesta,$buque);
        
    }
}
