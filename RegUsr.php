<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/myStyle.css">
    <title>Registrar usuario</title>
</head>
<body>
    <div class="navbarC">El muro del gremio</div>
    <div class="Centerbox">
        <div class="formBox">
            <form action="" method="POST">
                <div class="form-group">
                  <label for="RegNombreL">Nombre(s)</label>
                  <input type="text" class="form-control" id="RegNombre" name="Nombre" >
                </div>
                 <div class="form-group">
                  <label for="RegApellidosL">Apellidos</label>
                  <input type="text" class="form-control" id="RegApellidos" name="Apellido">
                </div>
                 <div class="form-group">
                  <label for="RegFecNacL">Fecha de nacimiento</label>
                  <input type="date" class="form-control" id="RegFecNac" name="RFeNac">
                </div>
                 <div class="form-group">
                  <label for="RegEmailL">Correo electronico</label>
                  <input type="email" class="form-control" id="RegEmail" name="Email">
                </div>
                <div class="form-group">
                  <label for="RegNUserL">Nombre de usuario</label>
                  <input type="text" class="form-control" id="RegNUser" name="NombreUsuario">
                </div>
                <div class="form-group">
                  <label for="RegPassL">Contraseña</label>
                  <input type="password" class="form-control" id="RegPass" name="RegContr">
                </div>
                <div class="form-group">
                  <label for="RegPImgL">Imagen de perfil</label>
                  <input type="file" class="form-control" id="RegPImg" name="ImgPerfil" >
                </div>
                <button type="submit" class="btn btn-primary" id="regBtn">Registrar</button>
                    
            </form>
        </div>
    </div>
</body>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Stickybook.com  Es una pagina de notas personales, con amplia dedicacion a proveerle una herramienta sencilla e intuitiva, que resulte util en su dia a dia.</p>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
                    <a href="#">Scanfcode</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
</html>
