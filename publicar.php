
<?php
 // conectaamos con la base de datos
 $link = mysql_connect('localhost','ejeblog','ejeblogpsw');
 mysql_select_db('blog');
 
$fecha=$_POST['fecha'];
$titulo=$_POST['titulo'];
$texto=$_POST['texto'];
$descripcion=$_POST['descripcion'];

if(($_FILES['imagen']['type']=='image/gif')
   ||($_FILES['imagen']['type']=='image/jpg')
   ||($_FILES['imagen']['type']=='image/jpeg')
   ||($_FILES['imagen']['type']=='image/png')){
$dir_subida='imagenes/';
$fichero_subido=$dir_subida.basename($_FILES['imagen']['name']);
$creacion=move_uploaded_file($_FILES['imagenes']['tmp_name'], $fichero_subido);
}
?>