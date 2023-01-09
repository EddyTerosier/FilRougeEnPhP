<?php 
    require_once("include.php");

    if(!empty($_POST)){
        extract($_POST);

        $valid = (bool) true;

    if(isset($_POST['inscription'])){
        $user_sex = trim($user_sex);
        $user_name = trim($user_name);
        $user_firstname = trim($user_firstname);
        $user_birthday = trim($user_birthday);
        $user_mail = trim($user_mail);
        $user_password = trim($user_password);
        
        if(empty($user_mail)){
            $valid = false;
            $err_user_mail = "Veuillez saisir votre E-mail"; 
        }else{
            $req = $DB->prepare("SELECT id 
            FROM utilisateur 
            WHERE Email = ?");
        
        $req->execute(array($user_mail));
        
        $req = $req->fetch();
        
        if(isset($req['id'])){
            $valid = false;
            $err_user_mail = "Cette adresse mail est déjà utilisée";
        }
        
    }
    if(empty($user_password)){
        $valid = false;
        $err_user_password = "Veuillez saisir un mot de passe";
    }
    if($valid){
        $crypt_user_password = password_hash($user_password, PASSWORD_ARGON2ID);

        // if (password_verify($user_password, $crypt_user_password)){
        //     echo 'Le mot de passe est valide';
        // }else{
        //     echo "Le mot de passe n'est pas valide";
        // }
    }
        
        $date_creation = date('Y-m-d H:i:s');
        $date_connexion = date('Y-m-d H:i:s');

        $req = $DB->prepare("INSERT INTO utilisateur(Sexe, Nom, Prénom, DateDeNaissance, Email, MotDePasse, date_creation, date_connexion) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $req->execute(array($user_sex, $user_name, $user_firstname, $user_birthday, $user_mail, $crypt_user_password, $date_creation, $date_connexion));

    
        header('Location: ./form.php');
        exit;
    }
}
?>
<div class="App">
    <?php include("HomePage/Section1.php"); ?>
    <?php include("HomePage/Section2.php"); ?>
    <?php include("HomePage/Section3.php"); ?>
    <?php include("HomePage/Section4.php"); ?>
</div>