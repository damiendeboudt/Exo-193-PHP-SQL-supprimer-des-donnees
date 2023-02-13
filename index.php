<?php
require"Classes/DB.php";


try {
    $server = 'localhost';
    $db = 'exo_193';
    $user = 'root';
    $pwd = '';

    $con = new PDO("mysql:host=$server;dbname=$db", $user, $pwd );
    echo 'ok';
/*
    $sql = "DELETE FROM user WHERE id = 4";
    $con->exec($sql);

    if($con->exec($sql) !== false) {
        echo 'l\'ID 4 a été supprimé';
    }

    echo '<br>';

    $sql2 = "TRUNCATE TABLE user";
    $con->exec($sql2);
    if ($con->exec($sql2) !== false) {
        echo "Contenu de la table supp";
    }


    $sql3 = "INSERT INTO user (nom, prenom, rue, numero, code_postal, ville, pays, mail)
    VALUES ('Debout', 'Damien', 'rue machin', 53, 03490, 'Hirson', 'France', 'dam.deb@klfj.fr')
    ";

    $con->exec($sql3);

    //$sql4 = "DROP TABLE user";
    //$con->exec($sql4);

*/
    $sql5 = "DROP DATABASE $db";
    $con->exec($sql5);
}
 catch(PDOException $exception) {
    echo $exception->getMessage();
}

/**
 * 1. Importez la table user dans une base de données que vous aurez créée au préalable via PhpMyAdmin
 * 2. En utilisant l'objet de connexion qui a déjà été défini =>
 *    --> Remplacez les informations de connexion ( nom de la base et vérifiez les paramètres d'accès ).
 *    --> Supprimez le dernier utilisateur de la liste, faites une capture d'écran dans PhpMyAdmin pour me montrer que
 * vous avez supprimé l'entrée et pushez la avec votre code.
 *    --> Faites un truncate de la base de données, les auto incréments présents seront remis à 0
 *    --> Insérez un nouvel utilisateur dans la table ( faites un screenshot et ajoutez le au repo )
 *    --> Finalement, vous décidez de supprimer complètement la table
 *    --> Et pour finir, comme vous n'avez plus de table dans la base de données, vous décidez de supprimer aussi la
 * base de données.
 */