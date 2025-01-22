
<div class="container col-md-8 mb-5 mt-5"> 
    <div class="card ">
        <div class="card-header row">
            <h3 class="col-md-10">Formulaire d'ajout type d'etablissement</h3>
            <div class="col-md-2 text-end">
                <a href="?page=type" class="btn btn-primary">Retour</a>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Icone</label>
                    <input type="text" name="icon" required class="form-control">
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


