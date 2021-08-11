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