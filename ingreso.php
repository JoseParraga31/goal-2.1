<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="fortrainevolution.com">
    <link rel="shortcut icon" href="https://github.com/kikeEsponja/nuevo/blob/main/chess-horse2.png?raw=true"> <!--el icono de la pestaña-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"><!--enlace a bootstrap-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hint.css/2.7.0/hint.min.css"><!--enlace a sugerencias (hints)-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><!--enlace a font awesome-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"><!--enlace a bootstrap icon-->
    <link href="https://fonts.cdnfonts.com/css/modern-age" rel="stylesheet"><!--tipohgrafía modern age-->
    <link rel="stylesheet" href="./estilos.css" type="text/css"><!--enlace al documento CSS-->
    <style>
    </style>
    <title>G.0.A.L</title>
</head>
<body class="bg-success">
    <nav class="navbar navbar-expand-md navbar-dark"><!--original: navbar-light-->
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Estás ingresando</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <!--<a class="nav-link active" aria-current="page" href="./terminos.html">Términos y condiciones</a>-->
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <hr>
    <main class="index-main">
        <section>
            <div class="index-titulo">
                <h1>G.0.A.L VERSION 2.1</h1>
                <img src="https://raw.githubusercontent.com/kikeEsponja/nuevo/1ba4b755e403cbfb21241ada8f56e6519f710bdd/chess-horse.svg" class="logo">
            </div>
            <hr>    
        </section>
        <section>
            <div class="contenedor-cuerpo">
                <div class="propaganda izq"><p>aqui va una propaganda</p></div>
                <form method="post" class="formulario" id="registration">
                    <div class="btn-group registro-grupo-botones">
                        <div class="registro-campos">
                            <label class="label" for="usuario">Usuario</label>
                            <input name="usuario" class="btn btn-warning" type="text" style="cursor: text;" id="nombre" placeholder="ingrese su nombre de usuario" required value="">
                        </div>
                        <div class="registro-campos">
                            <label class="label" for="contras">Contraseña</label>
                            <input name="contras" class="btn btn-outline-warning" type="password" style="cursor: text;" id="contra" placeholder="ingrese una contraseña" required value="">
                        </div>
                    </div>
                    <div class="registro-botones">
                        <div class="ing">
                            <input type="button" class="btn btn-info w-25" id="ingreso" name="ingreso" value="ingresar">
                        </div>
                        <br>
                        <div>
                            <h5>No tienes cuenta? regístrate gratis</h5>
                            <button type="button" class="btn btn-primary w-25" id="registro">Registrarse</button>
                        </div>
                        <div>
                            <p class="mb-1"><a href="./terminos.html">Términos y condiciones</a></p>
                        </div>
                    </div>
                </form>
                <div class="propaganda der"><p>aquí va otra propaganda</p></div>
            </div>
            <hr>
        </section>
        <section>
        </section>
    </main>
    <footer>
        <div class="index-footer">
            <ul class="contacto">
                <li class="bi bi-phone"> teléfono</li>
                <li class="bi bi-envelope"> correo</li>
                <li class="bi bi-facebook"> facebook</li>
                <li class="bi bi-instagram"> instagram</li>
                <li class="bi bi-youtube"> youtube</li>
                <p>todos los derechos reservados</p>
            </ul>
        </div>
    </footer>
    <script>
        const ingreso =document.getElementById("ingreso");
        ingreso.addEventListener("click", function(){
            window.location.href = "./principal.php";
        });

        const registro = document.getElementById("registro");
        registro.addEventListener("click", function(){
            window.location.href = "./registro.php";
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script><!--enlace a JQuery-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script><!--enlace a bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script><!--enlace a bootstrap-->
</body>
</html>