<html>
    <head>
       <link rel="stylesheet" href="CSS-Menu.css" type="text/css">
       <link rel="stylesheet" href="css/CSS-general.css" type="text/css">

        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    </head>
    <body>
        <?php require_once 'en-tete.php';?>

        <div align="middle">
            <table>
                <td id="tri1">
                    <input type="radio" name="tri1" value="triCroissant" checked="checked"> Croissant<br>
                    <input type="radio" name="tri1" value="triDecroissant"> Décroissant<br>
                <td>
                <td id="tri2">
                    <input type="radio" name="tri2" value="triDateParution" checked="checked"> Date de parution<br>
                    <input type="radio" name="tri2" value="triNomPrenomAuteur"> Nom et prenom de l'auteur<br>
                    <input type="radio" name="tri2" value="triCategorie"> Catégorie
                </td>
            </table>
        </div>

        <table class="sAffichageAnnonces">
            <?php for ($i = 0; $i < 2; $i++) {
                ?>
                <tr>

                    <td>
                        <div>
                            <table style="height:150px" frame="box" >
                                <caption style="font-weight: bold;font-variant: small-caps;font-size: 150%;height:40px;line-height: 40px;" ><a href="infos-annonce.php">Bugatti chiron</a></caption>
                                <tr>
                                    <th align="center">Annonce no. <?= $i?> </th>
                                </tr>
                                <tr>
                                    <td><img src="Produit1.jpg"  style="border:2px solid;width:144px;"></td>
                                    <td>
                                        <table  align="left" cellspacing="5" width="800">
                                            <tr>
                                                <td style="text-align:left;">Numéro séquentiel11 : </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left;">Date de parution : </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left;">Catégorie : </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left;">Description abrégée : </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left;">Prix :  </td>
                                            </tr>
                                            <tr>
                                                <td style="text-align:left;">Etat :</td>
                                                
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                     <input id="btnModification" name="btnModification" type="button" value="Modification" class="sBouton" onclick=""  />
                                                </td>
                                                <td align="center">
                                                     <input id="btnSuppression" name="btnSuppression" type="button" value="Suppression" class="sBouton" onclick="" />
                                                </td>
                                                <td align="center">
                                                     <input id="btnChangerEtat" name="btnChangerEtat" type="button" value="Activer/Désactiver" class="sBouton" onclick=""  />
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <div class="center">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>

    </body>
</html>

