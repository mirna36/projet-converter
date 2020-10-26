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

include_once 'pages/header.php';
?>

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

                <input type="password" class="form-control" name="mdp"
                placeholder="Entrez votre mot de passe">
            </div>
            <di>
                <button type="submit" class="btn btn-primary">Valider</button>
                <button type="reset" class="btn btn-secondary float-right">Reset</button>
            </di>

        </form>
    </div>
</div>
<?php
include_once 'pages/header.php';
?>




