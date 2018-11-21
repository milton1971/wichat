<?php
include "db.php";
 $consulta="SELECT * FROM  chat ORDER BY Id DESC";
 $ejecutar=$conexion->query($consulta);
while($fila=$ejecutar->fetch_array()):

?> 

<div id ="datos–chat">
<span style="color:#1c62c4;"><?php echo $fila['Nombre']; ?>: </span>
<span style="color:#848484;"><?php echo $fila['Mensaje']; ?></span>
<span style="float:right;"><?php echo formatearFecha ($fila['Fecha']); ?></span>

</div>
<?php endwhile; ?>