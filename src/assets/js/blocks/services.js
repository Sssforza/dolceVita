// popupMoreStageDate
export function popupMoreStageDate () {
    const popupMoreStage = document.querySelectorAll('.popupMoreStage_js');
    popupMoreStage.forEach((item) => {
        item.addEventListener( "click" , (e) => {
            console.log(123);
            $(".scrollbar-inner").scrollbar();
        });
    });
}