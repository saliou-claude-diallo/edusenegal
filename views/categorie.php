<div class="container col-md-5 mb-5"> 
    <h3 class="py-4 text-center">inscription des etabissements</h3>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nom de L'Etablissements</label>
            <input type="text" class="form-control" name="nom" required >
                          
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" class="form-control" name="adresse" required >
            </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" required >
            </div>
        <div class="form-group">
            <label for="">Telephone</label>
            <input type="number" class="form-control" name="telephone" required>
             <div class="form-group">
            <label for="">categorie</label>
            <input type="text" value="" class="form-control" name="categorie" required>
        </div>
            </div>
        
            <button type="submit" name="inscrire" class="btn btn-success mt-3">s'inscrire</button>


          </form>
</div>

<?php require_once("views/includes/pied.php"); ?>
