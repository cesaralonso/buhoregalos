<?php 
if(!$islogged && !$isadmin){
    Core::alert("Acceso no permitido");
    Core::redir("./acceso");
}
?>

        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Mis intercambios</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Administra tus intercambios.</p>
            </div>
        </div>

    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Mis intercambios
                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>Administra tus intercambios</h2>
                    <div id="intercambio">
                    </div>
                </article>
                <aside class="col-md-4 hidden-md-down">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="Nosotros">
                </aside>
            </div>
        </div>
    </main>

    
    <!-- Modal Elimina  -->
    <div class="modal fade" id="eliminacionIntercambio" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Eliminar intercambio</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="formEliminaIntercambio">
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <p class="text-center">¿Estás seguro de querer eliminar este intercambio?</p>
                                        <input type="hidden" name="delete_idintercambio" id="delete_idintercambio">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Eliminar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CURRENT INTERCAMBIOS TEMPLATE -->
    <script id="intercambio-template" type="x-text/handlebars">
        <div class="card card-block text-xs-center">
          <h4 class="card-title">Nuevo</h4>
          <p class="card-text">Crear intercambio</p>
          <a href="intercambio" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        </div>

          {{#each this}}
            <div class="card card-block text-xs-center">
              <h4 class="card-title">{{nombre}}</h4>
              <p class="card-text">{{fecha_ini}} - {{fecha_fin}}</p>
              <p class="card-text">Administrar</p>
              <a href="mi-intercambio/{{idintercambio}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
              <a href="#" data-idintercambio="{{idintercambio}}" data-nombres="{{nombre}}" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionIntercambio"><i class="fa fa-trash"></i></a>
            </div>
          {{/each}}
    </script>

    <script>
        $(function(){

            // Obtener con mi sesion
            var intercambio = new Intercambio();
            var params = {
                '_method': 'allForMe'
            };
            intercambio._set(params);


            // Elimina intercambio con confirmacion
            $('#eliminacionIntercambio').on('shown.bs.modal', function (event) {

                var modal = $(this)

                $(document).off('submit').on('submit', '#formEliminaIntercambio', function(e){
                    e.preventDefault();

                    var intercambio = new Intercambio();
                    // Elimina intercambio
                    var params = {
                       '_idintercambio': $("#delete_idintercambio").val(),
                       '_method': 'delete'
                    }
                    intercambio._set(params);

                    setTimeout(function() {
                        modal.modal('hide');
                    }, 750);

                });
            });

            // Elimina intercambio con confirmacion
            $('#eliminacionIntercambio').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var intercambio_idintercambio = button[0].dataset.idintercambio
                var intercambio_nombres = button[0].dataset.nombres

                var modal = $(this)

                modal.find('.modal-title').text("Eliminar a " + intercambio_nombres)
                modal.find('.modal-body input#delete_idintercambio').val(intercambio_idintercambio)

            });

        });
    </script>