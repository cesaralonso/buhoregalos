        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4 wow bounceIn">Organiza un intercambio</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Organizar intercambios con tu familia, amigos o empresa.</p>
                <a href="<?=(isset($_SESSION['idrol']) && $_SESSION['idrol'] == "LIDER") ? 'intercambio' : 'registro' ?>" class="btn btn-primary btn-lg">Empieza ahora</a>
            </div>
        </div>
        <div class="flecha-bajar text-xs-center">
            <a data-scroll href="#agencia"> <i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div>
    </section>
    <section class="agencia py-1" id="agencia">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xl-9 wow bounceIn" data-wow-delay=".3s">
                    <h2 class="h3 text-xs-center text-md-left font-weight-bold">Organiza un intercambio perfecto</h2>
                        <p>Deseamos que el regalo que recibas de intercambio este año sea el que siempre esperaste recibir.</p>
                        <p>Participa votando por el regalo perfecto para ti y para cada integrante de tu equipo de intercambio.</p>
                </div>
                <div class="col-md-4 col-xl-3 wow bounceIn" data-wow-delay=".6s">
                    <img src="<?=APP_PATH?>assets/images/buho.png" alt="La agencia">
                </div>
            </div>
        </div>
    </section>
