
<?php
        
    require 'config/config.php';
    require 'app/core/Core.php';
    require 'vendor/autoload.php';
            
    $core = new Core();
    $core->run();
            
    /*
    echo "<br>Controller: {$core->getController()}";
    echo "<br>Metodo: {$core->getMetodo()} <br>";
            
    $param = $core->getParametro();
                        
    foreach ($param as $p){
        echo "Parametro: {$p} <br>";
    }
    */
?>
 
