<?php
if(empty(trim($_POST["correo"]))){
        $correo_err = "Porfavor Ingresa Un Correo Electronico.";
    }else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE correo = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_correo);
            
            // Set parameters
            $param_correo = trim($_POST["correo"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $correo_err = "Este correo ya esta en uso.";
                } else{
                    $correo = trim($_POST["correo"]);
                }
            } else{
                echo "Algo salio mal, vuelve a intentarlo.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
?>