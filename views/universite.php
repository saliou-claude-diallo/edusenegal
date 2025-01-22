<div class="container card mt-3 col-md-8">
    <div class="card-header bg-secondary text-white row">
        <h1 class="col-md-10">liste des universites</h2>
        <div class="col-md-2 text-end">
            <!-- <a href="?page=categorie&type=add" class="btn btn-success">ajouter</a> -->
        </div>
    </div>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>nom</th>
                <th>adresse</th>
                <th>email</th>
                <th>telephone</th>
                <th>image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($etablissement as $c): ?>
            <tr>
                <td><?= $c["nom"] ?> </td>
                <td><?= $c["adresse"] ?></td>
                <td><?= $c["email"] ?></td>
                <td><?= $c["telephone"] ?></td>
                <td><img src="assets/img/news-4.jpg" class="img-zoomin img-fluid rounded w-100" alt="" ?></td>
            <!-- <td>
                    <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                </td> -->
            </tr>
           
         
             <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>

<?php require_once("views/includes/pied.php"); ?>
