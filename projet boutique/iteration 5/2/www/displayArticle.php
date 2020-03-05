<?php
    include('functions.php');
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="img/style.css" />
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico" />
    <title>Affichage d'article</title>
</head>
<body>
    <header class="hero">
        <h1>Affichage d'article</h1>
    </header>
<?php displayArticle($_GET['nom'], $_GET['prix'], $_GET['image']); ?>
    <footer>
        <p>Copyright : Lu</p>
    </footer>
</body>
</html> 
