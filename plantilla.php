<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Punto de Venta</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="vistas/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <script src="vistas/plugins/sweetalert2/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">
</head>


<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == "activa") {
  echo "<body class='hold-transition sidebar-mini'>
      <!-- Site wrapper -->
      <div class='wrapper'>";
  include "vistas/modulos/navbar.php";
  include "vistas/modulos/sidebar.php";
  //Rutas 
  if (isset($_GET['enlace'])) {
    if ($_GET['enlace'] == 'inicio' ||
        $_GET['enlace'] == 'clientes' ||
        $_GET['enlace'] == 'productos' ||
        $_GET['enlace'] == 'proveedores' ||
        $_GET['enlace']== 'personas' ||
        $_GET['enlace']== 'cerrar-sesion') {
      include "vistas/modulos/".$_GET['enlace'].".php";

      
    }
  } else {
    include "vistas/modulos/inicio.php";
  }
  include "vistas/modulos/footer.php";
  echo "</div>";
} else {
  include "vistas/modulos/login.php";
}

?>


<!-- ./wrapper -->
<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- DataTables -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="vistas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="vistas/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="vistas/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="vistas/plugins/jszip/jszip.min.js"></script>
<script src="vistas/plugins/pdfmake/pdfmake.min.js"></script>
<script src="vistas/plugins/pdfmake/vfs_fonts.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="vistas/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="vistas/js/persona.js"></script>
<script src="vistas/js/general.js"></script>
</body>

</html>