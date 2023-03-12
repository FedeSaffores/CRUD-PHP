<?php
if(!isset($_SESSION["validarIngreso"])){
  echo '<script>window.location="index.php?pagina=registro";</script>';
  return;
}else{
  if($_SESSION["validarIngreso"]!="ok"){
  echo '<script>window.location="index.php?pagina=registro";</script>';
  return;
  }
}
$usuarios= ControladoFormulario::ctrSeleccionarRegistro(null, null);

?>
<table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $key => $value):?>
      <tr>
        <td><?php echo ($key+1);?></td>
        <td><?php echo $value["nombre"];?></td>
        <td><?php echo $value["email"];?></td>
        <td><?php echo $value["fecha"];?></td>
        <td>
        <div class="btn-group">
      
      <div class="px-1">
        <a href="index.php?pagina=editar&id=<?php echo $value["id"];?>" class="btn btn-warning">
        <i class="fa-solid fa-pen-to-square"></i></a>
      </div>
        <form method="post">
          <input type="hidden" value="<?php echo $value["id"];?>" name="eliminarRegistro">
        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
        </form>
        <?php
        $eliminar = new ControladoFormulario();
        $eliminar -> ctrEliminarRegistro();
        ?>
        
        </div>
        </td>
      </tr>
     <?php endforeach?>
    </tbody>
  </table>
