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
           <h1>Suite du cours</h1>
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
			<p class="jouer" id="sleep5"><a href="#sleep5">Jouer l'exemple</a></p>
        </div>
    <div id="numero">
		<h3 id="exo">Exercice n°3</h3>
		<p id="intitule">- Faire une boucle "Faire" qui se répète 2 fois qui va jouer les notes Do, Ré, Mi, Do.</br>
                        - Marquer un temps de repos de 0.5 secondes en dessous de chaque note.<br/>
                        - Fermer la boucle "Faire".<br/>
		                  - Reconnaissez-vous la mélodie ?!?</p>
	</div>
	  
<div id="ecrire">
		<form id="exo" method="post" action="#cours">
           <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
               if(file_exists("exercice3.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("exercice3.txt");
                //Si le fichier n'est pas vide
				if($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice3.txt", "r");
						$contenu = fread($fichier, $octet);
						echo $contenu;
					}
				}
	    }
	if(!empty($_POST["code"])){
           if((strrpos(nl2br($_POST["code"]), ".times do p")!==FALSE)){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), "play 60 s")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "sleep 0.5 p")!==FALSE){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), "play 62 s")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "play 64 s")!==FALSE){
                    echo $_POST["code"];
                }else{
                    if((substr_count(nl2br($_POST["code"]), "play 60")===2)&&(substr_count(nl2br($_POST["code"]), "sleep 0.5")===4)){
                    $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                    $code = explode("<br />", nl2br($_POST["code"]));
                    $i=0;
                    $erreur = 0;
                    while($i <= $nbLignes+1){
                        if(($i==0)&&(strrpos($code[0], ".times do")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==1)&&(strrpos($code[1], "play 60")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==2)&&(strrpos($code[2], "sleep 0.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==3)&&(strrpos($code[3], "play 62")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==4)&&(strrpos($code[4], "sleep 0.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==5)&&(strrpos($code[5], "play 64")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==6)&&(strrpos($code[6], "sleep 0.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==7)&&(strrpos($code[7], "play 60")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==8)&&(strrpos($code[8], "sleep 0.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==9)&&(strrpos($code[9], "end")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else{
                            $i++;
                        }
                    }
                    if($erreur==0){
						//ecriture dans le fichier exercice2
                        $fichier = fopen("exercice3.txt", "w+");
                        if(fwrite($fichier, $_POST["code"])){
                            shell_exec('sonic_pi < exercice3.txt');
                        }
						echo $_POST["code"];
					}
                        
            }
        }
    }
	?></textarea>
			<div id="validation">
				<p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>
          		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
          		 <a href="exercice2.php" id="precedent">Précédent</a>
           		 <a href="exercice4.php" id="suivant">Suivant</a>
			</div>			

		</form>
        <?php
		if(isset($_POST["refaire"])){
			shell_exec("> exercice3.php");
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span>";
			}else{
                if((strrpos(nl2br($_POST["code"]), ".times do p")!==FALSE)){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), "sleep 0.5 p")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "play 60 s")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), "play 62 s")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "play 64 s")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else{
                    if((substr_count(nl2br($_POST["code"]), "play 60")===2)&&(substr_count(nl2br($_POST["code"]), "sleep 0.5")===4)){
						$nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
						$code = explode("<br />", nl2br($_POST["code"]));
						$i=0;
						$erreur = 0;
						while($i <= $nbLignes+1){
							if(($i==0)&&(strrpos($code[0], ".times do")!==FALSE)){
								$line_split = explode(".",$code[0]);
								 if(!(is_numeric($line_split[0]))){
									echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
									$erreur = 1;
								}
								$i++;
							}else if(($i==0)&&(strrpos($code[0], ".times do")===FALSE)){
									echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
									$erreur = 1;
									$i++;
							}else if(($i==1)&&(strrpos($code[1], "play 60")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==2)&&(strrpos($code[2], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==3)&&(strrpos($code[3], "play 62")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==4)&&(strrpos($code[4], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==5)&&(strrpos($code[5], "play 64")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==6)&&(strrpos($code[6], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==7)&&(strrpos($code[7], "play 60")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==8)&&(strrpos($code[8], "sleep 0.5")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
								$i++;
							}else if(($i==9)&&(strrpos($code[9], "end")===FALSE)){
								 echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span>";
								$erreur = 1;
							}else{
								$i++;
							}
						}
						if($erreur==0){
							echo "<span id='noerreur'><h2><b><img src='images/valider.png' >Code valide. Ecoutez la mélodie !</b></h2></span>";
						}
                    }else{
                        echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Le nombre de 'play 60' ou de 'sleep 0.5' n'est pas le bon</b></h2></span>";
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