<?php 

    function getItems($items, $styleType, $isAnimated){

        $animation = [
            'fade-right',
            'fade-down',
            'fade-left'
        ];


        if($styleType == "column"){

            for($i = 0; $i < sizeof($items); $i++){

                ?>
                <div class="item">
                    <div class="itemPicture picture<?php echo $i + 1; ?>">
                        <a href="<?php echo $items[$i][3]; ?>"></a>
                        
                        <img src="<?php echo $items[$i][2]; ?>" alt="image">
                    </div>

                    <div class="itemText text<?php echo $i + 1; ?>">
                        <hr>
                        <h2><?php echo $items[$i][0]; ?></h2>
                        <p><?php echo $items[$i][1]; ?></p>
                        <hr style="position: relative; top: -20px;">
                    </div>
                </div>
                <?php


            }

            return;

        }

        for($i = 0; $i < sizeof($items); $i++){
            ?> 
            <div class="item" <?php 
                if($isAnimated){
                    ?> data-aos="<?php echo $animation[$i]; ?>" <?php
                }
            ?>>
                <a href="<?php echo $items[$i][3];?>">
                    <p><?php echo $items[$i][1]; ?></p>
                    <h1><?php echo $items[$i][0]; ?></h1>
                    
                </a>

                <img src="<?php echo $items[$i][2]; ?>" alt="<?php echo $items[$i][0] ?> Image">
            </div>
            <?php
        }

    }

    function getServiceList($serviceList, $media){


        ?> <div class="serviceIcons"> <?php
        for($i = 0; $i < sizeof($serviceList); $i++){
            ?>
            <img src="<?php echo $media . $serviceList[$i][0]; ?>" alt="icons" class="icons">
            <?php
        }
        ?> </div> <?php

        ?> <div class="serviceDescription"> <?php

        for($i = 0; $i < sizeof($serviceList); $i++){
            ?>
            <p class="generalText"><?php echo $serviceList[$i][1]; ?></p>
            <?php
        }
        ?> </div> <?php
    }

    function getStaffMember($imgPath, $name, $shortText){

        ?>
        <div class="staffMember">
            <img src="<?php echo $imgPath; ?>" alt="staffImage">
            <h3><?php echo $name; ?></h3>
            <p class="subtext"><?php echo $shortText; ?></p>       
        </div>

        <?php





    }

    function createExpandButton($buttonTitle){
        ?>
            <div class="expandButton">
                <h2 class="buttonHeading"><?php echo $buttonTitle; ?></h2>
                <h2 class="more">+</h2>
                <h2 class="less">-</h2>
            </div>
    
        <?php
    
    }


?>