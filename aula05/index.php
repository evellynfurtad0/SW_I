<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSHBCSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body style="background-color: #5ccb5f;">
  <div class="container d-flex justify-content-center align-items-center min-vh-100" >
    <div class="col col-lg-4">
      <div class="alert alert-primary d-flex justify-content-center fw-bold" role="alert" >
        PÁGINA INICIAL - PROJETO RECOLHEAI
      </div>
      <div class="container">
        <form action="processa.php" method="POST" style="border: 2px solid #3b51b4; border-radius: 10px; background-color: #f5f649; padding: 10px;">
          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example1">Email</label>
            <input type="email" id="form2Example1" class="form-control" name="email" />
          </div>

          <!-- Password input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Senha</label>
            <input type="password" id="form2Example2" class="form-control" name="senha" />
          </div>

          <!-- 2 column grid layout for inline styling -->
          <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
                <label class="form-check-label" for="form2Example34"> Lembre-me </label>
              </div>
            </div>

            <div class="col">
              <!-- Simple link -->
              <a href="#!"> Esqueceu sua senha?</a>
            </div>
          </div>

          <!-- Submit button -->
          <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
          <input type="submit" class="btn btn-primary btn-block mb-4" value="Enviar">
          <!-- Register buttons -->
          <div class="text-center">
            <p>Não é membro? <a href="#!">Cadastre-se</a></p>
            <!-- <p>ou inscreva-se com:</p>
              <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1" >
                <i class="fab fa-fw fa-facebook-f"></i>
              </button>
              <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>
              <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>
              <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button> -->
          </div>
        </form>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
