<?php 


?>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
      
      <style>
                      /*CSS Menu*/
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            /*position: fixed;
            top: 0;
            width: 100%;*/
        }

        li {
            float: left;
            border-right: 1px solid #bbb;
        }
        
        li:last-child {
            border-right: none;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #4CAF50;
        }
        
        .active {
    background-color: #4CAF50;
}

/*CSS search box*/
input[type=text] {
    width: 150px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}

.center {
    line-height: 200px;
    height: 200px;
    text-align: center;
    color:black
}

.center p {
    line-height: 1.5;
    display: inline-block;
    vertical-align: middle;
    
}
</style>

    </head>
    <body>
        
        <header>
            <h1>Info-Annonces</h1>
        <ul>
            <li><a onclick="window.location='Annonce.html';">Accueil</a></li>
            <li><a  >Categories</a></li>
            <li><a  >Mon compte</a></li>
            <li style="float:right"> <a  onclick="window.location='LoginPage.html';">Deconnexion</a></li>
            <li style="float:right"><a >About</a></li>
            <li style="float:right">
                <form>
                    <input type="text" name="recherche" placeholder="Recherche..">
                </form>
            </li>
        </ul>
        </header>
        
        <div class="center">
            <table>
              <tr>
                  <td rowspan="10"><img src="Produit1.jpg" width="700px"</img></td>
    <td>Description : </td>
    <td>Description de l'annonce</td>
    
  </tr>
  <tr>
    <td>Numéro de téléphone : </td>
    <td>514-690-0909</td>
  </tr>
  <tr>
    <td>Date/Heure : </td>
    <td>12 janvier 2017</td>
  </tr>                
            </table>
           
            
            
	</div>
    </body>
</html>
