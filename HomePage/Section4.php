<?php
?>
<div class="banniere_4">
        <span class="box">
            <h1>Inscris-toi !</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, nostrum porro! Optio incidunt, numquam id quos, eius at laudantium explicabo atque blanditiis voluptatum recusandae possimus quasi perferendis cumque ipsum quae.</p>
        </span>
            <div class="sign_in_card offset-md-1 box box1">
                <form action="form.php" method="post">
                    <fieldset class="card_content_fieldset">
                        <legend class="first-legend">Inscription</legend>
                        <fieldset class="first-fieldset">
                            <legend>Sexe</legend>
                            <div class="btn-sexe">
                                <div class="champs-sexe">
                                    <label for="sex_male"> Homme
                                        <input type="radio" name="user_sex" id="sex_male"/>
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
                                <input class="champs" type="text" name="user_name" placeholder="Votre nom"/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Prénom</legend>
                            <label>
                                <input class="champs" type="text" name="user_firstname" placeholder="Votre prénom"/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Date de naissance</legend>
                            <label>
                                <input class="champs" type="date" name="user_birthday"/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>Numéro de téléphone</legend>
                            <label>
                                <input class="champs" type="tel" name="user_phone" placeholder="06 12 34 56 78"/>
                            </label>
                        </fieldset>
                        <fieldset>
                            <legend>E-mail</legend>
                            <label>
                                <input class="champs" type="email" name="user_mail" placeholder="E-mail@email.com"/>
                            </label>
                        </fieldset>
                        <br/>
                        <input class="btn_sign_in" type="submit" value="Je m'inscris"/>
                    </fieldset>
                </form>
        </div>
    </div>