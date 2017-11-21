
        <div class="texto-encabezado text-xs-center">
            <div class="container">
                <h1 class="display-4 wow bounceIn">Contacto</h1>
                <p class="wow bounceIn" data-wow-delay=".3s">Estamos listos para ayudarte</p>
            </div>
        </div>
    </section>
    <section class="ruta py-1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-right">
                    <a href="<?=APP_PATH?>">Inicio</a> » Contacto

                </div>
            </div>
        </div>
    </section>
    <main class="py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="m-b-2">Formulario de contacto</h2>
                    <form id="form-contact-me">
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label">Nombre</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese su nombre" data-toggle="tooltip" data-placement="top" title="Ingrese su nombre completo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label">Email</label>

                            <div class="col-md-8">
                                <input class="form-control" type="text" id="email" name="email" placeholder="Ingrese su email" data-toggle="tooltip" data-placement="top" title="Ingrese su email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mensaje" class="col-md-4 col-form-label">Mensaje</label>

                            <div class="col-md-8">
                                <textarea class="form-control" rows="5" id="mensaje" name="mensaje" placeholder="Ingrese su mensaje" data-toggle="tooltip" data-placement="top" title="Ingrese un mensaje"></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Limpiar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3>¡Contáctanos!</h3>
                    <p>Contacta con Búho Intercambios para promociones, publicidad o sugerencias.</p>
                </div>
            </div>
        </div>
    </main>



<script>

$(document).ready(function(){

  $("#form-contact-me").submit(function(e){
      e.preventDefault();

      var $form = $(this);
      var $inputs = $form.find("input, select, button, textarea");
      var serializedData = $form.serialize();
      $inputs.prop("disabled", true);
      request = $.ajax({
          url: "./server/contactme-email-send.php",
          type: "post",
          data: serializedData
      })
      .done(function (response, textStatus, jqXHR){
          response = JSON.parse(response);
          alert(response.msg);
      })
      .fail(function (jqXHR, textStatus, errorThrown){
          console.error(
              "The following error occurred: "+
              textStatus, errorThrown
          );
      })
      .always(function () {
          $inputs.prop("disabled", false);
      });
    });

  
  });

</script>