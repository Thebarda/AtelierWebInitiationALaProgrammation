<?php

    function var_func_exist($name,$array){
        $b = false;
        foreach($array as $n){
            if($n == $name){
                $b = true;
            }
        }return $b;
    }
    
    function is_variable($t){
        if($t[0] == "$"){
            return true;
        }else{
            return false;
        }
    }

    //$code = $_POST['code']
    //$id = (0 pour reafficher le code, 1 = affichage des erreur)
    function checkCode($code,$id){
        $end = 0;
        $first = true;
        $num_ligne = 1;
        $var_list = "";
        $func_list = "";
        $juste = false;
        $error = false;
        foreach(preg_split("/((\r?\n)|(\r\n?))/", $code) as $line){
            if($id == 0){
                if($first == true){
                    echo $line;
                    $first = false;
                }else{
                    echo  "\n". $line;
                }
            }else{
                $line_split = explode(" ",$line);
                if($line_split[0] == "play"){
                    if(!(is_numeric($line_split[1]) || var_func_exist($line_split[1],explode(" ",$var_list)))){
                        echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (La variables '.$line_split[1].' n\'est pas déclarée)</b></p><br/>';
                        $error = true;
                    }else if(sizeof($line_split) != 2){
                        echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.'</b></p><br/>';
                        $error = true;
                    }else{
                        $juste = true;
                    }
                }else if($line_split[0] == "sleep"){
                    if(!(is_numeric($line_split[1]) || var_func_exist($line_split[1],explode(" ",$var_list)))){
                        echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (La variables '.$line_split[1].' n\'est pas déclarée)</b></p><br/>';
                    }else if(sizeof($line_split) != 2){
                        echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.'</b></p><br/>';
                        $error = true;
                    }else{
                        $juste = true;
                    }
                }else if($line_split[0] == "end" && sizeof($line_split) == 1){
                    $juste = true;
                    $end -= 1;
                }else if($line_split[0] == "else" && sizeof($line_split) == 1){
                    $juste = true;
                }else if($line_split[1] == "do" && sizeof($line_split) == 2 && explode(".",$line_split[0])[1] == "times"){
                    if(!(is_numeric(explode(".",$line_split[0])[0]) || var_func_exist(explode(".",$line_split[0])[0],explode(" ",$var_list))) ){
                        echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (La variables '.explode(".",$line_split[0])[0].' n\'est pas déclarée)</b></p><br/>';
                        $error = true;
                    }else{
                        $juste = true;
                        $end += 1;
                    }
                }else if($line_split[0] == "if"){
                    $juste = true;
                    $end += 1;
                }else if($line_split[0] == "while"){
                    $juste = true;
                    $end += 1;
                }else if($line_split[0][0] == "#"){
                    $juste = true;
                }else if(is_variable ($line_split[0])){
                    $var_list .= $line_split[0] . " ";
                }else if($line_split[2] == "do" && $line_split[0] == "define"){
                    $func_list .= ltrim($line_split[1], ':') . " ";
                    if($line_split[3] != ""){
                        $var_list .= substr($line_split[3], 1 ,  strlen($line_split[3]) -2) . " ";
                    }
                    $end += 1;
                }else if($line_split[0] == "loop"){
                    echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (Les boucle loop ne sont pas autorisée)</b></p><br/>';
                    $error = true;
                }else if(!(var_func_exist($line_split[0], explode(" ",$func_list)))){
                    echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (La fonction '.$line_split[0].' n\'est pas définie)</b></p><br/>';
                    $error = true;
                }
                
                
            }
            $num_ligne++;
        }
        if($end == 0){
            $juste = true;
        }else{
            $error = false;
            if($end > 0)echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (Il manque '.$end .' end dans le programme)</b></p><br/>';
            else echo '<p style="color:red;"><b>Syntaxe incorrect #'.$num_ligne.' : '.$line.' (Il y a '.-$end .' end en trop dans le programme)</b></p><br/>';
        }
        if($juste == true && $error == false){
                    $fichier = fopen("exercice8.txt", "w+");
                    if(fwrite($fichier, $_POST["code"])){
                        shell_exec('sonic_pi < exercice1.txt');
                    }
                    if($id == 1)echo '<p style="color:green;"><b>Code juste !</b></p><br/>';
                    
        }
    }
?>

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
        <!-- Menu -->
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
        <!--la session cours -->
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
			   <caption>Tableau de conversation</caption>
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
        
        <div id="numero">
        <!-- Enoncé de l'exercice 1 -->
		<h3 id="exo">Exercice n°8</h3>
		<p id="intitule">- Exercice bac à sable.</p>
	</div>
        
        <div id="ecrire">
            <form id="exo" method="post" action="#cours">
                <textarea id="code" name="code" class="textarea" cols="70" placeholder="Ecrivez votre code ici..."><?php
                        //Verification du fichier
                        if(file_exists("exercice8.txt")==TRUE){
                            //calcule le nombre d'octets du fichier execice1.txt
                            $octet = filesize("exercice8.txt");
                            //Si le fichier n'est pas vide
                            if($octet!=0){
                                //ouvre le fichier et affiche son contenu
                                $fichier = fopen("exercice8.txt", "r");
                                $contenu = fread($fichier, $octet);
                                echo $contenu; 
                            }
                        }

                        //Verification du code
                        if(!empty($_POST["code"])){
                            checkCode($_POST["code"],0);
                        }
                    ?></textarea>
                <div id="validation" style="margin-left:67%;">
                    <p id="valid"><input id="reset" type="submit" name="refaire" value="Refaire l'exercice" id="jouer"/></p>	
                    <p id="valid"><input id="jouer" type="submit" name="jouer" value="Jouer" id="jouer"/></p>
                    <a href="exercice7.php" id="precedent">Précédent</a>
                </div>			
            </form>
            <?php
		if(isset($_POST["refaire"])){
                    shell_exec("> exercice8.txt");
		}
		if(!empty($_POST["code"])){
                    checkCode($_POST["code"],1);
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
