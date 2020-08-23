<html>
    <head><title>Ingreso Admin</title></head>
    <body> 
    <?php
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
    
    ?>
    
    </body>
</html>