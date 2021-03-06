<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INICIO</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">PST GRUPO<sup>4</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-users"></i>
          <span>Cerrar sesión</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          <div class="text-center">
            <?php
            
                    date_default_timezone_set('America/Guayaquil');
                   $fechaActual = date('d-m-Y');
                   $fechahoy = date('Y-m-d');
                  $cedula=$_GET['usuario'];
                   $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                   $sql="select * from `cliente` where cedula='$cedula'";
                   $res= $conn->query($sql);
                   $row=mysqli_fetch_array($res);
                   echo '<br><br><h1 class="h4 text-gray-900 mb-4">Bienvenido '.$row["nombre"].'</h1><br><br>';
                   echo '<h1 class="h4 text-gray-900 mb-4">Correo: '.$row["correo"].'</h1><br><br>';
                   $horario="select * from `Horario`";
                   $hdisp=$conn->query($horario);
                   
                   echo '<h3 class="h4 text-dark-900 mb-4">Fecha Actual: '.$fechaActual.'</h3>';
                   
                   echo '<h3 class="h4 text-dark-900 mb-4" > Horarios disponibles</h3><br>';
                   
                   
                  
                   while($row1=mysqli_fetch_array($hdisp)){
                       echo '<form method="post" action="agendamiento.php">';
                       $dia=substr($row1["ft_inicio"],0,10);
                       if($dia==$fechahoy){
                       $capacidad=$row1["capacidad"];
                       $num_personas=$row1["num_personas"];
                       $cupo_disponible=$capacidad-$num_personas;
                       $tiempo_fin=substr($row1["ft_fin"],10);
                       
                       echo '<input type="radio" align="center" name="radioButton" value='.$row1["id_horario"].",".$row["cedula"].",".$cupo_disponible.",".$row["correo"].'> Hora de inicio: &nbsp&nbsp'.substr($row1["ft_inicio"],10)."&nbsp &nbsp &nbsp Hora límite: &nbsp&nbsp".$tiempo_fin.'&nbsp&nbsp Turnos disponibles: '. $cupo_disponible."&nbsp &nbsp &nbsp";
                       echo '<input type="submit" class="btn btn-google btn-user" value="Registrar Horario">';
                       echo '<br><br>';
                        
                       }
                      echo '</form>';
                   
                   }
                   
                   
                   
                 
                ?>

          </div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>INTEGRANTES: Jose patiño; Julian Echaiz; Andres Suarez; Michael Quezada</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

