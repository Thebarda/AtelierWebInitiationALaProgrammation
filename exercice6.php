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
		$("#3timesdo").click(function(){
			$.ajax({
        			url : './JouerCours/3timesdo.php'
    			});
		});
         $("#loop").click(function(){
			$.ajax({
        			url : './JouerCours/loop.php'
    			});
		});
		$("#variable").click(function(){
			$.ajax({
        			url : './JouerCours/variable.php'
    			});
		});
		$("#si").click(function(){
			$.ajax({
        			url : './JouerCours/si.php'
    			});
		});
		$("#while").click(function(){
			$.ajax({
        			url : './JouerCours/while.php'
    			});
		});
		$("#fonction").click(function(){
			$.ajax({
        			url : './JouerCours/fonction.php'
    			});
		});
		$("#fonction2").click(function(){
			$.ajax({
        			url : './JouerCours/fonction2.php'
    			});
		});
	});
   	</script>
	</head>
    
    <body>
        <header>
			<img alt="header" src="images/logo.png">
			<div>
				<h1 id="titre1">Program'Music</h1>
				<h2 id="titre2">Avec Raspberry Pi et Sonic Pi</h2>
			</div>
		</header>
		<nav>
			<ul>
				<li ><a href="index.php">Accueil</a></li><!-- 
			--><li id=here><a href="session.php">Atelier</a></li><!-- 
			--><li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
        <!--la session-->
		 <div id="cours">
		 	<h1>Suite du cours</h1>
			<p>Pour finir, nous allons voir les fonctions</p>
			
			<h2>5. Les fonctions</h2>
			<h3>A. Un peu de cours</h3>
			<p>Lorsque vous commencez à écrire beaucoup de code, vous souhaitez organiser et de structurer le code pour le rendre plus ordonné et facile à comprendre. Les fonctions sont un excellent moyen pour le faire. Elles vous donnent la capacité de donner un nom à un morceau de code. Jetons-y un œil. </p>
			<br>
			<h3>B.Application à Sonic Pi</h3><br>
			<img alt="Fonction" src="images/fonction.png" id="exemple1">
			<p class="jouer" id="fonction"><a href="#fonction">Jouer l'exemple</a></p>
             <h3>C.Fonction avec paramètre</h3>
			<p>On peut même passer en paramètre une variable. Il s'agit, pour la fonction, de pouvoir utiliser une valeur ou une variable déclarée en-dehors de la fonction à l'intérieur de celle-ci.</p><br>
			<h3>D.Application à Sonic Pi</h3><br>
			<img alt="Fonction" src="images/fonction2.png" id="exemple1">
			<p class="jouer" id="fonction2"><a href="#fonction2">Jouer l'exemple</a></p>
			<p>Si vous avez tout compris, vous avez en main les bases algorithmiques nécessaire à la programmation.</p>
			<p>Vous pouvez maintenant faire l'exercice 6.</p>
			<p>Si vous avez oublié des choses, le cours se trouve ci-dessous !</p>
			<br>
			
			
		<h1>Session d'initiation à la programmation sur le langage Sonic Pi</h1>
			 	<p>Chaque langage de programmation possède sa propre syntaxe, il est donc important de la connaître.
			 	A travers cet atelier, vous apprendrez au fur et à mesure le langage Sonic Pi.</p>
			 	
			 <h2>1. Introduction</h2>
			
			 <h3>A. Principe de fonctionnement</h3> 
				 <p> Le fonctionnement en Sonic Pi est comparable à une recette de cuisine : </p>
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
			<p class="jouer" id="sleep5"><a href="#sleep5">Jouer l'exemple</a></p>
			<p>Nous allons maintenant apprendre à faire des boucles, pour commencer la boucle "Faire"</p>
			<h2>3. Les boucles</h2>
			<h3>A. La boucle : FAIRE</h3>
			<h4>a. Pour la compréhension</h4>
			<p>Quand la boucle faire s'exécute, voici ce qu'il se passe : </p>
			<ol>
				<li>L'ordinateur lit les instructions de haut en bas (comme d'habitude)</li>
				<li>Puis, une fois arrivé à la fin de la boucle, il repart à la première instruction</li>
				<li>Il recommence alors à lire les instructions de haut en bas...</li>
				<li>... et il repart au début de la boucle.</li>
			</ol>
			
			<p>Le problème, qui est très récurrent, avec cette boucle, si on ne l'arrête pas, l'ordinateur exécute à l'infini cette dernière : ce qu'on appelle « une boucle infinie ». Pour éviter celà on doit reprendre la notion de condition vu plus haut. Il faut donc dire au programme: « Répète la boucle tant que cette condition est vraie », en Sonic Pi on précise le nombre de fois que l'on veut que la boucle se répète.</p>
            <h4>b.Le loop</h4>
            <p>Si on souhaite répéter la boucle à l'infinie, on utilise un "loop"</p>
			<h4>c. Application avec Sonic Pi</h4>
			<p><b>Exemple de boucle "Faire"</b></p>
			<img alt="Boucle_Faire" src="images/faire.png" id="exemple1">
			<p class="jouer" id="3timesdo"><a href="#exemple1">Jouer l'exemple</a></p>
			<br/>
            <p><b>Exemple de boucle loop</b></p>
			<img alt="Loop" src="images/loop.png" id="exemple1">
			<p class="jouer" id="loop"><a href="#exemple1">Jouer l'exemple</a></p>
			<p>Vous pouvez maintenant faire l'exercice 3.</p>
			<p>Compliquons un peu les choses, nous allons apprendre les variables et les conditions qui sont essentielles afin d'éviter de répéter des instructions</p>
            <h3>B. Déclaration des variables</h3>
				 <p>Une variable est une boite dans laquelle nous pouvons stocker une valeur, cette variable est représentée par un nom et par un type (entier, chàine, booléen...) En Sonic Pi, il n'est pas nécessaire de préciser le type car nous affectons directement une valeur.</p>
				<p><strong>Une variable doit être précédée d'un "$"</strong></p>
            <h3>C. Application à Sonic Pi</h3>
            <img src="images/variable.png" alt="variable" id="exemple1"/>
	    <p class="jouer" id="variable"><a href="#variable">Jouer l'exemple</a></p>
			 <h2>4. La condition <strong>Si</strong></h2>
			<p>Une seule des deux actions peut être exécutée (instruction_1 ou instruction_2). Si la condition évaluée est vraie : l'instruction_1 est effectuée, sinon (si l'évalutation est fausse), c'est l'instruction_2 qui est exécutée. On indique la fin du Si pour délimiter son champ.</p>
			<p>Les différents opérateurs de comparaison sont les suivants</p>
			<ul>
				<li>== : est égale à</li>
				<li>!= : est différent de </li>
				<li>> : est strictement supéreiur à</li>
				<li>< : est strictement inférieur à </li>
				<li><= : est inférieur ou égale à</li>
				<li>>= : est supérieur ou égale à </li>
			</ul>
			<h3>A. Application avec Sonic Pi</h3>
			<img alt="Condition_si" src="images/si.png" id="exemple1">
			<p class="jouer" id="si"><a href="#si">Jouer l'exemple</a></p>
			<p>Vous avez pu remarquer en Sonic Pi, il n'y pas besoin de "Debut".</p>
			<p>Maintenant place à la boucle "Tant que".</p>
			
			<h3>B. La boucle : TANT QUE</h3>
			<h4>a. Un peu de cours</h4>
			<p> Les instructions contenues dans la boucle "tant que" se répetent tant que la condition est
			évaluée vraie, si la condition est évaluée fausse les instructions ne se réalisent pas. </br>
			
			<h4>b. Application avec Sonic Pi</h4>
			<img alt="Boucle_TantQue" src="images/tant_que.png" id="exemple1">
			<p class="jouer" id="while"><a href="#while">Jouer l'exemple</a></p>
	</div>
	<div id="numero">
		<h3 id="exo">Exercice n°6</h3>
		<p id="intitule">- Faire une fonction « maFonction1 » qui va jouer les notes Do et Ré avec un repos de 0,5 seconde en dessous de chaque note. Fermer la fonction.<br>
		- Faire une seconde fonction « maFonction2 » qui va jouer les notes Mi et Do avec un repos de 0,5 seconde en dessous de chaque note. Fermer la fonction.<br/>
		- Jouer 2 fois ces deux fonctions, respectivement la fonction « maFonction1 » et « maFonction2 », à l'aide une boucle "Faire"<br/>
        - Vous devriez entendre la même mélodie que dans l'exercice 3</p>
	</div>
	<div id="ecrire">
		<form id="exo" method="post" action="#cours">
           <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
		if(isset($_POST["refaire"])){
                    	shell_exec("> exercice6.txt");
			$_POST["code"]="";
			echo $_POST["code"];
		}
            if(file_exists("exercice6.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
            $octet = filesize("exercice6.txt");
                //Si le fichier n'est pas vide
				if(empty($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice6.txt", "r");
						$contenu = fread($fichier, $octet);
					 
					}
				}
            }
	if(!empty($_POST["code"])){
           if((strrpos(nl2br($_POST["code"]), "65 w")!==FALSE)){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), "do p")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), 'sleep 0.5 p')!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "do m")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "0.5 end")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "maFonction2 end")!==FALSE){
                    echo $_POST["code"];
                }else{
                    if(substr_count(nl2br($_POST["code"]), "end")!=3){
						echo $_POST["code"];
					}else if(substr_count(nl2br($_POST["code"]), "sleep 0.5")!=4){
						echo $_POST["code"];
					}else if(substr_count(nl2br($_POST["code"]), "play 60")!=2){
						echo $_POST["code"];
					}else{
                        $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                        $code = explode("<br />", nl2br($_POST["code"]));
                        $i=0;
                        $erreur = 0;
							while($i <= $nbLignes){
							if(($i==0)&&(strrpos($code[0], 'define :maFonction1 do')===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==1)&&(strrpos($code[1], 'play 60')===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==2)&&(strrpos($code[2], 'sleep 0.5')===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==3)&&(strrpos($code[3], "play 62")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==4)&&(strrpos($code[3], "sleep 0.5")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==5)&&(strrpos($code[5], "end")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==6)&&(strrpos($code[6], 'define :maFonction2 do')===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==7)&&(strrpos($code[7], "play 64")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==8)&&(strrpos($code[8], "sleep 0.5")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==9)&&(strrpos($code[9], "play 60")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==10)&&(strrpos($code[10], "sleep 0.5")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==11)&&(strrpos($code[11], "end")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==12)&&(strrpos($code[12], "2.times do")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==13)&&(strrpos($code[13], "maFonction1")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==14)&&(strrpos($code[14], "maFonction2")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else if(($i==15)&&(strrpos($code[15], "end")===FALSE)){
								echo $_POST["code"];
								$erreur = 1;
								break;
							}else{
								$i++;
							}
						}
						if($erreur==0){
							//ecriture dans le fichier exercice6
							$fichier = fopen("exercice6.txt", "w+");
							if(fwrite($fichier, $_POST["code"])){
								shell_exec('sonic_pi < exercice6.txt');
							}
							echo $_POST["code"];
						}
                    }
                }
            }
	?></textarea>
			<div id="validation">
		  		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
		  		 <a href="exercice5.php" id="precedent">Précédent</a>
		   		 <a href="exercice7.php" id="suivant">Suivant</a>
			</div>
		</form>
	<form id="refaire" method="post" action="exercice6.php">
		<p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>
	</form>
	<progress id="progress" max="100" value="75">1/8</progress>
        <?php
		if(isset($_POST["refaire"])){
			shell_exec('> exercice6.txt');
			$_POST["code"] = null;
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span><br/>";
			}else{
                if((strrpos(nl2br($_POST["code"]), "65 w")!==FALSE)){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }
                else if(strrpos(nl2br($_POST["code"]), "do p")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }else if(strrpos(nl2br($_POST["code"]), 'sleep 0.5 p')!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }else if(strrpos(nl2br($_POST["code"]), "do m")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }else if(strrpos(nl2br($_POST["code"]), "0.5 end")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }else if(strrpos(nl2br($_POST["code"]), "maFonction2 end")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span><br/>";
                }else{
					if(substr_count(nl2br($_POST["code"]), "end")!=3){
						echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'end' est différent de 3</b></h2></span><br/>";
					}else if(substr_count(nl2br($_POST["code"]), "sleep 0.5")!=4){
						echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'sleep 0.5' est différent de 4</b></h2></span><br/>";
					}else if(substr_count(nl2br($_POST["code"]), "play 60")!=2){
						echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 60' est différent de 2</b></h2></span><br/>";
					}else{
                        $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                        $code = explode("<br />", nl2br($_POST["code"]));
                        $i=0;
                        $erreur = 0;
						while($i <= $nbLignes){
							if(($i==0)&&(strrpos($code[0], 'define :maFonction1 do')===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==1)&&(strrpos($code[1], 'play 60')===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==2)&&(strrpos($code[2], 'sleep 0.5')===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==3)&&(strrpos($code[3], "play 62")===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==4)&&(strrpos($code[4], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==5)&&(strrpos($code[5], "end")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==6)&&(strrpos($code[6], 'define :maFonction2 do')===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==7)&&(strrpos($code[7], "play 64")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==8)&&(strrpos($code[8], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==9)&&(strrpos($code[9], "play 60")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==10)&&(strrpos($code[10], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==11)&&(strrpos($code[11], "end")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==12)&&(strrpos($code[12], "2.times do")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==13)&&(strrpos($code[13], "maFonction1")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==14)&&(strrpos($code[14], "maFonction2")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else if(($i==15)&&(strrpos($code[15], "end")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
								$erreur = 1;
								$i++;
							}else{
								$i++;
							}
						}
						if($erreur==0){
							echo "<span id='noerreur'><h2><b><img src='images/valider.png'>Code validé. Ecouter la mélodie.</b></h2></span>";
							//ecriture dans le fichier exercice6
							$fichier = fopen("exercice6.txt", "w+");
							if(fwrite($fichier, $_POST["code"])){
								shell_exec('sonic_pi < exercice6.txt');
							}
						}
                    }
                }
            }
		}else{
            echo "<span id='erreur'><p><b>Veuillez compléter votre code</b></p></span>";
        }
	?>
	</div>     
           
       <footer>
		<p id="textefooter">Projet tutoré Semestre 2- IUT Informatique du Limousin-Professeur référent : Catherine Coudray -
        Projet aimé par Sonic Pi -> <a href="https://twitter.com/ThisIsBarda/status/718191575722012672">Cliquez ici</a></p>
	</footer>
    </body>
</html>
