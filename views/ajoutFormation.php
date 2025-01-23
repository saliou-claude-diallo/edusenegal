
<div class="container col-md-8 mb-5 mt-5"> 
    <div class="card ">
        <div class="card-header row">
            <h3 class="col-md-10">Formulaire d'ajout de formation</h3>
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
                </div>
                <div class="form-group">
                    <label for="">Montant</label>
                    <input type="number" name="montant" required class="form-control">
                </div>
                </div>
                <div class="form-group">
                    <label for="">Mensualite</label>
                    <input type="number" name="mensualite" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Duree</label>
                    <input type="text" name="duree" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea  name="description" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Etablissement</label>
                    <select name="id_etablissement" class="form-control" required>
                        <option value="">Veuillez selectionnner un ecole</option>
                        <?php foreach($ecoles as $e): ?>
                        <option value="<?= $e->id ?>"><?= $e->nom ?></option>
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


