<?php 
    include_once(__DIR__."/templates/listedElements.php"); 

    $contactRef = [
        ['PhoneIcon.png', '<span>Téléphone</span> <br>(+33) 6 18 07 07 84<br>(+33) 6 10 64 88 06'],
        ['PinIcon.png', '<span>Adresse</span> <br>Quartier Rouchan<br>et Cabanelles<br> 34270 Valflaunès'],
        ['MailIcon.png', '<span>E-mail</span> <br><a class="emailAddress" href="mailto:cabanelles34@gmail.com">cabanelles34@gmail.com</a>']
    ];


    
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Pour toute question,
        n'hésitez pas à nous écrire !"
        >
    <title>Contact</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/contact/contact.css">
</head>
<body>

    <?php  include(__DIR__."/templates/navMenu.php"); ?>

    <div class="banner contactBanner">
        <div class="mainHeading">
            <img src="./media/LogoIcon.png" alt="logo" class="logoIcon">
            <p>Nous</p>
            <h1 class="mainTitle">Contacter</h1>
        </div>
    </div>

    <section class="contactReference mobileSection">
        <div class="references">
            <div class="divider"></div>
            <div class="divider"></div>
            <?php getServiceList($contactRef, "./media/contact/"); ?>
        </div>
    </section>
   
    <section class="facebook">
        <p class="centeredText">Restons connectés <br class="mobileCR"><span>ensemble !</span></p>
        <a class="fb" href="https://www.facebook.com/etrierdescabanelles"><img src="./media/contact/FbIcon.png" alt="facebookPng"></a>
        <a class="inst" href="https://www.instagram.com/etrierdescabanelles"><img src="./media/instagram.png" alt="instagramPng"></a>
    </section>


    <?php include(__DIR__."/templates/footer.php") ?>

    <script src="./plugins/jquery.min.js"></script>
    <script src="./plugins/jsScripts/navMenu.js"></script>


    <script>
        giveColorToMenuElements(5);
    </script>

        
</body>
</html>