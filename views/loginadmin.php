


<div class="container col-md-5 mb-5"> 
<?php require_once("views/includes/getmessage.php"); ?> 
    <h1 class="py-4 text-center">connexion</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="<?= getInput('email') ?>" required>
        </div>               
        <div class="form-group">
            <label for="">mot de passe</label>
            <input type="password" class="form-control" name="mdp" value="<?= getInput('mdp') ?>"  required>
        </div>
            <button type="submit" name="connecter" class="btn btn-success mt-3">se connecter</button>
        
     
           <div class="container btn btn-warning col-md-5 mt-3 ">
           <a href="?page=recuperermdp" class="text-light">mot de passe oublie ?</a>
        </div>
    </form>
</div>

   
        

    




