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

    <!-- Modal Finaliza  -->
    <div class="modal fade" id="finalizaSorteo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Organizar equipo</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="formOrganizaEquipo">
                                <div class="form-group row">
                                    <div class="col-md-8 offset-md-2">
                                        <p class="text-center">Finalizar el sorteo del intercambio de este equipo.</p>
                                        <p><strong>Nota: </strong> Si hay integrantes que ya fueron organizados, al dar click en Organizar, solo organizarás a los que aún no han sido organizados.</p>
                                        <p>Esto significa que puedes finalizar el sorteo mas de una vez si se da el caso que mas personas se integraron al sorteo de intercambio cuando fué ya finalizado anteriormente.</p>
                                        <input type="hidden" name="organiza_idequipo" id="organiza_idequipo">
                                        <button type="submit" class="btn btn-warning"><i class="fa fa-flag-checkered"></i> Organizar</button>
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
              <button type="button" data-idequipo="{{idequipo}}" data-nombres="{{nombre}}" class="btn btn-warning" data-toggle="modal" data-target="#finalizaSorteo"><i class="fa fa-flag-checkered"></i> Finalizar Sorteo </button>
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


            // Organiza equipo con confirmacion
            $('#finalizaSorteo').on('shown.bs.modal', function (event) {

                var modal = $(this)

                $(document).off('submit').on('submit', '#formOrganizaEquipo', function(e){
                    e.preventDefault();

                    // Finaliza, Organiza y envía  email a lista de integrantes
                    var usuario = new Usuario();
                    var params = {
                    '_idequipo'   : $("#organiza_idequipo").val(),
                    '_method'     : 'finishAndEmailToAllByIdequipo'
                    }
                    console.log("params", params);
                    usuario._set(params);

                    setTimeout(function() {
                        modal.modal('hide');
                    }, 750);

                });
            });

            // Organiza equipo con confirmacion
            $('#finalizaSorteo').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var equipo_idequipo = button[0].dataset.idequipo
                var equipo_nombres = button[0].dataset.nombres

                var modal = $(this)

                modal.find('.modal-title').text("Organizar a " + equipo_nombres)
                modal.find('.modal-body input#organiza_idequipo').val(equipo_idequipo)

            });


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