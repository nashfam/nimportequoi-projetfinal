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
        
        <style>
            textarea {
                width: 100%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
            }
            
            /*input[type=button], input[type=submit], input[type=reset] {
                background-color: #008CBA;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;

                background-color: #008CBA; 
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }*/
        </style>
        


        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 


    </head>
    <body>
        <?php require_once 'en-tete.php'; ?>

        <div class="container" align="middle">
            <form>
                <table  width="40%" cellpadding="10" bgcolor="#FFFFFF" frame="box">
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
                            <textarea name="DescComplete" rows="10" cols="50"></textarea>
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
            
            <input type="submit" class="button" value="Inscrire nouvelle annonce" onclick="window.location = 'annonces.php';">

        </div>
    </body>
</html>


