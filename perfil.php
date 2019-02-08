<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Perfil</title>
    <link rel="stylesheet" href="css/perfil.css" />
  </head>
  <body>
    <?php require_once 'menu.php'; ?>

    <div class="content-all">
      <span class="tittle">Perfil</span>
      <form action="#" method="post">
        <div class="input-names">
          <div class="nombre">
            <span class="text">Nombre:</span><br />
            <input
              type="text"
              name="txtNombre"
              placeholder="Nombre"
              value=""
              id=""
            />
          </div>
          <div class="apellido">
            <span class="text">Apellido:</span><br />
            <input
              type="text"
              name="txtApellido"
              placeholder="Apellido"
              value=""
              id=""
            />
          </div>
        </div>
        <br />
        <div class="correo">
        <span class="text">Correo electronico</span>
        <br />
        <input
          type="email"
          name="txtEmail"
          placeholder="Correo"
          value=""
          id=""
        />
        </div>

        <br />
        <div class="foto">
          <div class="main-foto">
          <span class="text">Foto:</span>
          <br />
          <div class="img">
            <img src="images/search.png" alt="" />
          </div>
          </div>
          <div class="cambiar-image">
          <br />
          <br />
          <span class="file"><input type="file" name="file" id="file"  /></span>
          <label for="file"><span>Cambiar Imagen</span></label>
        </div>
        </div>
        <input type="submit" value="Guardar" />
        <input type="reset" value="Cancelar" />
      </form>
    </div>
    <script type="application/javascript">
        jQuery('input[type=file]').change(function(){
        var filename = jQuery(this).val().split('\\').pop();
        var idname = jQuery(this).attr('id');
        console.log(jQuery(this));
        console.log(filename);
        console.log(idname);
        jQuery('span.'+idname).next().find('span').html(filename);
});
</script>
  </body>
</html>
