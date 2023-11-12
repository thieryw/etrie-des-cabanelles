<?php 

include_once(__DIR__."/templates/listedElements.php");


$presentationItems = [
    ['PROPRIÉTAIRES', 'Écurie de', './media/stables/services/presentation/menuEcurieDeProprio.jpg', '#ownerStable'],
    ['NAISSANCES', 'Accompagnement', './media/stables/services/presentation/MenuNaissances.jpg', '#birthControl'],
    ['POULAINS', 'Éducation', './media/stables/services/presentation/MenuEducation.jpg', '#cathEducation'],
    
];

$presentationItems2 = [
    ['SANTÉ', 'Soins', './media/stables/services/presentation/MenuSoins.jpg', '#health'],
    ['DÉVELOPPEMENT<br> PERSONNEL', '"Être" avec les chevaux', './media/stables/services/presentation/MenuDeveloppementPerso.jpg', '#horseCompany'],
    ['D\'ÉQUITATION', 'École', './media/stables/services/presentation/MenuEcole.jpg', '#school'],
];

$services = [
    ['HorseIcon.png', 'Aide au choix de l\'étalon adapté<br> à la jument'],
    ['CameraIcon.png', 'Suivi de gestation :<br> vidéosurveillance (nous<br> habitons sur place)'],
    ['PacifierIcon.png', 'Naissance (surveillance<br> rapprochée)'],
    ['PregnancyIcon.png', 'Suivi de la relation entre la<br> jument et son gardien durant<br> ces étapes de transformation'],
    ['HorseRelationIcon.png', 'Gestion des premières étapes<br> de la relation à l\'humain'],
    ['baby-bottle1.png', 'Accompagnement pour un sevrage progressif en douceur (en respect du 
    lien poulinière et poulain) des besoins des deux']
];

$technicalDetails = [
    ['CalendarIcon.png', 'Cours hebdomadaires d\'1h30'],
    ['FamilyIcon.png', 'Ateliers en famille parents/enfants pendant les vacances scolaires'],
    ['AwardIcon.png', 'Cours assurés par Lucile Carré, titulaire d\'un BPJEPS en Activités Équestres'],
    ['ToyIcon.png', 'Cours pour les tout petits à partir de 2 ans et demi'],
];

function createContactButton(){

    ?>
      <a href="./contact.html" class="orangeButton">
            <p>
                Contact
            </p>
      </a>

    <?php
}



?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="L’étrier des Cabanelles, 
        ce sont aussi de nombreux services et accompagnements sur-mesure. 
        De l’écurie de propriétaires à l’accompagnement des naissances, 
        en passant par les cours d’équitation, nous pourrons vous 
        guider dans les meilleures conditions vers la 
        réalisation de votre projet !"
    >
    <title>Ecuries</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/stables/service.css">
    <link rel="stylesheet" href="./plugins/aos-master/dist/aos.css">
