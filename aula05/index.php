<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <form action="processa.php" method="POST">
      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="form2Example1" class="form-control" name="email" />
        <label class="form-label" for="form2Example1">Email:</label>
      </div>

      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="form2Example2" class="form-control" name="senha" />
        <label class="form-label" for="form2Example2">Senha:</label>
      </div>

      <!-- 2 column grid layout for inline styling -->
      <div class="row mb-4">
        <div class="col d-flex justify-content-center">
          <!-- Checkbox -->
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="form2Example34" checked />
            <label class="form-check-label" for="form2Example34"> Lembrar - me </label>
          </div>
        </div>

        <div class="col">
          <!-- Simple link -->
          <a href="#!">Esqueceu sua senha?</a>
        </div>
      </div>

      <!-- Submit button -->
      <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign in</button> -->
      <input type="subimit" class="btn btn-primary btn-block" value="Enviar">

      <!-- Register buttons -->
      <div class="text-center">
        <p>Não é membro? <a href="#!">Registre-se</a></p>
        <p>Ou inscreva-se com::</p>
        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-google"></i>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button  data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
          <i class="fab fa-github"></i>
        </button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>