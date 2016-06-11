<!-- Le principe : anticiper au maximum les erreurs que peut générer Sonic Pi étant donné que pour l'instant aucun logiciel ne peut capturer les codes d'erreur de Sonic Pi -->
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
				<p>Pour jouer une note, admettons un 71, il faut  : "Jouer 71". </br>
		   		Ce qui se traduit de la façon suivante en langage Sonic Pi : 
			   </p>
			   <p id="sonic">play 71</p>
			   <p>Cependant, que veut dire ce 71 ? Voici un tableau de conversion : </p>
			   <p>Remarque : toutes les notes du tableaux sont en octave 3</p>
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
			<p class="jouer" id="sleep5"> <a href="#exemple1">Jouer l'exemple</a></p>
        </div>
<div id="numero">
        <!-- Enoncé de l'exercice 1 -->
		<h3 id="exo">Exercice n°1</h3>
		<p id="intitule">- Jouer les notes do, ré et si  avec 1,5 secondes de repos entre chaque note.</p>
	</div>
	   <form id="exo" method="post" action="#cours">
           <textarea id="code" class="textarea" name="code" cols="70" placeholder="Ecrivez votre code ici..."><?php
               if(file_exists("exercice1.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("exercice1.txt");
                //Si le fichier n'est pas vide
				if(empty($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice1.txt", "r");
						$contenu = fread($fichier, $octet);
						echo $contenu;
					}
				}
	    }
	if(!empty($_POST["code"])){
            //Si la ligne contient plusieurs instructions
           if((strrpos(nl2br($_POST["code"]), "play 60 s")!==FALSE)){
                    echo $_POST["code"];//Affiche le code
                }
                else if(strrpos(nl2br($_POST["code"]), "sleep 1.5 p")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "play 62 s")!==FALSE){
                    echo $_POST["code"];
                }else{
                     //Calcule le nombre de lignes-1
                    $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                    //Créé un tableau de chaque ligne avec comme délimiteur <br />
                    $code = explode("<br />", nl2br($_POST["code"]));
                    //Compteur
                    $i=0;
                    //Si 0: pas d'erreur | 1: erreur
                    $erreur = 0;
                    //Pour chaque ligne on va vérifie qu'elle contient au moins un de ces éléments
                    while($i <= $nbLignes){
                        if(($i==0)&&(strrpos($code[0], "play 60")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==1)&&(strrpos($code[1], "sleep 1.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==2)&&(strrpos($code[2], "play 62")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==3)&&(strrpos($code[3], "sleep 1.5")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else if(($i==4)&&(strrpos($code[4], "play 71")===FALSE)){
                            echo $_POST["code"];
							$erreur = 1;
							break;
						}else{
                            $i++;
                        }
                    }
                    if($erreur==0){
						shell_exec("> exercice1.txt");
						//ecriture dans le fichier exercice1
                        $fichier = fopen("exercice1.txt", "w+");
                            if(fwrite($fichier, $_POST["code"])){
                                shell_exec('sonic_pi < exercice1.txt');
                            }
						echo $_POST["code"];
					}
                }
	}
	?></textarea>
           <div id="validation">
				 <input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/>
          		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
           		 <a href="exercice2.php" id="suivant">Suivant</a>
			</div>		
        </form>
        <?php
		if(isset($_POST["refaire"])){
			echo "ok";
			shell_exec('> exercice1.txt');
			$_POST["code"] = "";
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '|') != "")||(strpbrk($_POST["code"], '#') != ""))//Vérification des caractères interdits
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span>";//Affiche l'erreur
			}else{
                if((strrpos(nl2br($_POST["code"]), "play 60 s")!==FALSE)){//Vérification si la ligne contient plusieurs instructions
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), "sleep 1.5 p")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "play 62 s")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else{
                    //Calcule le nombre de lignes-1
                    $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                    //Créé un tableau de chaque ligne avec comme délimiteur <br />
                    $code = explode("<br />", nl2br($_POST["code"]));
                    //Compteur
                    $i=0;
                    //Si 0: pas d'erreur | 1: erreur
                    $erreur = 0;
                    //Pour chaque ligne on va vérifie qu'elle contient au moins un de ces éléments
                    while($i <= $nbLignes){
                        if(($i==0)&&(strrpos($code[0], "play 60")===FALSE)){
                            echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
							$erreur = 1;
							$i++;
						}else if(($i==1)&&(strrpos($code[1], "sleep 1.5")===FALSE)){
                            echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
							$erreur = 1;
							$i++;
						}else if(($i==2)&&(strrpos($code[2], "play 62")===FALSE)){
                            echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
							$erreur = 1;
							$i++;
						}else if(($i==3)&&(strrpos($code[3], "sleep 1.5")===FALSE)){
                            echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
							$erreur = 1;
							$i++;
						}else if(($i==4)&&(strrpos($code[4], "play 71")===FALSE)){
                            echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".($i+1)." (".$code[$i].")</b></h2></span><br/>";
							$erreur = 1;
							$i++;
						}else{
                            $i++;
                        }
                    }
                    if($erreur==0){
						echo "<span id='noerreur'><h2><b><img src='images/valider.png' >Code valide. Ecoutez la mélodie !</b></h2></span>";
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
