<!doctype html>
<html lang="en">

<head>
  <title>App IMC</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
        <main>
        <div class="container">
        <div class="card">
            <div class="card-header">
            Tus datos para calcular el IMC
            </div>
            <div class="card-body">

            <form action="" method="post">
                <div class="mb-3">
                    <label for="peso" class="form-label">Ingresa tu peso:</label> <input type="text" class="form-control" name="peso" id="peso" aria-describedby="helpId" placeholder="Ejemplo: 99"> <small id="helpId" class="form-text text-muted">Kg</small>
                </div>
                <div class="mb-3">
                    <label for="altura" class="form-label">Ingresa tu altura:</label> <input type="text" class="form-control" name="altura" id="altura" aria-describedby="helpId" placeholder="Ejemplo: 1.80"> <small id="helpId" class="form-text text-muted">Metros <i>(Incluye un . "punto")</i></small>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    <br>

            <?php
            if($_POST){
            // echo "IMC enviado ";     No utilizaremos esta impresión
                $peso=$_POST['peso'];
                $altura=$_POST['altura'];
                $imc=$peso/($altura*$altura);
            ?>
                <div class="card">
                     <div class="card-header">Resultados</div>
                     <div class="card-body">
                        <?php echo $imc; ?>
                     </div>
                </div>
            <!-- print_r($_POST); Imprime lo descrito por el usuario --> 
            <?php    } ?>

        </div>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>