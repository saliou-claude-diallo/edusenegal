 
<div class="container mb-5 mt-5"> 
    <div class="card">
        <div class="card-header row">
            <h1 class="col-md-10">Liste des formations</h1>
            <div class="col-md-2 text-end">
                <a href="?page=formation&type=add" class="btn btn-primary">ajouter</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Image</td>
                        <td>Nom</td>
                        <td>Montant</td>
                        <td>Mensualite</td>
                        <td>Duree</td>
                        <td>Etablissement</td>
                        <td>Description</td>
                        <td>Actions</td>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($formation as $t): ?>
                        <tr>
                            <td>
                                <img src="images/<?= $t->image ?>" width="200" height="70" alt="">
                            </td>
                            <td><?= $t->nom ?></td>
                            <td><?= $t->montant ?></td>
                            <td><?= $t->mensualite ?></td>
                            <td><?= $t->duree ?></td>
                            <td><?= $t->nomecole ?></td>
                            <td><?= $t->description ?></td>
                            <td>
                                <!-- <a href="" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-outline-danger btn-sm" ><i class="fa fa-trash"></i></a> -->
                                <a href="?page=formation&type=edit&id=<?= $t->id ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $t->id ?>"> <i class="fa fa-trash"></i></a>
                        <!-- Modal -->
<div class="modal fade" id="delete<?= $t->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">suppression</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        etes-vous sur de vouloir supprimer?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">non</button>
        <a href="?page=formation&idformation=<?= $t->id ?>" type="button" class="btn btn-danger">oui</a>
      </div>
    </div>
  </div>
</div>
                                
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>






