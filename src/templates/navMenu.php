

<?php
    $pages = [['index', 'accueil'],
             ['place', 'éco&#8209lieu'], 
             ['stables', 'écuries<span class="arrow">&#812</span>'],
             ['accommodation', 'hébergement'],
             ['gallery','galerie'],
             ['contact', 'contact']];

    $mobilePages = [['index', 'accueil'],
             ['place', 'éco&#8209lieu'], 
             ['stables', 'écuries'],
             ['accommodation', 'hébergement'],
             ['gallery','galerie'],
             ['contact', 'contact']];
    function generateNavMenuElements($isSmallDevice, $pages){


        for($i = 0; $i < sizeof($pages); $i++){



            if($i == 2){
                ?> 
                <li class="collapsable li<?php echo $i; ?>" <?php if(!$isSmallDevice){ ?> 
                    id="unfoldable"
                <?php  } ?>>
                    <a class="stableHover"

                    <?php


                        if($isSmallDevice){
                            ?>
                            onclick="unfoldSubMenu()"
                            <?php
                        }
                    ?>
                    > 
                    <?php echo $pages[$i][1]; ?>

                    

                    </a>
                    <p id="unfoldButton" class="icon unfold" onclick="unfoldSubMenu()">+</p>
                    <p id="foldButton" class="icon fold" onclick="foldSubMenu()">-</p>
                    
                    <div id="stables" <?php if(!$isSmallDevice){
                        ?> class="stablesBig" <?php
                    } ?>>
                        <div class="menuDivider"></div>
                        <ul>
                            <?php 
                                getCollapsable();
                            ?>
                        </ul>
                    </div>

                </li>

                <div class="menuDivider"></div>
                
                <?php
                continue;
            }
            ?> 
            <li class="menuItems li<?php echo $i; ?>">
               

                <a class="page<?php echo $i; ?>" href="<?php echo "./" .$pages[$i][0] . ".html"; ?>">
                <?php echo $pages[$i][1]; ?></a>
            </li>

            <div class="menuDivider"></div>

            <?php

        }
    }

    function getCollapsable(){
        $pages = [
            ["stables1", "Présentation"],
            ["stables2", "Services"],
        ];

        for($i = 0; $i < sizeof($pages); $i++){
            ?>
            <li>
                <a class="subLink<?php echo $i + 1; ?>" href="<?php echo "./" . $pages[$i][0] . ".html"; ?>">
                    <?php echo $pages[$i][1]; ?>
                </a>
            </li>
            <?php
        }
    }


?>

<img id="dropdownIcon" src="./templates/menuIcons/dropdown_icon.png" alt="dropdown" onclick="openMenu()">

<div id="smallMenuId" class="navMenu smallDeviceMenu">
    <img id="quitMenu" src="./templates/menuIcons/Cross.png" alt="quit" onclick="closeMenu()">
    <ul class="smallDeviceMenuList">
        <?php

        generateNavMenuElements(true, $mobilePages);

        ?>
    </ul>

    <a class="facebookNav" href="#">
        <img src="./media/footer/FbIcon2.png" alt="facebook">
    </a>

    <a href="#" class="instaNav">
        <img src="./media/instagram.png" alt="instagram">
    </a>



</div>


<div class="navMenu largeDeviceMenu">

    <a class="logo" href="./index.html"><img src="./media/LogoIcon.png" alt="logoPng"></a> 
    <ul class="menuList">
        <?php 

        generateNavMenuElements(false, $pages); 

        
        ?>
        
    </ul>

    

</div>





    


