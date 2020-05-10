<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE."assets/adm/css/painel.css"?>" type="text/css">
    <script src="https://kit.fontawesome.com/cc462c1dc6.js" crossorigin="anonymous"></script>

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- 
    <h1>Painel Administrativo</h1>
    
    -->
    
    <div class="container-fluid">
      <div class="row menu">
        <div class="col-md-9"></div>
        <div class="col-md-3">
          <div class="alerta">
            <ul>
              <a href=""><li><i class="fas fa-bell"></i></li></a>
              <a href=""><li><i class="fas fa-comment-alt"></i></li></a>
            </ul>  
          </div>
          <div class="perfil">
            <div class="dropdown">
              <button class="dropdown-toggle" type="button" data-toggle="dropdown">
              <strong>Carina Oliveira</strong>
              <img class="rounded-circle" src="<?php echo URL_BASE."assets/adm/img/perfil/carina_perfil.jpg"?>">
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">HTML</a></li>
                <li><a class="dropdown-item" href="#">CSS</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href='<?php echo URL_BASE."admin/doLogout/". md5(session_id()) ?>'>Sair</a></li>
              </ul>
            </div>
          </div>  
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>