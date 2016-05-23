<?php
$oProducto = new Producto();
?>
<form method="post" action="AccProductoAgregar.php">
    nombre: <input type="text" name="nombre"><br>
    valor: <input type="text" name="valor"><br>
    año:<input type="text" name="anio"><br>
    <input type="submit" value="Agregar">
</form>