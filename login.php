<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prueba Tic - Diego A. García</title>

    <!-- Meta -->
    <link rel="shortcut icon" href="assets/images/favicon.svg" />

    <!-- ******** CSS Files *************** -->
    <link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/css/main.min.css" />

  </head>

  <body class="login-bg">

    <!-- Auth wrapper starts -->
    <div class="auth-wrapper">

      <!-- Form starts -->
      <form action="conexion/login_db.php" method="post">

        <!-- Authbox starts -->
        <div class="auth-box">

          <!-- Logo starts -->
          <a href="index.php" class="auth-logo mb-4">
          <!--  <img src="assets/images/logo-dark.svg" alt="Bootstrap Gallery" /> -->
          </a>
          <!-- Logo ends -->

          <h4 class="mb-4">Login</h4>

          <div class="mb-2">
            <label class="form-label" for="username">Email<span class="text-danger">*</span></label>
            <input type="text" id="username" name="login" class="form-control" placeholder="Ingrese usuario" required>
          </div>

          <div class="mb-2">
            <label class="form-label" for="password">Contraseña <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese Contraseña" required>
              <button class="btn btn-outline-secondary" type="button">
                <i class="bi bi-eye"></i>
              </button>
            </div>
          </div>

          <div class="d-flex justify-content-between mb-4">
            <div class="form-check m-0">
             
            
            </div>
          
          </div>

          <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Login</button>
            <a href="index.php" class="btn btn-dark">No esta registrado? </a>
          </div>

        </div>
        <!-- Authbox ends -->

      </form>
      <!-- Form ends -->

    </div>
    <!-- Auth wrapper ends -->

  </body>

</html>