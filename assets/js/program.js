  //Efeito Scroll da página, link ancora  
  $('li a[href^="#ancora"]').on('click', function() {
    var id = $(this).attr('href'),
    targetOffset = $(id).offset().top;
      
    $('html, body').animate({ 
      scrollTop: targetOffset - 0
    }, 500);
  });
  
  //Ocultar menu mobile ao clicar no link
  $(function(){ 
    var navMain = $("#navbarNavAltMarkup");

    navMain.on("click", "a", null, function () {
        navMain.collapse('hide');
    });
  });    

 //exibir e ocultar submenu 
 function myFunction() {
    var x = document.getElementById("li");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

  //Botao topo
  $(window).scroll(function(){

    if($(this).scrollTop() > 200 ){
      $('.link-up').stop().fadeTo('slow',1);
    }else {
      $('.link-up').stop().fadeTo('slow',0);
    }
  });

  $( 'a[href^="#top"]' ).click(function() {
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });

//Formulário envio de emaio com alerta de sucesso ou erro
    $(function(){
        $('.form').submit(function(e){
            e.preventDefault();
        
            $.ajax({
            url: 'http://localhost/partyyboxMVC/app/views/FormContato.class.php',
            type: 'POST',
            data: $('.form').serialize(),
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

  
