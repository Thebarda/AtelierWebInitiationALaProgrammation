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
		<link rel="stylesheet" type="text/css" href="css/Basic.css">
        <link rel="icon" href="images/logoUniv.jpg"/>
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
				<li id=here><a href="Accueil.php">Accueil</a></li> 
				<li><a href="session.php">Atelier</a></li>
				<li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
	<section>
        <h1 id="titre">Bienvenue,</h1>
		<p id="presentation">Vous pensiez que l'<strong>art</strong> et les <strong>nouvelles technologies</strong> n'étaient pas en harmonie ? Détrompez vous, cet atelier va vous prouver le contraire !!!!</p>
       </br>
        <p id="presentation">
		Lors de cette séance d'<strong>une heure</strong>, vous allez être initié aux bases de la programmation en Sonic Pi à travers la musique. Vous allez réaliser les différents exercices de façon ludique et pédagogique à l'aide d'un cours qui vous guidera tout au long de l'atelier.
		A la fin de cette séance, vous serez capable de réaliser des mélodies complètes en répétition ! (Vidéo à venir)
       </p>
		</br>
       <p id="presentation">Vous pourrez consulter des exemples de code, et vous pourrez jouer la mélodie en effet vous vous rendrez compte que la programmation est un vrai jeu d'enfant !
		Enfin pour commencer vous pouvez vous amusez avec le piano ci-dessous. Vous pouvez l'utiliser en cliquant sur les boutons noirs et blancs ci-dessous ou en appuyant sur les touches du clavier indiquées en dessous du piano! Bonne visite.</p>
        
        <p id="note"><b><?php
            //Ce code va afficher la note jouée si l'utilisateur a cliqué sur une note. Sinon affiche "Essayer ce piano"
        if(file_exists("piano2.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("piano2.txt");
                //Si le fichier n'est pas vide
                if($octet!=0){
                    //ouvre le fichier et affiche son contenu
                    $fichier = fopen("piano2.txt", "r");
                    $contenu = fread($fichier, $octet);
                    $code = explode("<br />", nl2br($contenu));
                    foreach($code as $val){
                        echo $val.PHP_EOL;
                    }
                }else{//Sinon affiche un texte
			         echo "Essayez ce piano";
		        }
	    }else{
			echo "Essayez ce piano";
		}
            ?></b></p>
        
        <form method="get" action="Accueil.php#piano" id="piano">
            <input type="submit" value="Do" class="blanc" name="case1"/>
            <input type="submit" value="Do'" class="noire" name="case2"/>
            <input type="submit" value="Ré" class="blanc" name="case3"/>
            <input type="submit" value="Mi" class="blanc" name="case4"/>
            <input type="submit" value="Mi'" class="noire" name="case5"/>
            <input type="submit" value="Fa" class="blanc" name="case6"/>
            <input type="submit" value="Sol" class="blanc" name="case7"/>
            <input type="submit" value="Sol'" class="noire" name="case8"/>
            <input type="submit" value="La" class="blanc" name="case9"/>
            <input type="submit" value="Si" class="blanc" name="case10"/>
            <input type="submit" value="Si'" class="noire" name="case11"/>
            <input type="submit" value="Do" class="blanc" name="case12"/>
            <input type="submit" value="Ré" class="blanc" name="case13"/>
            <input type="submit" value="Ré''" class="noire" name="case14"/>
            <input type="submit" value="Mi" class="blanc" name="case15"/>
            <input type="submit" value="Fa" class="blanc" name="case16"/>
            <input type="submit" value="Fa''" class="noire" name="case17"/>
            <input type="submit" value="Sol" class="blanc" name="case18"/>
            <div>
            <ul id="touches">
                <li>q</li>
                <li>z</li>
                <li>s</li>
                <li>d</li>
                <li>r</li>
                <li>f</li>
                <li>g</li>
                <li>y</li>
                <li>h</li>
                <li>j</li>
                <li>i</li>
                <li>k</li>
                <li>l</li>
                <li>p</li>
                <li>m</li>
                <li>4</li>
                <li>8</li>
                <li>5</li>
            </ul>
            </div>
            <div id="envoie">
           		 <p id="gauche">Appuyez sur le bouton pour écouter le morceau que vous avez joué</p>
				<p id="droite"><input id="valider" type="submit" name="valid" value="Valider" id="valider"/></p>
				<p id="droite"><a href="session.php"><input id="atelier" type="button" value="Passer à l'atelier"></a><p>
			</div>
        </form>
    
        <?php
		if(!empty($_GET)){
                //Ouvre le fichier piano.txt en lecture en écriture avec le pointeur en fin de fichier
				$fichier=fopen("piano.txt", "a+");
				$fichier2=fopen("piano2.txt", "a+");
                //ecrit dans le fichier piano.txt la note
			if(isset($_GET["case1"])){
				fwrite($fichier, "play :C".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Do".PHP_EOL);
			}
			if(isset($_GET["case2"])){
				fwrite($fichier, "play :D5".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Do'".PHP_EOL);
			}
			if(isset($_GET["case3"])){
				fwrite($fichier, "play :D".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Ré".PHP_EOL);
			}
			if(isset($_GET["case4"])){
				fwrite($fichier, "play :E".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Mi".PHP_EOL);
			}
			if(isset($_GET["case5"])){
				fwrite($fichier, "play :F5".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Mi'".PHP_EOL);
			}
			if(isset($_GET["case6"])){
				fwrite($fichier, "play :F".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Fa".PHP_EOL);
			}
			if(isset($_GET["case7"])){
				fwrite($fichier, "play :G".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Sol".PHP_EOL);
			}
			if(isset($_GET["case8"])){
				fwrite($fichier, "play :G5".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Sol'".PHP_EOL);
			}
			if(isset($_GET["case9"])){
				fwrite($fichier, "play :A".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "La".PHP_EOL);
			}
			if(isset($_GET["case10"])){
				fwrite($fichier, "play :B".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Si".PHP_EOL);
			}
			if(isset($_GET["case11"])){
				fwrite($fichier, "play :B5".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Si'".PHP_EOL);
			}
			if(isset($_GET["case12"])){
				fwrite($fichier, "play :C".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Do".PHP_EOL);
			}
			if(isset($_GET["case13"])){
				fwrite($fichier, "play :D".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Ré".PHP_EOL);
			}
			if(isset($_GET["case14"])){
				fwrite($fichier, "play :D6".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Ré''".PHP_EOL);
			}
			if(isset($_GET["case15"])){
				fwrite($fichier, "play :E".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Mi".PHP_EOL);
			}
			if(isset($_GET["case16"])){
				fwrite($fichier, "play :F".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Fa".PHP_EOL);
			}
			if(isset($_GET["case17"])){
				fwrite($fichier, "play :F6".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Fa''".PHP_EOL);
			}
			if(isset($_GET["case18"])){
				fwrite($fichier, "play :G".PHP_EOL."sleep 0.5".PHP_EOL);
				fwrite($fichier2, "Sol".PHP_EOL);
			}
			//joue le fichier piano.txt et vide le fichier
			if(isset($_GET["valid"])){
				shell_exec('sonic_pi < piano.txt');
				shell_exec('> piano.txt');
				shell_exec('> piano2.txt');
			}
                        echo '<script>window.location.replace("Accueil.php#piano");</script>';
		}
	?>
	</section>
  <footer>
		<p id="textefooter">Projet tutoré Semestre 2- IUT Informatique du Limousin-Professeur référent : Catherine Coudray -
        Projet aimé par Sonic Pi -> <a href="https://twitter.com/ThisIsBarda/status/718191575722012672">Cliquez ici</a></p>
	</footer>
<script src="jquery-1.12.3.js"></script>
    <script type="text/javascript">
 function pianoClavier(e){
        //passe le ascii en char
        var evtobj=window.event? event : e 
        var unicode=evtobj.charCode? evtobj.charCode : evtobj.keyCode
        var actualkey=String.fromCharCode(unicode)
        
        if (actualkey=="q")
        {   
            window.location.href = "Accueil.php?case1=Do%2Fq#piano";
        }
        if (actualkey=="z")
        {
            window.location.href = "Accueil.php?case2=Do%27%2Fz#piano";
        }
        if (actualkey=="s")
        {
            window.location.href = "Accueil.php?case3=Ré%2Fs#piano";
        }
        if (actualkey=="d")
        {
            window.location.href = "Accueil.php?case4=Mi%2Fd#piano";
        }
        if (actualkey=="r")
        {
            window.location.href = "Accueil.php?case5=Mi%27%2Fr#piano";
        }
        if (actualkey=="f")
        {
            window.location.href = "Accueil.php?case6=Fa%2Ff#piano";
        }
        if (actualkey=="g")
        {
            window.location.href = "Accueil.php?case7=Sol%2Fg#piano";
        }
        if (actualkey=="y")
        {
            window.location.href = "Accueil.php?case8=Sol%27%2Fy#piano";
        }
        if (actualkey=="h")
        {
            window.location.href = "Accueil.php?case9=La%2Fh#piano";
        }
        if (actualkey=="j")
        {
            window.location.href = "Accueil.php?case10=Si%2Fj#piano";
        }
        if (actualkey=="i")
        {
            window.location.href = "Accueil.php?case11=Si%27%2Fi#piano";
        }
        if (actualkey=="k")
        {
            window.location.href = "Accueil.php?case12=Do%2Fk#piano";
        }
        if (actualkey=="l")
        {
            window.location.href = "Accueil.php?case13=Ré%2Fl#piano";
        }
        if (actualkey=="p")
        {
            window.location.href = "Accueil.php?case14=Ré%27%27%2Fp#piano";
        }
        if (actualkey=="m")
        {
            window.location.href = "Accueil.php?case15=Mi%2Fm#piano";
        }
        if (actualkey=="4")
        {
            window.location.href = "Accueil.php?case16=Fa%2F4#piano";
        }
        if (actualkey=="8")
        {
            window.location.href = "Accueil.php?case17=Fa%27%27%2F8#piano";
        }
        if (actualkey=="5")
        {
            window.location.href = "Accueil.php?case18=Sol%2F5#piano";
        }
    }
document.onkeypress=pianoClavier;
    </script>
	</body>
</html>