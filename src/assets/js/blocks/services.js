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