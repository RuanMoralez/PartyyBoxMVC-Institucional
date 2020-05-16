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
        <div class="col-md-2 nopadding">
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
        <div class="col-md-10 nopadding">
          <div class="sessao"><strong>Editar Sobre</strong></div>
          <div class="edit-sobre-caixa">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-5 col-lg-5 edit-sobre-caixa-img" >
                <img class="img-fluid" src="<?php echo URL_BASE."assets/img/festa_caixa/sobre_festa_caixa.jpg"?>" alt="">
              </div>
              <div class="col-12 col-sm-6 col-md-7 col-lg-5   edit-sobre-caixa-text">
                <h3>Festa na Caixa</h3>
                <p>Trabalhamos com diversos tamanhos de kits, com formatos pré-definidos, ou você pode escolher somente os itens que necessita.<br><br>
                 Desde um mesversário, para você comemorar o mês a mês do bebê, passando por kits só com a papelaria personalizada, opções para festa na escola, para aquele bolinho em família, até festas para bastante gente.<br><br>
                 Pensou em festa, a gente pode te ajudar.</p><br><br>
                <a href="#" class="modal-saiba-mais">Editar</a>
              </div>
            </div>
          </div>

          <!-- 
          ***** Inserir ou Editar Produto *****
          -->
          <div class="sessao"><strong>Inserir ou Editar Produto</strong></div>
          <div class="row">
            <div class="col-md-3 inserir-produto">

            <form enctype="multipart/form-data" action="<?php echo URL_BASE."admin/adicionarProduto" ?>" method="POST">
              <div class="lista-produto">
                <div style="height: 200px;">
                  <div class="custom-file edit-input">
                    <input type="file" class="custom-file-input edit-ipt" onchange="readInsertUrl(this);" name="img">
                    <label class="custom-file-label edit-label shadow-none" style="padding:0px">
                      <img id="blah" style="width:100%; height:200px;" src="<?php echo URL_BASE."assets/adm/img/essenciais/no_imagem_available.png"?>">
                      <p>Upload de imagem</p>
                    </label>
                  </div>
                </div>
                <div class="descricao-produto">

                  <div class="form-group">
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo" name="titulo"><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escreva a descricao do produto" name="descricao"></textarea>
                  </div>  
                  
                  <!-- Button trigger modal -->
                  <input type="submit" class="btn btn-success" value="Adicionar">
                </div>
              </form>  
              </div>
            </div>
          

          
            <?php 
                $id = 0;
                
                foreach ($caixa as $c){

                  
                    echo ' 
                        <div class="col-md-3">
                          <div class="lista-produto">
                            <div style="background:url('.URL_BASE.'/'.$c['endereco'].');background-size: 100%;background-position: center;background-repeat: no-repeat;height: 200px;"></div>
                            <div class="descricao-produto">
                            
                              <h3>'.$c['titulo'].'</h3>
                              <p>'.$c['descricao'].'</p>

                              <!-- Button trigger modal -->
                              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter'.$id.'" style="background:#c31181;border:0px;">
                                Editar
                              </button>
                              <a href="'.URL_BASE.'admin/removerProduto/'.$c['id'].'" class="btn btn-danger">Remover</a>
                            </div>
                          </div>
                          
                          <!-- Modal -->
                          <form enctype="multipart/form-data" action="'.URL_BASE.'admin/atualizarProduto/" method="POST" name="upload">
                            <div class="modal fade" id="exampleModalCenter'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <div class="form-group">
                                      <label for="exampleFormControlTextarea1">Título</label>
                                      <input class="form-control" type="text" name="titulo" value="'.$c['titulo'].'">
                                      <input type="hidden" id="custId" name="id" value="'.$c['id'].'">
                                    </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="modal-edit">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" onchange="readURL(this,'.$id.');" name="img">
                                        <label style="width:300px; text-align:left; margin-left:18%"; class="custom-file-label">Trocar imagem</label>
                                        <input type="hidden" id="custId" name="default" value="/'.$c['endereco'].'">
                                      </div>
                                      <img id="blah'.$id.'" src="'.URL_BASE.'/'.$c['endereco'].'" alt="your image" />                                    
                                      <div class="form-group edit-descricao">
                                        <label for="exampleFormControlTextarea1">Descrição</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descricao">'.$c['descricao'].'</textarea>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" value="Salvar" class="btn btn-primary">
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
    <script>

      function readURL(input,indice) {
      
        if (input.files && input.files[0]) {
          var reader = new FileReader();

            reader.onload = function (e) {
              $('#blah'+indice).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
          }
      } 

    function readInsertUrl(input) {
      
      if (input.files && input.files[0]) {
        var reader = new FileReader();

          reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
        }
    } 
    
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>