<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <link rel="stylesheet" href="CSS-Menu.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    </head>
    <body>
        <header>
            <h1>Accueil</h1>
            <ul class="menuHaut">

                <li class="menuHaut"><a class="menuHaut"onclick="window.location = 'Annonce.php';">Accueil</a></li>
                <li class="menuHaut">
                    <div class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">Categories</button>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="#">Categorie 1</a>
                            <a href="#">Categorie 2</a>
                            <a href="#">Categorie 3</a>
                        </div>
                </li>
                <li class="menuHaut"><a class="menuHaut" >Mon compte</a></li>
                <li class="menuHaut" style="float:right"> <a class="menuHaut" onclick="window.location = 'connexion.php';">Deconnexion</a></li>
                <li class="menuHaut" style="float:right"><a class="menuHaut">About</a></li>
                <li class="menuHaut" style="float:right">
                    <form>
                        <input type="text" name="recherche" placeholder="Recherche..">
                    </form>
                </li>
            </ul>
        </header>

        <aside style="float:left;width:300px">
            <p style="font-weight: bold;text-align:center;font-size: 150%;">Tri</p>
            <ul class="menuCote" style="width:300px">
                <p style="font-weight: bold;text-align:center;font-size: 100%;">Date de parution</p>
                <li class="menuCote"><a class="menuCote" href="#home">Croissant</a></li>
                <li class="menuCote"><a class="menuCote" href="#news">Décroissant</a></li>

                <p style="font-weight: bold;text-align:center;font-size: 100%;">Nom et prenom de l'auteur</p>
                <li class="menuCote"><a class="menuCote" href="#contact">Croissant</a></li>
                <li class="menuCote"><a class="menuCote" href="#about">Décroissant</a></li>

                <p style="font-weight: bold;text-align:center;font-size: 100%;">Catégorie</p>
                <li class="menuCote"><a class="menuCote" href="#contact">Croissant</a></li>
                <li class="menuCote"><a class="menuCote" href="#about">Décroissant</a></li>
            </ul>
            <!--<table>
            <?php ?>
                <tr>
                    <td><a href="#">London</a></td>
                </tr>
                <tr>
                    <td><a href="#">Paris</a></td>
                </tr>
                <tr>
                    <td><a href="#">Tokyo</a></td>
                </tr>
            </table>-->
        </aside>

        <table class="sAffichageAnnonces">
            <?php for ($i = 0; $i < 10; $i++) {
                ?>
                <tr>

                    <td>
                        <div>
                            <table style="height:150px" border="1" <!--frame="box"--> >
                                <caption style="font-weight: bold;font-variant: small-caps;font-size: 150%;height:40px;line-height: 40px;" >Annonce no1</caption>
                                <tr>
                                    <th align="center"><a href="infos-annonce.php">Bugatti chiron</a> </th>
                                </tr>
                                <tr>
                                    <td><img src="Produit1.jpg"  style="border:2px solid;width:144px;height:150px;"></td>
                                    <td>
                                        <table  align="left" border="1" cellspacing="5" width="800">
                                            <tr>
                                                <td style="text-align:left;">Numéro séquentiel : </td>
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
                                                <td style="text-align:center;">Etat :</td>
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

        <script>
            /* When the user clicks on the button,
             toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown if the user clicks outside of it
            window.onclick = function (e) {
                if (!e.target.matches('.dropbtn')) {
                    var myDropdown = document.getElementById("myDropdown");
                    if (myDropdown.classList.contains('show')) {
                        myDropdown.classList.remove('show');
                    }
                }
            }
        </script>
    </body>
</html>
