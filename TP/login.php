<?php 
session_start();
$utilisateurs = [
    [
        "username"=> "root",
        "mdp"=> "root",
    ],
    [
        "username"=> "random",
        "mdp"=> "1234",
    ],
    [
        "username"=> "Jo",
        "mdp"=> "Miaou",
    ]
];

    for ($i=0; $i<=count($utilisateurs); $i++) {
        if (($_POST['mdp'] === $utilisateurs[$i]['mdp']) && ($_POST['username'] === $utilisateurs[$i]['username']) ) {
            $_SESSION['username'] = $utilisateurs[$i]['username'];
            $_SESSION['connection'] = True;
            return header( 'Location: page1.php'); 
        }
    }
    return header('Location: index.php?erreur=1');