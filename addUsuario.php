<!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
            <title>Gestion</title>
        </head>
        <body>
        
        <form class="formulario" action="api/agregar.php?id=boton" method="POST">
        
            <h2>crear usuario</h2>
            <ul class="contenedor">
                <div class="input-contenedor">
                    <input type="text" name="nombre" placeholder="Nombre">
                </div>
                <div class="input-contenedor">
                    <input type="password" name="password" placeholder="Contraseña">
                </div>
                <select name="estado" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Estado</option>
                    <option value=1 name="estado">Activo</option>
                    <option value=2 name="estado">Inactivo</option>
                </select>

                <select name="grupo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Grupo</option>
                    <option value=1 name="grupo">Deposito</option>
                    <option value=2 name="grupo">Tesoreria</option>
                    <option value=3 name="grupo">Administracion</option>
                </select>

                <div class="d-flex justify-content-center">

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Lectura" name="permiso[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Lectura
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Escritura" name="permiso[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Escritura
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" value="Administrador" name="permiso[]" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Administrador
                    </label>
                </div><br>

                </div>
                

                <input type="submit" value="crear" class="button" name="boton">
                
            </ul>
        </form>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    </body>
</html>