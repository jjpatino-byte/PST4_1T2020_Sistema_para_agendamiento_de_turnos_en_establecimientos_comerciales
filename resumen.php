<html>
    <head><title>Resumen de Citas</title></head>
    <body>
        <?php 
            date_default_timezone_set('America/Guayaquil');
           $fechaActual = date('d-m-Y');
           $fechahoy = date('Y-m-d');
           
           $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
           $sql="SELECT * FROM `detalleturno` JOIN Horario ON detalleturno.id_horario=Horario.id_horario WHERE substring(Horario.ft_inicio,1,10)=CURRENT_DATE";
           $res= $conn->query($sql);
           
           echo '<h1>Resumen de Citas del día de hoy</h1><br><br>';
           
           $horario="select * from `Horario`";
           $hdisp=$conn->query($horario);
           
           echo '<h3>Fecha Actual: '.$fechaActual.'</h3>';
           if(isset($_POST['radioButton'])){
            $atencion=$_POST['radioButton'];
           $actualizar="UPDATE `detalleturno` SET `estado` = 'atendido' WHERE `detalleturno`.`id` ='$atencion'";
           $conn->query($actualizar);
           sleep(6);
           
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
               
               echo '<input type="radio" name="radioButton" value='.$id_turno.'>Cédula:&nbsp&nbsp' .$cedula .'&nbsp&nbsp&nbsp&nbspHora de inicio: &nbsp&nbsp'.substr($row1["ft_inicio"],10)."&nbsp &nbsp &nbsp Hora límite: &nbsp&nbsp".$tiempo_fin.'&nbsp&nbsp Estado: '. $estado.'<br><br>';
               echo '<input type="submit" name="submit" value="Marcar como atendido"><br><br>';
               
               }
           }
           
           echo '</form>';
        ?>
    </body>
</html>