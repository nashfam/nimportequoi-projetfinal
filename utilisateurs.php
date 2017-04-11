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

        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    </head>
    <body>
        <?php require_once 'en-tete.php'; ?>

        <table style="border-color: #4286f4; background-color: #ffffff;" border="2" align="center" cellpadding="10">
            <tbody>
                <tr>
                    <th>No. Utilisateur</th>
                    <th>Courriel</th>
                    <th>Nom</th>
                    <th>Pr&eacute;nom</th>
                    <th>No. Employ&eacute;</th>
                    <th>T&eacute;l. Maison</th>
                    <th>T&eacute;l. Travail</th>
                    <th>T&eacute;l. Cellulaire</th>
                    <th>No. Annonces</th>
                    <th>&nbsp;Date de cr&eacute;ation</th>
                    <th>&nbsp;Statut</th>
                    <th>&nbsp;Modification</th>
                    <th>&nbsp;Autres infos</th>
                </tr>
                <?php for($i=0;$i<20;$i++){?>
                <tr>
                    <td>0001</td>
                    <td>a.sashcov@cgodin.qc.ca</td>
                    <td>Sashcov</td>
                    <td>Ariel</td>
                    <td>1368715</td>
                    <td>514-123-1234</td>
                    <td>514-123-1234</td>
                    <td>514-123-1234</td>
                    <td>7</td>
                    <td>00-00-0000</td>
                    <td>1</td>
                    <td>00-000-0000</td>
                    <td>Aucune</td>
                </tr>
                <?php }?>
            </tbody>
        </table>




    </body>
</html>