<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Page d'authentification</title>


        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

        <link rel="stylesheet" href="css/LoginCSS-Style.css">


    </head>

    <body>
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Inscription</label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Adresse courriel</label>
                            <input id="user" type="text" class="input" required autofocus>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mot de passe</label>
                            <input id="pass" type="password" class="input" data-type="password" required>
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Se souvenir de moi</label>
                        </div>
                        <div class="group">

                            <input type="submit" class="button" value="Se connecter" onclick="window.location = 'annonces.php';">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="oublieMotDePasse.php">Mot de passe oublié?</a>
                        </div>
                    </div>
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Adresse courriel</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="user" class="label">Confirmation de l'adresse courriel</label>
                            <input id="user" type="text" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Mot de passe</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Confirmation du mot de passe</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Enregistrement" onclick="window.location = 'connexion.php';">
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <label for="tab-1">Déja Membre?</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
