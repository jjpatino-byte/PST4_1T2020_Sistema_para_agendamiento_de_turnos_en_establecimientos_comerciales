<html>
    <head><title>Home</title></head>
    <body>
        <?php 
            date_default_timezone_set('America/Guayaquil');
           $fechaActual = date('d-m-Y');
           $fechahoy = date('Y-m-d');
           $cedula=$_GET["usuario"];
           $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
           $sql="select * from `cliente` where cedula='$cedula'";
           $res= $conn->query($sql);
           $row=mysqli_fetch_array($res);
           echo '<h1>Bienvenido '.$row["nombre"].'</h1><br><br>';
           echo '<h1>Correo '.$row["correo"].'</h1><br><br>';
           $horario="select * from `Horario`";
           $hdisp=$conn->query($horario);
           
           echo '<h3>Fecha Actual: '.$fechaActual.'</h3>';
           
           echo '<h1> Horarios disponibles</h1><br>';
           
           echo '<form method="post" action="agendamiento.php">';
           
           while($row1=mysqli_fetch_array($hdisp)){
               $dia=substr($row1["ft_inicio"],0,10);
               if($dia==$fechahoy){
               $capacidad=$row1["capacidad"];
               $num_personas=$row1["num_personas"];
               $cupo_disponible=$capacidad-$num_personas;
               $tiempo_fin=substr($row1["ft_fin"],10);
               
               echo '<input type="radio" name="radioButton" value='.$row1["id_horario"].",".$cedula.",".$cupo_disponible.",".$row["correo"].'> Hora de inicio: &nbsp&nbsp'.substr($row1["ft_inicio"],10)."&nbsp &nbsp &nbsp Hora límite: &nbsp&nbsp".$tiempo_fin.'&nbsp&nbsp Cupos disponibles: '. $cupo_disponible.'<br><br>';
               
               
               }
           }
           echo '<input type="submit" value="Registrar Horario">';
           echo '</form>';
        ?>
    </body>
</html>