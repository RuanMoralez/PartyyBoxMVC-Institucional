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
        <div class="col-md-3 nopadding">
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
              <a href="<?php echo URL_BASE."admin/categoria/1"?>"><li><i class="fas fa-box-open"></i>Caixa</li></a>
              <a href="<?php echo URL_BASE."admin/categoria/2"?>"><li><i class="fas fa-shopping-basket"></i>Cesta</li></a>
              <a href="<?php echo URL_BASE."admin/categoria/3"?>"><li><i class="large material-icons">local_florist</i></i>Buque</li></a>
            </ul>
          </div>
        </div>
        
        <!-- 
         ****** Editar Sessao Produto 
        -->
        <div class="col-md-10 nopadding">
          <div class="sessao"><strong>Editar Sobre</strong><button href="#" id="enable" class="modal-saiba-mais" style="border:0px; background:#f6a20b; padding:5px 10px; color:#fff; font-size: 15px; text-decoration:none; margin-left:10px;">Editar</button></div>
          <div class="edit-sobre-caixa">
          <form action="" method="POST" class="adicionar-sessao" >
            <div class="row">
                <div class="col-12 col-sm-6 col-md-5 col-lg-5" >
                  <input type="file" class="custom-file-input edit-ipt editar-sessao" onchange="readUpdateInsertUrl(this);" style="width:400px; height:100%;" name="img" class="file" disabled>
                      <label class="custom-file-label edit-label shadow-none" style="padding:0px; width:400px; height:100%; margin-left:50px;">
                        <img id="insertUpdate" style="width:100%; height:100%" src="<?php
                        
                          if(!empty($categoria[0]['categoria_endereco'])){
                            echo URL_BASE.$categoria[0]['categoria_endereco'];
                          }else{
                            echo URL_BASE."assets/adm/img/essenciais/no_imagem_available.png";
                          }

                        ?>">

                        <p style="top:310px; left:130px;">Upload de imagem</p>

                      </label>
              
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-5 edit-sobre-caixa-text">
                  <div class="form-group sessao-sobre">
                    <input type="text" class="form-control editar-sessao" id="formGroupExampleInput" placeholder="Escreva o titulo" name="titulo" value="<?php if(!empty($categoria[0]['categoria_titulo'])){echo $categoria[0]['categoria_titulo'];}?>" disabled><br>
                    <textarea disabled class="form-control editar-sessao" id="exampleFormControlTextarea1" rows="7" placeholder="Escreva a descricao do produto" name="descricao"><?php if(!empty($categoria[0]['categoria_descricao'])){echo strip_tags($categoria[0]['categoria_descricao']);}?></textarea>
                    <input type="hidden" name="categoria" value="<?php echo $categoria[0]['categoria_id'];?>">
                    <input type="hidden" name="default" value="<?php echo $categoria[0]['categoria_endereco'];?>">
                  </div>
                  <input type="submit" value="Salvar" class="modal-saiba-mais editar-sessao" style="border:0px" disabled>
                  <div class="mostrar-sessao"></div>
                </div>
            </div>
          </form>
          </div>

          <!-- 
          ***** Inserir ou Editar Produto *****
          -->
          <div class="sessao"><strong>Inserir ou Editar Produto</strong></div>
          <div class="row">
            <div class="col-md-3 inserir-produto">

            <form enctype="multipart/form-data" action="" method="POST" class="adicionarProduto">
              <div class="lista-produto">
                <div style="height: 200px;">
                  <div class="custom-file edit-input">
                    <input type="file" class="custom-file-input edit-ipt" onchange="readInsertUrl(this);" name="img" class="file">
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
                    <input type="hidden" name="categoria" value="<?php echo $categoria[0]['categoria_id']?>">
                  </div>  
                  
                  <!-- Button trigger modal -->
                  <input type="submit" class="btn btn-success" value="Adicionar">
                  <div class="loading" style="float:right; margin-right: 40%; display:none;"><img src="<?php echo URL_BASE."assets/img/gif/loading.gif"?>" width="40"></div>
                  <div class="mostrar"></div>
                </div>
              </form>  
              </div>
            </div>
          

          
            <?php 
                $id = 0;
                
                foreach ($produto as  $p){
                  echo ' 
                    <div class="col-md-3">
                      <div class="lista-produto">
                        <div style="background:url('.URL_BASE.'/'.$p['endereco'].');background-size: 100%;background-position: center;background-repeat: no-repeat;height: 200px;"></div>
                        <div class="descricao-produto">

                          <h3>'.$p['titulo'].'</h3>
                          <p>'.$p['descricao'].'</p>  
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter'.$id.'" style="background:#c31181;border:0px;">
                            Editar
                          </button>
                          <a href="javascript:void(0);" onclick="remover('.$p['id'].');" class="btn btn-danger removerProduto">Remover</a>
                        </div>
                      </div>

                      <!-- Modal -->
                      <form enctype="multipart/form-data" method="POST" name="upload" class="atualizarProduto">
                        <div class="modal fade" id="exampleModalCenter'.$id.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Título</label>
                                  <input class="form-control" type="text" name="titulo" value="'.$p['titulo'].'">
                                  <input type="hidden" id="custId" name="id" value="'.$p['id'].'">
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
                                    <input type="hidden" id="custId" name="default" value="/'.$p['endereco'].'">
                                  </div>
                                  <img id="blah'.$id.'" src="'.URL_BASE.'/'.$p['endereco'].'" alt="your image" />                                    
                                  <div class="form-group edit-descricao">
                                    <label for="exampleFormControlTextarea1">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="descricao">'.$p['descricao'].'</textarea>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" type="text/javascript"></script>
    <script>  

      //Hibilitar editar Sessao
      $(document).ready(function() {
	      $("#enable").click(function (){
                // habilita o campo 
		    $(".editar-sessao").prop("disabled", false);
		
	      });
      });

      //Ajax formulário adicionar sessao
      $(function(){
        $('.adicionar-sessao').submit(function(e){
            e.preventDefault();
          
            $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/atualizarSessao',
            type: 'POST',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                $('.loading').show();
            },
            success: function(data){  
                $('.mostrar-sessao').html(data);
                $('.loading').hide();
                $('.form')[0].reset();
            }
        });
        return false;
        });
      });

      //Ajax formulário adicionar Produto
      $(function(){
        $('.adicionarProduto').submit(function(e){
            e.preventDefault();
          
            $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/adicionarProduto',
            type: 'POST',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                $('.loading').show();
            },
            success: function(data){  
                $('.mostrar').html(data);
                $('.loading').hide();
                $('.form')[0].reset();
            }
        });
        return false;
        });
      });

      //Atualizar Produto
      $(function(){
        $('.atualizarProduto').submit(function(e){
            e.preventDefault();
          
            $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/atualizarProduto',
            type: 'POST',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){  
                location.reload();
            }
        });
        return false;
        });
      });

      function remover(id){
        swal({
          title: "Aviso!",
          text: "Deseja realmente remover este produto?",
          icon: "warning"
        }).then(okay => {
          if (okay) {
            $.ajax({
              url: 'http://localhost/partyyboxMVC/admin/removerProduto',
              type: 'POST',
              data: {id: id},
              success: function(doc){
                location.reload();
              }
            });
          }
        });
      }

      //Ajax remover produto
      /*
      function remover(id){
        
          $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/removerProduto',
            type: 'POST',
            data: {id: id},
            success: function(doc){
              location.reload();
            }
          });
        
      }
      */
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

      function readUpdateInsertUrl(input) {
        
        if (input.files && input.files[0]) {
          var reader = new FileReader();
        
            reader.onload = function (e) {
              $('#insertUpdate').attr('src', e.target.result);
            };
          
            reader.readAsDataURL(input.files[0]);
          }
      } 
  
    </script>
    <script src="<?php echo URL_BASE."assets/js/jquery.js"?>" type="text/javascript"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>