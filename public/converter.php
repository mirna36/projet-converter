<?php
session_start();

if(empty($_SESSION['login'])){
    header("Location:login.php");
    exit();
}

//Si j'arrive ici, c'est que la session contient un login
$login = $_SESSION['login'];
$mdp = $_SESSION['mdp'];

 //On verifie que les infos saisies sont les bonnes
if($mdp !='123' || strtolower($login)!='mirna'){
   header('Location:login.php');
  exit();
   
}

$celsius = "";


//Je récupère la saisie de l'utilisateur

if(!empty($_POST['celsius'])) {
    $celsius = $_POST['celsius'];

    //J'effectue la conversion si et seulment si la saisie est numérique
    if(is_numeric($celsius)){
    $fahreinheit = ($celsius * 9 )/ 5  + 32;
    }
}


include_once 'pages/header.php';
?>


<div class="card_form shadow-sm">
    <div class="card_titre">
        <span>Converter Form</span>
    </div>
        <div class="card_body" >
            <form method="post" autocomplete="off">
                <div class="form-group mt-3">
                    <label>Valeur en °C</label>
                    <input type="text" class="form-control" required
                       placeholder="Entrez la temperature en °C" name="celsius">
                </div>       

                <div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn btn-secondary float-right">Reset</button>
                </div>

            </form>
        </div>
</div>

<div class="afficher">
<div class="erreur">
        <?php
        
            if(!empty($celsius) && ! is_numeric($celsius)){
                    
                echo 
                 
                 "Attention à votre saisie, un nombre est attendu";
                 
                 
                }
             ?>
</div>
<div class="resultat">
        <?php                

            if(!empty($fahreinheit)){
                    echo 
                    
                    "{$celsius} °C = {$fahreinheit} °F";
                    
                    
                }


            ?>
</div>      

</div>

      
<?php
include_once 'pages/footer.php';
?>
