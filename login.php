<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reunion_island";

$conn = new mysqli($servername, $username, $password);
$conn->select_db($dbname);

// ouvrir une session avant le HTML
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <form action="check_login.php" method="post">
      <div>
        <label for="username">Identifiant</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="submit" name="button">Se connecter</button>
      </div>
    </form>
  </body>
</html>

<?php



/*
$str = 'pomme';

if (sha1($str) === '752c14ea195c460bac3c3b7896975ee9fd15eeb7') {
echo "Voulez-vous une golden ou une spartan ?";
}

*/

/*
// on teste si nos variables sont définies
if (isset($_POST['username']) && isset($_POST['password'])) {

// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
if ($username == $_POST['username'] && $password == $_POST['password']) {
// dans ce cas, tout est ok, on peut démarrer notre session

// on la démarre :)
session_start ();
// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];


}
else {
// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
echo '<body onLoad="alert(\'Membre non reconnu...\')">';
// puis on le redirige vers la page d'accueil
echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
}
}
else {
echo 'Les variables du formulaire ne sont pas déclarées.';
}
?>
*/