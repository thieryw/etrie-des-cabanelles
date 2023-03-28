<?php 
    include_once(__DIR__."/templates/listedElements.php"); 

    $contactRef = [
        ['PhoneIcon.png', '<span>Téléphone</span> <br>(+33) 6 18 07 07 84<br>(+33) 6 10 64 88 06'],
        ['PinIcon.png', '<span>Adresse</span> <br>Quartier Rouchan<br>et Cabanelles<br> 34270 Valflaunès'],
        ['MailIcon.png', '<span>E-mail</span> <br>cabanelles34@gmail.com']
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

    <p class="centeredText"><span>Pour toute question,</span><br class="mobileCR">n'hésitez pas à nous écrire !</p>
    <section id="contactForm">
     <!--   <form action="./contact.php#contactForm" method="post">
            <input type="text" name="name" placeholder="Nom" maxlength="50">
            <input type="email" name="email" placeholder="E-mail" maxlength="100">
            <input type="text" name="number" placeholder="Téléphone" maxlength="50">
            <textarea name="emailContent" cols="30" rows="10" placeholder="Votre message"></textarea>
            <input class="submitButton" type="submit" value="Envoyer">
        </form>-->
      <form class="gform pure-form pure-form-stacked" method="POST" data-email="example@email.net"
      action="https://script.google.com/macros/s/AKfycbyj1E8A9ThmOUG-scAlCo--P2L7FNMnZlZ236mpIyTFxGVOZPg/exec">
        <!-- change the form action to your script url -->

            <input id="name" name="name" placeholder="Nom" />

              <input id="phoneNumber" name="phoneNumber" placeholder="Telephone" type="tel">

            <input id="email" name="email" type="email" value=""
            required placeholder="Email"/>
          
            <textarea id="message" name="message" rows="10"
            placeholder="Votre message"></textarea>

        


          <button class="btn" >
            Envoyer
          </button>
        </div>

    <!-- Customise the Thankyou Message People See when they submit the form: -->
    <div class="thankyou_message" style="display:none;">
      <h2>Message envoyer</h2>
    </div>

  </form>
   

    </section>

    <section class="facebook">

        <p class="centeredText">Restons connectés <br class="mobileCR"><span>ensemble !</span></p>
        <a class="fb" href="https://www.facebook.com/etrierdescabanelles"><img src="./media/contact/FbIcon.png" alt="facebookPng"></a>
        <a class="inst" href="https://www.instagram.com/etrierdescabanelles"><img src="./media/instagram.png" alt="instagramPng"></a>
    </section>


    <div id="map">
        <script>
            function initMap(){
                var valflaunes = {lat: 43.810259, lng: 3.885714};
                var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: valflaunes});
                var marker = new google.maps.Marker({position: valflaunes, map: map});
            } 
               
        </script> 
    </div>

    <?php include(__DIR__."/templates/footer.php") ?>

    <script src="./src/plugins/jquery.min.js"></script>
    <script src="./src/plugins/jsScripts/navMenu.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA06MoqIOj7IH9MfM09MOxiia4T51d3LIg&callback=initMap"></script>


    <script>
        giveColorToMenuElements(5);
    </script>

     <script data-cfasync="false" type="text/javascript"
        src="./src/plugins/jsScripts/form-submission-handler.js"></script>

        
</body>
</html>