</head>
<body>

    <?php  include(__DIR__."/templates/navMenu.php"); ?>

    <div class="banner stableServiceBanner">
        <div class="mainHeading">

            <img src="./media/LogoIcon.png" alt="logo" class="logoIcon">
            <p>Nos</p>
            <h1 class="mainTitle">Services</h1>

        </div>
    </div>

    <div class="pagePresentation servicePresentation">

        <img class="leafShadow" src="./media/accommodation/LeafShadow.png" alt="leafShadow">
        <div class="Items">
            <div class="pageItems firstRow" data-aos="fade-down">
                <?php
                    getItems($presentationItems,"", false);
                ?>
            </div>
            <div class="pageItems secondRow" data-aos="fade-up">
                <?php
                    getItems($presentationItems2,"", false);
                ?>
            </div>


        </div>
        
    </div>

    <section id="ownerStable" class="mobileSection">
        
        <?php

        createExpandButton("Écurie de Propriétaires");


        ?>


        <div class="sectionImages">

        </div>


        <div class="sectionParagraph">
            <h2 data-aos="fade-down"><span style="text-transform: uppercase; ">é</span>curie de</h2>
            <h1 data-aos="fade-up">propriétaires</h1>

            <p class="generalText">
                <strong style="font-size: 1.2em;">D</strong>e par notre approche holistique, nos infrastructures 
                éthiques et nos 23 ans d'expérience, nous mettons tout 
                en œuvre pour que votre cheval ait un mode de vie qui 
                respecte sa propre physiologie, qui soit adapté à son 
                âge, à sa santé, ainsi qu'aux différentes saisons. 
                À l'écoute de votre projet de vie particulier avec votre 
                équidé, nous vous proposons un accompagnement durable et 
                personnalisé, basé sur la (ré)harmonisation de la relation 
                "gardien & cheval".</p>
            <p class="generalText">
                Dans le cas d'une situation problématique, 
                il s'agira de renouer le dialogue parles dimensions 
                corporelles et énergétiques. Pour cela, nous fournissons 
                un diagnostic et proposons des solutions qui prennent en 
                compte les transformations à apporter pour le cheval, 
                ainsi que pour la cavalière ou le cavalier 
                (titulaire du Brevet Fédéral d'Encadrement d'Équitation Éthologique - BFEEE 1 & 2). 
            </p>

            <p class="subtext">
                Convient aux chevaux de tous âges, du poulain au cheval retraité.
            </p>
        
            <div class="mobileDivider"></div>
        </div>


        <div class="price">
            <h2>Tarifs</h2>
            <div class="divider"></div>
            <p class="generalText">
                Tarifs "pension" ou "accompagnement et travail"<br><br>
               <strong style="font-size: 1.1em; ">240€</strong> à <strong style="font-size: 1.1em; ">360€</strong> par mois en fonction de la formule choisie
            </p>

            <p class="subtext">
                Chaque formule étant sur-mesure, 
                elle donne lieu à une tarification différente.
            </p>

            <?php

                createContactButton();
            ?>


 
        
        
        </div>

        
    
    
    
    
    </section>

    <section id="birthControl" class="mobileSection">

        <?php createExpandButton("Naissances") ?>
        <img src="./media/stables/services/birthControl/BackgroundWithPic.jpg" alt="background" class="background">
        <h2 class="serviceHeading">Nous Proposons

        </h2>
        <div class="services birthControlServices">
            <?php getServiceList($services, "./media/stables/services/birthControl/") ?>
        </div>

        <div class="sectionParagraph">
            <h2 data-aos="fade-down">Accompagnement</h2>
            <h1 data-aos="fade-up">NAISSANCES</h1>
            <p class="generalText" data-aos="fade-zoom-in" data-aos-dellay="300">
                <strong style="font-size: 1.2em;">L</strong>es 
                étapes de la vie des chevaux demandent expérience et 
                <strong>surveillance 
                rapprochée</strong>
                . Après un accompagnement complet allant  de la conception 
                jusqu’à la naissance, les poulains évolueront dans un espace de vie adapté. Un 
                <strong>grand paddock sécurisé</strong>
                 est à disposition. Les boxes spécifiques et spacieux de
                6x3m leurs garantiront le confort et la place nécessaires. Nous leur réservons une
                <strong>alimentation étudiée</strong>
                 qui leur assurera une croissance et un développement 
                sains. Enfin, la nature environnante sera des plus propices pour que les poulains 
                découvrent le monde dans les meilleures conditions.
            </p>
            <?php

            createContactButton();

            ?>

        
 
        </div>
    </section>

    <section id="cathEducation" class="mobileSection">

        <?php createExpandButton("Éducation Poulains") ?>


        <div class="sectionParagraph" data-aos="fade">
            <h2><span style="text-transform: uppercase; ">é</span>ducation</h2>  
            <h1>poulains<br>&<br>jeunes chevaux</h1>
            <p class="subtext">
                Convient aux poulains de 1 à 3 ans.
            </p>

            <p class="generalText">
                <strong style="font-size: 1.2em;">T</strong>ous les 
                gens de chevaux connaissent l'importance des premières phases de 
                relation à l'humain et d'éducation des poulains. 
                Notre approche, à la fois globale 
                et progressive, s'inscrit dans le respect de 
                leur développement physique et 
                psychologique. 
                L'objectif est d'intégrer l'éducation dans le 
                quotidien des poulains tout en 
                préservant 
                <strong>leur sensibilité</strong>
                 et leur 
                <strong>envie de communiquer</strong>
                 de manière 
                durable. Le but est aussi de développer un 
                <strong>lien harmonieux</strong>
                 entre le/la 
                gardien(ne) et le poulain. 
            </p>

            <p class="generalText secondPara">
                Un 
                <strong>diagnostic comportemental</strong>
                 initial aboutit à un 
                programme personnalisé. On obtiendra ainsi des bases 
                solides pour votre projet 
                de vie avec votre équidé ! À partir de 3 ans, 
                la continuité de cette approche à 
                pied conduit naturellement le poulain 
                vers "l'approche montée", en confiance et 
                avec sérénité. 
            </p>

            <?php
            createContactButton();
            ?>
        </div>

        <img src="./media/stables/services/poulainDetoure.png" alt="backgroundJpg">

    </section>

    <section id="health" class="mobileSection">

    <?php createExpandButton("Soins Santé") ?>

        <div class="sectionParagraph mainParagraph" data-aos="fade-left">
            <h2>Soins</h2>
            <h1>santé</h1>
            <p class="generalText">
                <strong style="font-size: 1.2em;">N</strong>ous 
                proposons des soins naturels visant à garder en 
                bonne santé vos chevaux
                ainsi que leur biomécanique et leur bien être en général. 
                Outre des soins 
                préventifs, nous proposons :
                
            </p>
                
        </div>
        <ul data-aos="fade-right">
            <li class="generalText"><span class="dots">.</span>Ostéopathie</li>
            <li class="generalText"><span class="dots">.</span>Micronutrition cellulaire</li>
            <li class="generalText"><span class="dots">.</span>Soins dentistes</li>
            <li class="generalText"><span class="dots">.</span>Communication animale</li>
            <li class="generalText"><span class="dots">.</span>Traitement homéopathique</li>
            <li class="generalText"><span class="dots">.</span>Vermifugation naturelle</li>
            <li class="generalText"><span class="dots">.</span>Gemmothérapie : <span class="specification">macérât de bourgeons</span></li>
            <li class="generalText"><span class="dots">.</span>Podologie : <span class="specification">parage pour pieds nus</span></li>
            <li class="generalText"><span class="dots">.</span>Aromathérapie : <span class="specification">huiles esentielles</span></li>
            <li class="generalText"><span class="dots">.</span>Shiatsu : <span class="specification">acupression sur les méridiens</span></li>

        </ul>

        <div class="sectionParagraph bottomParagraph" data-aos="fade-left">
            <p class="subtext">
                En fonction de vos demandes et de la problématique rencontrée
                : soins sur-
                mesure proposés.
              
            </p>
            <?php
            createContactButton();
            ?>

        </div>
    </section>

    <section id="horseCompany" class="personalDevelopment mobileSection">
        <?php createExpandButton("\"Être\" avec les chevaux") ?>
        <div class="sectionParagraph" data-aos="fade">
            <h2 class="largeDeviceTitle2">"<span style="text-transform: uppercase;">ê</span>tre"</h2>
            <h1 class="largeDeviceTitle1">avec les chevaux</h1>

            <h2 class="mobileDeviceTitle2">"<span style="text-transform: uppercase;">ê</span>tre" avec les</h2>
            <h1 class="mobileDeviceTitle1">chevaux</h1>

            <p class="subtext">
                Comment se reconnecter à nous-mêmes, 
                à nos propres problématiques, comment changer ?
            </p>

            <p class="generalText">
               <strong style="font-size: 1.2em; ">N</strong>ous vous proposons 
                <strong>un atelier personnalisé</strong>
                 axé sur l'exploration des 
                problématiques de vie rencontrées par chacun. 
                Il s'agit d'un cheminement vers 
                soi, d'une 
                <strong>introspection</strong>
                , guidée par  les chevaux.
                Cet atelier s'adresse à toute personne qui se sent «
                appelée
                » par les chevaux, 
                aux personnes ayant eu des 
                <strong>expériences traumatisantes</strong>
                 avec les chevaux 
                (peur particulière, histoire particulière, 
                envie d'un nouveau départ avec le 
                cheval), mais également aux personnes ayant 
                rencontré des problématiques 
                dans leur vie indépendamment des chevaux.
            
            </p>

            <a href="./contact.html" class="orangeButton">
                <p>Contact</p>
            </a>
            
        
        </div>



        <img class="schoolJpg" src="./media/stables/services/AnnePic.jpg" alt="AnneJpg">


            
    
    
    </section>

    <div class="mobileSection schoolMobile">
        <?php createExpandButton("École d'Équitation") ?>
        <section id="school" class="personalDevelopment">
            <div class="sectionParagraph">
                <h2 data-aos="fade-right"><span style="text-transform: uppercase;">é</span>cole d'Équitation</h2>
                <h1 data-aos="fade-left">« poney feel »</h1>


                <p class="generalText" data-aos="fade-zoom-in" data-aos-dellay="300">
                    <strong style="font-size: 1.2em">B</strong>ienvenue dans notre école d'équitation créée en 2012. 
                    Atmosphère calme et détendue, ambiance chaleureuse et 
                    familiale, c'est dans ce cadre agréable que nous proposons 
                    un apprentissage progressif de l'équitation dans le respect 
                    du rythme de chacun. Ici, la priorité est donnée à la 
                    relation et à l'écoute. En puisant dans diverses disciplines 
                    (éthologie, équitation centrée, yoga) nous recherchons 
                    une meilleure conscience du corps, ainsi que la transmission 
                    de valeurs telles que le respect, la bienveillance et 
                    l'ouverture d'esprit (envers l'autre comme envers soi). 
                    Nos démarches se font en cohérence avec notre engagement 
                    écologique qui transparaît dans notre fonctionnement. 
                    Dans la relation à la Nature, à l'Animal et à l'Autre, 
                    l'équitation devient école du corps et de la vie.

                    
                </p>
                <a href="./contact.html" class="orangeButton">
                    <p>Contact</p>
                </a>
                    
                    
            </div>

                    

            <img src="./media/stables/services/EcolePic.jpg" alt="AnneJpg">

            <img src="./media/stables/services/BlockWithArrow.png" alt="arrowPng" class="backgroundArrow">
                    
    
    
        </section>

        <section class="technicalDetails">
            <div class="listedDetails">
                <?php getServiceList($technicalDetails, "./media/stables/services/school/"); ?>
            </div>

            <div class="sectionParagraph detailParagraph">
                <p class="generalText">
                    Les groupes sont constitués par âge et par niveau. 
                    Ils exploreront <strong>une thématique par semaine</strong>, oscillant 
                    entre jeux à poneys et ateliers techniques. 
                    L'enfant y apprend à communiquer avec son poney à pied, 
                    et se familiarise avec ses repères spatiaux corporels à 
                    dos de poney. Des séances de reconnexion à la nature 
                    en parcours variés leur permettront de partir à 
                    l'extérieur dans une dynamique de groupe organisée 
                    autour de petits jeux.
                </p>
                <p class="generalText">
                    À l'occasion des vacances scolaires,  
                    nous proposons des <strong>stages multi-activités</strong> à thèmes 
                    Équestre (randonnée, trek, préparation des galops, soins) 
                    et Nature (environnement, faune, flore, orientation).
                </p>
            </div>

        </section>

        <section class="pricing">
            <img src="./media/stables/services/school/poneyGirl.png" alt="moneyGirlPgn">
            <div class="sectionParagraph" data-aos="fade">
                <h2>Tarifs</h2>
                <div class="underline"></div>
                <p class="generalText subscription">
                    Abonnement annuel sur 34 semaines :   
                </p>

                <div class="agePrice">
                    <p class="generalText">
                        Pitchouns (3 à 5 ans) <strong>430€</strong>			 
                    </p>
                    <p class="generalText">
                        6 à 8 ans <strong>480€</strong>			 
                    </p>
                    <p class="generalText">
                        9 à 12 ans	<strong>560€</strong>		 
                    </p>
                    <p class="generalText">
                        13 à 15 ans <strong>630€</strong>			 
                    </p>
                    <p class="generalText">
                        16 ans et plus <strong>680€</strong> 			
                    </p>
                </div>
                    
                <p class="generalText sessionCardPrice">
                    Cartes de 10 séances<br class="cardLineBreak"><span><strong>160€</strong> à <strong>230€</strong> selon la tranche d’âge.</span> 			
                </p>

                <p class="subtext">
                    Inscriptions en septembre. 
                    Possibilité d'arriver en cours 
                    d'année en fonction des places.
                </p>

                <div class="lessonPrices">
                    <p class="generalText">
                        Cours d’essai
                    </p>

                    <p class="generalText">
                        Cavalier de passage <span class="prices exeption"><span class="curly-brasses">}</span><strong>30€</strong> (- de 12 ans 25€ / Pitchouns <strong>20€</strong>)</span>			
                    </p>
                    <p class="generalText">
                        Initiation       			
                    </p>
                    <p class="generalText">
                        Cours particulier <span><strong>35€</strong> (- de 16 ans 30€)</span>			
                    </p>
                    <p class="generalText">
                        Stages vacances <span class="prices exeption"><strong>30€</strong> la demi-journée <span>/</span> <strong>50€</strong> la journée</span> 			
                    </p>

                    <p class="subtext mobileText">la demi-journée <span class="prices">30€</span></p>
                    <p class="subtext mobileText">la journée <span class="prices">50€</span></p>

                    <p class="generalText lastPrice">
                        Réduction familles <span class="prices exeption"><strong>-5%</strong> 2ème cavalier <span>/</span> <strong>-10%</strong> à partir du 3ème</span> 			
                    </p>

                    <p class="subtext mobileText">2ème cavalier <span class="prices">-5%</span></p>
                    <p class="subtext mobileText">à partir du 3ème <span class="prices">-10%</span></p>

                </div>
                    
            </div>
    

        </section>


    </div>



    <?php include(__DIR__."/templates/footer.php")?>

    <script src="./plugins/jquery.min.js"></script>
    <script src="./plugins/aos-master/dist/aos.js"></script>
    <script src="./plugins/jsScripts/navMenu.js"></script>
    <script src="./plugins/jsScripts/serviceContentUnfolder.js"></script>
    <script>
        AOS.init({
            startEvent: 'load',
            duration: 1000,
        });
    </script>

    <script>
        const pageElements = getPageElements(6);
        const sectionsHeights = [4800, 6000, 4050, 3150, 3500, 7800];

        for(const i of [0, 1, 2, 3, 4, 5]){
            expanAndFoldSection(pageElements[i], sectionsHeights[i]);
            resizeSectionOnWindowResize(pageElements[i]);
        }

        giveColorToMenuElements(2);
    </script>
    
   
</body>
</html>