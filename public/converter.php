<?php
session_start();

if(empty($_SESSION['login'])){
    header("Location:login.php");
    exit();
}

//Si j'arrive ici, c'est que la session contient un login
$login = $_SESSION['login'];
?>
<!doctype html>

<head lang="fr">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--lien Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- lien Css-->
    <link rel="stylesheet" href="css/app.css">

    <title>Page Converter</title>

</head>
<body>
<header class="container text-center py-3">
    projet converter
</header>
<div class="card_form shadow-sm">
    <div class="card_titre"...>
        <span>Converter Form</span>
    </div>
    <div class="card_body" >
        <form method="post" autocomplete="off">
            <div class="form-group mt-3">
                <label>Valeur en °C</label>
                <input type="text" class="form-control" id="login"
                       placeholder="Entrez la temperature en °C" name="celsius">

            <di>
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-secondary float-right">Reset</button>
            </di>

        </form>
    </div>
</div>
<div class="resultat">

</div>






<!--Fichier JS-->
<script src="/public/js/jquery.js"></script>
<script src="/public/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>

</body>


