<?php 

include_once(__DIR__."/templates/carousel.php");
include_once(__DIR__."/templates/listedElements.php");


$sliderContent = [
    ["./media/place/Caroussel1.jpg", 
    "Savonnerie Natur'aile", 
    "Savonnerie biologique certifiée 
     Nature et Progrès avec un procédé de Saponification à froid.
     Proposé par Claire Secondy.", 
    "https://natur-aile.com/"],

    ["./media/place/Caroussel2.jpg", 
    "Vini Yoga", 
    "Pour renouer avec son corps, son souffle et son intériorité en douceur.
    Proposé par Claire Secondy.", 
    "https://premayog.com/"],

    ["./media/place/Caroussel5.jpg", 
    "École d'équitation", 
    "Au coeur d’une approche basée sur la relation enfant-poney.
    Proposé par Lucile Carré.", 
    "./stables2.html"],

    ["https://www.youtube-nocookie.com/embed/0bwlD32_3Mk", 
    "Les Bocaux du Pic", 
    "Conserverie végétale locale.
     Transformaton artisanale 
     de fruits et légumes.
     Proposé par Sarah Bellini.", 
    "https://www.facebook.com/Bocaux-des-Jardins-du-Pic-157237508292812/"],





    
];

$staffArray = [
    ['./media/place/1Lucile.jpg', 'Lucile Carré', 'Monitrice de l\'École d\'Équitation<br>PONEY FEEL'],
    ['./media/place/Equipe2.jpg', 'Maeva Guillon', 'Travail des jeunes chevaux,<br>Monitrice'],
    ['./media/place/3Claire.jpg', 'Claire Secondy', 'Fondatrice de la Savonnerie<br>NATUR\'AILE'],
    ['./media/place/4Sarah.jpg', 'Sarah Bellini', 'Fondatrice des<br>BOCAUX DU PIC'],
    ['./media/place/Equipe5.jpg', 'Frédéric Barthuet', 'Responsable de l\'entretien des écuries'],
    ['./media/place/Equipe4.jpg', 'Laura Lenert', 'Shiatsu Equin et soin des chevaux'],
    ['./media/place/7Ben.jpg', 'Ben Bellini', 'Permaculture, séchage des légumes'],
    ['./media/place/Equipe1.jpg', 'Philippe Artaud', 'Co-fondateur, énergies renouvelables,<br>aménagement des écuries, habitats<br>insolites, gestion'],
    ['./media/place/Equipe3.jpg', 'Anne Guillaumont', 'Co-fondatrice, monitrice, accompagnement<br>éducation et travail des poulains et chevaux,<br>soins naturels, Equi-coaching'],
]


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="L'Étrier des Cabanelles est 
        un lieu d'accueil et de rencontres. C'est d'abord un espace 
        bienveillant d'échanges, de prises de conscience , de connexion à 
        la Nature, nourri par le Cheval et 
        avec un engagement éthique et environnemental depuis 1996."
    >
    <title>Lieu</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/place/place.css">
    <link rel="stylesheet" href="./style/carousel.css">
