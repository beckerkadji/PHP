<DOCTYPE html>
<html>
    <head>
        <title>login page</title>
        <meta charset ='utf-8'/>
        <link rel='stylesheet' href='style/inscription.css' />
    </head>
    <body>
        <div id='maincontain'>
            <div class='mainitem'>
                
                <h1>Bienvenue<br> sur <br>tech-learn</h1>
                <p>la plateforme de formation en ligne par exellence</p>
                
            </div>

            <div class='mainitem'>
                <form action='traitement.php' method='post'>
                    <p>
                        <img src='images/logopng.png' alt='logo formation' class ='logo'/>
                    </p>

                    <p>s'inscrire à un cours😋</p>

                    <div>
                        <input type='text' name='firstname' placeholder='Entrez votre nom '/>
                    </div>
                    <div>
                        <input type='text' name='lastname' placeholder='entrez votre prenom' />
                    </div>
                    <div>
                        <label for='cours'>choisir un cours</label>
                        <select id='pays' name ="choicelanguage">
                            <option value='html'>HTML</option>
                            <option value='php'>PHP</option>
                            <option value='javascript'>JAVASCRIPT</option>
                            <option value='css'>CSS</option>
                        </select>

                    </div>
                    <div class='divsubmit'>
                        <input type='submit' value="S'inscrire">
                    </div>


                    <p>êtes vous déja iscrit ? cliquez <a href="signup.php">ici</a> pour vérifier cela</p>
                </form>
            </div>
        </div>
    <body>
</html>
