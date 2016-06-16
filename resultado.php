<!DOCTYPE html> <!-- SIN ESTO, NO RECONOCE html5-->
<html lang="es">
<head>
 <meta charset="utf-8" />
 <!DOCTYPE html> <!-- SIN ESTO, NO RECONOCE html5-->
<html lang="es">
<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" type="text/css" href="diseno2.css">
 <title>resultado</title>
 <!-- Insertar aquí mas Metatags-->
</head>
<body>
 <div id="cuerpo">
 <div id="cabecera"><center>
 <h1><i>RESULTADO</i></h1>
 </center><center>
 <?php
echo "<h1>DATOS INGREASADOS</h1>";
echo "Nombre:".$_REQUEST['nombre'];
echo "<br>";
echo "edad:".$_REQUEST['edad'];
echo "<br>";
if ($_REQUEST['sexo']=='m') {
	echo"Genero:mujer";
	$aux=1.29579-(0.35004*log10($_REQUEST['cintura']+$_REQUEST['caderas']- $_REQUEST['cuello']))+(0.221*(log10($_REQUEST['estatura'])));
$formula=(495/$aux)-450;
$formula=round($formula,2);
echo"<br>";
echo"PGC  :";
echo "$formula %";
echo"<br>";
if ($_REQUEST['edad']>=19) {if ($_REQUEST['edad']<24) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<15) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=15) { if ($formula<20) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=20) { if ($formula<25) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=25) {  if ($formula<30) {
    echo "Porcentaje de:Estandar";
    }if ($formula==30) { if ($formula==30) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>30) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=25) {if ($_REQUEST['edad']<29) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<16) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=16) { if ($formula<21) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=21) { if ($formula<26) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=26) {  if ($formula<31) {
    echo "Porcentaje de:Estandar";
    }if ($formula==31) { if ($formula==31) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>31) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=30) {if ($_REQUEST['edad']<34) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<17) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=17) { if ($formula<22) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=22) { if ($formula<27) {
    echo "Porcentaje de:Bueno";
    }if ($formula>27) {  if ($formula<32) {
    echo "Porcentaje de:Estandar";
    }if ($formula==32) { if ($formula==32) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>32) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=35) {if ($_REQUEST['edad']<39) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<19) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=19) { if ($formula<23) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=23) { if ($formula<28) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=28) {  if ($formula<33) {
    echo "Porcentaje de:Estandar";
    }if ($formula==33) { if ($formula==33) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>33) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=40) {if ($_REQUEST['edad']<44) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<21) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=21) { if ($formula<24) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=24) { if ($formula<29) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=29) {  if ($formula<34) {
    echo "Porcentaje de:Estandar";
    }if ($formula==34) { if ($formula==34) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>34) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=45) {if ($_REQUEST['edad']<49) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<23) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=23) { if ($formula<26) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=26) { if ($formula<31) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=31) {  if ($formula<36) {
    echo "Porcentaje de:Estandar";
    }if ($formula==36) { if ($formula==36) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>36) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
if ($_REQUEST['edad']>=50) {if ($_REQUEST['edad']<54) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<25) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=25) { if ($formula<28) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=28) { if ($formula<33) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=33) {  if ($formula<37) {
    echo "Porcentaje de:Estandar";
    }if ($formula==37) { if ($formula==37) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>37) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=55) {if ($_REQUEST['edad']<59) {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<26) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=26) { if ($formula<29) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=29) { if ($formula<34) {
    echo "Porcentaje de:Bueno";
    } if ($formula>=34) { if ($formula<38) {
    echo "Porcentaje de:Estandar";
    }if ($formula==38) { if ($formula==38) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>38) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
  if ($_REQUEST['edad']>60)  {
       if ($formula <12) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=12) {     if ($formula<27) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=27) { if ($formula<30) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=30) { if ($formula<35) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=35) {  if ($formula<39) {
    echo "Porcentaje de:Estandar";
    }if ($formula==39) { if ($formula==39) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>39) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }
  





}if ($_REQUEST['sexo']=='h') {
echo "Genero:hombre" ;
$aux=1.0324-(0.19077*log10($_REQUEST['cintura1']-$_REQUEST['cuello1']))+(0.15456*(log10($_REQUEST['estatura1'])));
$formula=(495/$aux)-450;
$formula=round($formula,2);
echo"<br>";
echo"PGC  :";
echo "$formula %";
echo"<br>";
if ($_REQUEST['edad']>=19) {if ($_REQUEST['edad']<24) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<9) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=9) { if ($formula<15) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=15) { if ($formula<19) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=19) {  if ($formula<23) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=23) { if ($formula<=23) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>23) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=25) {if ($_REQUEST['edad']<29) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<10) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=10) { if ($formula<16) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=16) { if ($formula<19) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=19) {  if ($formula<24) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=24) { if ($formula<=24) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>24) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=30) {if ($_REQUEST['edad']<34) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<11) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=11) { if ($formula<17) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=17) { if ($formula<19) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=19) {  if ($formula<25) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=25) { if ($formula<=25) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>25) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=35) {if ($_REQUEST['edad']<39) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<12) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=12) { if ($formula<18) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=18) { if ($formula<19) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=19) {  if ($formula<26) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=26) { if ($formula<=26) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>26) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=40) {if ($_REQUEST['edad']<44) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<13) {
    echo "Porcentaje de:Atletico";
    }if ($formula=13) { if ($formula<19) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=19) { if ($formula<19) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=19) {  if ($formula<27) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=27) { if ($formula<=27) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>27) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=45) {if ($_REQUEST['edad']<49) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<15) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=15) { if ($formula<21) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=21) { if ($formula<25) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=25) {  if ($formula<28) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=28) { if ($formula<=28) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>28) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
