<html>
<head><title>REGISTRO CORRECTO</title></head>
<body>
<?php 
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
        echo '<h3>Registro de horario exitoso </h3>';
        echo '<a href="index.html">Regresar a página de inicio </a>';
    }
?>
</body>
</html>