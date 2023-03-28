<?php 
    include_once(__DIR__."/templates/carousel.php");
    include_once(__DIR__."/templates/listedElements.php");
    $mediaDir = "./media/accommodation/";
    $mediaNest = "./media/accommodation/LeNid/";
    $mediaVilla = "./media/accommodation/LaVilla/";
    $mediaServiceIcons= "./media/accommodation/serviceIcons/";
    $mediaActivities = "./media/accommodation/ACTIVITES/";
    
    $pageItems = [
        ['le nid', 'Découvrir', './media/accommodation/leNid.jpg', '#nest'],
        ['la villa','Découvrir', './media/accommodation/laVilla.jpg', '#villa'],
        ['les activités','Découvrir', './media/accommodation/activites.jpg', '#activities'],
    ];

    $neighborsActivities = [
        ['Halle au verre', 'La verrerie de Claret', './media/accommodation/ACTIVITES/Verrerie.jpg', '#'],
        ['Oenologie', 'Les Vignobles du Pic', './media/accommodation/ACTIVITES/Vignoble.jpg', '#'],
        ['Monument historique', 'Le Château d’Assas', './media/accommodation/ACTIVITES/Chateau.jpg', '#'],
    ];


    




    $commentsNest = [
            ['Un Cadre exceptionnel !!! Un très bon moment 
             passé dans un lieu reposant et dépaysant. 
             Un vrai moment de bonheur.', 'Isabelle'],
            
            ['Cet hébergement exceptionnel, au sein d\'un paysage 
            à couper le souffle, est d\'autant plus valorisé par la 
            gentillesse d\'Anne et de Philippe.', 'Sorribes'],
            
            ['Cet endroit est juste exceptionnel ! Aux portes de Montpellier, 
            un lieu sublime pour s\'évader le temps d\'une nuit.', 'Marie'],

            ['Expérience unique en son genre dans un cadre magnifique 
            ! Je recommande fortement', 'Nicolas'],

            ['Petit nid douillet très agréable qui offre 
            une magnifique vue dont on ne se lasse pas. 
            Un moment magique !', 'Elise'],
    ];



    $commentsVilla = [
        ['J’ai passé un séjour vraiment 
        hors du commun dans ce bel endroit. 
        Anne et Phillipe sont très chaleureux 
        et je n’ai manqué de rien !', 'Manon'],

        ['Super séjour, merci infiniment', 'Florian'],

        ['Tres agréable séjour, merci', 'Joseph']


    ];

    function getComments($comments){
        

        foreach($comments as &$value){
            ?>
            <div class="post">
                <p class="comment">
                    <?php echo $value[0]; ?><br>
                    <span><?php echo $value[1]; ?></span>
                </p>
            </div>
            <?php
        }
    }

    $services = [
        "nest" => [
            ['BedIcon.png', '1 couchage pour 2 adultes<br> + 1 couchage enfant<br> possible'],
            ['BreakfastIcon.png', 'Petit déjeuner maison BIO<br> inclus'],
            ['HeatIcon.png', 'Poêle'],
            ['ParkingIcon.png', 'Parking gratuit'],
            ['WifiIcon.png', 'Wifi et prise électrique<br> dans la salle commune<br>(pas de prise au Nid)'],
            ['PanIcon.png', 'Cuisine + bar réfrigéré<br> dans la salle commune'],
            ['CleanIcon.png', 'Ménage inclus'],
            
        ],

        "villa" => [
            ['BedIcon.png', '6 couchages :<br> - 2 chambres avec 2 lits simples<br> - 1 canapé-lit 2 places'],
            ['HeatIcon.png', '- Cheminée<br> - Climatisation'],
            ['ParkingIcon.png', 'Parking gratuit'],
            ['WifiIcon.png', 'Wifi'],
            ['PanIcon.png', 'Cuisine complète'],
            ['CleanIcon.png', 'Ménage inclus'],
            ['PoolIcon.png', 'Piscine'],
            ['TVIcon.png', 'TV, câble et satellite'],
        ]
    ];



    $nestCommunicationPlatforms = [
        ['PhoneIcon.png', '06 10 64 88 06<br>06 18 07 07 84'],
        ['AirbnbIcon.png', 'Airbnb', 'https://www.airbnb.fr/rooms/19798152?source_impression_id=p3_1583837317_4sizJ8Di7hHziW4N'],
        ['AbracadaroomIcon.png', 'AbracadaRoom', 'https://www.abracadaroom.com/fr/reservation-letrier-des-cabanelles-nid-le-nid-de-letrier-des-cabanelles-2588/']
    ];

    $villaCommunicationPlatforms = [
        ['PhoneIcon.png', '06 10 64 88 06<br>06 18 07 07 84'],
        ['AirbnbIcon.png', 'Airbnb', 'https://www.airbnb.fr/rooms/38371900?source_impression_id=p3_1583838774_cMnTC5VEfAo80xFy'],
        ['AmivacIcon.png', 'Amivac', 'https://www.amivac.com/location-vacances/annonce-92336126'],
    ];
    
    $nestPictures = [
        'Nid1.jpg',
        'Nid2.jpg',
        'Nid3.jpg',
        'Nid4.jpg',
        'Nid5.jpg',
    ];

    $villaPictures = [
        'Villa1.jpg',
        'Villa2.jpg',
        'Villa3.jpg',
        'Villa4.jpg',
        'Villa5.jpg',
        'Villa6.jpg',
    ];



    function getCommunicationPlatforms($communicationPlatforms, $mediaServiceIcons){

        ?> 
        <div class="telephone">
            <img src="<?php echo $mediaServiceIcons . $communicationPlatforms[0][0]; ?>" alt="telIcon" class="telIcon">
            <p class="phoneNumber"><?php echo $communicationPlatforms[0][1]; ?></p>
        </div> <?php

        for($i = 1; $i < sizeof($communicationPlatforms); $i++){
            ?>
            <div class="onlineReservation">
                <a href="<?php echo $communicationPlatforms[$i][2]; ?>" class="icons"><img src="<?php echo $mediaServiceIcons . $communicationPlatforms[$i][0]; ?>" alt=""></a>
                <p class="onlineRes"><?php echo $communicationPlatforms[$i][1]; ?></p>
            </div>
            <?php
        }
        

    }
    


?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Situé sur l'axe Montpellier-Quissac 
        dans le département de l'Hérault, l'Etrier des Cabanelles est à 
        la fois proche de la ville (30 minutes de Montpellier, 45 minutes de Nîmes), 
        et suffisamment à l'écart pour vous offrir le dépaysement, le calme, les sons 
        de la nature. Découvrez les hébergements construits sur notre site pour 
        un séjour unique et ressourçant."
    >
    <link rel="stylesheet" href="./style/accommodation/accommodation.css">
    <link rel="stylesheet" href="./style/accommodation/sections.css">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/carousel.css">
    <link rel="stylesheet" href="./style/accommodation/activities.css">
    <link rel="stylesheet" href="./src/plugins/aos-master/dist/aos.css">
    <title>Hébergements</title>
</head>
<body>

    <?php include(__DIR__."/templates/navMenu.php"); ?>

    <div class="banner accommodationBanner">

        <div class="mainHeading">
            <img src="./media/LogoIcon.png" alt="logo" class="logoIcon">
            <h1 class="mainTitle">Hébergements</h1>
            <p>Pour un séjour <span>Bien-être</span></p>
            <div class="headingDivider headingDivider2"></div>
        </div>
    
    
    </div>

    <div class="localization nonColapsableMobileSection">
        <div class="text">
                <img src="<?php echo $mediaDir; ?>Pin+LeafIcon.png" alt="icon">
                <h2 data-aos="fade-down">D'abord,<br class="mobileCariageReturn"> <span>où sommes-nous ?</span></h2>
                <p class="generalText" data-aos="fade-zoom-in" data-aos-delay="300">Situé sur 
                l'axe Montpellier-Quissac dans le département de l'Hérault, l'Etrier des 
                Cabanelles est à la fois proche de la ville (30 minutes de Montpellier, 45 minutes 
                de Nîmes), et suffisamment à l'écart pour vous offrir le dépaysement, le calme, 
                les sons de la nature. Découvrez les hébergements construits sur notre site pour 
                un séjour unique et ressourçant.
                </p>
        </div>
        
    </div>

    <div class="pagePresentation">
        <img class="leafShadow" src="<?php echo $mediaDir; ?>LeafShadow.png" alt="leafShadow">
        <div class="pageItems">
            <?php 
            getItems($pageItems,"", true);
            ?>
            
        </div>

        
    </div>

    <div class="section mobileSection" id="nest">
        <?php createExpandButton("Le Nid"); ?>
        <div class="sectionBanner">
            <div class="sectionHeading" id="nestTrigger">
                <h1 data-aos="fade-down" data-aos-anchor="#nestTrigger" data-aos-anchor-position="bottom-bottom">le nid</h1>
                <h2 data-aos="fade-right" data-aos-anchor="#nestTrigger" data-aos-anchor-position="bottom-bottom">Confort & nature</h2>
                <hr data-aos="fade-up" data-aos-anchor="#nestTrigger" data-aos-anchor-position="bottom-bottom">
            </div>
            <p class="description generalText" data-aos="fade-zoom-in" data-aos-delay="300">
                <strong style="font-size: 1.2em;">A</strong>u pied du Pic Saint Loup entre 
                vignes et garrigues, vous vivrez une 
                expérience 
                inédite
                 et privilégiée. Le Nid est un véritable 
                cocon douillet
                , 100% écologique, 
                autonome et de 
                grand confort.
                Installé au calme, en retrait des écuries, il est accessible par un chemin à pied, à 
                vélo ou en voiture. C'est une pièce ronde complètement ouverte se présentant 
                comme une chambre avec une 
                douche à l'italienne
                . À l'extérieur, il comporte 
                une grande terrasse donnant sur l'Hortus et le Pic Saint-Loup où un 
                petit-
                déjeuner maison BIO
                 vous sera servi, et où vous pourrez aussi bien admirer le 
                coucher de soleil que les étoiles à la tombée de la nuit. Des toilettes sèches à 
                séparation sont situées juste derrière. 

            </p>
            <aside>
                <!--<div class="blur"></div>-->
            </aside>

            <div class="comments">
                <img src="<?php echo $mediaNest; ?>QuotationMarks.png" alt="" class="quotation">

                <div class="slider">
                    <?php getComments($commentsNest); ?>
                                
                </div>

            </div>

            <div class="degraded"></div>
                    
        </div>

        <div class="sectionDetails">
            <h2 class="detailHeading">
                <span>Un éco-gîte autonome</span> de grand confort et entièrement local.
            </h2>

            <div class="services nest-services">
                <?php getServiceList($services['nest'], $mediaServiceIcons); ?>
            </div>

            <?php createImageSlider($nestPictures, "./media/accommodation/LeNid/"); ?> 

            <p class="sectionParagraph generalText">
                <strong style="font-size: 1.2em;">C</strong>onstruit 
                sur un site éco-responsable, le Nid et son mobilier sont entièrement 
                constitués de matériaux naturels et locaux
                ! Tout y est écologique et a été 
                fabriqué dans le respect de l'environnement
                : la charpente est en bois de Douglas
                non-traité, l'isolation thermique est faite en laine de bois et en chanvre, et le lit, 
                totalement rond et d'un diamètre de 2 mètres, est en bois de cade. Autonome 
                grâce à ses panneaux photovoltaïques, le Nid dispose aussi d'un poêle pour se 
                réchauffer l'hiver, d'eau chaude solaire ainsi que de ses toilettes sèches à 
                séparation. En outre, il s'agit d'un éco-gîte de grand confort. Le matelas naturel à
                mémoire de forme en fibres de bambou prendra soin de votre corps. Grâce à son 
                isolation naturelle, le Nid vous protègera de la chaleur l'été et vous maintiendra 
                au chaud l'hiver. Enfin, nous avons tenu à ce que le Nid soit de fabrication 100% 
                locale. En option, vous pourrez aussi commander vos plats végétariens locaux 
                préparés par 
                <a href="https://www.facebook.com/Bocaux-des-Jardins-du-Pic-
                157237508292812/">Sarah</a>
                 des Bocaux des jardins du Pic et servis à la terrasse du Nid, 
                ou encore profiter de nos ateliers avec chevaux et poneys. Tous ces éléments 
                conjugués au cadre magique vous transporteront dans une atmosphère zen, en 
                totale adéquation avec la Nature.
            </p>


            <div class="priceAndReservation">
                <h2 class="normalPriceHeading">Tarifs & réservation</h2>
                <h2 class="mobilePriceHeading">Tarifs</h2>
                <hr>
                <p class="prices">
                    la nuitée pour 2 personnes <strong style="margin-left: 40px;">130€</strong><br>
                    troisème couchage <strong style="margin-left: 100px;">+ 25 €</strong>
                </p>

                <p class="taxesInfo">
                    Taxes de séjour incluses, petits déjeuners inclus <br>
                    Règlements par espèces ou chèques /Acompte de 20% 
                    pour la réservation.

                </p>

                <div class="communication">
                    <?php getCommunicationPlatforms($nestCommunicationPlatforms, $mediaServiceIcons); ?>
                </div>

            </div>

        </div>
    </div>

    <div class="section mobileSection" id="villa">
        <?php createExpandButton("La Villa"); ?>
        <div class="sectionBanner">
            <div class="sectionHeading">
                <h1 data-aos="fade-down" data-aos-anchor="#triggerVilla" data-aos-anchor-position="bottom-center">la villa<br> des hirondelles</h1>
                <h2 data-aos="fade-right" data-aos-anchor="#triggerVilla" data-aos-anchor-position="bottom-center">Maison de charme</h2>
                <hr data-aos="fade-up" data-aos-anchor="#triggerVilla" data-aos-anchor-position="bottom-center">
            </div>
            <p class="description generalText">
                Villa au 
                <strong>calme avec piscine</strong>
                 et point de vue sur les montagnes emblématiques 
                de l'Hérault
                : Le Pic-Saint-Loup et l'Hortus. Un décor de rêve en parfaite harmonie
                avec la nature, entre vignes et garrigue, le tout dans un 
                confort optimal
                .
                
            </p>
            <aside id="triggerVilla">
            </aside>

            <div class="comments">
                <img src="<?php echo $mediaNest; ?>QuotationMarks.png" alt="" class="quotation">

                <div class="slider">
                    <?php getComments($commentsVilla); ?>
                </div>
            </div>
        </div>

        <div class="sectionDetails">
            <h2 class="detailHeading">
                Espace et confort face au Pic-Saint-Loup.
            </h2>

            <div class="services villaServices">
                <?php getServiceList($services['villa'], $mediaServiceIcons); ?>
            </div>

            <?php createImageSlider($villaPictures, "./media/accommodation/LaVilla/"); ?>

            <p class="sectionParagraph villaParagraph generalText">
               <strong style="font-size: 1.2em;">L</strong>a villa dispose de 2 grandes chambres avec salle de bain privée, et de 2 toilettes
                individuelles. Les matelas des chambres sont en fibre de bambou 
                (hypoallergénique), mémoires de forme. Un confortable canapé-lit est également 
                disponible dans la pièce commune. Le Pic Saint-Loup et l'Hortus peuvent 
                s'observer depuis toutes les fenêtres de la maison
                : une invitation à une vision 
                plus large et lointaine. Enfin, la grande terrasse ensoleillée donnant sur la piscine 
                privée vous offrira d’agréables moments de détente. Si vous le souhaitez, vous 
                pourrez aussi commander à votre convenance les plats végétariens préparés par 
                Sarah des Bocaux des jardins du Pic.
            </p>

            <div class="priceAndReservation villaPrice">
                <h2 class="normalPriceHeading">Tarifs & réservation</h2>
                <h2 class="mobilePriceHeading">Tarifs</h2>
                <hr>
                <p class="prices">
                    la semaine <strong style="margin-left: 65px;">1000€ à 1400€</strong><span> en fonction des dates</span><br>
                </p>

                <p class="taxesInfo">
                    Taxes de séjour incluses, petits déjeuners inclus <br>
                    Durée minimum de séjour : 7 nuits.<br>
                    Règlements par espèces ou virement /Acompte de 20% pour la réservation.


                </p>

                <div class="communication">
                    <?php getCommunicationPlatforms($villaCommunicationPlatforms, $mediaServiceIcons); ?>
                </div>

            </div>

        </div>


    </div>

    <div class="section mobileSection" id="activities">
        <?php createExpandButton("Les Activités"); ?>
        <div class="sectionBanner">
            <div class="sectionHeading" id="activitiesTrigger">
                <h1 data-aos="fade-down" data-aos-anchor="#activitiesTrigger" data-aos-anchor-position="bottom-center">les activités</h1>
                <h2 data-aos="fade-right" data-aos-anchor="#activitiesTrigger" data-aos-anchor-position="bottom-center">Sur place & alentours</h2>
                <hr data-aos="fade-up" data-aos-anchor="#activitiesTrigger" data-aos-anchor-position="bottom-center">
            </div>
        </div>

        <div class="activitiesDetails" id="actDetailTrigger">
            <div class="localActivities" data-aos="fade-right" data-aos-anchor="#actDetailTrigger" data-aos-anchor-position="bottom-bottom">
                <img src="./media/accommodation/ACTIVITES/Etrier.jpg" alt="image">
                <div class="localInfo">
                    <p class="miniTitle" style="font-size: 15pt;">Sur Place</p>
                    <hr>
                    <h2>Éco-lieu<br class="mobileCariageReturn"><span> autour du cheval</span></h2>
                    <div class="smallDivider"></div>
                    <h3>L’<span style="text-transform: uppercase;">é</span>trier des Cabanelles</h3>
                    <hr style="position: relative; top: -20px;">
                    <p class="description generalText">Au cœur de notre écurie 
                        étho-écologique, vous pourrez rencontrer 
                        nos chevaux et poneys soignés au naturel, 
                        et découvrir nos installations construites 
                        et entretenues avec amour. 
                        Nous vous proposerons pour tous âges 
                        des ateliers personnalisés autour 
                        des chevaux et poneys, à pieds et/ou montés[...]</p>
                    <a class="orangeButton" href="./place.html"><p>Découvrir</p></a>
                </div>
            </div>

            <div class="neighborActivities" data-aos="fade-left" data-aos-anchor="#actDetailTrigger" data-aos-anchor-position="bottom-bottom">
                <p class="miniTitle" style="font-size: 15pt;">Aux Alentours</p>

                <div class="neighborItems">

                    <?php getItems($neighborsActivities, "column", false); ?>
                
                
                </div>

                

            </div>
        </div>

        <div class="extras">
            <p class="extraHeading">Mais aussi...</p>
            <img src="./media/accommodation/ACTIVITES/LeafShadow2.png" alt="png">

            <div class="list">
                <div class="list1">
                    <p>Les Gorges de l'Hérault</p>
                    <p>Accro-branche</p>
                    <p>Canoë-kayak</p>
                    <p>VTT / Vélo / Randonnées</p>
                    <p>Pêche</p>
                </div>
                <div class="list2">
                    <p>Le Lac de Cécélès</p>
                    <p>Chiens de traineau</p>
                    <p>Tennis</p>
                    <p>Escalade : via ferrata</p>
                    <p>Piscine</p>
                </div>
            </div>



        </div>



        
    
    
    
    </div>


    <?php include(__DIR__."/templates/footer.php")?>

            

    <script src="./src/plugins/jquery.min.js"></script>
    <script src="./src/plugins/slick-1.8.1/slick/slick.min.js"></script>
    <script src="./src/plugins/aos-master/dist/aos.js"></script>
    <script src="./src/plugins/jsScripts/scripts.js"></script>
    <script src="./src/plugins/jsScripts/navMenu.js"></script>
    <script src="./src/plugins/jsScripts/serviceContentUnfolder.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>


    <script>
        const pageElements = getPageElements(3);
        const sectionsHeights = [6200 + 3300, 9650, 7200];


        for(const i of [0, 1, 2]){
            expanAndFoldSection(pageElements[i], sectionsHeights[i]);
            resizeSectionOnWindowResize(pageElements[i]);
        }


        
        giveColorToMenuElements(3);




    </script>

</body>
</html>


