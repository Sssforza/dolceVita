// about specialist show all
export function aboutSpecialistShowAll() {
    if (document.querySelector('.aboutSpecialist__list')) {
        let desktop = 268;
        if (window.screen.availWidth <= 540) {
            desktop = 388;
        }
        const wrapper = document.querySelector('.aboutSpecialist__content');
        let btnsShow = wrapper.querySelectorAll('.aboutSpecialistShow_js');
        let btnsHide = wrapper.querySelectorAll('.aboutSpecialistHide_js');
        let heightparent;
        let heightList;
        let list;
        btnsShow.forEach((item) => {
            item.addEventListener("click", (e) => {
                heightparent = item.closest('.aboutSpecialist__wrapper');
                list = heightparent.querySelector('.aboutSpecialist__list');
                heightparent.querySelector('.aboutSpecialistHide_js').classList.remove('hide');
                heightList = list.scrollHeight;
                heightparent.classList.add('show');
                item.classList.add('hide');
                list.style.maxHeight = heightList + "px";
            });
        });
        btnsHide.forEach((item) => {
            item.addEventListener("click", (e) => {
                heightparent = item.closest('.aboutSpecialist__wrapper');
                list = heightparent.querySelector('.aboutSpecialist__list');
                heightparent.querySelector('.aboutSpecialistShow_js').classList.remove('hide');
                heightList = desktop;
                heightparent.classList.add('show');
                item.classList.add('hide');
                list.style.maxHeight = heightList + "px";
            });
        });
    }
}
// tabs specialist education
export function tabsSpecialistEducation() {
    if (document.querySelector('.aboutSpecialist_js')) {
        let wrapper = document.querySelector('.aboutSpecialist_js');
        let tabs = wrapper.querySelectorAll('.aboutSpecialistTab_js');
        let elements = wrapper.querySelectorAll('.aboutSpecialistWrapper_js');
        tabs.forEach((item) => {
            item.addEventListener("click", (e) => {
                let thisShow = item.getAttribute('data-tab');
                tabs.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                elements.forEach((elem) => {
                    elem.classList.add('hidden');
                    if (elem.getAttribute('data-list') === thisShow) {
                        elem.classList.remove('hidden');
                    }
                });
            });
        });
    }
};