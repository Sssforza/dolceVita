// popup close
export function popupClose () {
    $('.popupClose_js').on( "click", function() {
        $.magnificPopup.close();
    });
}
// popup link more stage in the page services
export function moreStage () {
    if(document.querySelector('.popupMoreStage_js')) {
        $('.popupMoreStage_js').magnificPopup({
            type: 'inline',
            tClose: 'Закрыть (Esc)',
            tLoading: 'Загрузка...'
        });
    }
}
// popup image
export function popupImage () {
    if(document.querySelector('.popupImage_js')) {
        $('.popupImage_js').magnificPopup({
            type: 'image',
            tClose: 'Закрыть (Esc)',
            tLoading: 'Загрузка...',
            mainClass: 'mfp-img'
        });
    }
}
// popup form
export function popupForm () {
    if(document.querySelector('.popupForm_js')) {
        $('.popupForm_js').magnificPopup({
            type: 'inline',
            tClose: 'Закрыть (Esc)',
            tLoading: 'Загрузка...',
            mainClass: 'mfp-form'
        });
    }
}