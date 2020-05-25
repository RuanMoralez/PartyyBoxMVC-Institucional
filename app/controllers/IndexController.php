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
use app\models\Slide;

/**
 * Description of IndexController
 *
 * @author Ruan Moralez
 */
class IndexController extends Controller{
       
    public function index(){
        
        $p = new Produto();
        $c = new Categoria();
        $s = new Slide();
        
        $data = array(
            "produto" =>    $p->listar(),
            "categoria" =>  $c->listar(),
            "slide" =>      $s->listar()
        );
        
        $this->load('template',$data);  
    }
}
