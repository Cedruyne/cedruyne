<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cédric de Bruyne - Développeur intégrateur d'applications Web</title>
    <meta name="description" content="Cédric de Bruyne, développeur d'applications web PHP, Symfony, disponible sur Paris et ses environs." />
    <meta name="author" content="Cédric de Bruyne" />

    <!-- CSS externes -->
    <link rel="stylesheet" type="text/css" href="../web/css/normalize.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../web/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../web/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../web/css/tether.min.css" media="all" />

    <!-- CSS de l'application -->
    <link rel="stylesheet" type="text/css" href="../web/css/base.css" media="all" />
    <link rel="stylesheet" type="text/css" href="../web/css/style.css" media="all" />
</head>
<body>
 <!-- En-tête commune de l'application -->
        <header>
            <nav id="mainNavigation" class="mainNavigation">
                <h1>
                    <a href="?page=index" title="Cédric de Bruyne, développeur d'applications Web PHP">
                        <span class="name">&lt;<span class="yellow"> &#47; </span>&gt; Cédric de Bruyne</span>
                        <span class="subtitle">Développeur intégrateur d'applications Web</span>
                    </a>
                </h1>
                <a href="?page=index" class="navLink navLink--yaku">
                    <i class="fa fa-user"></i>
                    <span>P</span>
                    <span>r</span>
                    <span>é</span>
                    <span>s</span>
                    <span>e</span>
                    <span>n</span>
                    <span>t</span>
                    <span>a</span>
                    <span>t</span>
                    <span>i</span>
                    <span>o</span>
                    <span>n</span>
                </a>
                <a href="?page=portfolio" class="navLink navLink--yaku">
                    <i class="fa fa-archive"></i>
                    <span>R</span>
                    <span>é</span>
                    <span>a</span>
                    <span>l</span>
                    <span>i</span>
                    <span>s</span>
                    <span>a</span>
                    <span>t</span>
                    <span>i</span>
                    <span>o</span>
                    <span>n</span>
                    <span>s</span></a>
                <a href="?page=contact" class="navLink navLink--yaku">
                    <i class="fa fa-envelope-o"></i>
                    <span>C</span>
                    <span>o</span>
                    <span>n</span>
                    <span>t</span>
                    <span>a</span>
                    <span>c</span>
                    <span>t</span></a>
            </nav>
            <!-- Chargement du cover spécifié par le programme PHP, si la variable $cover est fournit par le programme -->
            <?php
                if (isset($cover))
                {
                    include $cover.'.html.php';
                }
            ?>
        </header>

        <main class="main">
        <!-- Chargement de la vue spécifié par le programme PHP -->
            <?php
                include $view.'.html.php';
            ?>
        </main>

        <!-- Pied de page commun de l'application -->
        <footer>
            <nav class="footerNavigation">
                <a href="?page=index">Présentation</a>
                <a href="?page=portfolio">Réalisations</a>
                <a href="?page=contact">Contact</a>
            </nav>
            <section class="footerLogo">
                <a href="?page=index" title="Cédric de Bruyne, développeur d'applications Web PHP">
                    <span class="name">&lt;<span class="yellow"> &#47; </span>&gt; Cédric de Bruyne</span>
                    <span class="subtitle">Développeur intégrateur d'applications Web</span>
                </a>
            </section>
            <section class="footerMentions">
                <p>Copyright © 2017 by Cédric de Bruyne, All rights reserved | <a href="#legalModal" data-toggle="modal" class="legal">Mentions légales</a> </p>
            </section>
        </footer>

    <div class="modal fade" id="legalModal" aria-labelledby="Legal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <header class="modal-header">
                    <button class="close" data-dismiss="modal">x</button>
                    <h3 class="modal-title"><i class="fa fa-gavel"></i> Mentions Légales</h3>
                </header><!-- end modal-header -->
                <section class="modal-body">
                    <article>
                        <h4>Propriétaire du site</h4>
                        <p>Cédric de Bruyne</p>
                        <p>Courriel : cdebruyne(at)outlook.com</p>
                        <p>Tél : 06 52 22 75 95</p>
                    </article>
                    <article>
                        <h4>Crédits</h4>
                        <p>Conception par Cédric de Bruyne.</p>
                        <p>Design par Cédric de Bruyne.</p>
                        <p>Référencement par Cédric de Bruyne.</p>
                    </article>
                    <article>
                        <p>Nous vous invitons à prendre connaissance des mentions légales liées à l'utilisation du site internet.</p>
                        <h5>Droits d'auteur</h5>
                        <p>Le présent site constitue une œuvre de l'esprit au sens des dispositions des articles L 111-1 et suivants du Code de la Propriété Intellectuelle et, à ce titre, Cédric de Bruyne bénéficie en sa qualité d'auteur d'une protection et des droits réservés par la loi. Les photographies, textes, slogans, noms commerciaux, dessins, images, logos, vidéos, séquences animées sonores ou non ainsi que toutes œuvres intégrées dans le site sont également, sauf mention contraire, la propriété de Cédric de Bruyne. A ce titre Cédric de Bruyne ne concède aucune de ses licences ni aucun autre droit que celui de consulter le site. Les noms et marques citées, mais non propriétés de Cédric de Bruyne, sont copyright de leurs auteurs respectifs.</p>
                        <h5>Conditions d'utilisation</h5>
                        <p>L'utilisation de ce service est réservée à un usage strictement personnel et privé. Toute reproduction ou représentation partielle ou totale à d'autres fins sur un quelconque support est interdite, sauf autorisation expresse et préalable de Cédric de Bruyne en sa qualité d'auteur. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur à l'encontre duquel Cédric de Bruyne se réserve la possibilité de réclamer l'indemnisation de son entier préjudice.</p>
                        <h5>Remarques</h5>
                        <p>Ce site internet permet un accès aux données de Cédric de Bruyne dans son ensemble. Les données qui y sont publiées sont fournies à titre d'information et ne sont en aucun cas contractuelles, ainsi ces données peuvent inclure des références à des techniques utilisés par Cédric de Bruyne. Malgré tout le soin apporté à la rédaction de ce site, Cédric de Bruyne ne peut pas garantir que le site soit exempt d'inexactitude, d'erreur, d'omission, de dysfonctionnement ou d'indisponibilité. Cédric de Bruyne peut, à tout moment et sans préavis, apporter des améliorations ou des changements aux services décrits sur ce site.</p>
                    </article>
                </section><!-- end modal-body -->
                <footer class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Fermer</button>
                </footer><!-- end modal-footer -->
            </div><!-- end modal-content -->
        </div><!-- end modal-dialog -->
    </div>
    <script src="web/js/jquery.min.js"></script>
    <script src="web/js/tether.min.js"></script>
    <script src="web/js/bootstrap.min.js"></script>
    <script src="web/js/header.js"></script>
    <script src="web/js/main.js"></script>
</body>
</html>