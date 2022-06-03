<!doctype html>
<html lang="fr">
<head>
    <?php $title = "AP #7"; ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/header.php'); ?>
</head>
<body>
    <div id="filterbanner"></div> <!--Filtre-->
    <div id="banner"></div> <!--Background-->
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/navbar.php'); ?>
    <main class="container">
        <div class="card shadow p-3 mb-5 border-primary rounded">
            <div class="card-body text-grey text-center">
                <h5 class="card-title">Développement d'un outil de veille technologique</h5>
                <p class="card-text">Développement d'un outil d'agrégation de sources d'informations afin de centraliser les articles de presse afin
                d'effectuer une veille technologique variée.</p><br>
                <p class="card-text"><strong>Compétences associées</strong><br>
                    Développer la présence en ligne de l'organisation<br>
                    Mettre à disposition des utilisateurs un service informatique<br>
                    Organiser son développement professionnel
                </p><br>
                <div class="text-center">
                    <a href="https://www.louis-gambart.ovh/" target="_blank" class="btn btn-primary">Accès à la production associée</a><br><br>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="projets.php" class="btn btn-primary">Retour aux projets</a>
        </div>
        <br>
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/public/assets/dist/php/footer_with_class.php'); ?>
</body>
</html>