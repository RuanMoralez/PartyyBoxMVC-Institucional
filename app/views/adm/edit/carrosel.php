<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo URL_BASE."assets/adm/css/painel.css"?>" type="text/css">
    <link rel="stylesheet" href="<?php echo URL_BASE."assets/adm/css/carrosel.css"?>" type="text/css">
    <script src="https://kit.fontawesome.com/cc462c1dc6.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Carrosel!</title>
  </head>
  <body>
    <!-- 
    <h1>Painel Administrativo</h1>
    -->
    <div class="container-fluid">
      <?php include __DIR__.'/../elemento/menu.php' ?>
        
      
      
      <div class="row">
        <?php include __DIR__.'/../elemento/feture.php' ?>
        
        <div class="col-md-10">
          <div class="edit-slide">
            <div class="row">
              <div class="col-md-12">
                <div class="container-slide">
                    
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#adicionar" role="tab" aria-controls="home" aria-selected="true">Adicionar</a>
                    </li>
                    <?php 

                     $cont = 0;
                      foreach($slide as $key => $s){
                        $cont ++;
                        echo '
                          <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#g'.$key.'" role="tab" aria-controls="profile" aria-selected="false">Slide '.$cont.'</a>
                          </li>
                        ';
                      }
                    ?>
                    
                  </ul>

                  <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="adicionar" role="tabpanel" aria-labelledby="home-tab">
                    <h1>Adicionar Slide</h1>               

                    <form class="adicionarSlide">
                      <div class="custom-file edit-input">
                        <input type="file" class="custom-file-input edit-ipt" onchange="readURL(this);" name="img" class="file">
                        <label class="custom-file-label edit-label shadow-none" style="padding:0px">
                          <img id="preview" style="width:100%; height:200px;" src="<?php echo URL_BASE."assets/adm/img/essenciais/no_imagem_available.png"?>">
                          <p>Upload de imagem</p>
                        </label>
                      </div>

                      <div class="group-ipt">
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">TÍtulo</label>
                          <input type="text" class= "form-control" name="titulo">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Descricao</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descricao" ></textarea>
                          <input type="submit" class="btn btn-success"  value="Adicionar">
                        </div>
                      </div>
                    </form>
                    <div class="mostrar"></div>
                  </div>
                    <?php 

                      foreach($slide as $key => $s){
                        echo '<div class="tab-pane fade" id="g'.$key.'" role="tabpanel" aria-labelledby="profile-tab">
                          <h1>Editar Slide</h1>               

                          <form class="atualizarSlide">
                            <div class="custom-file edit-input">
                              <input type="file" class="custom-file-input edit-ipt" onchange="UpdateReadURL(this,'.$key.');" name="img" class="file">
                              <input type="hidden" name="id" value="'.$s['id'].'">
                              <input type="hidden" name="default" value="'.$s['endereco'].'">
                              <label class="custom-file-label edit-label shadow-none" style="padding:0px">
                                <img id="preview'.$key.'" style="width:100%; height:200px;" src="'.URL_BASE.$s['endereco'].'">
                                <p>Upload de imagem</p>
                              </label>
                            </div>
                        
                            <div class="group-ipt">
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">TÍtulo</label>
                                <input type="text" class= "form-control" name="titulo" value="'.$s['titulo'].'">
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descricao</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descricao" >'.$s['descricao'].'</textarea>
                                <input type="submit" class="btn btn-success salvar"  value="Salvar">
                                <a href="javascript:void(0);" onclick="remover('.$s['id'].');" class="btn btn-danger removerProduto">Remover</a>
                              </div>
                            </div>
                          </form>
                          <div class="mostrar"></div>
                        </div>';
                      }

                    ?>
                    
                    <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">...</div>
                    <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">...</div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo URL_BASE."assets/js/jquery.js"?>" type="text/javascript"></script>
    <script>
      function readURL(input) {
      
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
        }
      }

      function UpdateReadURL(input,indice) {
      
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
            $('#preview'+indice).attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
        }
      } 
  
      // Ajax adicionar slide
      $(function(){
        $('.adicionarSlide').submit(function(e){
            e.preventDefault();
          
            $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/adicionarSlide',
            type: 'POST',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){  
                $('.mostrar').html(data);

            }
        });
        return false;
        });
      });

      // Ajax atualizar slide
      $(function(){
        $('.atualizarSlide').submit(function(e){
            e.preventDefault();
          
            $.ajax({
            url: 'http://localhost/partyyboxMVC/admin/atualizarSlide',
            type: 'POST',
            data:  new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            success: function(data){  
                $('.mostrar').html(data);
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
              url: 'http://localhost/partyyboxMVC/admin/removerSlide',
              type: 'POST',
              data: {id: id},
              success: function(doc){
                location.reload();
              }
            });
          }
        });
      }
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>