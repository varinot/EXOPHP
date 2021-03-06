<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>exercices de PHP</title>
	<link rel="stylesheet" media="screen" href="commun/style.css"> -->
	<?php include ('commun/entet.php') ?>
  </head> 


	<body>
		<h1>les opérateurs arythmétiques </h1>
			<br>
			<?php
				$nom = "--votrenom--";
				$nombre = 1;
				$equipe = [
					 "benoit",
					 "sebastien",
					 "audrey",
				];
				// affichage des valeurs
				echo $nombre;	
				echo $nom;
				var_dump($equipe);
				// affichage d'une phrase
				echo 'bonjour je m\'appelle ' .$nom. "je suis enchantée <br>";
				// incrémentation et décrémentation de 1 sur nombre
				$nombreplus1 = $nombre + 1;
				$nombremoins1 = $nombre - 1;

				echo "incrémentation de 1 sur nombre = $nombreplus1 <br>";
				echo "décrémentation de 1 sur nombre = $nombremoins1 <br>";
				// valeur de nombre multipliée par 10
				$nombremult10 = $nombre * 10;
				echo "valeur de nombre multipliée par 10  = $nombremult10 <br>";
				// valeur de nombre divisée par 10
			    $nombrediv10 = $nombre / 10;
				echo "valeur de nombre divisé par 10  = $nombrediv10 <br>";
				// valeur de nombremult10 divisée par 4 affichage du modulo
				$nombremodul = $nombremult10 %= 4;
				echo "valeur de modulo de nombre(=1) * 10 divisé par 4 = $nombremodul <br>";
				// valeur de nombre *= 10
				$nombre *= 10;
				echo "valeur de nombre *= 10 résultat: $nombre <br>";
				?>
		<div class="div_conteneur_parent">
			
			
			<?php
				// liste des opérateurs arythmétiques
				echo ".= 	Concatène puis affecte le résultat <br>
				+= 	Additionne puis affecte le résultat <br>
				-= 	Soustrait puis affecte le résultat <br>
				*= 	Multiplie puis affecte le résultat <br>
				/= 	Divise puis affecte le résultat <br>
				%= 	Calcule le modulo puis affecte le résultat <br>
				**= 	Élève à la puissance puis affecte le résultat <br>
				+ 	Addition
				– 	Soustraction<br>
				* 	Multiplication<br>
				/ 	Division<br>
				% 	Modulo (reste d’une division euclidienne)<br>
				** 	Exponentielle (élévation à la puissance d’un nombre par un autre)<br>";
				?>
			
			
			<h1>les tableaux </h1>
			<br>
			<?php
				// affichage de la première valeur du tableau
				echo $equipe[0];
				// création affichage d'un tableau de 2 équipes de 3 personnes
				$tablo = [
					["benoit","sebastien","audrey"],
					["bent","sebien","arey"]
				];
				$equipe1 = [
					"benoit",
					"sebastien",
					"audrey"];
				$equipe2 = [
					"bent",
					"sebien",
					"arey"];
				echo '<br><br>';
				//La balise <pre> a pour particularité de restituer le texte dans 
				//le code source de la même manière qu'il a été tapé : 
				//les espaces multiples, 
				//les tabulations et les sauts de ligne sont préservés, 
				//alors que partout ailleurs dans la page web, 
				//les espaces sont réduites à une seule, 
				//le retour à la ligne s'obtient avec <br> 
				echo '<pre>';
				echo 'affichage d\'un tableau tablo';
				print_r($tablo);
				var_dump($tablo);
				echo '<pre>';
				echo 'affichage d\'un tableau équipe1:<br>';
				print_r($equipe1);
				var_dump($equipe1);
				echo '<pre>';
				echo 'affichage d\'un tableau équipe2:<br>';
				print_r($equipe2);
				var_dump($equipe2);
				echo '<pre>';
				$tablo = [$equipe1,$equipe2];	
				echo 'affichage d\'un tableau tablo équipe1 & équipe2<br>';
				print_r($tablo);
				var_dump($tablo);
				echo '<pre>';
				//affichage de la 2éme personne personne d'équipe 1 et  
				//3ème personne équipe 2 concaténation avec chaîne de caractères
				echo '2éme personne personne d\'équipe1 = ' .$equipe1[1].'<br>';
				echo '<pre>'; 
				echo '3ème personne équipe 2 = ' .$equipe2[2].'<br>';
				//création tableau associatif(profession) avec comme clé le nom  
				//de 3 personnes avec une profession chacune
				//afficher "bonjour je m'appelle (personne ) et je suis (profession)
				$profess = [
					"benoit" => "boucher",
					"sebastien" => "soudeur",
					"audrey" => "assistant",
					];
				foreach ($profess as $clé => $valeur){
						echo 'bonjour je m\'appelle ' .$clé. ' et je  suis :' .$valeur.'<br>'; 
							}
						echo '<br>';
			?>
		</div>
		<div class="div_conteneur_page">
			<h1>les operateurs de comparaisons et  logiques</h1>
			<br>
			<?php
				// liste des opérateurs de comparaisons et logiques
				echo "== 	Permet de tester l’égalité sur les valeurs
				=== 	Permet de tester l’égalité en termes de valeurs et de types
				!= 	Permet de tester la différence en valeurs
				<> 	Permet également de tester la différence en valeurs
				!== 	Permet de tester la différence en valeurs ou en types
				< 	Permet de tester si une valeur est strictement inférieure à une autre
				> 	Permet de tester si une valeur est strictement supérieure à une autre
				<= 	Permet de tester si une valeur est inférieure ou égale à une autre
				>= 	Permet de tester si une valeur est supérieure ou égale à une autre<br><br>";
			// teste le nombre si supérieur ou égal à 100
			$nombre100 = 400;
			// teste le nombre si supérieur ou égal à 100
			if($nombre100 >= 100){
				echo '$nombre100 est égal à: ' .$nombre100. '<br>';}
			else{
				echo '$nombre100 est égal à: ' .$nombre100. ' et différent de 100 <br>';}	
			// liste des opérateurs LOGIQUES
			echo "AND 	Renvoie true si toutes les comparaisons valent true
			&& 	Renvoie true si toutes les comparaisons valent true
			OR 	Renvoie true si une des comparaisons vaut true
			|| 	Renvoie true si une des comparaisons vaut true
			XOR 	Renvoie true si une des comparaisons exactement vaut true
			le PHP ne renverra true que si une seule comparaison vaut true 
			et renverra false si plusieurs comparaisons valent true
			! 	Renvoie true si la comparaison vaut false (et inversement)<br><br>";
			?>
		</div>
		<!-- EXOPOUSSIN 
			tirage d'une branche exopoussin
				tirage d'une branche exopoussin
				Ecriture d'un programme qui demande l'âge
				d'un enfant à l'utilisateur
				Ensuite, ce programme informe l'utilisateur 
				de la catégorie de l'enfant:
				poussin de 6 à 7 ans
				pupille de 8 à 9 ans
				minime de 10 à 11 ans et cadet après 12 ans -->

		<div class="div_exo_poussin">
		<h1>   EXO POUSSIN </h1> 
			<h2>   tirage d'une branche exopoussin  </h2>
			<form Method="POST" Action="index.php">
			renseignez un âge pour connaître la catégorie: 
			<INPUT type=int size=2 name=age>
			<INPUT type=submit name=Envoyer value=Envoyer>
			</form>
				<?php
				$age = $_POST['age'];	
				echo 'Age :' .$age.'<br>';
				// Affichage des résultats
				if ($age > 12){
					echo 'catégorie cadet <br>'
					;}
					elseif ($age >= 10){
						echo 'catégorie minime <br>'
					;}
					elseif ($age >= 8){
						echo 'catégorie pupille <br>'
						;}					
					elseif ($age >= 6){
						echo 'catégorie poussin <br>'
						;}
					else {echo "catégorie non affectée pour cet âge <br><br>";}
				?>
		</div>
		<div class="div_exo_compteur">
		<!-- EXOCompteur 
				ce programme informe l'utilisateur 
				d'un compteur qui affiche un nombre jusqu'à 
				10 utilisation d'une boucle for et une boucle while-->
			<h1>   EXO COMPTEUR </h1> 
			<h2>   CONTINUITÉ DE LA branche exopoussin  </h2>
			<?php 
			// $compteur=0;
			$compteurmax=0;
			echo 'COMPTEUR en boucle while<br>';
			while($compteurmax<=10)
			{
				echo $compteurmax;		
				echo '<br>';// <--- saut de ligne
				$compteurmax++;	
				
			}
			echo 'COMPTEUR en boucle for<br>';
			for($compteur = 0; $compteur<11; $compteur++)
			 {
				echo $compteur;
				echo '<br>'; // <--- saut de ligne
			}	
			?>
		</div>
		<div class="div_exo_prenom">
		<!-- EXOprénom 
				ce programme informe l'utilisateur 
				en affichant le prénom de chaque index
				de l'équipe-->
			<h1>   EXO PRENOM CONTINUITÉ DE LA branche exopoussin</h1> 
			<h2> TABLEAU ÉQUIPE    </h2>
			<?php 
			
			echo 'prénoms équipe en foreach<br>';
			foreach ($equipe1 as $ind){
				echo 'je  suis ' .$ind.'<br>'; 
					}
				echo '<br>';
			echo 'prénoms équipe en for<br>';
			for($ind= 0; $ind<3; $ind++){
					echo 'je  suis ' .$equipe1[$ind].'<br>'; 
						}
					echo '<br>';	
			?>
		</div>
		<div class="div_exo_fonction">
		<!-- EXOfonction 
				cette partie utilise des fonctions qui permmettent:
				-d'afficher la valeur d'un index précis du tableau EQUIPE1
				-de convertir une valeur mètre en cm
				-change la valeur d'une variable déclarée dans le scope global
				(travailler sur l'emplacement mémoire d'un argument et non
				par copie de valeur)
				-de changer le métier des personnes du tableau associatif (profess)
				fonction native qui affiche la date de l'instant T
				""       ""      "" permet l'échappement de syntaxe html
				"  "   "   "    "  " "  "  de cacher la valeur d'une variable (hachage) 
				lister 3 fonctions natives au moins et expliquer usage et intérêt-->
			<h1>   EXO FONCTION branche exofonction</h1> 
			<h2> TABLEAU ÉQUIPE1    </h2>
			<?php 
				$ind= 0; 
				echo 'afficher la valeur d\'un index précis dans le tableau EQUIPE1 <br>';
				// printf (chaîne formattée); 	
				//Entier en notation décimale %d , argument variable
			
				printf ("l'index du tableau est %d", $ind); 
				echo '<br>';
				printf ("la valeur de l'index du tableau est %s", $equipe1[$ind]); 	
				echo '<br>';
				
			?>
			<h2> FONCTION CONVERSION   </h2>
			<p>	conversion de valeur métrée en cm	</p>
			
			<?php 
			$valmet=0;
				function conversi($valmet) {	
					return $valmet*100; 
				};
			echo '2m50 en cm ', conversi(2.5); 						
			;
								
			?>	

			<h2> FONCTION CHANGEMENT DE METIER   </h2>
			<p>	CHANGEMENT MÉTIER DU TABLEAU PROFESS	</p>
			
			<?php 
			$metier= "";
			$ind= 0;
			$profess = [
				"benoit" => "boucher","sebastien" => "soudeur",	"audrey" => "assistant",];
			function changement(&$profess,$ind){
				$profess[$ind]='chapelier';
			}
			changement($profess,'sebastien');
				echo '<br>';
				var_dump($profess);				
			?>	

		</div>
	</body> 
</html>        