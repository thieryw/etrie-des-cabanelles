<?php


function createImageSlider($pictures, $dir){
    

    ?> 

    <div class="sliderWrapper">
        <div class="imageSlider">

    
    <?php
    foreach($pictures as &$value){
        ?> 
        <div class="image">
            <img src="<?php echo $dir . $value; ?>" alt="slideImage" class="sliderImage">
        </div> 
        <?php

    }

    ?> 

        </div>
    </div>
    <?php

}

function createSlideWithImageOrVideo($isVideo, $mediaPath, $title, $paragraph, $link){
    ?> 
        <div class="slide">
            <?php 
                if($isVideo){
                    ?>
                        <iframe style="margin-left: -2px;" width="367" height="225" 
                        src="<?php echo $mediaPath; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    <?php
                }else{
                    ?>
                        <img src="<?php echo $mediaPath; ?>" alt="sliderImage">
                    <?php
                }
            
            ?>

            <h2><?php echo $title ?></h2>
            <p class="generalText">
                <?php echo $paragraph; ?>
            </p>

            <a href="<?php echo $link; ?>" class="orangeButton">
                <p>Découvrir</p>
            </a>

        </div>
    <?php
}

/*
       
<iframe width="560" height="315" 
src="https://www.youtube.com/embed/BkS1-El_WlE" 
frameborder="0" allow="accelerometer; autoplay; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

*/


?>


