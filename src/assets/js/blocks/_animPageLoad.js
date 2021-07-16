// header services
export function headerShow () {
    window.onload = function () {
        if(document.querySelector('.header_js')) {
            const header = document.querySelector('.header_js');
            header.classList.remove('hide');
        }
    }
}