<?php
//Je Demare une session
session_start();

//Je recupére les saisies de l'utilisateur s'il a saisie au moins le login
if(!empty($_POST['login'])){
    $login = trim($_POST['login']);
    $mdp = trim($_POST['mdp']);


//JE METS LA SAISIE DANS DES SESSION
    $_SESSION['login'] = $login;
    $_SESSION['mdp'] = $mdp;

//JE DIRIGE VERS LA PAGE CONVERTER
    header("Location: converter.php");


//JE SORS DU CONTROL
    exit();

}

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

    <title>Page Login</title>

</head>
<body>
<header class="container text-center py-3">
    projet converter
</header>
<div class="card_form shadow-sm">
    <div class="card_titre">
        <span>Login Form</span>
    </div>
    <div class="card_body" >
        <form method="post">
            <div class="form-group mt-3">

                <input type="text" class="form-control" id="login"
                       placeholder="Entrez votre identifiant" name="login">

            </div>
            <div class="form-group mt-3">

                <input type="password" class="form-control" id="mdp"
                placeholder="Entrez votre mot de passe">
            </div>
            <di>
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-secondary float-right">Reset</button>
            </di>

        </form>
    </div>
</div>






<!--Fichier JS-->
<script src="/public/js/jquery.js"></script>
<script src="/public/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>

</body>

</html>