<!-- <?php 
    require_once("./include.php");

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
?> -->
    <div class="banniere_4" id="ancre">
            <span class="box">
                <h1>Inscris-toi !</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nostrum porro! Optio incidunt, numquam id quos, eius at laudantium explicabo atque blanditiis voluptatum recusandae possimus quasi perferendis cumque ipsum quae.</p>
            </span>
            <div class="sign_in_card offset-md-1 box box1">
                <form method="post">
                    <fieldset class="card_content_fieldset">
                        <legend class="first-legend">Inscription</legend>
                        <fieldset class="first-fieldset">
                            <legend>Sexe</legend>
                            <div class="btn-sexe">
                                <div class="champs-sexe">
                                    <label for="sex_male"> Homme
                                        <input type="radio" name="user_sex" id="sex_male" required />
                                    </label>
                                </div>
                                <div class="champs-sexe">
                                    <label for="sex_female"> Femme
                                        <input type="radio" name="user_sex" id="sex_female"/>
                                    </label>
                                </div>
                                <div class="champs-sexe">
                                    <label for="sex_other"> Autre
                                        <input type="radio" name="user_sex" id="sex_other"/>
                                    </label>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Nom</legend>
                            <label>
                                <input class="champs" type="text" name="user_name" value ="<?php if(isset($user_name)){ echo $user_name; } ?>" placeholder="Votre nom" required/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Prénom</legend>
                            <label>
                                <input class="champs" type="text" name="user_firstname" value ="<?php if(isset($user_firstname)){ echo $user_firstname; } ?>" placeholder="Votre prénom" required/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Date de naissance</legend>
                            <label>
                                <input class="champs" type="date" name="user_birthday" value ="<?php if(isset($user_birthday)){ echo $user_birthday; } ?>" required/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>E-mail</legend>
                            <label>
                                <input class="champs" type="email" name="user_mail" value ="<?php if(isset($user_mail)){ echo $user_mail; } ?>" placeholder="E-mail@email.com" required/>
                            </label>
                            <div class="error"><?php if(isset($err_user_mail)){ echo $err_user_mail;}?></div>
                        </fieldset>
                        <fieldset>
                            <legend>Mot de passe</legend>
                            <label>
                                <input class="champs" type="password" name="user_password" value ="<?php if(isset($user_password)){ echo $user_password; } ?>" placeholder="Mot de passe" required/>
                            </label>
                        </fieldset>
                        <br/>
                        <input class="btn_sign_in" type="submit" name ="inscription" value="Je m'inscris"/>
                    </fieldset>
                </form>
            </div>
        </div>