<html>
    <head>
        <title>Agendamiento</title>
        <body>
            <?php 
                date_default_timezone_set('America/Guayaquil');
                $ids= explode(",",$_POST['radioButton']);
                $id_horario= $ids[0];
                $cedula= $ids[1];
                $cupo_disponible= $ids[2];
                $correo= $ids[3];
                
                $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                
                $sql="select * from `detalleturno` where cedula='$cedula' AND id_horario='$id_horario'";
                $res= $conn->query($sql);
                $rows= $res->num_rows;

                 $horario="select * from `Horario` where id_horario='$id_horario'";
                $hdisp=$conn->query($horario);
                $row1=mysqli_fetch_array($hdisp);
                $tiempo_fin=substr($row1["ft_fin"],10);
                $hora_actual=substr(date(date_default_timezone_get('America/Guayaquil')),38,8);
                
                 
                
                echo '<h3>'.$_POST['radioButton'].'</h3>';
                echo '<h3>'.$cedula.'</h3>';
                echo '<h3>'.$id_horario.'</h3>';
                echo '<h3>'.$cupo_disponible.'</h3>';
                echo '<h3>'.$tiempo_fin.'</h3>';
                echo '<h3>'.$hora_actual.'</h3>';
                echo '<h3>'.$correo.'</h3>';
                if($cupo_disponible>0 and !($rows>0) and strtotime($tiempo_fin)>strtotime($hora_actual)){
                    mail ( $correo , "Recordatorio cita" , "Recuerde que tiene una cita a en la franja ".substr($row1["ft_inicio"],10)."-".$tiempo_fin );
                    
                $conn=new mysqli("localhost","id14573840_jjpatinol","^yg6M1Ju>1Mm*sKS","id14573840_id1123581321_contrr");
                $query= "INSERT INTO `detalleturno` (`id`, `cedula`, `id_horario`,`estado`) VALUES (NULL, '$cedula', '$id_horario','no atendido')";
                $incrementar_cita="UPDATE `Horario` SET `num_personas` = `num_personas`+1  WHERE `Horario`.`id_horario` = '$id_horario'";
                $conn->query($query);
                $conn->query($incrementar_cita);
                 echo '<h3>Se ha registrado correctamente</h3>';
                }
                else{
                    echo '<h3>Ya no existe cupo, ya se encuentra registrado en el horario escogido o el horario escogido ya venció</h3>';
                }

                
            ?>
            
        </body>
    </head>
</html>