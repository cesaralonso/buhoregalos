<?php 
if(!$islogged && !$isadmin){
    Core::alert("Acceso no permitido");
    Core::redir("../acceso");
}
?>
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Mi intercambio</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Administra tu intercambio.</p>
            </div>
        </div>

    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Mi intercambio
                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>Administra tu intercambio</h2>

                    <div id="intercambio-byid"></div>
                    
                </article>
                <aside class="col-md-4 hidden-md-down">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="Nosotros">
                </aside>

            </div>
        </div>
    </main>



    <!-- CURRENT INTERCAMBIO TEMPLATE -->
    <script id="intercambio-byid-template" type="x-text/handlebars">

        <form id="formEditarIntercambio">
            {{#this}}
            
            <input class="form-control" type="hidden" id="idintercambio" name="idintercambio" value="{{idintercambio}}">
            <div class="form-group row">
                <label for="nombre" class="col-md-4 col-form-label">Identifica este intercambio</label>

                <div class="col-md-8">
                    <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ej. Tu regalo secreto 2017" data-toggle="tooltip" data-placement="top" title="IIngrese un indentificador" value="{{nombre}}">

                </div>
            </div>

            <div class="form-group row">
                <label for="fecha_ini" class="col-md-4 col-form-label">Fecha de inicio</label>

                <div class="col-md-8">
                    <input class="form-control" type="text" id="fecha_ini" name="fecha_ini" placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Fecha de inicio" value="{{fecha_ini}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="fecha_fin" class="col-md-4 col-form-label">Fecha de término</label>

                <div class="col-md-8">
                    <input class="form-control" type="text" id="fecha_fin" name="fecha_fin" placeholder="Fecha de término" data-toggle="tooltip" data-placement="top" title="Fecha de término" value="{{fecha_fin}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
            {{/this}}
        </form>

    </script>



    <script>
        $(function(){

            $("#fecha_fin, #fecha_ini").datepicker({ format: 'yyyy-mm-dd' });

            // Guarda intercambio
            var intercambio = new Intercambio();
            $(document).off('submit').on('submit', '#formEditarIntercambio', function(e){
                e.preventDefault();

        
                var data = {
                    '_base_url'                     : '../api/front/intercambio.php',
                    '_idintercambio'                     : $("#idintercambio").val(),
                    '_nombre'                       : $("#nombre").val(),
                    '_fecha_ini'                    : $("#fecha_ini").val(),
                    '_fecha_fin'                    : $("#fecha_fin").val(),
                    '_method'                       : 'update'
                };
                console.log("intercambio", intercambio);
                intercambio._set(data);
    
            });

            // Obtener con mi sesion
            var intercambio = new Intercambio();
            var params = {
                '_base_url': '../api/front/intercambio.php',
                '_idintercambio': '<?=$_GET["id"]?>',
                '_method': 'byId'
            };
            intercambio._set(params);

        });
    </script>