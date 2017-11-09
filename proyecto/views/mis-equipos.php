<?php 
if(!$islogged && !$isadmin){
    Core::alert("Acceso no permitido");
    Core::redir("./acceso");
}
?>

        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Mis equipos</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Administra tus equipos.</p>
            </div>
        </div>

    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Mis equipos
                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>Administra tus equipos</h2>
                    <div id="equipo">
                    </div>
                </article>
                <aside class="col-md-4 hidden-md-down">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="Nosotros">
                </aside>

            </div>
        </div>
    </main>


    <!-- Modal Elimina  -->
    <div class="modal fade" id="eliminacionEquipo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Eliminar equipo</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="formEliminaEquipo">
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <p class="text-center">¿Estás seguro de querer eliminar este equipo?</p>
                                        <input type="hidden" name="delete_idequipo" id="delete_idequipo">
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

    <!-- CURRENT EVENTS TEMPLATE -->
    <script id="equipo-template" type="x-text/handlebars">
        <div class="card card-block text-xs-center">
          <h4 class="card-title">Nuevo</h4>
          <p class="card-text">Crear equipo</p>
          <a href="equipo" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        </div>
          {{#each this}}
            <div class="card card-block text-xs-center">
              <h4 class="card-title">{{nombre}}</h4>
              <h2 class="text-primary">{{code}}</h2>
              <p class="card-text">Administrar</p>
              <a href="mi-equipo/{{idequipo}}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
              <a href="integrantes/{{idequipo}}" class="btn btn-primary"><i class="fa fa-users"></i></a>
              <a href="#" data-idequipo="{{idequipo}}" data-nombres="{{nombre}}" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionEquipo"><i class="fa fa-trash"></i></a>
            </div>
          {{/each}}

    </script>


    <script>
        $(function(){

            // Obtener con mi sesion
            var equipo = new Equipo();
            var params = {
                '_method': 'allForMe'
            };
            equipo._set(params);


            // Elimina equipo con confirmacion
            $('#eliminacionEquipo').on('shown.bs.modal', function (event) {

                var modal = $(this)

                $(document).off('submit').on('submit', '#formEliminaEquipo', function(e){
                    e.preventDefault();

                    var equipo = new Equipo();
                    // Elimina equipo
                    var params = {
                       '_idequipo': $("#delete_idequipo").val(),
                       '_method': 'delete'
                    }
                    equipo._set(params);

                    setTimeout(function() {
                        modal.modal('hide');
                    }, 750);

                });
            });

            // Elimina equipo con confirmacion
            $('#eliminacionEquipo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var equipo_idequipo = button[0].dataset.idequipo
                var equipo_nombres = button[0].dataset.nombres

                var modal = $(this)

                modal.find('.modal-title').text("Eliminar a " + equipo_nombres)
                modal.find('.modal-body input#delete_idequipo').val(equipo_idequipo)

            });

        });
    </script>