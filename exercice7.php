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
		<link rel="stylesheet" type="text/css" href="css/exercice7.css">
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
				<li ><a href="Accueil.php">Accueil</a></li><!-- 
			--><li id=here><a href="session.php">Atelier</a></li><!-- 
			--><li><a href="exemple.php">Exemple</a></li>
			</ul>
		</nav>
        <!--la session-->
		 <div id="cours">
			<p>Vous pouvez enfin terminer par l'exercice 7 qui récapitule le cours !.</p>
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
			<p>Compliquons un peu les choses, nous allons apprendre les variables et les conditions qui sont essentielles afin d'éviter de répéter des instructions</p>
            <h3>B. Déclaration des variables</h3>
				 <p>Une variable est une boite dans laquelle nous pouvons stocker une valeur, cette variable est représentée par un nom et par un type (entier, chàine, booléen...) En Sonic Pi, il n'est pas nécessaire de préciser le type car nous affectons directement une valeur.</p>
				<p><strong>Une variable doit être précédée d'un "$"</strong></p>
            <h3>C. Application à Sonic Pi</h3>
            <img src="images/variable.PNG" alt="variable" id="exemple1"/>
	    <p class="jouer" id="variable"><a href="#variable">Jouer l'exemple</a></p>
			 <h2>4. La condition <strong>Si</strong></h2>
			<p>Une seule des deux actions peut être exécutée (instruction_1 ou instruction_2). Si la condition évaluée est vraie : l'instruction_1 est effectuée, sinon (si l'évalutation est fausse), c'est l'instruction_2 qui est exécutée. On indique la fin du Si pour délimiter son champ.</p>

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
	</div>
	</div>
	<div id="numero">
		<h3 id="exo">Exercice n°7</h3>
		<p id="intitule">- Faire une première fonction « boucle » qui va :<br>
					<ul>
                        <li><b> Créez une variable « note » à laquelle on affecte Do</b></li>
						<li><b> Créez une boucle While qui va :
							<ul>
						 		<li> Jouez la « note »</li>
								<li> jouez la « note » + 20 </li>
								<li> Insérez un temps de repos de 0,15 seconde en dessous de chaque note</li>
								<li> Incrémentez la « note » de 5</li>
                                <li> Fermez la boucle</li>
							</ul>
                        </b></li>
                    </ul>
                       <b> - Faire une seconde fonction « condition » prenant en paramètre une variable « n » qui va :
							<ul>
								<li> Si « n » est égale à Ré alors joue « n »</li>
								<li> Sinon jouez la note Si</li>
                                <li> Fermez la condition</li>
							</ul>
                        - Fermez la fonction<br>
						- Créez une variable « note2 » à laquelle on affecte la valeur Do<br>
						- Créez une boucle "Faire" qui se répète 3 fois et qui va appeler la fonction « boucle ». <br>
                        - Fermez la boucle<br>
						- Insérez un temps de repos de 1 seconde<br>
						- Créez une boucle "Tant que" qui tant que « note2 » est inférieure ou égale à Fa va : 
							<ul>
								<li> Appelez la fonction « condition » avec en paramètre « note2 »</li>
								<li> Incrémentez « note2 » de 1</li>
								<li> Marquez un temps de repos de 0,5 seconde</li>
                                <li>Fermez la boucle</li>
                        </ul>
        </b>
							</p>
	</div>
	<div id="ecrire">
		<form id="exo" method="post" action="#cours">
           <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
		if(isset($_POST["refaire"])){
                    	shell_exec("> exercice7.txt");
			$_POST["code"]="";
			echo $_POST["code"];
		}
               if(file_exists("exercice7.txt")==TRUE){
               //calcule le nombre d'octets du fichier execice1.txt
                $octet = filesize("exercice7.txt");
                //Si le fichier n'est pas vide
				if(empty($_POST["code"])){
					if($octet!=0){
						//ouvre le fichier et affiche son contenu
						$fichier = fopen("exercice7.txt", "r");
						$contenu = fread($fichier, $octet);
						echo $contenu;
					}
				}
	    }
	if(!empty($_POST["code"])){
           if((strrpos(nl2br($_POST["code"]), 'do $note')!==FALSE)){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), "60 w")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), '80 p')!==FALSE){
                    echo $_POST["code"];
                }
                else if(strrpos(nl2br($_POST["code"]), 'play $note s')!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "sleep 0.15 p")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), 'sleep 0.15 $note')!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "5 end")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "end end")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "do b")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "boucle end")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "|n| if")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "20 s")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "64 p")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "n else")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "else p")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "71 end")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "60 w")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "do c")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), '$note2 $note2')!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "1 s")!==FALSE){
                    echo $_POST["code"];
                }else if(strrpos(nl2br($_POST["code"]), "0.5 end")!==FALSE){
                    echo $_POST["code"];
                }else{
                    if((substr_count(nl2br($_POST["code"]), "end")===6)&&(substr_count(nl2br($_POST["code"]), "define")===2)&&(substr_count(nl2br($_POST["code"]), "sleep 0.15")===2)&&(substr_count(nl2br($_POST["code"]), "$note")===5)&&(substr_count(nl2br($_POST["code"]), "$note2")===5)){
                        $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                        $code = explode("<br />", nl2br($_POST["code"]));
                        $i=0;
                        $erreur = 0;
                        while($i <= $nbLignes){
                            if(((strrpos($code[$i], '$note=60')!==FALSE)||(strrpos($code[$i], '$note =60')!==FALSE)||(strrpos($code[$i], '$note= 60$code[$i]')!==FALSE)||(strrpos($code[$i], '$note = 60')!==FALSE))||((strrpos($code[$i], 'while $note < 80')!==FALSE)||(strrpos($code[$i], 'while $note <80')!==FALSE)||(strrpos($code[$i], 'while $note< 80')!==FALSE)||(strrpos($code[$i], 'while $note<80')!==FALSE))||((strrpos($code[$i], 'play $note+20')!==FALSE)||(strrpos($code[$i], 'play $note +20')!==FALSE)||(strrpos($code[$i], 'play $note + 20')!==FALSE)||(strrpos($code[$i], 'play $note+ 20')!==FALSE))||((strrpos($code[$i], 'while $note2<=65')!==FALSE)||(strrpos($code[$i], 'while $note2 <=65')!==FALSE)||(strrpos($code[$i], 'while $note2<= 65')!==FALSE)||(strrpos($code[$i], 'while $note2 <= 65')!==FALSE))||((strrpos($code[$i], '$note2=60')!==FALSE)||(strrpos($code[$i], '$note2 =60')!==FALSE)||(strrpos($code[$i], '$note2= 60')!==FALSE)||(strrpos($code[$i], '$note2 = 60')!==FALSE))||(strrpos($code[$i], 'define :boucle do')!==FALSE)||(strrpos($code[$i], 'play $note')!==FALSE)||(strrpos($code[$i], 'sleep 0.15')!==FALSE)||(strrpos($code[$i], 'end')!==FALSE)||(strrpos($code[$i], '3.times do')!==FALSE)||(strrpos($code[$i], 'boucle')!==FALSE)||(strrpos($code[$i], 'sleep 1')!==FALSE)||(strrpos($code[$i], 'define :condition do |n|')!==FALSE)||(strrpos($code[$i], 'if n==64')!==FALSE)||(strrpos($code[$i], 'play n')!==FALSE)||(strrpos($code[$i], 'else')!==FALSE)||(strrpos($code[$i], 'play 71')!==FALSE)||(strrpos($code[$i], 'condition $note2')!==FALSE)||(strrpos($code[$i], 'sleep 0.5')!==FALSE)||(strrpos($code[$i], '$note = $note + 5')!==FALSE)||(strrpos($code[$i], '$note2 = $note2 + 1')!==FALSE)){
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
                                //ecriture dans le fichier exercice7
								$fichier = fopen("exercice7.txt", "w+");
								if(fwrite($fichier, $_POST["code"])){
									shell_exec('sonic_pi < exercice7.txt');
								}
								echo $_POST["code"];
                            }
                    }else{
                        echo $_POST["code"];
                    }
                }
	}
	?></textarea>
			<div id="validation">	
          		 <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
           		 <a href="exercice6.php" id="precedent">Précédent</a>
           		 <a href="exercice8.php" id="suivant">Suivant</a>
			</div>
		</form>
	<form id="refaire" method="post" action="exercice7.php">
		<p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>
	</form>
        <?php
		if(isset($_POST["refaire"])){
			shell_exec('> exercice7.txt');
			$_POST["code"] = null;
		}
		if(!empty($_POST["code"])){
			if((strpbrk($_POST["code"], '#') != ""))
			{
				echo "<span id='erreur'><p><b>Erreur : caractère incorrecte (|, <<, >>, #)</b></p></span>";
			}else{
                if((strrpos(nl2br($_POST["code"]), 'do $note')!==FALSE)){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), "60 w")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), '80 p')!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }
                else if(strrpos(nl2br($_POST["code"]), 'play $note s')!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "sleep 0.15 p")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "20 s")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "5 end")!==FALSE){
                   echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "end end")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "do b")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "boucle end")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "|n| if")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "64 p")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "n else")!==FALSE){
                 echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "else p")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "71 end")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "60 w")!==FALSE){
                  echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "do c")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), '$note2 $note2')!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "1 s")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else if(strrpos(nl2br($_POST["code"]), "0.5 end")!==FALSE){
                    echo "<span id='erreur'><p><b>Veuillez insérer une instruction par ligne</b></p></span>";
                }else{
                    if((substr_count(nl2br($_POST["code"]), "end")===6)&&(substr_count(nl2br($_POST["code"]), "define")===2)&&(substr_count(nl2br($_POST["code"]), "sleep 0.15")===2)&&(substr_count(nl2br($_POST["code"]), "$note")===5)&&(substr_count(nl2br($_POST["code"]), "$note2")===5)){
                        $nbLignes = substr_count(nl2br($_POST["code"]), "<br />");
                        $code = explode("<br />", nl2br($_POST["code"]));
                        $i=0;
                        while($i <= $nbLignes){
							$erreur = 0;
                            if(((strrpos($code[$i], '$note=60')!==FALSE)||(strrpos($code[$i], '$note =60')!==FALSE)||(strrpos($code[$i], '$note= 60$code[$i]')!==FALSE)||(strrpos($code[$i], '$note = 60')!==FALSE))||((strrpos($code[$i], 'while $note < 80')!==FALSE)||(strrpos($code[$i], 'while $note <80')!==FALSE)||(strrpos($code[$i], 'while $note< 80')!==FALSE)||(strrpos($code[$i], 'while $note<80')!==FALSE))||((strrpos($code[$i], 'play $note+20')!==FALSE)||(strrpos($code[$i], 'play $note +20')!==FALSE)||(strrpos($code[$i], 'play $note + 20')!==FALSE)||(strrpos($code[$i], 'play $note+ 20')!==FALSE))||((strrpos($code[$i], 'while $note2<=65')!==FALSE)||(strrpos($code[$i], 'while $note2 <=65')!==FALSE)||(strrpos($code[$i], 'while $note2<= 65')!==FALSE)||(strrpos($code[$i], 'while $note2 <= 65')!==FALSE))||((strrpos($code[$i], '$note2=60')!==FALSE)||(strrpos($code[$i], '$note2 =60')!==FALSE)||(strrpos($code[$i], '$note2= 60')!==FALSE)||(strrpos($code[$i], '$note2 = 60')!==FALSE))||(strrpos($code[$i], 'define :boucle do')!==FALSE)||(strrpos($code[$i], 'play $note')!==FALSE)||(strrpos($code[$i], 'sleep 0.15')!==FALSE)||(strrpos($code[$i], 'end')!==FALSE)||(strrpos($code[$i], '3.times do')!==FALSE)||(strrpos($code[$i], 'boucle')!==FALSE)||(strrpos($code[$i], 'sleep 1')!==FALSE)||(strrpos($code[$i], 'define :condition do |n|')!==FALSE)||(strrpos($code[$i], 'if n==64')!==FALSE)||(strrpos($code[$i], 'play n')!==FALSE)||(strrpos($code[$i], 'else')!==FALSE)||(strrpos($code[$i], 'play 71')!==FALSE)||(strrpos($code[$i], 'condition $note2')!==FALSE)||(strrpos($code[$i], 'sleep 0.5')!==FALSE)||(strrpos($code[$i], '$note = $note + 5')!==FALSE)||(strrpos($code[$i], '$note2 = $note2 + 1')!==FALSE)){
                                $i = $i+1;
                            }else{
                                $i = $i+1;
                                $nbErreur = $i;
                                $erreur = 1;
                            }
                            if($erreur==1){
                                echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Erreur à la ligne ".$nbErreur." (".$code[$nbErreur-1].")</b></h2></span>";
                            }else{
                                echo "<span id='noerreur'><h2><b><img src='images/valider.png'>Code validé. Ecouter la mélodie.</b></h2></span>";
                            }
						}
                    }else{
                        echo "<span id='erreur'><h2><b><img src='images/erreur.jpg' >Il manque une ou plusieurs occurences</b></h2></span>";
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
