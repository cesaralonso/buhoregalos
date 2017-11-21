

        <div class="texto-encabezado text-xs-center">

            <div class="container">
                <h1 class="display-4">Intercambio</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Crea tu Intercambio.</p>

            </div>

        </div>

    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Intercambio

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>Crea un Intercambio</h2>
                    <p>
                        Comienza creando un intercambio como lider para despues crear un equipo
                    </p>


                    <form id="formIntercambio">

                        <div class="form-group row">
                            <h3 class="col-md-12">Sorteo</h3>
                        </div>

                        <div class="form-group row">
                            <label for="equipo" class="col-md-4 col-form-label">Identifica este intercambio</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ej. Tu regalo secreto 2017" data-toggle="tooltip" data-placement="top" title="IIngrese un indentificador">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_ini" class="col-md-4 col-form-label">Fecha de inicio</label>

                            <div class="col-md-8">
                                <input class="form-control" type="date" id="fecha_ini" name="fecha_ini" placeholder="Fecha de inicio" data-toggle="tooltip" data-placement="top" title="Fecha de inicio">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha_fin" class="col-md-4 col-form-label">Fecha de término</label>

                            <div class="col-md-8">
                                <input class="form-control" type="date" id="fecha_fin" name="fecha_fin" placeholder="Fecha de término" data-toggle="tooltip" data-placement="top" title="Fecha de término">
                            </div>
                        </div>

                        <div class="form-group row">
                            <h3 class="col-md-12">Celebración</h3>
                        </div>

                        <div class="form-group row">
                            <label for="lugar" class="col-md-4 col-form-label">Lugar</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="lugar" name="lugar" placeholder="Lugar de la celebración" data-toggle="tooltip" data-placement="top" title="Lugar de la celebración">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="direccion" class="col-md-4 col-form-label">Dirección</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección de la celebración" data-toggle="tooltip" data-placement="top" title="Dirección de la celebración">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fecha" class="col-md-4 col-form-label">Fecha</label>

                            <div class="col-md-8">
                                <input class="form-control" type="date" id="fecha" name="fecha" placeholder="Fecha de la celebración" data-toggle="tooltip" data-placement="top" title="Fecha de la celebración">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label">Hora</label>

                            <div class="col-md-8">
                                <input class="form-control" type="time" id="hora" name="hora" placeholder="Hora de la celebración" data-toggle="tooltip" data-placement="top" title="Hora de la celebración">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>

                </article>
                <aside class="col-md-4 hidden-md-down">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="Nosotros">
                </aside>

            </div>
        </div>
    </main>

    <script>
        $(function(){

            // $("#fecha_fin, #fecha_ini, #fecha").datepicker({ format: 'yyyy-mm-dd' });

            var intercambio = new Intercambio();
            $(document).off('submit').on('submit', '#formIntercambio', function(e){
                e.preventDefault();

                var data = {
                    '_nombre'           : $("#nombre").val(),
                    '_fecha_ini'        : $("#fecha_ini").val(),
                    '_fecha_fin'        : $("#fecha_fin").val(),
                    '_lugar'            : $("#lugar").val(),
                    '_direccion'        : $("#direccion").val(),
                    '_fecha'            : $("#fecha").val(),
                    '_hora'             : $("#hora").val(),
                    '_method'           : 'save'
                };
                intercambio._set(data);

            });

        });
    </script>
