<?php

class ControladoFormulario{


 static public function ctrRegistro(){
        if(isset($_POST["registroname"])){
           $tabla = "registros";
           $datos = array("nombre"=>$_POST["registroname"],
           "email"=>$_POST["registroemail"],
           "password"=>$_POST["registropswd"]);
        $respuesta = ModeloFormulario::mdlRegistro($tabla, $datos);
        return $respuesta;
        }
    }

static public function ctrSeleccionarRegistro($item, $valor){
        $tabla="registros";
        $respuesta= ModeloFormulario::mdlSeleccionarRegistro($tabla, $item, $valor);
        return $respuesta;
    }

public function ctrIngreso(){
        if(isset($_POST["ingresoemail"])){
        $tabla="registros";
        $item="email";
        $valor=$_POST["ingresoemail"];
        $respuesta= ModeloFormulario::mdlSeleccionarRegistro($tabla,$item, $valor);


        if($respuesta["email"]==$_POST["ingresoemail"] && $respuesta["password"]==$_POST["ingresopswd"]){

            $_SESSION["validarIngreso"]="ok";
            echo '<script>
            if(window.history.replaceState){
            window.history.replaceState(null,null, window.location.href);
            }
            window.location ="index.php?pagina=inicio";
            </script>';
        }else{
            echo '<script>
if(window.history.replaceState){
window.history.replaceState(null,null, window.location.href);
}

</script>';

  echo '<div class="alert alert-success">Error en Email o contraseña</div>';
}
        }
        }
        
static public function ctrActualizarRegistro(){

            if(isset($_POST["actualizarname"])){
                if($_POST["actualizarpswd"]!= ""){
                    $password= $_POST["actualizarpswd"];
                }else{
                    $password= $_POST["passwordActual"];
                }
            $tabla="registros";
            $datos= array( "id"=>$_POST["idUsuario"],
                           "nombre"=>$_POST["actualizarname"],
                           "email"=>$_POST["actualizaremail"],
                           "password"=>$password);
        
            $respuesta=ModeloFormulario::mdlActualizarRegistro($tabla,$datos);
       
            return $respuesta;
         
    }
}
public function ctrEliminarRegistro(){
    if(isset($_POST["eliminarRegistro"])){
        $tabla="registros";
        $valor=$_POST["eliminarRegistro"];

        $respuesta= ModeloFormulario::mdlEliminarRegistro($tabla,$valor);
            
        if($respuesta=="ok"){
            echo '<script>

  if(window.history.replaceState){
  window.history.replaceState(null,null, window.location.href);
  }
  window.location="index.php?pagina=inicio";
  </script>';

        }
    }
}


}

?>