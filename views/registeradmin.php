
<?php require_once("views/includes/getmessage.php"); ?>

<div class="container col-md-5 mb-5"> 
    <h1 class="py-4 text-center">inscription de l'administrateur</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" value="<?= getInput('nom') ?>" class="form-control" name="nom" required >
                          
        <div class="form-group">
            <label for="">Prenom</label>
            <input type="text" value="<?= getInput("prenom" ) ?>" class="form-control" name="prenom" required >
            </div>
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" value="<?= getInput('adresse') ?>"class="form-control" name="adresse" required >
            </div>
            <div class="form-group">
        <label for="">Email</label>
            <input type="Email" value="<?= getInput('email') ?>" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label for="">mot de passe</label>
        <input type="password" value="<?= getInput('mdp') ?>" class="form-control" name="mdp" required>
        </div>
        <div class="form-group">
            <label for="">confirmer mot de passe</label>
        <input type="password" value="" class="form-control" name="mdpconfirm" required>
        </div>
        
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="number" value="" class="form-control" name="telephone" required>
            </div>
        
            <button type="submit" name="inscrire" class="btn btn-success mt-3">s'inscrire</button>
    </form>
</div>







  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
 