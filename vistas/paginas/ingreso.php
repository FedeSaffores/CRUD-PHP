<div class="d-flex justify-content-center text-center">
<form class="p-5 bg-dark" method="post">
    
    <div class="form-group">
      <label for="email">Email:</label>
      <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
      </div>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="ingresoemail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <div class="input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="ingresopswd">
    </div >

    <?php

$ingreso= new ControladoFormulario();
$ingreso->ctrIngreso();

    ?>
  
    <button type="submit" class="btn btn-primary">Ingresar</button>
    </div>
  </form>
  </div>