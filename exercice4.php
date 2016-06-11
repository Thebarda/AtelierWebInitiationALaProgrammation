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
				<li ><a href="Accueil.php">Accueil</a></li><!-- 
			--><li id=here><a href="session.php">Atelier</a></li><!-- 
			--><li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
        <!--la session-->
		 <div id="cours">
		 	 <h1>Suite du cours</h1>
		 		<p>Compliquons un peu les choses, nous allons apprendre les variables et les conditions qui sont essentielles afin d'éviter de répéter des instructions</p>
            <h3>B. Déclaration des variables</h3>
				 <p>Une variable est une boite dans laquelle nous pouvons stocker une valeur, cette variable est représentée par un nom et par un type (entier, chàine, booléen...) En Sonic Pi, il n'est pas nécessaire de préciser le type car nous affectons directement une valeur.</p>
				<p><strong>Une variable doit être précédée d'un "$"</strong></p>
            <h3>C. Application à Sonic Pi</h3>
            <img src="images/variable.png" alt="variable" id="exemple1"/>
	    <p class="jouer" id="variable"><a href="#variable">Jouer l'exemple</a></p>
			 <h2>4. La condition <strong>Si</strong></h2>
			<p>Une seule des deux actions peut être exécutée (instruction_1 ou instruction_2). <br/>
			Si la condition évaluée est vraie : l'instruction_1 est effectuée, sinon (si l'évalutation est fausse), c'est l'instruction_2 qui est exécutée. On indique la fin du Si pour délimiter son champ.</p>
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
			<p>Si vous avez oublié des choses, le cours se trouve ci-dessous !</p>
			
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
    </div>
            
	<div id="numero">
		<h3 id="exo">Exercice n°4</h3>
        <p id="petit">- Déclarer une variable « note ».<br/>
                        - Affecter à la "note" la valeur que vous voulez.<br/>
                        - Ajouter maintenant la condition suivante : Si la variable note est strictement inférieure ou supérieur à une valeur entière choisie, jouer la note Do sinon jouer la note Si. 
						<br/>- Fermer la condition.</p>
	</div>
	 <form id="exo" method="post" action="#cours">
           <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
		if(isset($_POST["refaire"])){
                    	shell_exec("> exercice4.txt");
			$_POST["code"]="";
			echo $_POST["code"];
		}
               if(file_exists("exercice4.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("exercice4.txt");
                //Si le fichier n'est pas vide
				if(empty($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice4.txt", "r");
						$contenu = fread($fichier, $octet);
						echo $contenu;
					}
				}
	    }
	if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))
			{
				echo $_POST["code"];
			}else{
                if(strrpos(nl2br($_POST["code"]), "else p")!==FALSE){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), "71 end")!==FALSE){
                    echo $_POST["code"];
                }else{
                    if((substr_count(nl2br($_POST["code"]), '$note')===2)){
                        $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                        $code = explode("<br />", nl2br($_POST["code"]));
                        $i=0;
                        $erreur = 0;
                        while($i <= $nbLignes){
						if(($i==0)&&((strrpos($code[0],'$note=')!==FALSE)||(strrpos($code[0],'$note= ')!==FALSE)||(strrpos($code[0],'$note =')!==FALSE)||(strrpos($code[0],'$note = ')!==FALSE))){
							$line_split = explode("=",$code[0]);
								 if(!(is_numeric($line_split[1]))){
									echo $_POST["code"];
									$erreur = 1;
								}
							break;
						}else if(($i==0)&&(strrpos($code[0],'$note')===FALSE)){
							echo $_POST["code"];
							$erreur=1;
							break;
						}else if(($i==1)&&(strrpos($code[1],'if $note')===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==2)&&(strrpos($code[2], "play 60")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==3)&&(strrpos($code[3], "else")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==4)&&(strrpos($code[4], "play 71")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==5)&&(strrpos($code[5], "end")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else{
                            $i++;
                        }
                    }
                    if($erreur==0){
                            //ecriture dans le fichier exercice2
                            $fichier = fopen("exercice4.txt", "w+");
                            if(fwrite($fichier, $_POST["code"])){
                                shell_exec('sonic_pi < exercice4.txt');
                            }
							echo $_POST["code"];
                        }
                }else{
                    echo $_POST["code"];
                }
            }
        }
	}
	?></textarea>
            <div id="validation">
          		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
          		 <a href="exercice3.php" id="precedent">Précédent</a>
           		 <a href="exercice5.php" id="suivant">Suivant</a>
			</div>		
        </form>
	<form id="refaire" method="post" action="exercice4.php">
		<p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>
	</form>
	<progress id="progress" max="100" value="50">1/8</progress>
        <?php
		if(isset($_POST["refaire"])){
			shell_exec('> exercice4.txt');
			$_POST["code"] = null;
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span>";
			}else{
                if(strrpos(nl2br($_POST["code"]), "else p")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), "71 end")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else{
					if((substr_count(nl2br($_POST["code"]), '$note')===2)){
						$nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
						$code = explode("<br />", nl2br($_POST["code"]));
						$i=0;
						$erreur = 0;
						while($i <= $nbLignes){
							if(($i==0)&&((strrpos($code[0],'$note=')!==FALSE)||(strrpos($code[0],'$note= ')!==FALSE)||(strrpos($code[0],'$note =')!==FALSE)||(strrpos($code[0],'$note = ')!==FALSE))){
								$code[0]=trim($code[0], " ");
								$line_split = explode("=",$code[0]);
								 if(!(is_numeric($line_split[1]))){
									echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
									$erreur = 1;
								}
								$i++;
							}else if(($i==0)&&(strrpos($code[0],'$note')===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur=1;
								break;
							}else if(($i==1)&&(strrpos($code[1],'if $note')===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==2)&&(strrpos($code[2], "play 60")===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==3)&&(strrpos($code[3], "else")===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==4)&&(strrpos($code[4], "play 71")===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==5)&&(strrpos($code[5], "end")===FALSE)){
								echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else{
								$i++;
							}
						}
						if($erreur==0){
								echo "<span id='noerreur'><h2><b><img src='images/valider.png' >Code valide. Ecoutez la mélodie !</b></h2></span>";
						}
                    }else{
						echo '<span id="erreur"><h2><b><img src="images/erreur.jpg">Le nombre de "$note"est différent de 2</b></h2></span>';
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
