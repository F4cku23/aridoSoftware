<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
        <title>Gestion</title>
    </head>
    <body>
    <?php
            if(isset($_GET['id'])=='incorrecto'){
                echo "<h1 style='text-align: center; background: black; color: red;'>DATOS INCORRECTOS O CAMPOS VACIOS</h1>";
            }
        ?>
        <!-- nombre o alias (unico), password, fecha y hora de creacion, 
        y estado (activo/inactivo) -->
        <form class="formulario" action="api/validar.php" method="POST">
            <h2>Login</h2>
            <ul class="contenedor">
                <div class="input-contenedor">
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                
                <div class="input-contenedor">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                
                <input type="submit" value="Ingresar" class="button">
                
            </ul>
        </form>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </body>
</html>
<!-- Sistema realizado con:
            -HTML5
            -CSS3
            -javasript
            -PHP
            -SQL
            -Bootstrap5 -->