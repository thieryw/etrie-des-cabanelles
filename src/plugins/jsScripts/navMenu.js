

var menuElement = {
        FOLD_BUTTON : document.getElementById("foldButton"),
        UNFOLD_BUTTON : document.getElementById("unfoldButton"),
        DROPDOWN_ICON : document.getElementById("dropdownIcon"),
        QUIT_ICON : document.getElementById("quitMenu"),
        MENU : document.getElementById("smallMenuId"),
        SUB_MENU : document.getElementById("stables"),
};


var measurementUnits = {
        PIXELS : "px",
        PERCENTAGES : "%",
};


function foldAndUnfoldAnimation(menuElement, heightWhenUnfolded, measurementUnits, isUnfoldAnimation){

        var height = isUnfoldAnimation ? 0 : heightWhenUnfolded;

        var incrementValue = measurementUnits === "px" ? 4 : 2;

        if(isUnfoldAnimation){
                var timer = setInterval(function(){
                        if(height >= heightWhenUnfolded){
                                clearInterval(timer);
                        }

                        menuElement.style.height = height + measurementUnits;
                        height += incrementValue;
                })

                return;
        }

        if(!isUnfoldAnimation){
                var timer = setInterval(function(){
                        if(height <= 0){
                                clearInterval(timer);
                        }

                        menuElement.style.height = height + measurementUnits;
                        height -= incrementValue;
                })
        }



}


function unfoldSubMenu(){

        foldAndUnfoldAnimation(menuElement.SUB_MENU, 260, measurementUnits.PIXELS, true);


        menuElement.FOLD_BUTTON.style.display = "block";
        menuElement.UNFOLD_BUTTON.style.display = "none";


}

function foldSubMenu(){

        foldAndUnfoldAnimation(menuElement.SUB_MENU, 260, measurementUnits.PIXELS, false);


        menuElement.FOLD_BUTTON.style.display = "none";
        menuElement.UNFOLD_BUTTON.style.display = "block";

}

function closeMenu(){

        foldAndUnfoldAnimation(menuElement.MENU, 100, measurementUnits.PERCENTAGES, false);

        menuElement.DROPDOWN_ICON.style.display = "block";
}

function openMenu(){

        menuElement.DROPDOWN_ICON.style.display = "none";
        menuElement.MENU.style.display = "block";

        foldAndUnfoldAnimation(menuElement.MENU, 100, measurementUnits.PERCENTAGES, true);

}

let isUnfolded = false;

document.getElementById("unfoldable").addEventListener("click", () =>{

        const subMenu = document.getElementsByClassName("stablesBig");

        if(!isUnfolded){

                foldAndUnfoldAnimation(subMenu[0], 80, "px", true);
                isUnfolded = true;
                return;

        }

        foldAndUnfoldAnimation(subMenu[0], 80, "px", false);

        isUnfolded = false;



});


function giveColorToMenuElements(pageNumber){
        if(pageNumber === 2){
                const elems = document.getElementsByClassName("stableHover");

                console.log(elems);

                elems[0].style.color = "#fdd79e";
                elems[1].style.color = "#fdd79e";
                return;
        }
        const elems = document.getElementsByClassName(`page${pageNumber}`);

        for(elem of elems){
                elem.style.color = "#fdd79e";
        }
}