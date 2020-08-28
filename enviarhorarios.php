<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REGISTRO CORRECTO</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
            <div class="p-5">

              <form class="user">
                <div><?php
                    $fecha=$_POST['fecha'];
                    $horainicio= $_POST['horainicio'];
                    $horalimite= $_POST['horalimite'];
                    $capacidad= $_POST['capacidad'];
                    $dt_in= $fecha.' '.$horainicio;
                    $dt_fin= $fecha.' '.$horalimite;
                    
                    
                    
                    
                    if(isset($fecha) and (isset($dt_in) or "00:00:00") and (isset($dt_fin) or "00:00:00")){
                        $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                        $query= "INSERT INTO Horario (`id_horario`, `ft_inicio`, `ft_fin`,`capacidad`,`num_personas`) VALUES (NULL, '$dt_in', '$dt_fin','$capacidad','0')";
                        $conn->query($query);
                        echo '<div class="text-center"><h1 class="h4 text-gray-900 mb-4">Registro exitoso</h1></div>';
                        echo '<div class="text-center"><a class="small" href="ingresodehorarios.html">volver a registrar horarios</a></div>';
                        echo '<div class="text-center"><a class="small" href="index.html">cerrar sesion</a></div>';
                    }
                ?></div>
              </form>
              <hr>
            </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<!--
<html>
<head><title>REGISTRO CORRECTO</title></head>
<body>
<?php 
/*    $fecha=$_POST['fecha'];
    $horainicio= $_POST['horainicio'];
    $horalimite= $_POST['horalimite'];
    $capacidad= $_POST['capacidad'];
    $dt_in= $fecha.' '.$horainicio;
    $dt_fin= $fecha.' '.$horalimite;
    
    
    
    
    if(isset($fecha) and (isset($dt_in) or "00:00:00") and (isset($dt_fin) or "00:00:00")){
        $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
        $query= "INSERT INTO Horario (`id_horario`, `ft_inicio`, `ft_fin`,`capacidad`,`num_personas`) VALUES (NULL, '$dt_in', '$dt_fin','$capacidad','0')";
        $conn->query($query);
        echo '<h3>Registro de horario exitoso </h3>';
        echo '<a href="index.html">Regresar a página de inicio </a>';
    }*/
?>
</body>
</html> -->