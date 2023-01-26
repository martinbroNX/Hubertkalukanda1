<?php
//on inclue le fichier qui contient nom_de_serveur, nom_bdd, login et password d'accès à la bdd mysql
include ("connect.php");
//on vérifie que le visiteur a correctement envoyé le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
//on teste l'existence des variables et on vérifie qu'elle ne sont pas vides
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['mdp1']) && !empty($_POST['mdp1'])) 
   && (isset($_POST['mdp2']) && !empty($_POST['mdp2']))) {
//si les variables existent, on vérifie que les deux mots de passe sont différents
if ($_POST['mdp1'] != $_POST['mdp2']) {
$erreur = 'Les 2 password sont differents.';echo $erreur; 
echo"<br/><a href=\"accueil.php\">Accueil</a>";exit();}
else {	
//si les deux mots de passe sont identiques, on se connecte à la bdd
$db = mysqli_connect (SERVEUR, LOGIN, MDP);    
if (!$db) {echo "LA CONNEXION AU SERVEUR MYSQL A ECHOUE\n"; exit();}
mysqli_select_db ($db,BDD); print "Connexion BDD reussie puis";echo "<br/>"; 
// on parcourt la bdd et on range les éventuels login identiques existants dans un tableau
$sql = 'SELECT count(*) FROM membres WHERE id="'.mysqli_escape_string($db,$_POST['login']).'"';
$req = mysqli_query($db,$sql) or die('Erreur SQL !<br/>'.$sql.'<br/>'.mysqli_error());
$data = mysqli_fetch_array($req);
//si aucun autre login identique existe, on inscrit ce nouveau login
if ($data[0] == 0) {
$sql = 'INSERT INTO membres VALUES(NOT NULL,"'.mysqli_escape_string($db,$_POST['login']).'", 
"'.mysqli_escape_string($db,md5($_POST['mdp1'])).'")';
mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br />'.mysqli_error($db));
$erreur = 'inscription reussie !';
echo $erreur;
echo"<br/><a href=\"accueil.php\">Accueil</a>";exit();}
//sinon on n'inscrit pas ce login
else {
$erreur = 'Echec de l\'inscription !<br/>Un membre possede deja ce login !';
echo $erreur; 
echo"<br/><a href=\"accueil.php\">Accueil</a>";exit();
}}}
//Si au moins un des champs est vide
else {
$erreur = 'Echec de l\'inscription !<br/>Au moins un des champs est vide !';
echo $erreur; 
echo"<br/><a href=\"accueil.php\">Accueil</a>";exit();
}}
?>

