

function PageElements(expandButtons, sections, plusSign, minusSign, isSectionUnfolded){
    this.expandButtons = expandButtons;
    this.sections = sections;
    this.plusSign = plusSign;
    this.minusSign = minusSign;
    this.isSectionUnfolded = isSectionUnfolded;
}

PageElements.prototype.changePlusAndMinusSign = function changePlusAndMinusSign(){
    for(const i of [this.plusSign, this.minusSign]){
        i.style.display = this.isSectionUnfolded ? 
            i === this.plusSign ? "block" : "none" 
            : i === this.plusSign ? "none" : "block";
    }
}

PageElements.prototype.resizeSection = function resizeSection(height){
    this.sections.style.height = `${height}px`;
    if(!this.isSectionUnfolded){

        this.changePlusAndMinusSign();

        this.isSectionUnfolded = true;

        return;
    }


    this.returnSectionToNormal();
    
}

PageElements.prototype.returnSectionToNormal = function returnSectionToNormal(){

    if(this.isSectionUnfolded){
        this.sections.style.height = null;
        this.changePlusAndMinusSign();
        this.isSectionUnfolded = false;
    }

}

function TextElements(section, text, buttonContainer, moreButton, lessButton, istextHidden){
    this.section = section;
    this.text = text;
    this.buttonContainer = buttonContainer;
    this.moreButton = moreButton;
    this.lessButton = lessButton;
    this.isTextHidden = istextHidden;

}

TextElements.prototype.changeMoreLessButton = function changeMoreLessButton(){


    for(const i of [this.moreButton, this.lessButton]){
        this.isTextHidden ? (i === this.moreButton ? 
            i.style.display = "none" : i.style.display = "block") : (
                i === this.moreButton ? i.style.display = "block" : 
                i.style.display = "none"
            );
    }

    this.buttonContainer.style.background = this.isTextHidden ?
    "none" : null;

}


TextElements.prototype.resizeTextSection = function resizeTextSection(textheight, sectionHeight, buttonOffset){

    if(this.isTextHidden){
        {
            const sectionAndText = [
                [this.section, sectionHeight], 
                [this.text, textheight]
            ];

            for(const i of [0, 1]){
                sectionAndText[i][0].style.height = `${sectionAndText[i][1]}px`;
            }

        }

        this.changeMoreLessButton();
        this.buttonContainer.style.top = `${buttonOffset}px`;
        this.isTextHidden = false;
    }

}

TextElements.prototype.returnTextSectionToNormal = function returnTextSectionToNormal(){

    if(!this.isTextHidden){
        this.changeMoreLessButton();
        for(const i of [this.section, this.text]){
            i.style.height = null;
        }
        this.isTextHidden = true;
        this.buttonContainer.style.top = null;
    }

}

function getSectionWithHiddenText(numberOfElements){
    let result = [];

    for(let i = 0; i < numberOfElements; i++){
        result.push(
            new TextElements(
                document.getElementsByClassName("boxSection")[i],
                document.getElementsByClassName("hiddenText")[i],
                document.getElementsByClassName("readMore")[i],
                document.getElementsByClassName("readMoreButton")[i],
                document.getElementsByClassName("readLessButton")[i],
                true
            )
        )
    }

    return result;

}

function showMoreLessText(sectionWithText, textHeight, sectionHeight, buttonOffset){

    for(const i of [sectionWithText.moreButton, sectionWithText.lessButton]){
        i.addEventListener("click", ()=>{
            i === sectionWithText.moreButton ? sectionWithText.resizeTextSection(
                textHeight, sectionHeight, buttonOffset) :
                sectionWithText.returnTextSectionToNormal();
        });
    }
}


function resizeTextSectionOnWindowResize(textElement){
    window.addEventListener("resize", ()=>{
        if(screen.width > 400){

            textElement.returnTextSectionToNormal();
            
        }

    });
}



function getPageElements(numberOfElements){
    let result = [];

    for(let i = 0; i < numberOfElements; i++){
        result.push(
            new PageElements(
                document.getElementsByClassName("expandButton")[i],
                document.getElementsByClassName("mobileSection")[i],
                document.getElementsByClassName("more")[i],
                document.getElementsByClassName("less")[i],
                false
            )
        )
    }


    return result;
}






function expanAndFoldSection(pageElements, sectionHeight){

    pageElements.expandButtons.addEventListener("click", () =>{

        if(!pageElements.isSectionUnfolded){

            pageElements.resizeSection(sectionHeight);

            return;
        }


        pageElements.resizeSection(300);


    });
}



function resizeSectionOnWindowResize(pageElements){

    window.addEventListener("resize", () =>{

        if(screen.width > 400){
            pageElements.returnSectionToNormal();
        }


    });


}


function resizeStaffSection(minHeight, maxHeight){

    const moreLessButton = [];
    const staffWrapper = document.getElementById("staffWrapp");

    for(const i of ["showLess", "showMore"]){

        moreLessButton.push(document.getElementById(i));
    }

    for(const i of [0, 1]){
        moreLessButton[i].addEventListener("click", ()=>{

            staffWrapper.style.height = i === 0 ? `${minHeight}px` : `${maxHeight}px`;

            for(const j of [0, 1]){
                moreLessButton[j].style.display = 
                    j === 0 ? (i === 0 ? "none" : "block") : (i === 0 ? "block" : "none");
            }
        });       
    }

    window.addEventListener("resize", ()=>{
        if(screen.width > 400){
            staffWrapper.style.height = null;

            for(const i of [0, 1]){
                moreLessButton[i].style.display = null;
            }
        }

    });
}









