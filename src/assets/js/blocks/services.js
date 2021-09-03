// services selected drop
export function servicesSelectedDrop () {
    if(document.querySelector('.servicesSelectedInput_js')) {
        const parentList = document.querySelector('.servicesSelected_js');
        const parentTabs = document.querySelector('.servicesTabsList_js');
        const input = parentList.querySelector('.servicesSelectedInput_js');
        const selected = parentList.querySelector('.servicesSelectedSelected_js');
        const btn = document.querySelector('.banerServices__btn');
        let lists = parentList.querySelectorAll('.servicesSelectedList_js');
        let tabs = parentTabs.querySelectorAll('.servicesTabs_js');
        let choice = parentList.querySelectorAll('.servicesSelected__choice');
        let thisChoice;
        let dataSelect;
        let id;
        const checkBtn = function() {
            if(selected.value <= 0) {
                btn.classList.add('disabled');
            } else {
                btn.classList.remove('disabled');
            }
        }
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
                id = item.getAttribute('id');
                selected.setAttribute('value', thisChoice);
                selected.setAttribute('id', id);
            });
        });
        document.onclick = function(e){
            checkBtn();
            var container = $(".servicesSelected__wrapper");
            var container2 = $(".servicesTabs__item");
            var container3 = $(".servicesSelectedInput_js");
            if (container2.has(e.target).length === 0 && container3.has(e.target).length === 0){
                parentList.classList.remove('open');
            }
        };
	}
}
// popup more stage date
// services attendance all cards
// services selected fetch
export function servicesSelectedFetch () {
    if(document.querySelector('.popupMoreStage_js')) {
        var popupMore = function() {
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
                });
            });
        }
        popupMore();
	}
    if(document.querySelector('.servicesCardBtn_js')) {
        var servicesCard = function() {
            const parent = document.querySelector('.servicesAttendance_js');
            const flex = parent.querySelector('.services__content');
            const btn = document.querySelector('.servicesCardBtn_js');
            const heightAll = parent.scrollHeight;
            const height = parent.clientHeight;
            const num = parent.querySelector('.servicesCardNumber_js').innerHTML;
            const numPaste = parent.querySelector('.servicesCardNumber_js');
            const gap = getComputedStyle(flex).gap.replace(/[\D]+/g, '');
            const padding = getComputedStyle(parent).paddingTop.replace(/[\D]+/g, '');
            let numberItems = Number(num);
            let heightPaste = 0 - padding;
            let count = 1;
            let countGap = 0;
            btn.addEventListener( "click" , (e) => {
                count = count + 1;
                countGap = countGap + 1;
                numberItems = numberItems - 6;
                numPaste.innerHTML = numberItems;
                heightPaste = (height * count) + (Number(gap) * countGap);
                heightPaste = heightPaste - padding;
                if (heightPaste < heightAll){
                    parent.style.height = heightPaste + "px";
                }
                if (heightPaste === heightAll || heightPaste > heightAll){
                    parent.style.height = heightPaste + "px";
                    btn.closest(".servicesCardBig").remove();
                }
            });
        }
        servicesCard();
	}
    if(document.querySelector('.banerServicesBtn_js')) {
        const btn = document.querySelector('.banerServicesBtn_js');
        const input = document.querySelector('.servicesSelectedSelected_js');
        const message = 'Произошла ошибка, пожалуйста обновите страницу';
        let id;
        btn.addEventListener("click", (elem) => {
            id = input.getAttribute('id');
            let body = new FormData;
            body.append('id', id);
            fetch('/local/ajax/services.php', {
                method: 'POST',
                body: body
            }).then(
                (response) => {
                    response.text().then((data) => {
                        if(response.ok && data != null && data != "") {
                            console.log('insert html');
                            servicesCard();
                            popupMore();
                        } else {
                            alert(message);
                        }
                    });
                }
            )
        });
	}
}