<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <?php
     session_start();
     if ($_SESSION['connection'] != true) {
         header('Location: index.php');
     }
    ?>
 </head>
 <body>
    <h1> <?php echo 'Connecté:'.$_SESSION['username'] ?> </h1>
    <a href="index.php">Deconnexion</a> <br>
    <a href="page1.php">Retour</a>
    <a href="catalogue.php">Catalogue</a>
 </body>
</html> 