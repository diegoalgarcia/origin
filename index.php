<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prueba Tic - Diego A. García</title>

    <!-- Meta -->
    
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

  </head>

  <body class="login-bg">

    <!-- Auth wrapper starts -->
    <div class="auth-wrapper">

      <!-- Form starts -->
      <form action="ingresa_user.php" method="POST">
      
        <!-- Authbox starts -->
        <div class="auth-box">

          <!-- Logo starts -->
          <a href="index.php" class="auth-logo mb-4">
           <!-- <img src="assets/images/logo-dark.svg" alt="Bootstrap Gallery" /> -->
          </a>
          <!-- Logo ends -->

          <h4 class="mb-4">Creacíon de cuenta</h4>

          <div class="mb-2"> 
            <label class="form-label" for="name">Nombre <span class="text-danger">*</span></label>
            <input type="text"  name="nombre"  id="name" class="form-control" placeholder="Ingrese su nombre" required>
          </div>

          <div class="mb-2">
            <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Ingrese email" required>
          </div>

          <div class="mb-4">
            <label class="form-label" for="password">Contraseña <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese contraseña" required>
              <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-eye"></i>
              </button>
            </div>
            <div class="form-text">
            Su contraseña debe tener entre 8 y 20 caracteres.
            </div>
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <a href="login.php" class="btn btn-dark">Ya tiene cuenta? Login</a>
          </div>

        </div>
        <!-- Authbox ends -->

      </form>
      <!-- Form ends -->

    </div>
    <!-- Auth wrapper ends -->

  </body>

</html>