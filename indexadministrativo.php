<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administración</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php">Camaron Latino</a>
    
      
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="indexadministrativo.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="tablaservicio.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Servicios</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Productos</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="indexadministrativo.php">Usuarios</a>
        </li>
        <li class="breadcrumb-item active">Tabla Usuario</li>
      </ol>
    <ol class="breadcrumb">
        <a href="creacionUsuarioPA.php?mensaje="><button class="btn btn-primary btn-block">Crear</button></a>
      </ol>

      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Usuarios</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Usuario</th>
                  <th>C.I</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  require_once('usuarioCollector.php');
                  $objetoUsuario = new usuarioCollector();
                  $arrayUsu = $objetoUsuario->todaInfo();
                  foreach($arrayUsu as $usuario){
                      echo "<tr>";
                      echo "<td>". $usuario->getNombre() . "</td>";
                      echo "<td>". $usuario->getUsuario() . "</td>";
                      echo "<td>". $usuario->getIdentificacion() . "</td>";
                      $envio = $usuario->getNombre();
                      echo "<td>". "<a href='editarUsuariosPA.php?usu=$envio'><button class='material-icons button2 edit'>edit</button></a>" . "</td>";
                      echo "<td>". "<a data-toggle='modal' data-target='#exampleModal2' href='indexadministrativo?valor=$envio'><button class='material-icons button2 delete'>delete</button></a>" . "</td>";
                          echo "<div class='modal fade' id='exampleModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
                          echo "<div class='modal-dialog' role='document'>";
                            echo "<div class='modal-content'>";
                              echo "<div class='modal-header'>";
                                echo "<h5 class='modal-title' id='exampleModalLabel2'>Estas seguro?</h5>";
                                echo "<button class='close' type='button' data-dismiss='modal' aria-label='Close'>";
                                  echo "<span aria-hidden='true'>×</span>";
                                echo "</button>";
                               echo "</div>";
                               $valor=$_GET['valor'];
                              echo "<div class='modal-footer'>";
                                  
                                   echo "<button class='btn btn-secondary' type='button' data-dismiss='modal'>Cancel</button>";
                                   echo "<a class='btn btn-primary' href='eliminarUsuarioPA.php?mensaje=$valor'>Eliminar</a>";
                                  
                              echo "</div>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Estas seguro?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Logout" para cerrar session.</div>
          <div class="modal-footer">
              <form action="logout.php">
               <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              
               <a class="btn btn-primary" href="logout.php">Logout</a>
              </form>
           
          </div>
        </div>
      </div>
    </div>
      <!-- eliminar Modal-->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    
    <!-- Custom scripts for all pages-->
    <script src="js2/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js2/sb-admin-datatables.min.js"></script>
    <script src="js2/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
