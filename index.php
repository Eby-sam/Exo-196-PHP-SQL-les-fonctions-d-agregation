<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * 1. Importez le contenu du fichier user.sql dans une nouvelle base de données.
     * 2. Utilisez un des objets de connexion que nous avons fait ensemble pour vous connecter à votre base de données.
     *
     * Pour chaque résultat de requête, affichez les informations, ex:  Age minimum: 36 ans <br>   ( pour obtenir une information par ligne ).
     *
     * 3. Récupérez l'age minimum des utilisateurs.
     * 4. Récupérez l'âge maximum des utilisateurs.
     * 5. Récupérez le nombre total d'utilisateurs dans la table à l'aide de la fonction d'agrégation COUNT().
     * 6. Récupérer le nombre d'utilisateurs ayant un numéro de rue plus grand ou égal à 5.
     * 7. Récupérez la moyenne d'âge des utilisateurs.
     * 8. Récupérer la somme des numéros de maison des utilisateurs ( bien que ca n'ait pas de sens ).
     */

    // TODO Votre code ici, commencez par require un des objet de connexion que nous avons fait ensemble.
    try {
        $server = 'localhost';
        $db = 'bdd_196';
        $user = 'root';
        $pass = '';

        $bdd = new PDO("mysql:host=$server;dbname=$db;charset=utf8",$user,$pass);
                $stmt = $bdd->prepare("SELECT MIN(age) FROM db_cours.user");
                $state= $stmt->execute();
                if($state){
                    $min = $stmt->fetch();
                    echo "<pre>";
                    print_r($min);
                    echo "<pre>";
                }

                $stmt = $bdd->prepare("SELECT MAX(age) FROM db_cours.user");
                $state= $stmt->execute();
                if($state){
                   $min = $stmt->fetch();
                    echo "<pre>";
                    print_r($min);
                   echo "<pre>";
                }
                $stmt = $bdd->prepare("SELECT count(*) as number FROM db_cours.user");
                $state= $stmt->execute();
                if($state){
                    $min = $stmt->fetch();
                    echo "<pre>";
                    print_r($min);
                    echo "<pre>";
                }

                $stmt = $bdd->prepare("SELECT MAX(numero) FROM db_cours.user");
                $state= $stmt->execute();
                if($state){
                    $min = $stmt->fetch();
                    echo "<pre>";
                    print_r($min);
                    echo "<pre>";
                }

                $stmt = $bdd->prepare("SELECT AVG(age) as moyenne_age FROM db_cours.user");
                $state= $stmt->execute();
                if($state){
                    $min = $stmt->fetch();
                    echo "<pre>";
                    print_r($min);
                    echo "<pre>";
                }

        $stmt = $bdd->prepare("SELECT SUM(numero) as somme_num FROM db_cours.user");
        $state= $stmt->execute();
        if($state){
            $min = $stmt->fetch();
            echo "<pre>";
            print_r($min);
            echo "<pre>";
        }




    }

    catch (PDOException $exception){
        echo $exception->getMessage();
    }

    ?>
</body>
</html>

