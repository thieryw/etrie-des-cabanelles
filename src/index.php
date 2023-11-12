<?php 
    include_once(__DIR__."/templates/carousel.php"); 


    $sliderElements = [
        'car1.jpg',
        'car2.jpg',
        'car3.jpg',
        'car4.jpg'
    ];
    
    
    
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Situé sur la commune 
        de Valflaunès, au cœur 
        de l' Hérault, l'Étrier des Cabanelles est 
        un éco-lieu abritant une écurie écologique 
        et éthologique de qualité, et où 
        cohabitent ainsi plusieurs activités 
        artisanales et agricoles."
    >

    <title>l'Étrier des Cabanelles</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/welcomePage/welcome.css">
    <link rel="stylesheet" href="./plugins/vegas/dist/vegas.css">
    <link rel="stylesheet" href="./style/carousel.css">
    <link rel="stylesheet" href="./plugins/aos-master/dist/aos.css">
</head>
<body>

    

    <?php  include(__DIR__."/templates/navMenu.php"); ?>
    
    
    <div class="banner welcomeBanner">
        <div data-aos="fade" class="mainHeading">

            <img src="./media/LogoIcon.png" alt="logo" class="logoIcon">
            <h1>L'<span class="capital">é</span>trier <span class="smallerText">des</span> <span class="adjustedWord">Cabanelles</span></h1>
            <p><span class="capital">é</span>co-lieu <br class="brBanner"> autour du <span class="orange">cheval</span></p>

            <div class="headingDivider headingDivider2"></div>
        </div>
    
    
    </div>

    <section class="placePresentation">
        <div class="sectionParagraph">
            <h2 data-aos="fade-left"><span class="capital">à</span> propos du <strong>Lieu</strong>,</h2>
            <h2 data-aos="fade-right"><span class="capital">à</span> propos de <strong>Nous</strong></h2>

            <div class="smallDivider"></div>
            <p class="generalText">
            Situé sur la commune de Valflaunès, au cœur de l'
            <strong>Hérault</strong>, l'Étrier des Cabanelles est à la fois 
            <strong>immergé en pleine nature</strong>
            et à proximité de la ville de 
            Montpellier. C'est un 
            <a href="./place.html"><strong>éco-lieu</strong></a> abritant une écurie 
            <strong>écologique et éthologique</strong> 
            de qualité, et où cohabitent ainsi plusieurs activités artisanales et agricoles, 
            dans une même logique de 
            <strong>préservation de l'environnement</strong>
            et de relation au
            vivant. 
          
            </p>

            <div class="orangeButton">
                <a href="./place.html"><p>Découvrir</p></a>
            </div>

        </div>

        <iframe width="600" height="380" src="https://www.youtube-nocookie.com/embed/ltY-XV2d-e8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>

    <div class="parallax parallaxPlace"></div>

    <section class="stablePresentation">
        <img class="backGround" src="./media/welcome/stablePresentation/BackPic.jpg" alt="background">

        <img class="stableImage1" src="./media/welcome/stablePresentation/Ecuries.jpg" alt="stableJpg">
        <img class="stableImage2" src="./media/welcome/stablePresentation/Services.jpg" alt="stableJpg">

        <div class="sectionParagraph stableServiceParagraph">
            <h3 data-aos="fade-left">Du côté des</h3>
            <h2 data-aos="fade-right">Écuries</h2>
            <div class="smallDivider"></div>
            <p class="generalText">
            Nous proposons, une 
            <strong>pension de qualité</strong> au sein de laquelle, depuis 1997, nous
            mettons nos compétences et notre savoir-faire au service de 
            l'accompagnement du binôme « cheval & gardien ». Par le prisme d'une 
            <strong>approche éthique</strong>, <strong>naturelle</strong>, et surtout 
            <strong>holistique</strong>
            , nous guiderons ceux qui le souhaitent dans la 
            compréhension du langage du cheval, afin de permettre une meilleure 
            communication et de tisser ainsi une relation plus dense.
            </p>
            <div class="orangeButton">
                <a href="./stables1.html">
                    <p>Découvrir</p>
                </a>
            </div>
        </div>

        <div class="sectionParagraph serviceParagraph">
            <h3>Nos Services</h3>
            <div class="smallDivider"></div>
            <p class="generalText">
                L’Étrier des Cabanelles, ce sont aussi de nombreux services et 
                <strong>accompagnements sur-mesure</strong>. De l’écurie de propriétaires à 
                l’accompagnement des naissances, en passant par les cours 
                d’équitation, nous 
                pourrons vous guider dans les meilleures conditions 
                vers la réalisation de <strong>votre projet</strong>!
            </p>

            <div class="orangeButton">
                <a href="./stables2.html">
                    <p>Découvrir</p>
                </a>
            </div>
        </div>


    </section>

    <div class="parallax parallaxStables"></div>

    <section class="accommodationPresentation">

        <div class="sectionParagraph accommodationParagraph">
            <h2 data-aos="fade-left">Nos Hébergements</h2>
            <h3 data-aos="fade-right">Pour un séjour <span>Ressourçant</span></h3>
            <div class="smallDivider"></div>
            <p class="generalText">
                Si vous êtes à la recherche d’<strong>un endroit calme</strong>, 
                confortable et chaleureux pour vous ressourcer 
                le temps d’un séjour, nos hébergements sont faits 
                pour vous ! Nous mettons à votre disposition tous 
                les services nécessaires pour <strong>un confort optimal</strong> 
                (allant du petit déjeûner bio local servi sur la 
                terrasse, aux matelas haut de gamme à mémoire de 
                forme, en passant par la piscine privée). 
                La majesté des montagnes et la magie de 
                la nature environnante feront le reste.
            </p>


            <div class="orangeButton">
                <a href="./accommodation.html">
                    <p>Découvrir</p>
                </a>
            </div>
        </div>
            <img class="accommodationImg" src="./media/welcome/accommodationPresentation/Hebergements.jpg" alt="accommodationJpg">

        <?php createImageSlider($sliderElements, "./media/welcome/accommodationPresentation/sliderPictures/"); ?>

        <div class="sectionParagraph accommodationParagraph2">
            <h3>Vous souhaitez organiser un Événement ?</h3>
            <div class="smallDivider"></div>
            <p class="generalText text">
                Nous proposons la location de plusieurs de nos 
                structures (pour anniversaire, cousinade, baptême, 
                mariage champêtre, etc.), à savoir :
            </p>

            <div class="flex-container">
                <p class="generalText listElement">
                    <span>.</span> Le club-house
                </p>
                <p class="generalText listElement">
                    <span>.</span> Une grande terrasse couverte 
                </p>
                <p class="generalText listElement">
                    <span>.</span> Possibilité de préparation, sur place, de buffets à partir de 
                    produits locaux pour vos évènements.
                </p>
            </div>



            <p class="subtext">
                N’hésitez pas à nous contacter pour plus de renseignements.<br>
                Devis sur demande.
            </p>

            <div class="orangeButton">
                <a href="./contact.html">
                    <p>Contact</p>
                </a>
            </div>
        </div>

    </section>

    <div class="parallax parallaxAccommodation"></div>

    <section class="facebookGallery">

        <div data-aos="fade" class="sectionParagraph facebookParagraph">
            <h3>Nos</h3>
            <h2>Réseaux sociaux</h2>
            <div class="smallDivider"></div>

            <p class="generalText">
                Restons connectés ensemble sur Facebook
                et Instagram pour ne rien rater des 
                évènements conviviaux organisés chez nous.
            </p>

            <a class="fb" href="https://www.facebook.com/etrierdescabanelles"><img src="./media/welcome/FbIcon.png" alt="facebookIconPng"></a>
            <a class="insta" href="https://www.instagram.com/etrierdescabanelles"><img src="./media/instagram.png" alt="facebookIconPng"></a>

        </div>

        <div data-aos="fade" data-aos-delay="500" class="sectionParagraph galleryParagraph">
            <h3>Notre</h3>
            <h2>Galerie photo</h2>
            <div class="smallDivider"></div>

            <p class="generalText">
                Les plus beaux clichés de notre éco-lieu, 
                dont la plupart ont été réalisés par 
            </p>

            <a class="theoSignature" href="https://www.theo-tz.com/"><img src="./media/welcome/TheoSignature.png" alt="theotz"></a>

            <div class="orangeButton">
                <a href="./gallery.html">
                    <p>Découvrir</p>
                </a>
            </div>

        </div>

        <div class="largeDivider"></div>
    
    
    </section>
    
    <?php include(__DIR__."/templates/footer.php")?>

    <script src="./plugins/jquery.min.js"></script>
    <script src="./plugins/jsScripts/navMenu.js"></script>
    <script src="./plugins/vegas/dist/vegas.min.js"></script>
    <script src="./plugins/slick-1.8.1/slick/slick.min.js"></script>
    <script src="./plugins/jsScripts/scripts.js"></script>
    <script src="./plugins/aos-master/dist/aos.js"></script>
    <script>
        AOS.init({
            startEvent: 'load',
            duration: 1000,
        });
    </script>

    <script>
    if(screen.width > 500){
        $(".banner").vegas({
             delay: 7000,
             timer: false,
             shuffle: true,
             transition: 'fade',
             transitionDuration: 2000,
             slides: [
                 { src: './media/welcome/Slide1.jpg' },
                 { src: './media/welcome/Slide2.jpg' },
                 { src: './media/welcome/Slide3.jpg' },
             ]
        });
    }
 
    
    window.addEventListener("resize", ()=>{
        if(screen.width <= 500){
            $(".banner").vegas("destroy");
    
        }

        if(screen.width > 500){
            $(".banner").vegas({
                delay: 7000,
                timer: false,
                shuffle: true,
                transition: 'fade',
                transitionDuration: 2000,
                slides: [
                    { src: './media/welcome/Slide1.jpg' },
                    { src: './media/welcome/Slide2.jpg' },
                    { src: './media/welcome/Slide3.jpg' },
                ]
            });
        }
    });

    
   
    


    </script>
    
    <script>



        giveColorToMenuElements(0);



 

    </script>

</body>
</html>