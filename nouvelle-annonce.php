<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
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
        <?php require_once 'en-tete.php'; ?>

        <div class="container" align="middle">
            <form>
                <table border='1' width="40%" cellpadding="10">
                    <caption style="font-weight: bold;font-variant: small-caps;font-size: 150%;height:40px;line-height: 40px;" ><a>Inscription d'une nouvelle annonce</a></caption>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Categorie</td>
                        <td>
                            <select name="Categorie">
                                <option value="volvo">Categorie 1</option>
                                <option value="saab">Categorie 2</option>
                                <option value="fiat">Categorie 3</option>
                                <option value="audi">Categorie 4 Test</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Description abregee</td>
                        <td>
                            <input type="text" name="DescAbregee" height="10" style="height: 20px;width: 100%;">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Description Complete</td>
                        <td>
                            <textarea name="DescComplete" rows="10" cols="50">Description Complete
                            </textarea>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Prix</td>
                        <td>
                            <input type="number" name="Prix" min="1" step="any" ><label>$</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Image</td>
                        <td>
                            <input type="file" name="img">
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;font-size: 110%">Etat</td>
                        <td>
                            <input type="radio" name="Etat" value="Actif" checked> Actif<br>
                            <input type="radio" name="Etat" value="Inactif"> Inactif<br>
                        </td>
                    </tr>
                    <tr>
                </table>
            </form>

        </div>
    </body>
</html>


