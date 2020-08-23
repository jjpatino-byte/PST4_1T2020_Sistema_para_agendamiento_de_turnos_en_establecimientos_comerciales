<html>
<body><?php 
    $nombre=$_POST['nombre'];
    $apellido= $_POST['apellido'];
    $cedula= $_POST['cedula'];
    $contrasena= $_POST['contraseña'];
    $correo= $_POST['correo'];
    
    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
    
    $sql="select * from `cliente` where cedula='$cedula'";
    
    $res= $conn->query($sql);
    $rows= $res->num_rows;
    
    
    if(isset($nombre) && isset($apellido) && isset($cedula) && isset($contrasena) && $rows==0){
       
        $query= "INSERT INTO `cliente` (`cedula`, `nombre`, `apellido`, `contraseña`, `correo`) VALUES ('$cedula', '$nombre', '$apellido','$contrasena','$correo')";
        $conn->query($query);
      
        
        echo '<h3>Se registró correctamente</h3>';
      
        echo '<a href="index.html">Regresar a la página de inicio</a>';
        
        
       
    }
    else{
        echo '<h3>Usted ya se ha registrado</h3>';
        echo '<a href="userlogin.html">Ingresar como cliente</a><br><br>';
        echo '<a href="index.html">Regresar a la página de inicio</a>';
        
    }
?>
</body>
</html>