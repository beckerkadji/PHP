<?php
session_start();

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

$req = $bdd->query('SELECT * FROM users ');

?>


<DOCTYPE html>
<html>
    <head>
        <title>Sucess</title>
        <meta charset ='utf-8'/>
        <link rel='stylesheet' href='style/reponse.css' />
    </head>
    <body>
        <h1> List of register !</h1>
        <div id='contain'>
            <table border=1>
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>COURS</th>
                    <th>Date d'inscription</th>
                </tr>
            <?php 
                while($data = $req->fetch()) {
            ?>
                <tr>
                    <td><?php echo $data['nom'] ; ?></td>
                    <td><?php echo $data['prenom'] ; ?></td>
                    <td><?php echo $data['cours'] ; ?></td>
                    <td><?php echo $data['date_insertion'] ; ?></td>
                </tr>
            <?php
                }
                $req->closeCursor();
            ?>
            </table>
        </div>
    <body>
</html>
