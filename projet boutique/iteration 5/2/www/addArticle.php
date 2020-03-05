<?php 
    include('functions.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $dossier_img = "upload/";
        $destination_fichier = "upload/" . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES['image']['tmp_name'],$destination_fichier);
        verifForm($_POST['nom'], $_POST['prix'], $destination_fichier);
    }
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
    <form action="addArticle.php" method="POST" enctype="multipart/form-data">
        <p><label> Image <input type="file" name='image' alt="Image de l'article"/></label></p>
        <p><label> Nom <input type="text" name="nom"/></label></p>
        <p><label> Prix <input type="text" name="prix"/></label></p>
        <p><input type="submit"  value="Envoyer le fichier"/></p>
    </form>
    <footer>
        <div>Copyright : Lu</div>
    </footer>
</body>
</html> 