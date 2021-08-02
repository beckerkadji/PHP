<?php
session_start();

$response = $_GET['response'];

if(isset($response) && $response='ok'){


//on insert nos variable session dans des variables: ce n'est pas obligatoire

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$choicelanguage = $_SESSION['choicelanguage'];


//connexion à la base de données
try
{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=paiement;charset=utf8',
        'root',
        'MOT2p@sse123',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
}
catch(Exception $e){
    die('Ereur : '. $e->getMessage());
}

//ici on écrit notre requête d'insertion dans la base de données
    $req= $bdd->prepare('INSERT INTO users(nom,prenom,cours) VALUES(:nom,:prenom,:cours)');
    $req->execute( array(
        'nom' => $firstname,
        'prenom' => $lastname,
        'cours' => $choicelanguage
    ));
} else {
    session_destroy();
    header('Location: faild.php');
}

?>


<DOCTYPE html>
<html>
    <head>
        <title>Sucess</title>
        <meta charset ='utf-8'/>
        <link rel='stylesheet' href='style/reponse.css' />
    </head>
    <body>
        <div id='contain'>
            <div class='item'>
                <p>operation Succes ! ✅</p>   
            </div>
        </div>
        <p><a href='tableau.php'>click here</a></p>
    <body>
</html>
