// popupMoreStageDate
export function popupMoreStageDate () {
    const popupMoreStage = document.querySelectorAll('.popupMoreStage_js');
    let parent;
    let title;
    let stage;
    let newItem;
    let newStage;
    let newDescription;
    let newName;
    let newText;
    let linkimg;
    let newImg;
    let list;
    function addElement() {
        newItem = document.createElement("div");
        newStage = document.createElement("div");
        newDescription= document.createElement("div");
        newName = document.createElement("div");
        newText = document.createElement("div");
        newItem.className = "serviceMore__item";
        newStage.className = "serviceMore__stage";
        newDescription.className = "serviceMore__description";
        newName.className = "serviceMore__name";
        newText.className = "serviceMore__text";

        list.append(newItem);
        newItem.append(newStage);
        newItem.append(newDescription);
        newDescription.append(newName);
        newDescription.append(newText);
    }
    popupMoreStage.forEach((item) => {
        item.addEventListener( "click" , (e) => {
            list = document.querySelector(".serviceMore__list");
            list.innerHTML = '';
            parent = item.closest(".servicesCard_js");
            linkimg = parent.querySelector(".popupMoreStage_js").getAttribute('data-linkimg');
            newImg = document.querySelector('.serviceMore__img');
            newImg.style.backgroundImage = linkimg;
            document.querySelector('.serviceMore__btn').setAttribute('href', item.getAttribute('data-linkMore'));
            title = parent.querySelector('.servicesCard__title').innerHTML;
            document.querySelector('.serviceMore__title').innerText = title;
            stage = parent.querySelectorAll('.servicesCard__box');
            stage.forEach((item) => {
                addElement();
                newStage.innerHTML = item.querySelector('.servicesCard__what').innerHTML;
                newName.innerHTML = item.querySelector('.servicesCard__how').innerHTML;
                newText.innerHTML = item.getAttribute('data-description');
            });
            $(".scrollbar-inner").scrollbar();
        });
    });
}
// services attendance all cards
export function servicesAttendance () {
    if(document.querySelector('.servicesCardBtn_js')) {
        const parent = document.querySelector('.servicesAttendance_js');
        const flex = parent.querySelector('.services__content');
        const btn = document.querySelector('.servicesCardBtn_js');
        const heightAll = parent.scrollHeight;
        const height = parent.clientHeight;
        const num = parent.querySelector('.servicesCardNumber_js').innerHTML;
        const numPaste = parent.querySelector('.servicesCardNumber_js');
        const gap = getComputedStyle(flex).gap.replace(/[\D]+/g, '');
        let numberItems = Number(num);
        let heightPaste;
        let count = 1;
        let countGap = 0;
		btn.addEventListener( "click" , (e) => {
            count = count + 1;
            countGap = countGap + 1;
            numberItems = numberItems - 6;
            numPaste.innerHTML = numberItems;
            heightPaste = (height * count) + (Number(gap) * countGap);
            if (heightPaste < heightAll){
                console.log('if');
                parent.style.height = heightPaste + "px";
            }
            if (heightPaste === heightAll){
                console.log('=');
                parent.style.height = heightPaste + "px";
                btn.closest(".servicesCardBig").remove();
            }
        });
	}
}
// services selected drop
export function servicesSelectedDrop () {
    if(document.querySelector('.servicesSelectedInput_js')) {
        const parentList = document.querySelector('.servicesSelected_js');
        const parentTabs = document.querySelector('.servicesTabsList_js');
        const input = parentList.querySelector('.servicesSelectedInput_js');
        const selected = parentList.querySelector('.servicesSelectedSelected_js');
        let lists = parentList.querySelectorAll('.servicesSelectedList_js');
        let tabs = parentTabs.querySelectorAll('.servicesTabs_js');
        let choice = parentList.querySelectorAll('.servicesSelected__choice');
        let thisChoice;
        let dataSelect;
        // const menu = document.querySelector('.servicesSelected__wrapper');
        const toggleMenu = function() {
            parentList.classList.toggle('open');
        }
		tabs.forEach((item) => {
            item.addEventListener("click", (e) => {
                let tab = item.getAttribute('data-tab');
                tabs.forEach((i) => {
                    i.classList.remove('active');
                });
                item.classList.add('active');
                input.setAttribute('data-select', tab);
                dataSelect = input.getAttribute('data-select');
                selected.setAttribute('value', '');
                lists.forEach((item) => {
                    item.classList.remove('open');
                    if(item.getAttribute('data-list') === dataSelect) {
                        item.classList.add('open');
                    }
                });
            });
        });
		input.addEventListener( "click" , (elem) => {
            toggleMenu();
            dataSelect = input.getAttribute('data-select');
            lists.forEach((item) => {
                item.classList.remove('open');
                if(item.getAttribute('data-list') === dataSelect) {
                    item.classList.add('open');
                }
            });
        });
        choice.forEach((item) => {
            item.addEventListener("click", (e) => {
                thisChoice = item.innerHTML;
                selected.setAttribute('value', thisChoice);
            });
        });
        document.onclick = function(e){
            var container = $(".servicesSelected__wrapper");
            var container2 = $(".servicesTabs__item");
            var container3 = $(".servicesSelectedInput_js");
            if (container.has(e.target).length === 0 && container2.has(e.target).length === 0 && container3.has(e.target).length === 0){
                console.log(1);
                parentList.classList.remove('open');
            }
        };
	}
}