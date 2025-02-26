<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Formations</h6>
        </div>
        <div class="row g-4 justify-content-center">
            <?php foreach($formations as $key => $f): ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="images/<?= $f->image ?>" style="height: 250px;" alt="">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="?page=details_formation&id=<?= $f->id ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px ;">Voir plus</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0"><?= $f->montant ?> FCFA</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <h5 class="mb-4"><?= ucfirst($f->nom)  ?></h5>
                    </div>
                    <div class="d-flex border-top">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i><?= $f->duree ?></small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-home text-primary me-2"></i><?= $f->nomecole ?></small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-street-view text-primary me-2"></i><?= $f->lieu ?></small>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>