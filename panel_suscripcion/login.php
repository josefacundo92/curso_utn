<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>    

    <!-- Google Font-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Estilos-->
    <link rel="stylesheet" href="css/login.css">

</head>

<body>


    <form class="formulario" id="formulario" action="validar_login.php" method="POST">
        <h1>Login</h1>

        <!-- Grupo: Usuario -->
        <div class="formulario__grupo " id="grupo__usuario">
            <label for="usuario" class="formulario__label">Usuario</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="usuario" id="usuario" autocomplete="off">
            </div>
            
        </div>        

        <!-- Grupo: Password -->
        <div class="formulario__grupo" id="grupo__password">
            <label for="password" class="formulario__label">Password</label>
            <div class="formulario__grupo-input">
                <input type="password" class="formulario__input" name="clave" id="password" autocomplete="off">
            </div>
          
        </div>

        <!-- Grupo: Botón -->
        <div class="formulario__grupo" id="grupo__btn-enviar">
            <button class="formulario_btn-enviar" type="submit" name="btn_ingresar">Ingresar</button>            
        </div>

    </form>

</body>

</html>