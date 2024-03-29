<?php
include("fonctions.php");
setup();
intranet_navbar();
//var_dump($_SESSION);

?>

<head>
    <script src="Assets/heure.js"></script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
    </style>
    <script src="../Intranet/Assets/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5HZ6FM1R-MdRzTZnQT1k_pU_zee7HieM&callback=initMap" async defer></script>
</head>


<body>
    </script>
    <div class="row" id="fond">
        <?php
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $user = $_SESSION['user'];
            $usersData = file_decod('../Data/login-mdp.json');
            $userData = $usersData[$user];
            $prenom = $userData['prenom'];
            $nom = $userData['nom'];

            echo "<p class='text-center mt-3 display-4' >Bienvenue " . $prenom . " " . $nom . "</p>";
        } else {
            echo "<h1>Erreur : utilisateur non reconnu</h1>";
        }
        //var_dump($_SESSION);
        ?>
        <div class="col-sm-4">
            <div class="card mt-2">
                <div class="card-body">
                    <p class="display-6">À venir:</p>
                    <hr class="me-3">
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal1">
                                <p class="mb-0">Atelier sensibilisation à la cybersécurité</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 98%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-06-25 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">A Paris</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Dans cet atelier, nous aborderons les principes fondamentaux de la cybersécurité. Nous expliquerons les différentes menaces en ligne, telles que les virus, le phishing et les attaques DDoS.
                                        </div>
                                        <div class="modal-footer">
                                            <a type="button" href="https://www.cyber-management-school.com/formation-cybersecurite-et-management-paris/?gclid=CjwKCAjwpuajBhBpEiwA_ZtfhaQ2-GFcJoB-jfqWT9_UsKyMVIgeETIx6PhUwvN7z7Stm_RtiiOZWRoCrrEQAvD_BwE" class="btn btn-outline-dark">Inscription</a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal2">
                                <p class="mb-0">Lancement d'une nouvelle offre</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 50%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-09-11 00:00:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Nouvelle Offre</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            PrivateVPN est ravi de vous annoncer notre nouvelle offre 'PrivatePremium'. Avec 'PrivatePremium', bénéficiez d'une bande passante illimitée, d'une sécurité renforcée et d'une assistance prioritaire 24/7 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal3">
                                <p class="mb-0">Mise à jour site web</p>
                                <br>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 57%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-09-01 18:33:00");
                                ?>
                            </button>


                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Mise à jour du site web</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Nous avons complètement revu notre site web pour vous offrir une meilleure expérience utilisateur. Venez découvrir notre nouvelle interface, plus intuitive et plus rapide. </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal4">
                                <p class="mb-0">Intégration avec Apple</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 95%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-06-29 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal4">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Partenariat avec Apple</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Notre nouveau partenariat avec Apple permet à tous les utilisateurs de Mac et iOS d'installer facilement PrivateVPN. Sécurisez vos appareils Apple dès aujourd'hui. </div>
                                        <div class="modal-footer">
                                            <a type="button" href="https://getsupport.apple.com/?caller=support.header&cid=gn-ols-contact-mgs_lp-get_help" class="btn btn-outline-dark">Support Apple</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal5">
                                <p class="mb-0">Cyber Security Summit 2023</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 65%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-08-15 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal5">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Evénement de sécurité en ligne</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Rejoignez-nous pour le Cyber Security Summit 2023, où nous présenterons les dernières innovations en matière de sécurité VPN. </div>
                                        <div class="modal-footer">
                                            <a type="button" href="https://cybersecuritysummit.com/" class="btn btn-outline-dark">Site Officiel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal6">
                                <p class="mb-0">Promotion spéciale pour les étudiants</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 95%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-06-29 1:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal6">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Offre etudiant</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Nous avons introduit une offre spéciale pour les étudiants. Profitez de 50% de réduction sur tous nos plans VPN avec une adresse email .edu valide</div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal7">
                                <p class="mb-0">Expansion de nos serveurs</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 3%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-12-29 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal7">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Expansion de nos serveurs</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Pour mieux vous servir, nous avons ajouté 100 nouveaux serveurs à travers le monde. Vous pouvez maintenant vous connecter à PrivateVPN à partir de plus de 200 pays. </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal8">
                                <p class="mb-0">Collaboration avec Netflix</p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 50%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-09-10 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal8">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Collaboration avec Netflix</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            Grâce à notre nouveau partenariat avec Netflix, vous pouvez désormais débloquer toutes les bibliothèques Netflix à travers le monde. Profitez de plus de contenu avec PrivateVPN </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col text-center">
                            <button type="button" class="mt-1 btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#myModal9">
                                <p class="mb-0">Partenariat avec Google </p>
                                <div class="progress">
                                    <div id="progress-bar" class="progress-bar bg-dark" style="width: 6%;"></div>
                                </div>
                                <?php
                                echo countdown("2023-11-29 12:15:00");
                                ?>
                            </button>

                            <div class="modal fade" id="myModal9">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Partenariat avec Google </h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            PrivateVPN est fier de s'associer à Google pour vous offrir un accès sécurisé et privé à tous les services Google. Restez connecté, tout en restant en sécurité. </div>
                                        <div class="modal-footer">
                                            <a type="button" href="https://about.google/contact-google/?hl=fr" class="btn btn-outline-dark">Support Google</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="mt-2 text-center display-5">
                <span id="heure"></span>
            </div>
            <?php
            $jour = date('d');
            $mois = date('F');
            $annee = date('Y');
            ?>
            <div class="text-center display-6">
                <?php
                echo $jour . ' ' . $mois . ' ' .  $annee;
                ?>

            </div>

            <div class="mt-5" id="map"></div>


        </div>

        <div class="col-sm-4">
            <div class="card mt-2 me-1">
                <div class="card-body">
                    <p class="display-6">Nouveau Utilisateurs :</p>
                    <?php
                    $user = $_SESSION['user'];
                    $data = file_get_contents('../Data/groupes.json');
                    $groupes = json_decode($data, true);

                    $isIT = false;
                    $isDirection = false;
                    $isCommerciaux = false;
                    $isFinances = false;
                    $isProduction = false;
                    $isRH = false;

                    foreach ($groupes['IT']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isIT = true;
                            break;
                        }
                    }

                    foreach ($groupes['Direction']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isDirection = true;
                            break;
                        }
                    }

                    foreach ($groupes['Commerciaux']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isCommerciaux = true;
                            break;
                        }
                    }

                    foreach ($groupes['Finances']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isFinances = true;
                            break;
                        }
                    }

                    foreach ($groupes['Production']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isProduction = true;
                            break;
                        }
                    }

                    foreach ($groupes['RH']['membres'] as $membre) {
                        if ($membre['user'] === $user) {
                            $isRH = true;
                            break;
                        }
                    }
                    if ($isRH || $isDirection) {
                        echo gestion_new_users();
                    } else {
                    ?>
                        <div class="text-center">
                            <p class="alert alert-danger" role="alert">/!\ Vous n'avez pas les droits necessaires pour effectuer cette action!</p>
                            <a class="btn btn-outline-primary" href="mailto:need-help@privatevpn.com?subject=Problème lors de l'affichage des nouveaux utilisateurs.&body=Cher Support-Technique,">Demander de l'aide</a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="card mt-5 me-1">
                <div class="card-body">
                    <p class="display-6">Demandes clients : </p>
                    <?php gestion_comments();  ?>

                </div>
                </div>
            
        </div>
    </div>
</body>