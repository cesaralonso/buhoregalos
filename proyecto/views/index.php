        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4 wow bounceIn">Organiza un intercambio</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos fácil y divertido.</p>
                <a href="<?=(isset($_SESSION['idrol']) && $_SESSION['idrol'] == "LIDER") ? 'intercambio' : 'registro' ?>" class="btn btn-primary btn-lg">Empieza ahora</a>
            </div>
        </div>
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
    </section>
    <section class="py-1" id="agencia">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">Organiza un intercambio sencillo y seguro</h2>
                    <p>Búho Intercambios es una aplicación gratuita para organizar intercambios empresariales, familiares y entre amigos, fácil y divertido.</p>
                    <p>Deseamos que el regalo que recibas de intercambio este año sea el que siempre esperaste.</p>
                    <p><bloquote class="text-center"><i> "Con especial dedicatoria para Qualtop Group"</i> <img src="<?=APP_PATH?>assets/images/qtp-icon.png" alt="Qualtop Group Logo" height="32" style="width: 32px; float:left; margin-right: 5px;"></bloquote></p>
                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="La agencia">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-md-12">
                    <h1 class="h3 text-xs-center text-md-left font-weight-bold">Artículos de Interes</h1>
                    <div class="row">
                        <div class="col-md-6 wow bounceIn" data-wow-delay=".3s">
                            <h2 class="text-xs-center text-md-left">Origen de los Intercambios navideños</h2>
                            <img src="http://s3-us-west-1.amazonaws.com/cmujer/wp-content/uploads/2016/12/regalos-21.jpg" alt="Como elegir un buen regalo de intercambio para navidad" class="img-fluid">
                            <p>
                                El origen del <strong>intercambio de regalos</strong> se remonta a la antigua Roma, donde antes de que se celebrara la Navidad se llevaba a cabo la fiesta de Saturnalia
                            </p>
                            <p>
                                Durante esos días se honraba a Saturno, dios del grano, y a la agricultura, con grandes banquetes e <strong>intercambio de regalos</strong>
                            </p>
                            <p>
                                Muchas sociedades antiguas celebraban festivales en honor a sus dioses en la época del solsticio de invierno, el que coincide con la temporada de la Navidad
                            </p>
                            <p>
                                Estas celebraciones a menudo incluían el <strong>intercambio de regalos</strong>, por lo general de los patrones a sus trabajadores
                            </p>
                            <p>
                                Según las escrituras dentro de la Biblia, tres reyes magos (hombres sabios del este) fueron a visitar a Jesús recién nacido...
                            </p>
                            <a href="<?=APP_PATH?>blog/origen-de-los-intercambios-navidenos" class="btn btn-primary">Leer más</a>
                        </div>

                        <div class="col-md-6 wow bounceIn" data-wow-delay=".3s">

                            <h2 class="text-xs-center text-md-left">Como elegir un buen regalo de intercambio para navidad</h2>
                            
                            <img src="https://epointnet.com/wp-content/uploads/2016/12/12-regalos-navidad-para-amigos.jpg" alt="Origen de los Intercambios navideños" class="img-fluid">
                            <p>
                                Elegir un buen regalo es un proceso que muestra interés y dedicación para comprar un bonito detalle hacia un ser querido especial. En Búho intercambios te orientamos para que tus regalos de intercambio sean una buena sorpresa:
                            </p>
                            <p>
                                1. En primer lugar, piensa en los gustos que tiene el destinatario y deja de lado tus propios gustos, si no, solo conseguirás comprar algo que te encante a ti pero que no guste al destinatario.
                            </p>
                            <p>
                                2. Un buen regalo es aquel que encaja con la personalidad del destinatario y con su modo de ser.
                            </p>
                            <p>
                                3. Es básico que te marques un presupuesto de cuánto estás dispuesto a gastar en la compra de tu regalo de acuerdo con tus circunstancias personales y a tu sueldo...
                            </p>
                            <a href="<?=APP_PATH?>blog/como-elegir-un-buen-regalo-de-intercambio-para-navidad" class="btn btn-primary">Leer más</a>
                        </div>   

                    </div>

                    <div class="row py-3">
                        <div class="col-md-12 wow bounceIn" data-wow-delay=".3s">
                            <a href="<?=APP_PATH?>blog" class="btn btn-success float-right">Todos los artículos</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
