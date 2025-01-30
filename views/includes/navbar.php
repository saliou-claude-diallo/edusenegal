<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Edu<span>Senegal</span></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <?php if(isset($_SESSION["user"]) && $_SESSION["user"]->role = "admin"): ?>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $_SESSION["user"]->prenom ?></a>
                        <div class="dropdown-menu fade-down m-0">
                            <a href="?page=logout" class="dropdown-item">Deconnexion</a>
                        </div>
                    </div>
                    <a href="?page=type" class="nav-item nav-link">Type Etablissement</a>
                    <a href="?page=etablissement" class="nav-item nav-link">Etablissements</a>
                    <a href="?page=formation" class="nav-item nav-link">Formations</a>
                    <!-- <a href="" class="nav-item nav-link">deconnecter</a> -->
                    
                <?php else: ?>
                <a href="?page=home" class="nav-item nav-link active">Accueil</a>
                <a href="?page=formations" class="nav-item nav-link active">Formations</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Etablissements</a>
                    <div class="dropdown-menu fade-down m-0">
                        <?php foreach($typesecoles as $t): ?>
                        <a href="?page=ecoles&idtype=<?= $t->id ?>" class="dropdown-item"><?= ucfirst($t->nom) ?></a>
                       
                        <?php endforeach; ?>
                    

                       
                    </div>
                </div>
                <a href="?page=contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="?page=login" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
            <?php endif; ?>
        </div>
    </nav>
    <!-- Navbar End -->