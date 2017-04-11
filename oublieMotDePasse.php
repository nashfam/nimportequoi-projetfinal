<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
        <link rel="stylesheet" href="css/LoginCSS-Style.css">
        
        <title>Changement mot de passe</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="login-wrap">
            <div class="login-html">
                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Mot de passe oublié</label>
                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                <div class="login-form">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="user" class="label">Nom d'utilisateur</label>
                            <input id="user" type="text" class="input" required autofocus>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Nouveau mot de passe</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Confirmation du nouveau mot de passe</label>
                            <input id="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">

                            <input type="submit" class="button" value="Generer un nouveau mot de passe" onclick="window.location = 'connexion.php';">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>