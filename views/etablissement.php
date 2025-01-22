
<div class="container mb-5 mt-5"> 
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Liste des etablissements</h1>
            <div class="col-md-2 text-end">
                <a href="?page=etablissement&type=add" class="btn btn-primary">Ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Nom</td>
                        <td>Lieu</td>
                        <td>Email</td>
                        <td>Tel</td>
                        <td>Description</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($etablissements as $t): ?>
                        <tr>
                            <td>
                                <img src="images/<?= $t->image ?>" width="200" height="70" alt="">
                            </td>
                            <td><?= $t->nom ?></td>
                            <td><?= $t->lieu ?></td>
                            <td><?= $t->email ?></td>
                            <td><?= $t->tel ?></td>
                            <td><?= $t->description ?></td>
                            <td>
                                <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


