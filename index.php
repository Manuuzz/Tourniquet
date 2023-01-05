<?php include 'header.php'; ?>
<html>
    <head>

    </head>
    <body>
        <?php 
        if(isset($_GET["submit"])){
            $tab = array($_GET["nom"],$_GET["mdp"]);
            $_SESSION['nom'] = $_GET['nom'];
		    $_SESSION['mdp'] = $_GET['mdp'];
            echo "Le nom du compte est :" .$_SESSION["nom"];
        ?>
    <table>
        <tr>
            <?php 
                for($i=0 ; $i<=1 ; $i++){
                    echo "<td> à l'indice" .$i. " la valeur est " 
                    .$tab[$i]."</td>";
                }
            ?>
        </tr>
    </table>
    <?php 
    }else{ echo "saisir le formulaire";}?>
    <form action="" method="get">
        <label >Nom d'utilisateur : </label>
        <input type="text" name="nom" id="name">

        <label>Mot de passe : </label>
        <input type="password" name ="mdp" id="mdp"> 

        <input type="submit" name="submit" value="Valider le formulaire">

    </form>

</body>
</html>