<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <title>PartyyBox</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
    <meta name="description" content="Festa na caixa, cesta café da manha, buque de chocolate e rosas.">
    <link rel="canonical" href="https://partyybox.000webhostapp.com/">
    <meta name="author" content="PartyyBox">
    <meta name="robots" content="index, nofollow">
    <meta name="keywords" content="festa na caixa, buque de chocolate, buque de chocolate e rosas, cesta cafe da manha, presente romantico, presente aniversario, caixa aniversario, presente dia das maes, presente aniversario, aniversario, dia dos namorados" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE."assets/css/style.css"?>" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?php echo URL_BASE."assets/img/logo/favicon.ico"?>">

    <!-- Biblioteca Animate -->
    <link rel="stylesheet" href="<?php echo URL_BASE."assets/css/Animate/animate.css"?>" type="text/css"> 
    <script src="https://kit.fontawesome.com/cc462c1dc6.js" crossorigin="anonymous"></script>

  </head>
  <body>
    <!----  
        ****** Menu Desktop ******
    -->
    <div class="container-fluid menu none-desktop" id="ancora-top">
      <div class="row">
        <div class="col-md-12 ">
          <ul class="menu-social float-right">
            <a href="https://www.facebook.com/parttybox/"><li><i class="fab fa-facebook"></i></li></a>
            <a href="https://www.instagram.com/partyybox/"><li><i class="fab fa-instagram"></i></li></a>
            <a class="wp-web" href="https://web.whatsapp.com/send?phone=5511965890240&text=Muito%20obrigado%20por%20entrar%20em%20contato!!!"><li><i class="fab fa-whatsapp"></i></li></a>
            <a class="wp-mobile" href="https://wa.me/5511965890240"><li><i class="fab fa-whatsapp"></i></li></a>
            <a href=""><li><i class="fab fa-twitter"></i></li></a>
          </ul>
        </div>
      </div>
    </div>

    <!----  
        ****** Menu desktop social fixo + botao topo
        ******
    -->
    <div class="social-fixo">
      <a href="https://web.whatsapp.com/send?phone=5511965890240&text=Muito%20obrigado%20por%20entrar%20em%20contato!!!" class="link-up link-up-whats top-social"><i class="fab fa-whatsapp"></i></a>
      <a href="https://www.facebook.com/parttybox/" class="link-up link-up-face top-social"><i class="fab fa-facebook"></i></a>
      <a href="https://www.instagram.com/partyybox/" class="link-up link-up-insta top-social"><i class="fab fa-instagram"></i></a>
      <a href="#top" class="link-up"><i class="fas fa-arrow-circle-up"></i></a>
    </div>

    
    <!----  
        ****** Menu Mobile ******
    -->
    <div class="container">
      <div class="row fixed-top top none-mobile"> 
        <div class="menu">
          <nav class="navbar navbar-expand-lg navbar-light menu none-mobile">
            <button class="navbar-toggler btn-mobile" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon btn-mobile"></span>
            </button>
            <ul class="menu-social">
              <li><a href="https://www.facebook.com/parttybox/"><i class="fab fa-facebook"></a></i></li>
              <li><a href="https://www.instagram.com/partyybox/"><i class="fab fa-instagram"></a></i></li>
              <li><a href="https://wa.me/5511965890240"><i class="fab fa-whatsapp"></a></i></li>
              <li><a href=""><i class="fab fa-twitter"></a></i></li>
            </ul>
            <div class="collapse navbar-collapse menu-mobile menu" id="navbarNavAltMarkup">
              <ul>
                <li><a href="#ancora-top">Home</a></li>
                <li onclick="myFunction()">
                  <button class="dropdown show dropdown-toggle btn-sobre">
                    Sobre
                  </button>
                  <ul class="sobre-submenu" id="li">
                    <li><a  href="#ancora-festa-na-caixa">Festa na Caixa</a></li>
                    <li><a  href="#ancora-cesta-cafe-manha">Cesta Café da Manhã</a></li>
                    <li><a  href="#ancora-buque-chocolate">Buquê de Rosas e Chocolate</a></li>
                  </ul>
                </li>            
                <li><a  href="#ancora-vantagens">Vantagens</a></li>
                <li><a  href="#ancora-comentarios">Comentarios</a></li>
                <li><a  href="#">Loja</a></li>
                <li><a  href="#ancora-contato">Contato</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    

      <!----  
        ****** Logo ******
      -->
      <div class="row">
        <div class="col-12 logo">
          <img class="img-responsive vertical-align" src="<?php echo URL_BASE."assets/img/logo/partyybox_logo.png"?>" alt="">
          <h3>@partyybox</h3>
          <p>CESTAS E CAIXAS</p>
        </div>
      </div>

      <!----  
        ****** Menu Desktop Slide******
      -->
      <div class="row">
        <div class="col-md-12 menu-desktop-align" >
          <ul class="menu-desktop">
            <li><a href="#">Loja</a></li>
            <li>
                <a class="dropdown show dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sobre</a>
                <div class="dropdown-menu dropdown-desktop dropdown-sobre" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="#ancora-festa-na-caixa">Festa na Caixa</a>
                  <a class="dropdown-item" href="#ancora-cesta-cafe-manha">Cesta Café da manhã</a>
                  <a class="dropdown-item" href="#ancora-buque-chocolate">Buquê de rosas e Chocolate</a>
                </div>
            </li>            
            <li><a href="#ancora-vantagens">Vantagens</a></li>
            <li><a href="#ancora-comentarios">Comentarios</a></li>            
            <li><a href="#ancora-contato">Contato</a></li>
          </ul>
        </div>
      </div>
    </div>
      
    <!----  
        ****** Slide ******
    -->
    <div id="carouselExampleIndicators" class="carousel slide none-slide" data-ride="carousel">
      <ol class="carousel-indicators indicador">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active slide-box box1" alt="First slide">
          <!-- <img class="d-block w-100" src="img/partyybox_felizAniversario2.png" alt="First slide"> -->
          <div class="carousel-caption d-md-block slide-texto wow bounceInLeft" data-wow-delay="0.5s">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item slide-box box2" alt="First slide">
          <!-- <img class="d-block w-100" src="img/partyybox_panda.png" alt="Second slide"> -->
          <div class="carousel-caption d-md-block slide-texto wow bounceInRight" data-wow-delay="0.5s">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item slide-box box3" alt="First slide">
          <!-- <img class="d-block w-100" src="img/partyybox_lol.png" alt="Third slide"> -->
          <div class="carousel-caption d-md-block slide-texto wow bounceInLeft" data-wow-delay="0.5s">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!----  
        ****** Slide Desktop ******
    -->
    <div class="container none-slide-desktop">
      <div id="carouselExampleIndicatorsdesktop" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators indicador">
          <li data-target="#carouselExampleIndicatorsdesktop" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicatorsdesktop" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicatorsdesktop" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active slide-box box1" alt="First slide">
            <!-- <img class="d-block w-100" src="img/partyybox_felizAniversario2.png" alt="First slide"> -->
            <div class="carousel-caption d-md-block slide-texto wow bounceInLeft" data-wow-delay="0.5s">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item slide-box box2" alt="First slide">
            <!-- <img class="d-block w-100" src="img/partyybox_panda.png" alt="Second slide"> -->
            <div class="carousel-caption d-md-block slide-texto wow bounceInRight" data-wow-delay="0.5s">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item slide-box box3" alt="First slide">
            <!-- <img class="d-block w-100" src="img/partyybox_lol.png" alt="Third slide"> -->
            <div class="carousel-caption d-md-block slide-texto wow bounceInLeft" data-wow-delay="0.5s">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicatorsdesktop" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicatorsdesktop" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <!----  
        ****** Sobre Festa na Caixa ******
    -->
    <div class="conteudo-sobre remove-scroll" id="ancora-festa-na-caixa">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-5 col-lg-5 wow slideInLeft" >
          <img class="img-fluid" src="<?php echo URL_BASE."assets/img/festa_caixa/sobre_festa_caixa.jpg"?>" alt="">
        </div>
        <div class="col-12 col-sm-6 col-md-7 col-lg-5 wow slideInRight">
          <h3>Festa na Caixa</h3>
          <p>Trabalhamos com diversos tamanhos de kits, com formatos pré-definidos, ou você pode escolher somente os itens que necessita.<br><br>
           Desde um mesversário, para você comemorar o mês a mês do bebê, passando por kits só com a papelaria personalizada, opções para festa na escola, para aquele bolinho em família, até festas para bastante gente.<br><br>
           Pensou em festa, a gente pode te ajudar.</p><br><br>
          <a href="#" class="modal-saiba-mais">Saiba mais</a>
        </div>
      </div>
    </div>


    <!----  
    ****** Lista de produtos (Caixa) ******
    -->
    
    <div class="container-fluid wow slideInLeft" data-wow-delay="0.5s">
      <div class="row">
        
          
        <?php
            foreach ($caixa as $pCaixa){
                
                echo '
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="lista-produto">
                        <div style="background:url('.URL_BASE.'/assets/'.$pCaixa['endereco'].');background-size: 100%;background-position: center;background-repeat: no-repeat;height: 200px;"></div>
                        <div class="descricao-produto">
                            
                            <h3>'.$pCaixa['titulo'].'</h3>
                            <p>'.$pCaixa['descricao'].'</p>
                            <a href="#" class="modal-saiba-mais">saiba mais</a>
                        </div>
                    </div>
                </div>
                ';
            }
        ?>
        <!--     
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto caixa-produto-0"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto caixa-produto-1"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto caixa-produto-2"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto caixa-produto-3"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        -->
      </div>
    </div>

    <!----  
        ****** Sobre Cesta ******
    -->
    <div class="conteudo-sobre cesta remove-scroll" id="ancora-cesta-cafe-manha">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-5 col-lg-5">
          <img class="img-fluid circular wow slideInLeft" src="<?php echo URL_BASE."assets/img/cesta/cesta_bud.jpg"?>" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-7 col-lg-5 wow slideInRight">
          <h3>Festa na Caixa</h3>
          <p>Trabalhamos com diversos tamanhos de kits, com formatos pré-definidos, ou você pode escolher somente os itens que necessita.</p>
          <p>Desde um mesversário, para você comemorar o mês a mês do bebê, passando por kits só com a papelaria personalizada, opções para festa na escola, para aquele bolinho em família, até festas para bastante gente.</p>
          <p>Pensou em festa, a gente pode te ajudar.</p><br>
          <a href="#" class="modal-saiba-mais">Saiba mais</a>  
        </div>
      </div>
    </div>
    
    <!----  
    ****** Lista de produtos Cesta ******
    -->
    <div class="container-fluid remove-scroll">
      <div class="row wow slideInRight" data-wow-delay="0.5s">
          
        <?php
        
            foreach ( $cesta as $pCesta){
                echo ' 
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="lista-produto">
                        <div style="background:url('.URL_BASE.'/assets/'.$pCesta['endereco'].');background-size: 100%;background-position: center;background-repeat: no-repeat;height: 200px;"></div>
                        <div class="descricao-produto">
                            <h3>'.$pCesta['titulo'].'</h3>
                            <p>'.$pCesta['descricao'].'</p>
                            <a href="#" class="modal-saiba-mais">saiba mais</a>
                        </div>
                    </div>
                </div>
                ';
            }
            
        ?>
        <!--   
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto cesta-produto-0"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto cesta-produto-1"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto cesta-produto-2"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto cesta-produto-3"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        -->  
      </div>
    </div>

    <!--
      ****** Buquê de Rosas e Chocolate ******
    -->
    <div class="sobre-buque remove-scroll" id="ancora-buque-chocolate">
      <div class="row">
        <div class="col-12">
          <h3 class="wow slideInDown">Buquê de Chocolate</h3>
          <img class="wow slideInLeft" src="<?php echo URL_BASE."assets/img/buque_chocolate/sobre_buque.jpg"?>" alt="">
          <div class="wow slideInRight">
            <p>Trabalhamos com diversos tamanhos de kits, com formatos pré-definidos, ou você pode escolher somente os itens que necessita.</p>
            <p>Desde um mesversário, para você comemorar o mês a mês do bebê, passando por kits só com a papelaria personalizada, opções para festa na escola, para aquele bolinho em família, até festas para bastante gente.</p>
            <p>Pensou em festa, a gente pode te ajudar.</p><br><br>
            <a href="#buque-chocolate" class="modal-saiba-mais">Saiba mais</a>
          </div>
        </div>
      </div>
    </div>

    <!----  
    ****** Lista de produtos buque ******
    -->
    <div class="container-fluid wow slideInLeft" data-wow-delay="0.5s">
      <div class="row">
          
          <?php
            foreach($buque as $pBuque){
                echo '
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="lista-produto">
                        <div style="background:url('.URL_BASE.'/assets/'.$pBuque['endereco'].');background-size: 100%;background-position: center;background-repeat: no-repeat;height: 200px;"></div>
                        <div class="descricao-produto">
                            <h3>'.$pBuque['titulo'].'</h3>
                            <p>'.$pBuque['descricao'].'</p>
                            <a href="#" class="modal-saiba-mais">saiba mais</a>
                        </div>
                    </div>
                </div>
                ';
            }
          ?>
        
        <!-- 
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto buque-produto-0"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto buque-produto-1"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto buque-produto-2"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
          <div class="lista-produto">
            <div class="produto buque-produto-3"></div>
            <div class="descricao-produto">
              <h3>Cesta 1</h3>
              <p>Trabalhamos com decorações para todos os tipos de comemorações - mesversários, aniversários,
              batizados, chá de bebê, chá de panela</p>
              <a href="#" class="modal-saiba-mais">saiba mais</a>
            </div>
          </div>
        </div>
        
        -->
      </div>
    </div>

    <!----  
      ****** Vantagens ******
    -->
    <div class="container vantagem wow slideInDown" data-wow-delay="0.5s" id="ancora-vantagens">
      <h3 >Vantagens</h3>
      <div class="row">
        <div class="col-md-4">
          <i class="fas fa-truck"></i>
          <p>Entregamos onde vc estiver</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-gift"></i>
          <p>Personalise da forma que quiser</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-handshake"></i>
          <p>Diversas formas de pagamentos</p>
        </div>
      </div>
    </div>
    <!----  
      ****** Comentarios ******
    -->    
    <div class="conteudo-comentario remove-scroll" id="ancora-comentarios">
      <h3 class="wow slideInDown">O que as pessoas falam<i class="fas fa-comment-dots img-comentario"></i></h3> 
      <div class="row wow slideInRight">
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <div class="comentario">
            <p>
            <strong>#1</strong> <br><br>

              "Muito mais que incrível <i>♥️ 😍</i> <br><br>
              Estou esperando ele para a surpresa"<br><br><br>

              <strong>@instagram</strong>
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <div class="comentario">
            <p>
            <strong>#2</strong> <br><br>

              "Oii Cá, já entreguei pra ele, <br><br>
              ele amou tudo! Que delicia de bolo <i>😋😍</i>"<br><br><br>

              <strong>@instagram</strong>
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <div class="comentario">
            <p>
            <strong>#3</strong> <br><br>

              "Boa tarde lindona... tudo bem? <br><br>

               Passando pra desejar um feliz dia da mulher atrasado <i>🤦🏻‍♀...</i> <br><br>

               E pra dizer q tudo ficou lindo e muito gostoso... o bolo fez sucesso rs... <br><br>

               Muito obg ele amou muito.." <br><br><br>

               <strong>@instagram</strong>
            </p>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <div class="comentario">
            <p>
              <strong>#4</strong> <br><br>

              "Muito obrigado...<br><br>

              Eu amei" <br><br><br>

              <strong>@Facebook</strong>
            </p>
          </div>
        </div>
      </div>
      
    </div>
    
    <!----  
      ****** Contato ******
    -->    
    <div class="container-fluid contato" id="ancora-contato">
      <div class="row wow slideInLeft">
        <div class="col-12 col-sm-6 col-md-5 col-lg-5">
          <div class="contato-descricao">
            <h3>Contato</h3>
            <ul>
              <li><i class="fas fa-map-marker-alt"></i> Sao Paulo - SP</li>
              <a class="wp-web"href="https://web.whatsapp.com/send?phone=5511965890240&text=Muito%20obrigado%20por%20entrar%20em%20contato!!!"><li><i class="fab fa-whatsapp"></i>(11) 98872 - 1531</li></a>
              <a class="wp-mobile" href="https://wa.me/5511965890240"><li><i class="fab fa-whatsapp"></i>(11) 98872 - 1531</li></a>
              <li><i class="far fa-envelope"></i>contato@partyybox.com.br</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-7 col-lg-7">
          <div class="contato-mensagem">
            <h3>Deixe sua mensagem</h3>

            <form action="" method="POST" class="form">
              <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-6"><input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome..." name="nome"></div>
                <div class="form-group col-12 col-sm-12 col-md-6"><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Seu e-mail..."  name="email"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Deixe sua mensagem..." rows="5" name="mensagem"></textarea>
                <button class="btn-enviar float-left" type="submit">Enviar</button>
                <div class="loading" style="float:left; margin-left: 20px; display:none;"><img src="<?php echo URL_BASE."assets/img/gif/loading.gif"?>" width="40"></div>
                <div class="mostrar"></div>
              </div>
            </form>
          </div>
        </div>
      </div>      
    </div>

    <!----  
      ****** Footer ******
    -->    
    <div class="footer remove-scroll">
      <div class="row wow slideInUp">
        <div class="col-6 col-sm-3 col-md-3 col-lg-3"> 
          <div class="institucional">
            <h5>Institucional</h5>

            <ul>
              <a href=""><li>Sobre PartyyBox</li></a>
              <a href=""><li>Politica de Privacidade</li></a>
              <a href=""><li>Trabalhe Conosco</li></a>
              <a href=""><li>Regulamento</li></a>
              <a href=""><li>Evento</li></a>
            </ul>

          </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-3"> 
          <div class="ajuda">
            <h5>Ajuda</h5>

            <ul>
              <li><a href="#ancora-festa-na-caixa">Festa na Caixa</a></li>
              <li><a href="#ancora-cesta-cafe-manha">Cesta</a></li>
              <li><a href="#ancora-vantagens">Vantagens</a></li>
              <li><a href="#ancora-comentarios">O que as pessoas falam</a></li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-3">
          <div class="social">
            <h5>Atendimento</h5>

            <ul>
              <li>(11) 96589 - 0240</li>
            </ul>
          </div> 
        </div>
        <div class="col-6 col-sm-3 col-md-3 col-lg-3">
          <div class="social">
            <h5>Continue conectado</h5>

            <ul>
              <a href=""><li><i class="fab fa-facebook"></i></li></a>
              <a href=""><li><i class="fab fa-instagram"></i></li></a>
              <a class="wp-web" href="https://web.whatsapp.com/send?phone=5511965890240&text=Muito%20obrigado%20por%20entrar%20em%20contato!!!"><li><i class="fab fa-whatsapp"></i></li></a>
              <a class="wp-mobile" href="https://wa.me/5511965890240"><li><i class="fab fa-whatsapp"></i></li></a>
              <a href=""><li><i class="fab fa-twitter"></i></li></a>
            </ul>
          </div> 
        </div>
        <div class="container pagamento">
          <div class="row">
            <div class="col-md-12">
              <div class="cartao">
                <ul>
                  <li><i class="fab fa-cc-mastercard"></i></li>
                  <li><i class="fab fa-cc-visa"></i></li>
                  <li><i class="fab fa-cc-paypal"></i></li>
                  <li><i class="fab fa-cc-apple-pay"></i></li>
                  <li><i class="fab fa-cc-amex"></i></li>
                  <li><i class="fab fa-cc-amazon-pay"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="copy">
                <p>&copy; 
                  COPYRIGHT 2020 - Party Box.
                  Todos os direitos reservados.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" type="text/javascript"></script>
    <script>
     
    //Emite alerta pagina em construção
      $( function(){
        $('.modal-saiba-mais').on("click",function(e){
          e.preventDefault(); 

          var posicao = $(document).scrollTop();
          $('html, body').animate({ scrollTop: posicao }, 50);
          
          //$('.social-fixo').hide();
          
          swal({
            title: "Em construção!",
            text: "Embre uma nova experiencia sobre produtos...",
            icon: "info"           
          });
          

          $('.swal2-confirm').click( function(){
            //$('.social-fixo').show(1000);
          });
        });
      });
    </script>	

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
	    new WOW().init();
    </script>
    <script src="<?php echo URL_BASE."assets/js/jquery.js"?>" type="text/javascript"></script>
    <script src="<?php echo URL_BASE."assets/js/program.js"?>" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>