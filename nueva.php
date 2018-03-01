<!DOCTYPE html>

<html>
<head>
    <title>Blog</title>
    <link href="estilosadministrador.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="cabecera">
    <div class="contenidocabecera">
        <a href="http://www.ajeclm.com/" target="blank" class="logo"></a>
        <a href="index.php"><h1>SWEET ADMINISTRADOR DEL BLOG</h1></a>
    </div>
    
</div>
<div class="fondo">
    <div class="contenido">
        <h2 class="titular">CREAR NUEVA ENTRADA</h2>
       
        <div class= "entrada">
             <form action="publicar.php" method="post" enctype="multipart/form-data">
            <div class="contenedorimagen">
               
                <img class="imagen" src="imagenes/comunes/iconoimagen.png"
                     alt="iconoimagen" title="iconoimagen"/>
                <input class="descripcion" required type="text" name="descripcion" placeholder="Describe brevemente la imagen"/>
                <input class="examinar" required type="file" name="imagen"/> 
            </div>
            <div class="informacion">
                <input class="fecha" required type="date" name="fecha"/>
                <textarea class="titulo" required name="titulo" placeholder="Escribe un título"></textarea>
                <textarea class="texto" required name="texto" placeholder="Escribe un texto"/></textarea>
          
                    <input type="submit" class="boton publ" value="PUBLICAR"/>
                </form>
            </div>
        </div>
        
    
</div>
 
<div class="pie">
    <div class="contenidopie">
        <a href="http://www.jccm.es/" target="blank"><img class="junta" src="fotos/colauno.jpg" alt="logo de la jccm" title="logo de la jccm"/</a>
        <a href="http://www.ajeclm.com/programa-tic/"target="blank"><img class="programatic" src="fotos/colados.jpg" alt="programatic" title="programatic"/</a>
        <a href="http://www.ajeclm.com/"target="blank"><img class="aje" src="fotos/logoempresa.jpg" alt="logo de aje" title="logo aje"/</a>
        <a href="http://ec.europa.eu/esf/home.jsp?langId=es/"target="blank"><img class="europeo" src="fotos/colatres.jpg" alt="logo del fondo europeo" title="logo del fondo europeo"/</a>
    </div>
  </div>
</div>
</body>
</html>

 <?php
?>



