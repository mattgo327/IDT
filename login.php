<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estiloslogin.css">
    <script src="js/jquery-3.3.1.min.js" defer></script>
    <script src="js/funciones.js" defer></script>
    <title>Document</title>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" id="login-form">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <label class="form-label" for="username">Usuario</label>
              <input type="email" id="username"  name="username" class="form-control form-control-lg" /> 
            </div>

            <div class="form-outline mb-4">
              <label class="form-label" for="password">Contraseña</label>
              <input type="password" id="password" name="password" class="form-control form-control-lg" />
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit" 
              name="submit" value="submit"
              id="loguearUsuario">Enviar</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p>
            <p>Don't have an account? <a href="#!" class="link-info">Register here</a></p>

            <div id="mensajes">

            </div>
            <div id="respuesta">
              
            </div>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../../../img/zorro.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
</body>
</html>