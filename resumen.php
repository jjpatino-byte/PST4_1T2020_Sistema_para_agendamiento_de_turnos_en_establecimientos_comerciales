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
        <div class="sidebar-brand-text mx-3">PST - Grupo <sup>4</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        MENU
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-user"></i>
          <span>Cerrar Sesión</span>
        </a>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="ingresodehorarios.html">
          <i class="fas fa-book"></i>
          <span>Ir a registrar horarios</span></a>
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
                   
                   $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                   $sql="SELECT * FROM `detalleturno` JOIN Horario ON detalleturno.id_horario=Horario.id_horario WHERE substring(Horario.ft_inicio,1,10)=CURRENT_DATE";
                   $res= $conn->query($sql);
                   
                   
                   $horario="select * from `Horario`";
                   $hdisp=$conn->query($horario);
                   
                   echo '<h3>Fecha Actual:   &nbsp&nbsp'.$fechaActual.'</h3>';
                   echo'<div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Resumen de citas del dia de Hoy</h1>
                  </div>';
                   if(isset($_POST['radioButton'])){
                    $atencion=$_POST['radioButton'];
                    echo '<h3>Fecha Actual: '.$atencion.'</h3>';
                   $actualizar="UPDATE `detalleturno` SET `estado` = 'atendido' WHERE `detalleturno`.`id` ='$atencion'";
                   $conn->query($actualizar);
                  $page = $_SERVER['PHP_SELF'];
                    echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
                   
                   }
                   
                    echo '<form method="post" action='.$_SERVER['PHP_SELF'].'>';
                   while($row1=mysqli_fetch_array($res)){
                       
                       $dia=substr($row1["ft_inicio"],0,10);
                       if($dia==$fechahoy){
                        $cedula=$row1["cedula"];
                        $estado=$row1["estado"];
                       $capacidad=$row1["capacidad"];
                       $num_personas=$row1["num_personas"];
                       $cupo_disponible=$capacidad-$num_personas;
                       $tiempo_fin=substr($row1["ft_fin"],10);
                       $id_turno=$row1["id"];
                      echo '<br><br>';
                       echo '<input type="radio" name="radioButton" class="form-control form-control-user" value='.$id_turno.'>Cédula:&nbsp&nbsp' .$cedula .'&nbsp&nbsp&nbsp&nbspHora de inicio: &nbsp&nbsp'.substr($row1["ft_inicio"],10)."&nbsp &nbsp &nbsp Hora límite: ".$tiempo_fin.'&nbsp&nbsp Estado: '. $estado.'<br><br>';
                       echo '<input type="submit" class="form-control form-control-user" name="submit" value="Marcar como atendido">';
                       
                       
                       }
                      
                   }
                  
                   echo '</form>';  
                   echo '<br><br>';
                   echo '<div class="text-center"><a class="small" href="ingresodehorarios.html">Ir a registrar turnos</a></div>';
                    echo '<div class="text-center"><a class="small" href="index.html">Cerrar sesión</a></div>';
                ?></

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
