<?php
include("../librerias.php");
$oPro=new Producto($_POST['nombre'],$_POST['valor'],$_POST['anio']);
$oPro->Agrega();	
?>

<script>
	document.location.href="<?=PATHURL?>exportaciones_add.php";
</script>