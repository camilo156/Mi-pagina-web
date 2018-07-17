<?php 


include 'clases_camilo.php';



$blog = new Blog ($_GET['apellidos'], $_GET['nombre'], $_GET['email']);
    


 $blog->insertaFila();
echo 'BLOG INSERTADO';
$blog->id_autor = 11;

?>

<!-- $art= new Blog($_GET['autor'], $_GET['titulo'], $_GET['categoria'] );  
$art->contenido= $_GET['contenido'];
$art->insertaFila(); --> 

<!-- /* $blog->borraFila();
echo 'BLOG BORRADO';
$blog->id_autor = 19; */

/* $blog->actualizaFila();
echo 'BLOG ACTUALIZADO';  */


/* $x = Blog::cogeFila($_GET['id_autor']);
echo json_encode($x);
?> */

/* <br><!-- 
<input type="text" value="<?= $x->apellidos ?>"><br>
<input type="text" value="<?= $x->nombre ?>"><br> 
<input type="text" value="<?= $x->email ?>"><br>  */ --> -->