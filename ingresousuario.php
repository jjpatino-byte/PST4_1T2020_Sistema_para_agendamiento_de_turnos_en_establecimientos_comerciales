<html>
<body><?php 
    $cedula= $_POST['cedula'];
    $contrasena= $_POST['contraseña'];
    
    $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
    
    $sql="select * from `cliente` where cedula='$cedula'";
    $res= $conn->query($sql);
    $row=mysqli_fetch_array($res);
    $rows= $res->num_rows;
    
    
    if($row["contraseña"]==$contrasena){
      
        
        echo '<h3>Ingreso correcto</h3>';
      
        echo '<a href="userhome.php?usuario='.$cedula.'">Escoger horario</a>';
        
        
        
       
    }
    else{
        echo '<h3>Contraseña o cédula incorrecto o no se ha registrado</h3>';
        
        
    }
?>
</body>