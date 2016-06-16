

<!DOCTYPE html> <!-- SIN ESTO, NO RECONOCE html5-->
<html lang="es">
<head>
<script type="text/javascript" src="funcion.js"></script>
 <meta charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="diseno.css">
 <title>Recursos didácticos(jbfb)</title>
 <!-- Insertar aquí mas Metatags-->
</head>
<body>
 <div id="global">
 <div id="cabecera"><center>
 <h1><i>FORMULARIO </i></h1>
 </center>
 </div>
 <div id="formulario"><center>
 <form action="resultado.php" method="get">

<h1>PORCENTAJE DE GRASA CORPORAL</h1>
<p> 
Nombre:      <input name="nombre" type="text" /> <br><br>
edad:        <input name="edad" type="number" size="2" maxlengt="3" /><br><br>
</p>
<p>
Sexo: <input type="radio" name="sexo" id="sexo-h" value="h" onClick="muestra('hombre'); oculta('mujer')" required/> <label for="sexo-h">hombre</label> 
<input type="radio" name="sexo" id="sexo-m" value="m" onClick="muestra('mujer'); oculta('hombre')" /> <label for="sexo-m">mujer</label>
</p>
<div id="hombre">
  <p>
Estatura (cm): <input name="estatura1" type="number" size="3" maxlength="3">
<br><br>
Cintura(cm): <input name="cintura1" type="number" id="cintura" size="3" maxlength="3" />
<br><br>
Cuello (cm): <input name="cuello1" type="number" id="cuello" size="3" maxlength="3" />
<br /><br/>
</div>
</p>

<div id="mujer">
  <p>
Altura (cm): <input name="estatura" type="number" size="3" maxlength="3"><br><br>
Cintura(cm): <input name="cintura" type="number" id="cintura" size="3" maxlength="3" /><br><br>
Cuello (cm): <input name="cuello" type="number" id="cuello" size="3" maxlength="3" /><br><br>
Caderas(cm): <input name="caderas" type="number" id="caderas" size="3" maxlength="3" /><br><br>
</p>
</div>

 <div><p><input type='submit' name="boton" class="boton" id="calcular" value='Enviar'></div>
</p>
</form></center>
</div>
 

</body>
</html>