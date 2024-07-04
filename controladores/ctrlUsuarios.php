<?php
class controladorUsuarios {
    //Función permite preparar datos para la validadción de usiarios
    public function ctrlLogin (){
        if (isset($_POST['username']) && (isset($_POST['password']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $res = modeloUsuarios::mdlBuscarUsuario($username, $password);
            if (isset($res['username']) && $res['username'] == $_POST['username'] &&
                isset($res['password']) && $res['password'] == $_POST['password']){
                    $_SESSION['login'] = 'activa';
                    $_SESSION['nombres'] = $res['nombres']." ".$res['apellidos'];
                    $_SESSION['cedula'] = $res['cedula'];
                    echo "<script>
                            window.location.href='inicio'
                          </script>";
                }
        }
    } 
}