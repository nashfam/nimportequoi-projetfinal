<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="CSS-Menu.css" type="text/css">
        <link rel="stylesheet" href="css/CSS-general.css" type="text/css">
        
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    </head>
    <body>
        <?php require_once 'en-tete.php';?>

        <div class="container" align="middle">
            <form>
                <table class="sAffichageAnnonces" style="width: 800px; height: 800px" border='1' width="40%" cellpadding="10">
                    <caption style="font-weight: bold;font-variant: small-caps;font-size: 150%;height:40px;line-height: 40px;" ><a>Mise à jour de vos informations</a></caption>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Statut d'employé</td>
                        <td>
                            <input type="radio" name="Etat" value="Actif" checked> Actif<br>
                            <input type="radio" name="Etat" value="Inactif"> Inactif<br>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Numéro d'employé</td>
                        <td>
                            <input type="text" name="NoEmpl" height="10" style="width: 100%;">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Prénom</td>
                        <td>
                            <input type="text" name="Prenom" style="width: 100%;">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Nom de famille</td>
                        <td>
                            <input type="text" name="NomFamille" style="width: 100%;">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Courriel</td>
                        <td>
                            <input type="text" name="Courriel" value="alainabboud@bell.net" style="width: 100%;" disabled="">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Mot de passe</td>
                        <td>
                            <input type="password" name="motPasse" value="6249613" style="width: 100%;" disabled="">
                            <input class="button" value="Mettre à jour" onclick="window.location = 'oublieMotDePasse.php';">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Prix</td>
                        <td>
                            <input type="checkbox" name="public" min="1" step="any" ><label>Rendre mes informations publiques</label>
                        </td>
                    </tr>
                </table>
            </form>
            
            <input type="submit" class="button" value="Mettre à jour" onclick="window.location = 'annonces.php';">
    </body>
</html>
