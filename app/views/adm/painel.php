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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

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
                <li><a class="dropdown-item" href="#">Editar</a></li>
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href='<?php echo URL_BASE."admin/doLogout/". md5(session_id()) ?>'>Sair</a></li>
              </ul>
            </div>
          </div>  
        </div>
      </div>
      
      <!--
      ***Painel****
      -->

      <div class="row">
        <div class="col-md-3 nopadding">
          <div class="painel">
            <img class="rounded-circle" src="<?php echo URL_BASE."assets/adm/img/logo/partyybox_logo.jpeg"?>" alt="">
            <h1>Administrador</h1>
            <ul>
              <a href="#"><li><i class="large material-icons">slideshow</i>Slide</li></a>
              <a href="#"><li><i class="fas fa-box-open"></i>Caixa</li></a>
              <a href="#"><li><i class="fas fa-shopping-basket"></i>Cesta</li></a>
              <a href="#"><li><i class="large material-icons">local_florist</i></i>Buque</li></a>
            </ul>
          </div>
        </div>
        <div class="col-md-9">
          <div class="sessao"><strong>Caixa - Edit Imagem</strong></div>
          <div class="row">
          
            <?php 
                $id = 0;
                
                foreach ($caixa as $c){

                  
                    echo ' 
                        <div class="col-md-3 nopadding">
                            <div class="produto">
                                <img src="'.URL_BASE.'assets/'.$c['endereco'].'">
                            </div>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger edit-btn" data-toggle="modal" data-target="#exampleModalCenter'.$id.'" style="background:#c31181;border:0px;">
                              Editar
                            </button>
                          
                            <!-- Modal -->
                            <form>
                            <div class="modal fade" id="exampleModalCenter'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Título</label>
                                      <input class="form-control" type="text" placeholder="'.$c['titulo'].'">
                                    </div>
                                    <!--<h5 class="modal-title" id="exampleModalLongTitle">'.$c['titulo'].'</h5>-->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="modal-edit">
                                      <img src="'.URL_BASE.'assets/'.$c['endereco'].'">
                                      <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Descrição</label>
                                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="'.$c['descricao'].'"></textarea>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </form>
                        </div>
                    ';

                    $id = $id+1;
                }
            ?>
            
          </div>
        </div>
      </div>
    </div>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo URL_BASE."assets/js/jquery.js"?>" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>