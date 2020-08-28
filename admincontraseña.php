<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Menu - Admin</title>

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
        <div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Bienvenido Admin</h1>
              </div>
              <form class="user">
                <div><?php
                    $contrasena= $_POST['contraseña'];
                    $password= "contraseña";
        
                    if ($contrasena==$password){
                        
                        echo '<hr>';
                        echo '<a href="ingresodehorarios.html" class="btn btn-google btn-user btn-block"> Administrar horarios </a>';
                        echo '<a href="resumen.php" class="btn btn-facebook btn-user btn-block"> Resumen de citas agendadas versus citas atentidas </a>';
                    }
                    else{
                        echo '<h3>Contraseña Incorrecta</h3>';
                    }
                ?></div>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="index.html">Cerrar sesion</a>
              </div>
            </div>
          </div>
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
<!-- <html>
    <head><title>Ingreso Admin</title></head>
    <body> 
    "<?php
        $contrasena= $_POST['contraseña'];
        $password= "contraseña";
        
        if ($contrasena==$password){
            echo '<h3>Click para administrar horarios</h3>';
            echo '<a href="ingresodehorarios.html">Administrar horarios</a><br><br>';
            echo '<a href="resumen.php">Resumen de citas agendadas versus citas atentidas</a>';
        }
        else{
            echo '<h3>Contraseña Incorrecta</h3>';
        }
    
    ?>"
    
    </body>
</html> -->