<?php
    include('functions.php');
    $dossier_img = "upload/";
    $destination_fichier = $dossier_img . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES['image']['tmp_name'],$destination_fichier);
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="img/style.css" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
    <title>Saisie d'article</title>
</head>
<body>
    <header class="hero">
        <h1>Saisie d'article</h1>
    </header>
    <?php displayArticle($_POST['nom'], $_POST['prix'], $destination_fichier); ?>
    <footer>
        <p>Copyright : Lu</p>
    </footer>
</body>
</html> 
