<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-dark" method="post">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
      </div>
      <input type="text" class="form-control" id="nombre" placeholder="Enter Name" name="registroname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
      </div>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="registroemail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="registropswd">
    </div >

    <?php

#$registro= new ControladoFormulario();
#$registro->ctrRegistro();

$registro = ControladoFormulario::ctrRegistro();

if ($registro == "ok"){

echo '<script>
if(window.history.replaceState){
window.history.replaceState(null,null, window.location.href);
}

</script>';

  echo '<div class="alert alert-success">Registro de Usuario exitoso</div>';
}

    ?>
  
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  </div>