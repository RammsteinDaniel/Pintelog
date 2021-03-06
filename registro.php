<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/login.css" />
    <title>Pintelog</title>
  </head>
  <body>
    <div class="container">
      <div class="content-login">
        <label class="logo">PL</label>
        <span class="welcome">Te damos la bienvenida a pintelog.</span>
        <span class="welcome">Hermosas fotos libres</span>

        <form action="#" method="post">
          <input
            type="text"
            name="txtName"
            id=""
            placeholder="Nombre de usuario"
            autocomplete="off"
          />
          <input
            type="email"
            name="txtEmail"
            id=""
            placeholder="Correo electronico"
            autocomplete="off"
          />
          <div class="genero">
          <span class="text">Masculino</span>
          <input type="radio" name="chkGenero" id="" value="Masculino" />
          <span class="text">Femenino</span>
          <input type="radio" name="chkGenero" id="" value="Femenino" />
        </div>
          <input
            type="password"
            name="txtPassword"
            id=""
            placeholder="Contraseña"
            autocomplete="off"
          />
          <input
            type="password"
            name="txtRPassword"
            id=""
            placeholder="Repita la Contraseña"
            autocomplete="off"
          />
          <input type="submit" value="Registrarse" />
          <a href="login.html"
            ><span class="singup"
              >Ya tienes una cuenta?
              <span class="blue">Iniciar sesion</span></span
            ></a
          >
        </form>
      </div>
    </div>
  </body>
</html>
