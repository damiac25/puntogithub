<?php
class controladorClientes{
    //preparar daros para guardar
    public static function ctrlGuardarClientes(){
        if(isset($_POST['cedula_guardar'])&&
           isset($_POST['nombre_guardar'])&&
           isset($_POST['apellido_guardar'])&&
           isset($_POST['sexo_guardar'])&&
           isset($_POST['f_nacimiento_guardar'])&&
           isset($_POST['correo_guardar'])&&
           isset($_POST['telefono_guardar'])){
            $tabla ='cliente';
            $data = array('cedula' => $_POST['cedula_guardar'],
                          'nombres' => $_POST['nombre_guardar'],
                          'apellidos' => $_POST['apellido_guardar'],
                          'sexo' => $_POST['sexo_guardar'],
                          'f_nacimiento' => $_POST['f_nacimiento_guardar'],
                          'correo' => $_POST['correo_guardar'],
                          'telefono' =>$_POST['telefono_guardar'],
                          'direccion' =>$_POST['direccion_guardar']);
            if(modeloClientes::mdlGuardarClientes($tabla, $data)){
                echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: '¡Datos del Cliente guardados correctamente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.localition = 'clientes'
                    }
                  })
                </script>";
            }else{
                echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: '¡NO se puede guardar los datos de cliente...!',
                    showConfirmButton: true,
                    confirmButtonText: 'Cerrar'
                  }).then(function(result){
                    if(result.value){
                        window.localition = 'clientes'
                    }
                  })
                </script>";
            }
        }
    }
    //funcion para preparar datos para cargar 
    public static function ctrlCargarClientes(){
      $tabla= 'cliente';
      $res=modeloClientes::mdlCargarClientes($tabla);
      return $res;
    }
}

