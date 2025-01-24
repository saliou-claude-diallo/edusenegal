<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/carousel-1.jpg" alt="">
                <!-- <img class="img-fluid" src="assets/img/c.jpg" alt=""> -->
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">bienvenue sur <br> <span class="text-primary">EDU SENEGAL</span></h1>
                                <p class="fs-5 text-white mb-4 pb-2"></p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"></a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="assets/img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown">L'éducation est l'arme la plus puissante que vous puissiez utiliser pour changer le monde.<br>
                                
                          <h3 class = "text-primary"> Nelson Mandela</br>
                              Homme d'état, Président (1918 - 2013)</h3>
                            </h1>
                                <p class="fs-5 text-white mb-4 pb-2"></p>
                                <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"></a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight"></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <?php foreach($typesecoles as $te): ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-<?= $te->icon ?> text-primary mb-4"></i>
                            <h5 class="mb-3"><?= ucfirst($te->nom) ?></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="assets/img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-5">A PROPOS DE NOUS</h6>
                    <h1 class="mb-4"></h1>
                    <p class="mb-4">"Notre site d'annuaire répertorie une large sélection d'établissements éducatifs, afin de faciliter ta recherche de l'école, université ou centre de formation qui correspond à tes besoins. Que tu cherches une formation spécifique, un établissement proche de chez toi ou des avis d'autres étudiants, nous te proposons une plateforme simple et pratique pour t'aider dans tes choix éducatifs."</p>
                    <p class="mb-4"></p>
                    <!-- <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div> -->
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">ALLER PLUS LOIN</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Type Etablissement</h6>
                <h1 class="mb-5">Les plus récents</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <?php if(isset($types[0])): ?>
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="images/<?= $types[0]->image ?>" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0"><?= $types[0]->nom ?></h5>
                                        <small class="text-primary"><?= count(recupererEtablissementParIdType($types[0]->id)) ?> Etablissements</small>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($types[1])): ?>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="images/<?= $types[1]->image ?>" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0"><?= $types[1]->nom ?></h5>
                                        <small class="text-primary"><?= count(recupererEtablissementParIdType($types[1]->id)) ?> Etablissements</small>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($types[2])): ?>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="">
                                    <img class="img-fluid" src="images/<?= $types[2]->image ?>" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0"><?= $types[2]->nom ?></h5>
                                        <small class="text-primary"><?= count(recupererEtablissementParIdType($types[2]->id)) ?> Etablissements</small>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if(isset($types[3])): ?>

                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="">
                            <img class="img-fluid position-absolute w-100 h-100" src="images/<?= $types[3]->image ?>" alt="" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                                <h5 class="m-0"><?= $types[3]->nom ?></h5>
                                <small class="text-primary"><?= count(recupererEtablissementParIdType($types[3]->id)) ?> Etablissements</small>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Formations</h6>
                <h1 class="mb-5">Nouveautés</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach($formations as $key => $f): ?>
                    <?php if($key < 3): ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="images/<?= $f->image ?>" style="height: 250px;" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px ;">Voir plus</a>
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
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Etablissements</h6>
                <h1 class="mb-5">Plus connus</h1>
            </div>
            <div class="row g-4">
            <?php foreach($etablissements as $key => $e): ?>
                <?php if($key < 4): ?>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="images/<?= $e->image ?>" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fa fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0"><?= $e->nom ?></h5>
                            <small><?= $e->tel ?></small>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- Team End -->

