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