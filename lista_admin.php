<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
<style>

body{
}
</style>
    </head>
    <body>
        <table>
            <tr>
                <td>id</td>
                <td>titulo</td>
                <td>descripcion</td>
                <td>tamaño</td>
                <td>tipo</td>
                <td>nombre</td>
                
            </tr>
        <?php
       
        include 'config.inc.php';
        $db=new Conect_MySql();
        //-------------------------Codigo para eliminar un registro
       if (isset($POST['eliminar'])){
            $id = $POST['eliminar'];

            $sql = "DELETE FROM tbl_documentos WHERE id_documento = $id_documento";
        }
        //------------------------------------------------------------
            $sql = "select*from tbl_documentos";

            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
              <tr>
                <td><?php echo $datos['id_documento']; ?></td>
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
                <!--
                <td>   
               <a href="eliminar1.php?id=<?php echo $datos["id_documento"];?>" class="table__item__link" >Eliminar</a>
                </td>
              -->
              <td>
    <form method="POST" id="form_eliminar<?php echo $datos['id_documento'];?>" action="lista_admin.php">
    <input type="hidden" name="eliminar" value="<?php echo $datos['id_documento'];?>" />
    <input type="submit" value="Eliminar">              
              </form>
              </td>
          
              <td>  </td>

         <?php  } ?>
         <a href="">Estas en la lista de administrador</a>
        
        </table>
      <!--
        <form action="eliminar1.php" method="POST">
            clave: <input type="text" name="txtClave">  <br/>
            <input type="submit" value="Eliminar Registro" name="btn-eliminar">  
        </form>
        -->
    </body>
</html>
