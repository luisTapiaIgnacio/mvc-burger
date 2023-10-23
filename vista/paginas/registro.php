<h2 class="text-center">Registro</h2>

<div class="d-flex justify-content-center">
  <form class="form-horizontal pt-5 bg-light " method="POST">

    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Username" id="usr" name="nombre">
       </div>
    </div>

    <div class="form-group">
        <label for="nombre">Correo Electronico:</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="e-mail" id="usr" name="correo">
       </div>
    </div>
     

    <div class="form-group">
        <label for="nombre">Contraseña:</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="bi bi-lock-fill"></i></i></span>
          </div>
          <input type="password" class="form-control" placeholder="contraseña" id="usr" name="contraseña">
       </div>
    </div>
     
    <?php
    /*========================================
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO NO ESTATICO
    ========================================== */
     // $registro=new ControladorFormularios();
     // $registro->ctrRegistro();

      /*========================================
    FORMA EN QUE SE INSTANCIA LA CLASE DE UN METODO  ESTATICO
    ========================================== */
    $registro=ControladorFormularios::ctrRegistro();
    if($registro=="ok"){
      
      //un script de javascript
      echo'<script>
          if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href);
          }
      </script>';
      echo'<div class="alert alert-success">El usuario ha sido registrado</div>';
    }

    ?>

                  <div class="form-group">        
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>
  </form>
</div>
