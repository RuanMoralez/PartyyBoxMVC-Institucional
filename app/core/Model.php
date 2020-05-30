<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

/**
 * Description of Model
 *
 * @author Ruan Moralez
 */
abstract class Model {
    
    protected $db;
    protected $db_loja;
    
    public function __construct() {
        $this->db = new \PDO("mysql:dbname=".DATABASE.";host=".SERVER, USER, PASS);
        $this->db_loja = new \PDO("mysql:dbname=".DATABASE_LOJA.";host=".SERVER, USER, PASS);
    }
}
