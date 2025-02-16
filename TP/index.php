<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="formulaire.css" media="screen" type="text/css" />

 <?php
 session_start();
 session_destroy();
?>
 </head>
 <body>
 <div id="container">
 
 <form method="post" action="login.php" >
 <h1>Connexion</h1>
 
 <label><b>Username</b></label>
 <input type="text" placeholder="Votre nom" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="mdp" required>

 <input type="submit" id='submit' value='LOGIN' >
 <?php
 if(isset($_GET['erreur'])){
 $err = $_GET['erreur'];
 if($err==1){
 echo "<p style='color: red;'> Utilisateur ou mot de passe incorrecte </p>";
 }
 }
 ?>
 </form>
 </div>
 </body>
</html> 