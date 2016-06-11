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
		<link rel="stylesheet" type="text/css" href="css/session.css">
	</head>

	<body>
		<header>
			<img alt="header" src="images/logo.png">
			<div>
				<h1>Program'Music</h1>
				<h2>Avec Raspberry Pi et Sonic Pi</h2>
			</div>
		</header>
		<nav>
			<ul>
				<li><a href="Accueil.php">Accueil</a></li>
				<li id=here><a href="Atelier.php">Atelier</a></li>
				<li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
		
		
			
		<div id="presentation">
			<div id="pres_text">
				<p>Vous êtes sur le point de commencer la session. Avant d'appuyer sur le bouton vert, laissez-nous vous expliquer comment va fonctionner la session.<br/><br/>
                    La session comporte six exercices à faire en <b>auto-correction</b>. Heureusement pour vous guider, vous aurez un cours, qui se situera à gauche de l'écran. Un énoncé vous sera présenté à droite du cours et un espace pour écrire votre code en dessous de l'énoncé. Bon codage !
					<b>Remarque : </b>L'indentation n'est pas possible !</p>
				
			</div>
			<form method="post" action="exercice1.php" id="demarrage">
				<input id="valider" type="submit" name="valid" value="Commencer"/>
			</form>

		</div>
			
			
		
		
		
		
    <footer>
		<p id="textefooter">Projet tutoré Semestre 2- IUT Informatique du Limousin-Professeur référent : Catherine Coudray -
        Projet aimé par Sonic Pi -> <a href="https://twitter.com/ThisIsBarda/status/718191575722012672">Cliquez ici</a></p>
	</footer>
	</body>
</html>