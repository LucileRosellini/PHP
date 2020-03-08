<?php session_start(); ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>test</title>
    </head>
    <body>
<?php
    if(isset($_SESSION['began'])){
        $_SESSION['value'] += 1;
        print("Value = ".$_SESSION['value']."\n");
    }else{
        print("Session is not set<br>");
        $_SESSION['began'] = true;
        $_SESSION['value'] = 0;
    }
?>
        <form method="GET", action="/result.php">
            <input type="submit" value="reload" name="reload"/>
        </form>
    </body>
</html>
