      <div class="row menu">
        <div class="col-md-9"></div>
        <div class="col-md-3 nopadding-right">
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