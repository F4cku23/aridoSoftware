<?php
    
    $name=$_POST['nombre'];
    $password=$_POST['password'];
    session_start();
        if (!($link = mysqli_connect("localhost" . ":" . "3306", "root", ""))) {
                echo "Error conectando a la base de datos.";
                exit();
            }

            if (!mysqli_select_db($link, "aridosSoftware")) {

                echo "Error selccionando la base de datos. ";
                exit();
            }
            //verifica que lso campos no esten vacios
            if(empty($name)||empty($password)){
                header("Location: http://localhost/aridoSoftware/index.php?id=incorrecto");
                exit();
            }else{
                {
                    //no esta entrando a este else
                    header("Location: http://localhost/aridoSoftware/index.php?id=incorrecto");
                }
            }
            
            //establece coneccion con la BD
            $re= mysqli_query($link, "SELECT * FROM usuarios WHERE Nombre='".$name."'" );
            if($row=mysqli_fetch_array($re)){
                if ($row['Password']==$password) {
                    session_start();
                    $_SESSION['Nombre']=$name;
                    header("Location: http://localhost/aridoSoftware/listado.html");    
                }
            }

            mysqli_close($link);


?>