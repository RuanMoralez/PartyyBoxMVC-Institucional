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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Inserir</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Slide 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Slide 2</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                  <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
                    
                  </div>
                  <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">
                    
                  </div>
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
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>