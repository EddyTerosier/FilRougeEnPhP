<?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=bdd dream-gym','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
$sql = 'SELECT * FROM programmes ';
$requete = $db->query($sql);

While ($news = $requete->fetch()) {
    echo '<div class="col-md-4">'.
    '<div class="card mb-4 text-white bg-dark">'.
    '<img class="card-img-top" src='.$news['image'].' alt="Card"/>'.
        '<div class="card-body">'.
        '<h5 class="card-title">'.$news['name'].'</h5>'.
        '<p class="card-text">'.$news['texte'].'</p>'.
        '<a href="#" class="btn btn-outline-custom btn-sm btn-read-more">'.$news['texte_btn'].'</a>'.
            '</div>'.
    '</div>'.
'</div>';
} 
    ?>