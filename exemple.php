<!--
A faire en V2 : 
- 
- 
-->
<!DOCTYPE html>
<html>
<head>
    <title>Program'music</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/exemple.css">
        <link rel="icon" href="images/logoUniv.jpg"/>
   <script src="jquery-1.12.3.js"></script>
    <script>
        $(document).ready(function(){
            $("#buttoncode1").click(function(){
                $("#textarea1").toggle();
            });
            $("#buttoncode2").click(function(){
                $("#textarea2").toggle();
            });
            $("#buttoncode3").click(function(){
                $("#textarea3").toggle();
            });
        });
    </script>
</head>
<body>
    <!--HEADER  A COPIER COLLER-->
    <header>
			<img alt="header" src="images/logo.png">
			<div>
				<h1>Program'Music</h1>
				<h2>Avec Raspberry Pi et Sonic Pi</h2>
			</div>
		</header>
		<nav>
			<ul>
				<li ><a href="index.php">Accueil</a></li><!-- 
			--><li><a href="session.php">Atelier</a></li><!-- 
			--><li id=here><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
	<!--FIN HEADER  A COPIER COLLER-->
	<!-- Les exemples -->
    <form action="#" method="post">
        <div id="exemple1">
            <p id="titre"> Exemple n°1 : </p>
            <br>
            <br>
            
            <input class="buttonjouer" type="submit" value="Jouer" name="jouer1"/>
            <br>	
        </div>

        </div>
        <div id="exemple2">
            <p id="titre"> Exemple n°2 : </p>
            <br>
            <br>
            
            <input class="buttonjouer" type="submit" value="Jouer" name="jouer2"/>
        </div>
        <div id="exemple2">
            <p id="titre"> Exemple n°3 : </p>
            <br>
            <br>
            
            <input class="buttonjouer" type="submit" value="Jouer" name="jouer3"/>
            <br>
        </div>
    <textarea id="textarea1" name="textarea1" rows="10" cols="40"><?php
        if(file_exists("exemple1.txt")==TRUE){
                $octet = filesize("exemple1.txt");
                //Si le fichier n'est pas vide
                if($octet!=0){
                    //ouvre le fichier et affiche son contenu
                    $fichier = fopen("exemple1.txt", "r");
                    $contenu = fread($fichier, $octet);
                    echo $contenu;
                }
	    }
        ?></textarea>
    <textarea id="textarea2" name="textarea2" rows="10" cols="40"><?php
        if(file_exists("exemple2.txt")==TRUE){
                $octet = filesize("exemple2.txt");
                //Si le fichier n'est pas vide
                if($octet!=0){
                    //ouvre le fichier et affiche son contenu
                    $fichier = fopen("exemple2.txt", "r");
                    $contenu = fread($fichier, $octet);
                    echo $contenu;
                }
	    }
        ?></textarea>
    <textarea id="textarea3" name="textarea3" rows="10" cols="40"><?php
        if(file_exists("exemple3.txt")==TRUE){
                $octet = filesize("exemple3.txt");
                //Si le fichier n'est pas vide
                if($octet!=0){
                    //ouvre le fichier et affiche son contenu
                    $fichier = fopen("exemple3.txt", "r");
                    $contenu = fread($fichier, $octet);
                    echo $contenu;
                }
	    }
        ?></textarea>
    </form>
    <p id="buttoncode1"><a href="#"><b>Code </b></a></p>
    <p id="buttoncode2"><a href="#"><b>Code </b></a></p>
    <p id="buttoncode3"><a href="#"><b>Code </b></a></p>
    <?php
    if(!empty($_POST)){
        if(isset($_POST["jouer1"])){
            shell_exec("sonic_pi < exemple1.txt");
        }
        if(isset($_POST["jouer2"])){
            shell_exec("sonic_pi < exemple2.txt");
        }
        if(isset($_POST["jouer3"])){
            shell_exec("sonic_pi < exemple3.txt");
        }
    }
    ?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<footer>
		<p id="textefooter">Projet tutoré Semestre 2- IUT Informatique du Limousin-Professeur référent : Catherine Coudray -
        Projet aimé par Sonic Pi -> <a href="https://twitter.com/ThisIsBarda/status/718191575722012672">Cliquez ici</a></p>
	</footer>

</body>

</html>
