<?php require_once('include.php');
// Connexion à la base de données


// Vérification des informations d'identification de l'utilisateur
if (!empty($_POST)) {
    extract($_POST);

    $valid = true;

    // Vérification du nom d'utilisateur
    if (empty($user_mail)) {
        $valid = false;
        $err_user_mail = "Veuillez saisir votre mail";
    }

    // Vérification du mot de passe
    if (empty($user_password)) {
        $valid = false;
        $err_user_password = "Veuillez saisir votre mot de passe";
    }

    // Si les informations d'identification sont valides, recherche de l'utilisateur dans la base de données
    if ($valid) {
        $req = $DB->prepare("SELECT id, MotDePasse,Email FROM utilisateur WHERE Email = ?");
        $req->execute(array($user_mail));
        $mail = $req->fetch(); // Utilisation d'un autre nom de variable pour stocker le résultat de la requête SQL

        // Si l'utilisateur a été trouvé, vérification du mot de passe
        if ($mail) {
            if (password_verify($user_password, $mail['MotDePasse'])) {
                // Si le mot de passe est correct, connexion de l'utilisateur
                session_start();
                $_SESSION['auth'] = $mail;
                header('Location: Programme.php');
                exit;
            } else {
                // Si le mot de passe est incorrect, affichage d'un message d'erreur
                $err_user_password = "Mot de passe incorrect";
            }
        } else {
            // Si l'utilisateur n'a pas été trouvé, affichage d'un message d'erreur
            $err_user_mail = "Mail incorrect";
        }
    }
}

?>

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
    <div class="banniere_4">
            <span>
                <h1>Bravo tu es inscrit !</h1>
                <p>Il ne te reste plus qu'une seule étape :
                  Connecte toi à l'aide de ton mail et de ton mot de passe.</p>
            </span>
            <div class="sign_in_card offset-md-1">
                <form method="post">
                    <fieldset class="card_content_fieldset">
                        <legend class="first-legend">Connexion</legend>
                        <fieldset>
                            <legend>E-mail</legend>
                            <label>
                                <input class="champs" type="email" name="user_mail" placeholder="E-mail@email.com" required/>
                            </label>
                            <div class="error"><?php if(isset($err_user_mail)){ echo $err_user_mail;}?></div>
                        </fieldset>
                        <fieldset>
                            <legend>Mot de passe</legend>
                            <label>
                                <input class="champs" type="password" name="user_password" placeholder="Mot de passe" required/>
                            </label>
                            <div><?php if(isset($err_user_password)){ echo $err_user_password;}?></div>
                        </fieldset>
                        <br/>
                        <input class="btn_sign_in" type="submit" name ="inscription" value="Connexion"/>
                    </fieldset>
                </form>
            </div>
            <center>
        <h3><a href="Dream-gym.php#ancre">Pas encore inscrit ?</a></h3>
      </center>
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