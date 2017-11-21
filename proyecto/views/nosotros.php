
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4">Nosotros</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">¿Quienes somos? y ¿Que hacemos?.</p>
            </div>
        </div>
    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Nosotros

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <article class="col-md-8">
                    <h2>Acerca de BÚHO INTERCAMBIOS</h2>
                    <p>
                        Herramienta para organizar intercambios navideños sencillos y divertidos con tu <strong>empresa</strong>, familia o amigos.
                    </p>
                    <p>
                        BÚHO INTERCAMBIOS fué creado en el año 2016 para ayudar a la <a href="http://www.qualtop.com/" title="Qualtop Group">empresa multinacional Qualtop Group</a> a organizar el intercambio navideño interno de la empresa, <strong>el cúal fué todo
un éxito</strong>, participando empleados y directivos, los cuales fueron organizados a travez de esta aplicación de una manera muy sencilla, eficaz y divertida.
                    </p>
                    <div id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <h4 class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#tab-objetivo"> OBJETIVO </a>
                            </h4>
                            <div id="tab-objetivo" class="panel-collapse collapse in">
                                <p>Es tiempo de dejar atras los clásicos intercambios navideños de tazas de cafe o artículos que pocas veces serán los que en verdad deseabamos.
                                </p>
                                <p>
                                  BÚHO INTERCAMBIOS se crea para ser la solución para asegurar
                                  que todo participante de un intercambio navideño pueda obtener el artículo que desea, especialmente, buscando que grandes empresas logren hacer un intercambio exitoso permitiendo que se organicen por equipos.
                                </p>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <h4 class="panel-heading">
                                <a data-toggle="collapse" data-parent="#accordion" href="#tab-funciona"> COMO FUNCIONA </a>
                            </h4>
                            <div id="tab-funciona" class="panel-collapse collapse in">
                                <h4>Organiza el sorteo de regalos de intercambio y ¡Dales gusto a todos!</h4>
                                <p>
                                    Crea un usuario como lider organizador del intercambio navideño de tu empresa, familia o grupo de amigos.
                                </p>
                                <p>
                                    Identifica un intercambio con una fecha de inicio y fin y los datos de donde se llevará a cabo la celebración del intercambio, puedes organizar los intercambios que desees.   
                                <p>
                                    Crea los equipos de intercambio necesarios para organizar el intercambio que has creado, eligiendo el número y precio de los artículos a intercambiar. 
                                </p>
                                <p>
                                    <strong>Empresa: Sabemos que las organizaciones grandes tienen departamentos con diferentes peticiones en el intercambio, ¡Dales gusto a todos!</strong>
                                </p>
                                <p>
                                    Puedes crear los equipos que desees, por ejemplo: El equipo de Desarrolladores, Administradores, etc.
                                </p>
                                <h4>Participa en el sorteo de regalos de intercambio</h4>
                                <p>
                                    1. Revisa tu correo (recuerda revisar el correo no deseado) y encuentra tu usuario y password para accesar a la aplicación y agregar las opciones de regalo que te gustaría recibir.
                                </p>
                                <p>
                                    Puedes elegir del listado acumulado los artículos dando click en el ícono de lista <button type="button" class="btn btn-primary"><i class="fa fa-list"></i></button>, o agregar una nueva opción dando click en el ícono de + <button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>.
                                </p>
                                <p>
                                    2. Una vez realizado el sorteo, recibirás un correo de confirmación con el nombre de la persona a la que deberás entregar regalo, así como las opciones de regalo seleccionadas. 
                                </p>
                            </div>
                        </div>
                    </div>
                </article>
                <aside class="col-md-4 hidden-md-down">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="Nosotros">

                    <?php include ("views/includes/articles-amazon.php"); ?>

                </aside>
            </div>
        </div>
    </main>
