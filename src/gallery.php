<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Souvenirs d'Instants">
    <title>Galerie</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/gallery.css">
    <link rel="stylesheet" href="./src/plugins/Justified-Gallery-master/dist/css/justifiedGallery.css">
    
</head>
    
<body>

    <?php  include(__DIR__."/templates/navMenu.php"); ?>

    <div class="banner galleryBanner">
        <div class="mainHeading" id="title">
            <h1 class="mainTitle">Galerie</h1>
            <p>Souvenirs d'Instants</p>
        </div>

    </div>





    <div id="modal">
        
            <img class="left" src="./media/gallery/leftArrow.png" alt="arrow" onclick="prevSlide()">
            <img class="right" src="./media/gallery/rightArrow.png" alt="arrow" onclick="nextSlide()">
            <img src="./media/gallery/Cross.png" alt="cross" class="close" onclick="quitSlider()">


            <?php 
            for($i = 1; $i < 102; $i++){
                ?>
                <div class="imageContainer">
                    <a><img class="lightBoxPicture" src="./media/gallery/pictures/<?php echo $i; ?>.jpg" alt="galleryImg" id="img<?php echo $i; ?>">
                    </a>
                </div>

                <?php

            }
            ?>

        
    </div>


    <section class="galleryContainer" id="thumbnails">
        <div id="gallery">

            <?php 

                for($i = 1; $i < 102 ; $i++){
                    ?><a class="thumbNail" onclick="openModal(); showSlides(<?php echo $i; ?>)"><img id="<?php echo $i ?>" src="./media/gallery/pictures/<?php echo $i; ?>.jpg" alt=""></a> <?php
                }

            
            
            
            ?>
    
    
        </div>

        <p class="creditPhoto subtext">
            Crédit photo : Théo Tzélépoglou / Martine Bénezech.
        </p>
    </section>


    

    <?php include(__DIR__."/templates/footer.php")?>
    <script src="./plugins/jquery.min.js"></script>
    <script src="./plugins/jsScripts/navMenu.js"></script>
    <script src="./plugins/jsScripts/lightbox.js"></script>
    
    <script src="./plugins/Justified-Gallery-master/dist/js/jquery.justifiedGallery.min.js"></script>
    <script>
        $('#gallery').justifiedGallery({
            rowHeight : 300, 
            margins : 10,
        });

        giveColorToMenuElements(4);
 
    </script>

</body>
</html>