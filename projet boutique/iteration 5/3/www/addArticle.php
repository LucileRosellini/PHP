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

    <!-- Comparer method Get et méthode Post. 
    J'observe avec la methode Get que le lien du navigateur dans addArticle.php fait apparaître les valeurs des input 
    (exemple: http://localhost/displayArticle.php?image=drole2.jpg&nom=blbla&prix=10)
    contrairement à la methode POST (exemple:http://localhost/displayArticle.php) -->
    <form action="displayArticle.php" method="GET" enctype="multipart/form-data">
        <p><label> Image <input type="file" name='image' alt="Image de l'article"/></label></p>
        <p><label> Nom <input type="text" name="nom"/></label></p>
        <p><label> Prix <input type="text" name="prix"/></label></p>
        <p><input type="submit"  value="Envoyer le fichier"/></p>
    </form>
    <footer>
        <p>Copyright : Lu</p>
    </footer>
</body>
</html> 