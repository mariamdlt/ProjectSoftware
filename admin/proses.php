<?php

include "db.php";


if ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $habi_id = $_GET['id'];

            // consultar comando para eliminar los datos de la tabla habitacion
            $query = mysqli_query($con, "DELETE FROM habitacion WHERE HABI_ID='$habi_id'")
                                            or die('Hubo un error en la consulta de eliminación : '.mysqli_error($con));

            // comprobar los resultados de la eliminacion
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                echo "<script>alert('Los datos han sido Eliminados con Éxito!'); window.location = 'view.php'</script>";
				}else{
					echo "<script>alert('Error, no se pudo Eliminar los datos'); window.location = 'view.php'</script>";
            }
        }
    }



 ?>
