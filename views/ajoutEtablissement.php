
<div class="container col-md-8 mb-5 mt-5"> 
    <div class="card ">
        <div class="card-header row">
            <h3 class="col-md-10">Formulaire d'ajout d'etablissement</h3>
            <div class="col-md-2 text-end">
                <a href="?page=etablissement" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">lieu</label>
                    <input type="text" name="lieu" required class="form-control">
                </div>
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                </div>
                <div class="form-group">
                    <label for="">telephone</label>
                    <input type="text" name="tel" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea  name="description" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Type</label>
                    <select name="idtype" class="form-control" required>
                        <option value="">Veuillez selectionnner un type</option>
                        <?php foreach($types as $t): ?>
                        <option value="<?= $t->id ?>"><?= $t->nom ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" required class="form-control">
                </div>
                <button type="submit" name="ajouter" class="btn btn-success mt-3">Ajouter</button>
            </form>
        </div>
    </div>
</div>


