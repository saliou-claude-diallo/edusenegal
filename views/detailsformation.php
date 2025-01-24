<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="images/<?= $ecole->image ?>" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Détails de la formations</h6>
                    <h1 class="mb-4"><?= $ecole->nom ?></h1>
                    <p class="mb-4"><?= nl2br($ecole->description)  ?>.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="text-primary me-2">Coût total: </i><?= $ecole->montant ?> FCFA</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="text-primary me-2">Mensualité :</i><?= $ecole->mensualite ?> FCFA</p>
                        </div>
                        <div class="col-sm-12">
                            <p class="mb-0"><i class="text-primary me-2">Durée: </i><?= $ecole->duree ?></p>
                        </div>
                    </div>
                    <h5>Information de l'etablissement</h5>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><h4 class="text-primary me-2"><a href="?page=centres&id=<?= $ecole->id_etablissement ?>"><?= $ecole->nomecole ?></a></h4></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-envelope text-primary me-2"></i><?= $ecole->email ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-phone text-primary me-2"></i><?= $ecole->tel ?></p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-street-view text-primary me-2"></i><?= $ecole->lieu ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>