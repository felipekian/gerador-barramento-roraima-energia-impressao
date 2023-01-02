<!doctype html>
<html lang="pt-BR">

<head>
  <title>Barramentos Roraima Energia</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main style="max-width: 10cm;">

    <?php for ($i = 0; $i < 6; $i++) { ?>
      <div class="p-1 pt-2 mx-5 my-3 bg-light rounded border row" style="max-height: 4cm;">
        <div class="col-5">
          <img src="https://pagamento.roraimaenergia.com.br/images/rr/icons/maskable_icon_x512.png" class="rounded" style="width: 3cm;">
        </div>
        <div class="col-7 text-center">
          <span class="fw-bold align-middle text-secondary" style="font-size: 5rem;">/<?= $i ?></span>
        </div>
      </div>
    <?php } ?>


  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>