if ($_REQUEST['edad']>=50) {if ($_REQUEST['edad']<54) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>6) {     if ($formula<17) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=17) { if ($formula<23) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=23) { if ($formula<26) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=26) {  if ($formula<29) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=29) { if ($formula<=29) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>29) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}

if ($_REQUEST['edad']>=55) {if ($_REQUEST['edad']<59) {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<19) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=19) { if ($formula<24) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=24) { if ($formula<28) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=28) {  if ($formula<30) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=30) { if ($formula<=30) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>30) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }}
  if ($_REQUEST['edad']>60)  {
       if ($formula <6) {
   echo "Porcentaje de grasa :Esencial";
    }if ($formula>=6) {     if ($formula<20) {
    echo "Porcentaje de:Atletico";
    }if ($formula>=20) { if ($formula<25) {
    echo "Porcentaje de:Excelente";
    }if ($formula>=25) { if ($formula<29) {
    echo "Porcentaje de:Bueno";
    }if ($formula>=29) {  if ($formula<31) {
    echo "Porcentaje de:Estandar";
    }if ($formula>=31) { if ($formula<=31) {
    echo "Porcentaje de:Sobrepeso";
    }if ($formula>31) {
       echo "Porcentaje de:Obesidad";
  }}}}}}

  }


}; ?><br><br>
<img src="http://hibult-static.websplanetdemo.com/var/m_5/5a/5a1/1710/54979-ashpana-internacional-cuerpo-de-hombre-y-cuerpo-de-mujer.png"  height="300px" width="400px" >
 </div>
 <div id="resultado">
 
 </div>
 <div id="descripcion"><center>
<h2><br><br>
PGC: PORCENTAJE DE GRASA CORPORAL</h2>
 <h3><d>

  Midiendo tu porcentaje de grasa corporal es como podrás conocer qué cantidad de tu peso corresponde a grasa corporal, y calcular también tu masa magra (músculos, órganos, tejidos y esqueleto). A la hora de diseñar una dieta o tu actividad física es un punto clave, y la manera de saber si estás progresando o no, para poder hacer las variaciones necesarias a tu alimentación o entrenamiento.

  El objetivo de la mayoría de los deportistas (y también es extensible al resto de la población, ya sea con fines estéticos o de salud) es disminuir la grasa corporal, manteniendo la masa magra. Bajar peso sin hacer distinción entre las partes magra y grasa de tu composición corporal es un error, que tristemente cometen muchas dietas milagro, y muchos que carecen de los conocimientos adecuados. Es por eso que son muchas las personas que después de disminuir varios kilos de su peso, siguen teniendo el mismo porcentaje de grasa, obteniendo resultados estéticos no deseados, con cuerpos con menos volumen, pero sin forma ni tonificación, ya que parte de ese peso que bajaron, lo perdieron de su masa muscular.

  Se trata de lograr, lo que en el mundo del culturismo, fitness y musculación se conoce como “definir”: Disminuir nuestro porcentaje de grasa corporal manteniendo la masa magra, que da como resultado que los músculos sean visibles. Es cierto que cambiar en estos periodos el régimen de entrenamiento con ejercicios enfocados a la “definición” puede ayudar en el proceso, y estilizar las formas musculares, pero los músculos están presentes bajo esa capa de grasa, y es la alimentación principalmente, y los ejercicios aeróbicos en menor medida, las herramientas necesarias para disminuir la grasa y hacer visible la musculatura.

  


</d></h3>

 </div>
 
 </div></center>
</body>
</html>