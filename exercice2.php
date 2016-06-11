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
		<link rel="stylesheet" type="text/css" href="css/exercice1.css">
        <link rel="icon" href="./images/logoUniv.jpg">
	<script src="jquery-1.12.3.js"></script>
   	<script>
	$(document).ready(function(){
		$("#sleep5").click(function(){
			$.ajax({
        			url : './JouerCours/sleep5.php'
    			});
		});
	});
   </script>
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
				<li ><a href="Accueil.php">Accueil</a></li><!-- 
			--><li id=here><a href="session.php">Atelier</a></li><!-- 
			--><li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
        <!--Exercice 1-->
        <div id="cours">
            <p>Cet exercice reprend les notions vues dans l'exercice 1.</p>
          <p>Si vous avez oublié des choses, la première partie du cours se trouve ci-dessous !</p>
			
			<h1>Session d'initiation à la programmation sur le langage Sonic Pi</h1>
			 	<p>Chaque langage de programmation possède sa propre syntaxe, il est donc important de la connaître.
			 	A travers cet atelier, vous apprendrez au fur et à mesure le langage Sonic Pi.</p>
			 	
			 <h2>1. Introduction</h2>
			
			 <h3>A. Principe de fonctionnement</h3> 
				 <p> Le fonctionnment en Sonic Pi est comparable à une recette de cuisine : </p>
				 <ul>
					<li>Le plat est semblable à la mélodie jouée</li>
					<li>Les notes sont les équivalents des ingrédients de la recette</li>
					<li>Les boucles et les conditions se comparent aux instructions de la recette</li>
					<li>Les commentaires sont les assaisonnements indispensable à une bonne recette ! </li>
				 </ul>
				 <p><strong>En Sonic Pi les commentaires doivent être précédés d'un "#".</strong></p>
				  <img src="./images/commentaire.png" id="exemple1"/>
			<h2>2. Les principaux éléments de syntaxe <strong>Sonic Pi</strong></h2>
			<h3>A. Jouer une note</h3>
				<p>Pour jouer une note, admettons un 71, il faut algorithmiquement : "Jouer 71". </br>
		   		Ce qui se traduit de la façon suivante en langage Sonic Pi : 
			   </p>
			   <p id="sonic">play 71</p>
			   <p>Cependant, que veut dire ce 71 ? Voici un tableau de conversion : </p>
			   <table>
			   <caption>Tableau de conversion</caption>
			   	<tr>
			   		<td>Do</td>
			   		<td>Ré</td>
			   		<td>Mi</td>
			   		<td>Fa</td>
			   		<td>Sol</td>
			   		<td>La</td>
			   		<td>Si</td>
			   	</tr>
			   	<tr>
			   		<td>60</td>
			   		<td>62</td>
			   		<td>64</td>
			   		<td>65</td>
			   		<td>67</td>
			   		<td>69</td>
			   		<td>71</td>
			   	</tr>
			   </table>
			<h3>B. Temps de repos entre chaque note</h3>
			<p>Pour un temps de repos entre les notes, 5 secondes par exemple, il faut "Dormir 5".</p>
			<p id="sonic">sleep 5</p>
			<h3>C. Exemple d'application</h3>
			<img alt="Exemple1" src="images/exemple1.png" id="exemple1">
			<p class="jouer" id="sleep5"> <a href="#sonic">Jouer l'exemple</a></p>
        </div>
    <div id="numero">
		<h3 id="exo">Exercice n°2</h3>
		<p id="intitule">Pour cet exercice vous n'aurez pas besoin du tableau de conversion des notes. On vous donnera directement la valeur de la note à jouer.<br/>
                        - Jouer les notes 60, 60, 65, 65, 67, 67 et 65 avec un temps de repos de 0.4 seconde entre chaque notes<br/>
                        - En dessous du dernier 65, insérer un temps de repos de 0.8 seconde<br/>
                        - Jouer les notes 65, 65, 64, 64, 62, 62, 60 avec un temps de repos de 0.4 seconde entre chaque notes</p>
	</div>
	   <form id="exo" method="post" action="#cours">
           <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
		if(isset($_POST["refaire"])){
                    	shell_exec("> exercice2.txt");
			$_POST["code"]="";
			echo $_POST["code"];
		}
               if(file_exists("exercice2.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("exercice2.txt");
                //Si le fichier n'est pas vide
				if(empty($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice2.txt", "r");
						$contenu = fread($fichier, $octet);
						echo $contenu;
					}
				}
	    }
	if(!empty($_POST["code"])){
        
           if((strrpos(nl2br($_POST["code"]), "60 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "65 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "67 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "64 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "62 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "0.4 p")!==FALSE)||(strrpos(nl2br($_POST["code"]), "0.8 p")!==FALSE)){
                    echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "play 60")!==3){
               echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "play 65")!==5){
               echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "play 67")!==2){
               echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "play 64")!==2){
               echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "play 62")!==2){
               echo $_POST["code"];
           }else if(substr_count(nl2br($_POST["code"]), "sleep 0.4")!==12){
               echo $_POST["code"];
            }else{
                    $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                    $code = explode("<br />", nl2br($_POST["code"]));
                    $i=0;
                    $erreur = 0;
                    while($i <= $nbLignes){
                        if((strrpos($code[$i], "play 60")!==FALSE)||(strrpos($code[$i], "play 65")!==FALSE)||(strrpos($code[$i], "play 67")!==FALSE)||(strrpos($code[$i], "play 64")!==FALSE)||(strrpos($code[$i], "play 62")!==FALSE)||(strrpos($code[$i], "sleep 0.4")!==FALSE)||(strrpos($code[$i], "sleep 0.8")!==FALSE)){
                            $i = $i+1;
                        }else{
                            $i = $i+1;
                            $nbErreur = $i;
                            $erreur = 1;
                            break;
                        }
                    }
                    if($erreur==1){
                        echo $_POST["code"];
                    }else{
                        //ecriture dans le fichier exercice2
                        $fichier = fopen("exercice2.txt", "a+");
                        if(fwrite($fichier, $_POST["code"])){
                            shell_exec('sonic_pi < exercice2.txt');
                        }
						echo $_POST["code"];
                    }
            }
	}
	?></textarea>
            <div id="validation">
          		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
          		 <a href="exercice1.php" id="precedent">Précédent</a>
           		 <a href="exercice3.php" id="suivant">Suivant</a>
			</div>		
        </form>
	<form id="refaire" method="post" action="exercice2.php">
		<p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>
	</form>
	<progress id="progress" max="100" value="25">2/8</progress>
        <?php
		if(isset($_POST["refaire"])){
			shell_exec('> exercice2.txt');
			$_POST["code"] = null;
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span>";
			}else{
                 if((strrpos(nl2br($_POST["code"]), "60 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "65 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "67 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "64 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "62 s")!==FALSE)||(strrpos(nl2br($_POST["code"]), "0.4 p")!==FALSE)||(strrpos(nl2br($_POST["code"]), "0.8 p")!==FALSE)){
                    echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Veuillez insérer une instruction par ligne</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "play 60")!==3){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 60' est différent de 3</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "play 65")!==5){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 65' est différent de 5</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "play 67")!==2){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 67' est différent de 2</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "play 64")!==2){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 64' est différent de 2</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "play 62")!==2){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 62' est différent de 2</b></h2></span>";
                   }else if(substr_count(nl2br($_POST["code"]), "sleep 0.4")!==12){
                       echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'sleep 0.4' est différent de 12</b></h2></span>";
                    }else{
                    $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                    $code = explode("<br />", nl2br($_POST["code"]));
                    $i=0;
                    $erreur = 0;
                    while($i <= $nbLignes){
                        if((strrpos($code[$i], "play 60")!==FALSE)||(strrpos($code[$i], "play 65")!==FALSE)||(strrpos($code[$i], "play 67")!==FALSE)||(strrpos($code[$i], "play 64")!==FALSE)||(strrpos($code[$i], "play 62")!==FALSE)||(strrpos($code[$i], "sleep 0.4")!==FALSE)||(strrpos($code[$i], "sleep 0.8")!==FALSE)){
                            $i = $i+1;
                        }else{
                            $i = $i+1;
                            $nbErreur = $i;
                            $erreur = 1;
                            break;
                        }
                    }
                    if($erreur==1){
                        echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".$nbErreur." (".$code[$nbErreur-1].")</b></h2></span>";
                    }else{
                       echo "<span id='noerreur'><h2><b><img src='images/valider.png'>Code validé. Ecouter la mélodie.</b></h2></span>";
                    }
            }
            }
		}else{
            echo "<span id='erreur'><p><b>Veuillez compléter votre code</b></p></span>";
        }
	?>
     <footer>
		<p id="textefooter">Projet tutoré Semestre 2- IUT Informatique du Limousin-Professeur référent : Catherine Coudray -
        Projet aimé par Sonic Pi -> <a href="https://twitter.com/ThisIsBarda/status/718191575722012672">Cliquez ici</a></p>
	</footer>
    </body>
</html>
