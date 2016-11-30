<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="view-header">          
          <div class="header-title">
            <h3 class="m-b-xs">Contactanos</h3>
            <small>Consulte por nuestros productos</small>
          </div>
        </div>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-filled">
          <div class="panel-heading">
            Formulario de contacto
          </div>
          <div class="panel-body">
              <form class="contacto" action="index.php?action=agregar_consulta" method="post">
                <div class="form-group"><label for="name">Nombre</label> <input type="name" required class="form-control" name="name" placeholder="Nombre"></div>
                  <div class="form-group"><label for="email">Email</label> <input type="email" class="form-control" name="mail" placeholder="mail@ejemplo.com" required></div>
                <div class="form-group"><label for="consulta">Su consulta</label> <textarea name="consulta" class="form-control" rows="3" placeholder="Escriba su consulta aqui..." required></textarea></div>
                  <div class="checkbox"><label> <input type="checkbox" name="notificacion"> Recibir notificaciones </label></div>
                  <button type="submit" class="btn btn-default">Enviar</button>
                </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
