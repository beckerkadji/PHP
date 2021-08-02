<?php
session_start();

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['choicelanguage'])){

    if( $_POST['firstname'] == '' OR $_POST['lastname'] == '')
    {
        header('Location: faild.php'); 
        
    } else {

       
        $_SESSION['firstname'] = htmlspecialchars($_POST['firstname']);
        $_SESSION['lastname'] = htmlspecialchars($_POST['lastname']);
        $_SESSION['choicelanguage'] = htmlspecialchars($_POST['choicelanguage']);

        echo $_SESSION['firstname'].'<br>';
        echo $_SESSION['lastname'].'<br>';
        echo $_SESSION['choicelanguage'].'<br>';

        header('Location: https://s.htr.cm/ANzN');
    }
}
?>
