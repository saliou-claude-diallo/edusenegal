


<div class="container col-md-5 mb-5"> 
<?php require_once("views/includes/getmessage.php"); ?> 
    <h1 class="py-4 text-center">Recuperer votre mot de passe ici</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" value="<?= getInput('email') ?>" required>
        </div>               
        <div class="form-group">
            <label for="">numero telephone</label>
            <input type="number" class="form-control" name="number" value="<?= getInput('mdp') ?>"  required>
        </div>
            <button type="submit" name="connecter" class="btn btn-success mt-3">recuperer</button>
        
     
           <!-- <div class="container btn btn-warning col-md-5 mt-3 ">
           <a href="?page=registeradmin" class="text-light">recuperer</a>
        </div> -->
    </form>
</div>

   
        

    




