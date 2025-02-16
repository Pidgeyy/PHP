<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>

    <body>
        <?php 
        session_start();

        if (!isset($_SESSION['catalogue'])) {
            $_SESSION['catalogue'] = array (
                array (
                    'id' => 1,
                    'nom' => 'Strawberry Lube',
                    'description' => 'To eat strawberry as lube',
                    'prix' => 69.69,
                    'urlimage' => 'images/produit_a.jpg'
                ) ,
                array (
                    'id' => 2,
                    'nom' => 'Femboy',
                    'description' => 'to share <3',
                    'prix' => 12.2,
                    'urlimage' => 'images/produit_a.jpg'
                ) ,
                array (
                    'id' => 3,
                    'nom' => 'Miaou',
                    'description' => 'a cat',
                    'prix' => 2165,
                    'urlimage' => 'images/produit_a.jpg'
                )
            );
        }

        foreach ($_SESSION['catalogue'] as $value) {
            echo "<ul>
                <li>".$value['nom']."-- <a href='detail.php'> detail </a> <li>
                </ul>";
        }
        ?>
    </body>
</html>