<!DOCTYPE html>
<?php
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo,descripcion,tamanio,tipo,nombre_archivo) VALUES('$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
    
}
else if (isset($POST['eliminar'])){
            $id = $POST['eliminar'];

            $sql = "DELETE FROM tbl_documentos WHERE id_documento = $id_documento";
        }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivo</title>

    </head>
    <body>
 <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  background-image: url(img/fo.jpg) ;
  background-color: rgb(55,55,55);
  background-blend-mode: soft-light; 
  background-size: cover;
  background-position: center;

  font-family: 'Roboto', sans-serif;
  text-align:center; 
}
.btn-lista{
    position: relative;
  background: #03C4EB;
  text-decoration: none;
  border: 8px 
  solid #03C4EB;
  color: #000;
}
 </style>       
        <div 
        style="width: 500px;
        background: #165;
        margin: auto;
        border: 1px 
        solid blue;
        padding: 30px;"
        >
            <h4>Subir PDF 1° Grado</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Materia</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>
    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo"></td>
                    <tr>
                        <td><input type="submit" value="subir" name="subir"></td>
                        <td><a href="lista_admin.php" class="btn-lista">lista</a></td>
                    </tr>

                </table>
            </form>         
            <a href="php-login/index.php" >Perfil</a>   
        </div>
    </body>
</html>
