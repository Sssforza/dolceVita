// header services
export function headerServices () {
    if(document.querySelector('.headerServices_js')) {
        const header = document.querySelector('.header_js');
        const headerServicesElem = document.querySelector('.headerServices_js');
        const headerServicesClose = document.querySelectorAll('.headerServicesClose_js');
        headerServicesElem.onmouseover = function(e) {
            document.body.classList.add('openServicesMenu');
            headerServicesElem.classList.add('active');
            header.classList.add('gray');
        };
        headerServicesClose.forEach((item) => {
            item.addEventListener( "click" , (e) => {
                document.body.classList.remove('openServicesMenu');
                headerServicesElem.classList.remove('active');
                header.classList.remove('gray');
            });
        });
    }
}