// Map

const mobileOffsetX = 0.0009987452878874592;
const mobileOffsetY = 0.00005002167360146359;

export function map() {

    if(document.querySelector('#map')) {
        ymaps.ready(init);
    }

    function init() {
        var myMap = new ymaps.Map("map", {
                center: [54.995715,73.353974],
                zoom: 14,
                controls: []
            });

        myMap.geoObjects
            .add(new ymaps.Placemark([54.995715,73.353974], {
                balloonContent: 'цвет <strong>носика Гены</strong>',
                iconCaption: 'Dolce Vita'
            }, {
                preset: 'islands#icon',
                iconColor: '#0095b6'
            }))
    }
}