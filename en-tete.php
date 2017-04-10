<header>
            <h1>N'IMPORTE QUOI</h1>
            <ul class="menuHaut">

                <li class="menuHaut"><a class="menuHaut"onclick="window.location = 'annonces.php';">Accueil</a></li>
                <li class="menuHaut">
                    <div class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">Categories</button>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="#">Categorie 1</a>
                            <a href="#">Categorie 2</a>
                            <a href="#">Categorie 3</a>
                        </div>
                </li>
                <li class="menuHaut"><a class="menuHaut" onclick="window.location = 'mon-compte.php';">Mon Compte</a></li>
                <li class="menuHaut"><a class="menuHaut" onclick="window.location = 'mes-annonces.php';">Mes Annonces</a></li>
                <li class="menuHaut" style="float:right"><a class="menuHaut" onclick="window.location = 'connexion.php';">Déconnexion</a></li>
                
                <li class="menuHaut" style="float:right">
                    <form>
                        <input type="text" name="recherche" placeholder="Recherche.."> 
                    </form>
                </li>
            </ul>
        </header>
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