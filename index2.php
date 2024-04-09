<?php include "encabezado/header.php"?>

<link rel="stylesheet" href="css.css">





<h1 style="text-align: center; color:blue;">Inscripción de Estudiantes</h1>

<div
    class="container-fluid"
>

<form action="registrarcurso.php" method="post">
<br>
nombre:    
<input type="text" name="nombre"><br><br>
apellido:
<input type="text" name="apellido"><br><br>
pais:
<input type="text" name="pais"><br><br>
curso:
<input type="text" name="apellido"><br><br>
email:
<input type="text" name="email"><br><br>
telefono:
<input type="text" name="telefono">
<br><br>
<button type="submit">REGISTRAR ESTUDIANTES</button>
<button type="reset">BORRAR</button>
<br><br>






</form>
    
</div>














<?php include "encabezado/footer.php"?>