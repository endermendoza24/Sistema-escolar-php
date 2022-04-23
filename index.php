<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Ingreso al sistema</title>
</head>
<body>
    <header class="main-header">
        <div class="main-cont">
            <div class="desc-header">
                <img src="images/school.svg" alt="Images">
                <p>Talk</p>
            </div>
        </div>

        <div class="cont-header">
            <h1>Welcome!</h1>
            
    <ul class="nav nav-tabs" id="myTab" role="tablist"> 
        <li class="nav-item" role="presentation">
            <a href="#home"  role="tab" aria-controls="none" class="nav-link active" id="home-tab" data-toggle="tab" >Administrador</a>
        </li>
        <li class="nav-item" role="presentation">
            <a href="#profile" id="profile-tab" data-toggle="tab" role="tab" aria-controls="profile" class="nav-link">Profesor</a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="" method="POST" onsubmit="return validar()">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
            <label for="password" >Password</label>
            <div class="messageUsuario"></div>
            <input type="pass" name="pass" id="pass" placeholder="Password">
            <button id="loginUsuario" type="button">Iniciar sesión</button>
            </form>
        </div>

        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="" method="POST" onsubmit="return validar()">
            <label for="usuario">Profesor</label>
            <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
            <label for="password" >Password</label>
            <div class="messageProfesor"></div>
            <input type="pass" name="pass" id="pass" placeholder="Password">
            <button id="loginProfesor" type="button">Iniciar sesión</button>
            </form>
        </div>
    </div>



        </div>
    </header>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/login.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>