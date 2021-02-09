<?php
  include 'config.inc.php';

  EliminarProducto($_GET['id_documento']);

  function EliminarProducto($id_documento)
  {
    $sentencia="DELETE FROM tbl_documentos WHERE id_documento='".$id_documento."' ";
    mysql_query($sentencia) or die (mysql_error());
  }
?>

<script type="text/javascript">
  alert("Producto Eliminado exitosamente");
  window.location.href='principal1.php';
</script>

