
import './jquery.mask.min.js';
import {addContentHandler, initContentHandlers} from './blocks/document.js';
import {mainBasketCard, mainCountCard, checkAtBoot} from './blocks/_addCounter.js';

let windowInnerWidth = document.documentElement.clientWidth
let lg = 1025 //1024
let md = 769 //768
let xs = 541 //540 content=320

let viewport = $('meta[name="viewport"]');

if (window.screen.availWidth < lg) {
	if (device.tablet()) {
		viewport.attr("content", "width=1024");
	}
}
if (window.screen.availWidth < md) {
	if (device.tablet()) {
		viewport.attr("content", "width=768");
	}
}
if (window.screen.availWidth < xs) {
	if (device.mobile()) {
		viewport.attr("content", "width=320");
	}
}

addContentHandler(function(parent){

	/* Favorites */
	$('.likeProducts_js', parent).on('click', function(e) {

		var favorID = $(this).attr('data-item');
		if($(this).hasClass('likeProducts_active'))
			var doAction = 'add';
		else
			var doAction = 'delete';

		addFavorite(favorID, doAction);
	});

	$('.orderCardAll_js', parent).on('click', shoppingСard);

	function shoppingСard(){
		$('.orderCard').not($(this).parents('.orderCard')).removeClass('show');
		if($(this).parents('.orderCard').hasClass('show')) {
			$(this).parents('.orderCard').removeClass('show');
		} else {
			$(this).parents('.orderCard').addClass('show');
		}
		$('.lkOrders__list .orderCard__products').not($(this).next()).slideUp(500);
		$(this).next().slideToggle(500);
	}


});

$(document).ready(function () {
	if ($('main').hasClass('404_js')) {
		$('body').addClass('page404')
	};
	if ($('main').hasClass('general_js')) {
		$('body').addClass('pageGeneral')
	};
	if ($('main').hasClass('detail_js')) {
		$('body').addClass('pageDetail')
	};

	// Скролл
	if (window.screen.availWidth < md) {
		jQuery('.scrollbar-inner').scrollbar();
	};

	$(".counter").each(function (index, element){
		var count = $(element).text();
		if (count > 0) {
			$(element).show();
		}
	});

	// кнопка отмена в попапе
	$('.deleteAddressCancel_js, .popupDuplicateOrder_js').on('click', function() {
		$('.popupMessage__close').trigger('click');
	})

	// open map in the page contacts
	$('.contactsOpenMap_js').on('click', function() {
		$('.contactsMain').addClass('showMap');
		$('body').addClass('body_overflow');
	})
	// close map in the page contacts
	$('.contactsCloseMap_js').on('click', function() {
		$('.contactsMain').removeClass('showMap');
		$('body').removeClass('body_overflow');
	})

	$('.maskPhone').mask('+7 Z00 000-00-00', {
		'translation': {
			Z: {pattern: /[0-69-9]/},
		}
	});
	
	$('.checkInSwipe_js').on('click', function() {
		$('.checkInSwipe_js').removeClass('active');
		$('.checkoutCheckIn').removeClass('entityForm, individualForm');
		$(this).addClass('active');
		let face = $(this).attr('data-face')
		$('.checkoutCheckIn').addClass(face);
	})

	

});

/* Избранное */
function addFavorite(id, action)
{
	var param = 'id='+id+"&action="+action;
	$.ajax({
		url:	 '/local/ajax/wishlist.php',
		type:	  "GET",
		dataType: "html",
		data: param,
		success: function(response) {
			if (response) {
				var result = $.parseJSON(response);
			}
			if (result.success == 'success') {
				if(result.report == 1 || action == 'add'){ 
					 $('.likeProducts_js[data-item="'+id+'"]').addClass('likeProducts_active');
					 var wishCount = parseInt($('.user__link_favorites .counter').html()) + 1;
					 $('.user__link_favorites .counter').html(wishCount).show();
					 $('.bottomMenu__item_favorite .bottomMenu__goods').html(wishCount).show();
				}
				if(result.report == 2 || action == 'delete'){
					 $('.likeProducts_js[data-item="'+id+'"]').removeClass('likeProducts_active');
					 var wishCount = parseInt($('.user__link_favorites .counter').html()) - 1;
					 $('.user__link_favorites .counter').html(wishCount);
					 $('.bottomMenu__item_favorite .bottomMenu__goods').html(wishCount).show();
					 if (wishCount == 0) {
						$('.user__link_favorites .counter').hide(wishCount);
						$('.bottomMenu__item_favorite .bottomMenu__goods').hide(wishCount);;
					 }
				}
			} else {
			}
		},
		error: function(jqXHR, textStatus, errorThrown){
		}
	 });
}

$(document).on('click', '.favorites', function(){

    var targetContainer = $('.lkOrders__list'), 
        url =  $('.showMore').attr('data-url');
        $('.showMore').find('.showMore__btn').html('Загрузка');
    if (url !== undefined) {
        $.ajax({
            type: 'GET',
            url: url,
            dataType: 'html',
            success: function(data){

                $('.showMore').remove();
                $('.pagination').remove();

                let tempContainer = document.createElement('div');
                let pagination = $(data).find('.pagination');
                let	elements = $(data).find('.lkOrders__list');
                let showMore = $(data).find('.showMore');
               
                tempContainer.innerHTML = elements[0].innerHTML;
				//initContentHandlers(tempContainer);

                targetContainer.append($(tempContainer).children('div'));
                targetContainer.append(showMore);
                targetContainer.append(pagination);
                $('.mainCountCardAct_js').off('click');
		    	$('.mainCardBasket_js').off('click');
		    	$('.likeProducts_js').off('click');
		    	mainBasketCard();
		    	mainCountCard();
		    	checkAtBoot();
				$('.likeProducts_js').on('click', function(e) {
					var favorID = $(this).attr('data-item');
					if($(this).hasClass('likeProducts_active'))
						var doAction = 'delete';
					else
						var doAction = 'add';
					addFavorite(favorID, doAction);
				});	
                let arUrl = url.split('=');
                const urls = new URL(window.location);
                urls.searchParams.set('PAGEN_1', arUrl[1]); 
                history.pushState(null, null, urls);
            }
        })
    }

});

BX.addCustomEvent('onAjaxSuccess', function(){
	$('.likeProducts_js').off('click');
	$('.mainCountCardAct_js').off('click');
    $('.mainCardBasket_js').off('click');
	$('.likeProducts_js').on('click', function(e) {
		var favorID = $(this).attr('data-item');
		if($(this).hasClass('likeProducts_active'))
			var doAction = 'delete';
		else
			var doAction = 'add';
		addFavorite(favorID, doAction);
	});
    mainBasketCard();
    mainCountCard();
    checkAtBoot();
});