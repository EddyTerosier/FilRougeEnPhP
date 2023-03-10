<!doctype html>
<html lang="fr">

<head>
  <title>Dream-Gym</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta
      name="description"
      content="DREAM-GYM PHP"
    />
  <link rel="icon" href="../Static/Assets/Logo classique fond foncÇ.png" />
  <link rel="apple-touch-icon" href="../Static/Assets/Logo classique fond foncÇ.png" />
  <link rel="stylesheet" href="../Static/css/style2.css" />
  <link rel="stylesheet" href="../Static/css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <script defer src="../Static/js/Animation.js"></script>
</head>

<body>
    <!-- place navbar here -->
    <?php include("Header.php"); ?>
    <div class="backgroundProgramme">
      <h1 class="pb-3 mb-4 font-italic border-bottom">Nos programmes</h1>
      <div class="container card1">
        <div class="row">
          <?php include("Items.php"); ?>
        </div>
      </div>
    </div>
    <!-- place footer here -->
    <?php include("Footer.php"); ?>


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>