</head>
<body>

    <?php  include(__DIR__."/templates/navMenu.php"); ?>



    <div class="banner placeBanner">
        <div class="mainHeading">
            <img src="./media/LogoIcon.png" alt="logo" class="logoIcon">
            <h1 class="mainTitle"><span style="text-transform: uppercase">é</span>co-lieu</h1>
            <p>Cohabiter avec <span>La Nature</span></p>

            <div class="headingDivider headingDivider2"></div>
        </div>
    
    
    </div>

    <div class="presentation mobileSection">
        <div class="presentationContent">
            <hr size="1px">
            <img src="./media/place/PlantIcon.png" alt="HorseIconPng">
            <h2 data-aos="fade-down">Bienvenue</h2>
            <p class="generalText">
                Situé sur l'axe Montpellier-Quissac, sur la 
                commune de Valflaunès (Hérault), l'Étrier des 
                Cabanelles est à la fois immergé en pleine nature 
                et à proximité de la ville de Montpellier. C'est un 
                éco-lieu et une écurie écologique et éthologiquede 
                qualité où collaborent plusieurs activités artisanales 
                et agricoles, dans une même logique de préservation de 
                l'environnement et de relation au vivant. Vous en apprendrez 
                ici un peu plus sur notre manière de vivre et d'exercer 
                nos activités en harmonie avec la nature.
            </p>
            <hr size="1px">

        </div>
    </div>   

    <section class="nature boxSection mobileSection" id="sectionNature">
        <article>
            <h2>La Nature Alentour</h2>
            <div class="divider"></div>
            <p class="generalText articleParagraph hiddenText" id="articleNature">
                Surplombé de l'Hortus et du Pic-Saint-Loup - montagnes 
                emblématiques de l'Hérault -, le site sur lequel nous 
                sommes installés est classé "Natura2000", ce qui 
                assure la préservation de sa biodiversité. 
                Il dispose également de différents réseaux de 
                promenades naturalistes (le Réseau Vert, les GR) 
                et d'espaces naturels non-clôturés dont vous pourrez 
                profiter. Le site  est de plus idéal pour nos chevaux 
                puisqu'il offre une grande variété de chemins, 
                de sols et de dénivelés, permettant de stimuler 
                et de développer leurs aptitudes physiques. 
                Vous entendrez évidemment les cigales, mais 
                serez aussi bercés par des hirondelles chantant 
                depuis les écuries où elles élisent domicile au printemps. 
                L'Etrier des Cabanelles est en somme un éco-lieu tout indiqué 
                pour se ressourcer et se reconnecter à la Nature, à sa nature.
            </p>

            <div class="readMore">
                <p class="generalText readMoreButton">
                    Lire Plus
                </p>
                <p class="generalText readLessButton">
                    Lire Moins
                </p>
            </div>

        </article>
        <img src="./media/place/clifs.jpg" alt="horseImg">
    </section>

    <section class="ethics boxSection mobileSection" id="sectionEthics">
        <article>
            <h2 class="normalTitle">Valeurs autour de l'Éco-lieu</h2>
            <h2 class="mobileTitle">Nos Valeurs</h2>
            <div class="divider"></div>
            <p class="generalText articleParagraph hiddenText" id="articleEthics">
            L'Étrier des Cabanelles est un 
            <strong>lieu d'accueil et de rencontres</strong>. C'est d'abord un
            espace bienveillant d'échanges, de <strong>prises de conscience</strong>
            , de connexion à la Nature, nourri par le Cheval et avec un 
            <strong>engagement éthique</strong> et 
            environnemental depuis 1996. 
            Nous employons des techniques exclusivement 
            non-polluantes ainsi que des matériaux sains, 
            et n'utilisons aucun produit 
            phytosanitaire. C'est aussi un espace de partage, 
            de collaboration vers des 
            solutions amélioratrices de vie, protectrices de la 
            faune et de la flore. Nous aimons travailler en lien avec le 
            <a href="./partenar.html">réseau local</a> et cultivons 
            aussi un potager en permaculture pour aller vers 
            <strong>l'autonomie alimentaire</strong>. En bref : un lieu où « paraître » 
            s'efface et « être » se dévoile. 
            </p>
            <div class="readMore">
                <p class="generalText readMoreButton">
                    Lire Plus
                </p>
                <p class="generalText readLessButton">
                    Lire Moins
                </p>
            </div>
        </article>
        <img src="./media/place/Valeurs.jpg" alt="horseImg">
    </section>
    <section class="photovolta boxSection mobileSection" id="sectionEthics">
        <article>
            <h2 class="normalTitle">Écuries à Énergies Positives</h2>
            <h2 class="mobileTitle">Energies Positives</h2>
            <div class="divider"></div>
            <p class="generalText articleParagraph hiddenText" id="articleEthics">
            En 2008, nous avons couvert nos bâtiments de 
            <strong>panneaux photovoltaïques</strong> et sommes ainsi devenus 
            <strong>producteurs d'électricité verte</strong>. Des panneaux 
            thermiques sont aussi installés pour l'eau chaude
             solaire ainsi qu'un traqueur 
            solaire pour l'autoconsommation d'électricité verte. 
            L'idée est de produire en 
            fonction de notre propre consommation énergétique. 
            En 2018, notre projet 
            innovant d autonomie énergétique a été 
            <strong>retenu par la région Occitanie</strong>. Dans 
            les mois à venir, nous allons produire notre propre électricité, 
            notre propre chauffage.
            Des <strong>visites explicatives</strong> seront organisées et nous 
            essaierons de répondre le 
            plus simplement du monde à vos questions. 
            Nous sommes toujours heureux de 
            partager nos expériences sur les énergies vertes 
            avec tous ceux qui souhaitent 
            se lancer sur cette voie. 
            </p>
            <div class="readMore">
                <p class="generalText readMoreButton">
                    Lire Plus
                </p>
                <p class="generalText readLessButton">
                    Lire Moins
                </p>
            </div>
        </article>

        <img src="./media/place/photovolta.jpg" alt="photovolta">
    </section>
    <section class="infrastructure boxSection mobileSection">
        <article>
            <h2 class="normalTitle">Nos Infrastructures Équestres</h2>
            <h2 class="mobileTitle">Nos Infrastructures</h2>
            <div class="divider"></div>
            <ul class="generalText">
                <li class="underline"><span>.</span><a href="./stables2.html">Installations équestres</a></li>
                <li class="underline"><span>.</span><a href="./accommodation.html">Hébergements</a></li>
                <li><span>.</span>Savonnerie biologique</li>
                <li><span>.</span>Conserverie végétale locale</li>
                <li><span>.</span>Club-house, salle commune à toutes les activités</li>
            </ul>

            <p class="subtext">
                Certaines de ces structures sont susceptibles d’être 
                privatisées pour l’organisation de vos événements en pleine nature.
            </p>

            <a href="./contact.html" class="orangeButton">
                <p>Contact</p>
            </a>
        </article>
        <img class="withArrow" src="./media/place/house.jpg" alt="horseImg">
        <img class="withoutArrow" src="./media/place/Presentation3.jpg" alt="horseImg">
    </section>



    <section class="sectionWithSlider">
        <h2 class="sliderHeading normalTitle">Coopérer sur le même site :</h2>
        <h2 class="sliderHeading mobileTitle">Sur notre site</h2>
        <div class="divider"></div>
        <img class="sliderBackground" src="./media/place/PlantBackground.png" alt="plantBackground">

            <!--<div class="leftArrowContainer"></div>
            <div class="rightArrowContainer"></div>-->
        <div class="slideWrapp">
            <div class="variousContentSlider">
                <?php 
                    for($i = 0; $i < sizeof($sliderContent); $i++){
                        if($i == 3){
                            createSlideWithImageOrVideo(true, $sliderContent[$i][0], $sliderContent[$i][1],
                                                        $sliderContent[$i][2], $sliderContent[$i][3]);

                            continue;
                        }
                            createSlideWithImageOrVideo(false, $sliderContent[$i][0], $sliderContent[$i][1],
                                                        $sliderContent[$i][2], $sliderContent[$i][3]);
                    }
                

                ?>
            </div>
            <!--<iframe width="560" height="315" src="https://www.youtube.com/embed/nrfv1Hv9290" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
                <!--<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/0bwlD32_3Mk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

       </div>

    </section>

    <section class="clapNature mobileSection">
            <iframe width="720" height="415" src="https://www.youtube-nocookie.com/embed/ltY-XV2d-e8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="sectionParagraph">
                <img src="./media/place/QuotationMarks.png" alt="quot">
                <h2>"Ils ne savaient pas que c'était impossible alors ils l'ont fait".</h2>
                <p class="generalText mobileText">Vivez en images les témoignages
                    d'Anne et Philippe, co-fondateurs du lieu.
                </p>
                <p class="generalText normalText">
                    Découvrez notre philosophie, nos engagements, notre travail 
                    et notre éco-lieu au travers d'un épisode de Clap Nature. 
                    Le journaliste Guillaume Bagnolini est venu à notre 
                    rencontre pour vous faire partager en images les 
                    témoignages d’Anne et Philippe, co-fondateurs du lieu.
                </p>
            </div>

    </section>

    <section class="staffPresentation mobileSection" id="staffWrapp">
        <h2 class="normalTitle">Rencontrez notre <span>é</span>quipe</h2>
        <h2 class="mobileTitle">Notre <span>é</span>quipe</h2>
        <p class="generalText" id="showLess">Moins</p>
        <p class="generalText" id="showMore">Plus</p>

        <div class="divider"></div>
        <div class="row row1">
            <?php
            for($i = 0; $i < 3; $i++){
                getStaffMember($staffArray[$i][0], $staffArray[$i][1], $staffArray[$i][2]);
            }
            ?>
        
        </div>

        <div class="row row2">
            <?php

                for($i = 3; $i < 6; $i++){
                    getStaffMember($staffArray[$i][0], $staffArray[$i][1], $staffArray[$i][2]);
                }


            ?>
        </div>

        <div class="row row3">
            <?php
                for($i = 6; $i < 9; $i++){
                    getStaffMember($staffArray[$i][0], $staffArray[$i][1], $staffArray[$i][2]);
                }
            ?>
        </div>

    
    
    </section>

    <?php include(__DIR__."/templates/footer.php")?>

    <script src="./plugins/jquery.min.js"></script>
    <script src="./plugins/jsScripts/navMenu.js"></script>
    <script src="./plugins/jsScripts/serviceContentUnfolder.js"></script>
    <script src="./plugins/slick-1.8.1/slick/slick.min.js"></script>

    <script>
        const textSection = getSectionWithHiddenText(3);

        showMoreLessText(textSection[0], 1400, 2600, 1080);
        showMoreLessText(textSection[1], 1400, 2450, 1080);
        showMoreLessText(textSection[2], 1500, 2750, 1000);


        resizeTextSectionOnWindowResize(textSection[0]);
        resizeTextSectionOnWindowResize(textSection[1]);
        resizeTextSectionOnWindowResize(textSection[2]);

        resizeStaffSection(350, 11300);


        giveColorToMenuElements(1);
    </script>

    <script>
        $(document) .ready(function(){
            $('.variousContentSlider').slick({
              centerPadding: "0px",
              centerMode: true,
              slidesToShow: 3,
              slidesToScroll: 1,
              dots: true,
              focusOnSelect: true ,
              arrows: true
            });
        });
    </script>
</body>
</html>