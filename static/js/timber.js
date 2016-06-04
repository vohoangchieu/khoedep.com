/* Jonathan Snook - MIT License - https://github.com/snookca/prepareTransition */
(function(a){a.fn.prepareTransition=function(){return this.each(function(){var b=a(this);b.one("TransitionEnd webkitTransitionEnd transitionend oTransitionEnd",function(){b.removeClass("is-transitioning")});var c=["transition-duration","-moz-transition-duration","-webkit-transition-duration","-o-transition-duration"];var d=0;a.each(c,function(a,c){d=parseFloat(b.css(c))||d});if(d!=0){b.addClass("is-transitioning");b[0].offsetWidth}})}})(jQuery);

/* replaceUrlParam - http://stackoverflow.com/questions/7171099/how-to-replace-url-parameter-with-javascript-jquery */
function replaceUrlParam(e,r,a){var n=new RegExp("("+r+"=).*?(&|$)"),c=e;return c=e.search(n)>=0?e.replace(n,"$1"+a+"$2"):c+(c.indexOf("?")>0?"&":"?")+r+"="+a};

if ((typeof Haravan) === 'undefined') { Haravan = {}; }
if (!Haravan.formatMoney) {
	Haravan.formatMoney = function(cents, format) {
		var value = '',
				placeholderRegex = /\{\{\s*(\w+)\s*\}\}/,
				formatString = (format || this.money_format);

		if (typeof cents == 'string') {
			cents = cents.replace('.','');
		}

		function defaultOption(opt, def) {
			return (typeof opt == 'undefined' ? def : opt);
		}

		function formatWithDelimiters(number, precision, thousands, decimal) {
			precision = defaultOption(precision, 2);
			thousands = defaultOption(thousands, ',');
			decimal   = defaultOption(decimal, '.');

			if (isNaN(number) || number == null) {
				return 0;
			}

			number = (number/100.0).toFixed(precision);

			var parts   = number.split('.'),
					dollars = parts[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1' + thousands),
					cents   = parts[1] ? (decimal + parts[1]) : '';

			return dollars + cents;
		}

		switch(formatString.match(placeholderRegex)[1]) {
			case 'amount':
				value = formatWithDelimiters(cents, 2);
				break;
			case 'amount_no_decimals':
				value = formatWithDelimiters(cents, 0);
				break;
			case 'amount_with_comma_separator':
				value = formatWithDelimiters(cents, 2, '.', ',');
				break;
			case 'amount_no_decimals_with_comma_separator':
				value = formatWithDelimiters(cents, 0, '.', ',');
				break;
		}

		return formatString.replace(placeholderRegex, value);
	};
}

window.timber = window.timber || {};

timber.cacheSelectors = function () {
	timber.cache = {
		$html                    : $('html'),
		$body                    : $('body'),

		$navigation              : $('#AccessibleNav'),
		$mobileSubNavToggle      : $('.mobile-nav__toggle'),

		$changeView              : $('.change-view'),

		$productImageWrap		 : $('#ProductPhoto'),
		$productImage            : $('#ProductPhotoImg'),
		$thumbImages             : $('#ProductThumbs').find('a.product-single__thumbnail'),
		$productImageGallery	 : $('.gallery__item'),

		$recoverPasswordLink     : $('#RecoverPassword'),
		$hideRecoverPasswordLink : $('#HideRecoverPasswordLink'),
		$recoverPasswordForm     : $('#RecoverPasswordForm'),
		$customerLoginForm       : $('#CustomerLoginForm'),
		$passwordResetSuccess    : $('#ResetSuccess')
	};
};

timber.init = function () {
	FastClick.attach(document.body);
	timber.cacheSelectors();
	timber.accessibleNav();
	timber.drawersInit();
	timber.mobileNavToggle();
	timber.productImageSwitch();  
	timber.productImageGallery();
	timber.productImageZoom();
	timber.responsiveVideos();
	timber.collectionViews();
	timber.loginForms();
	timber.thumbGallerySlider();
	timber.sliderProduct();
	timber.lightBoxAccount();
	timber.quickView();
	if ( tada_index == 1) timber.slideshow();
	timber.googlemaps();
	timber.toTop();
	if ( tada_newsletter)  timber.ModalNewsletter();
};

timber.accessibleNav = function () {
	var $nav = timber.cache.$navigation,
			$allLinks = $nav.find('a'),
			$topLevel = $nav.children('li').find('a'),
			$parents = $nav.find('.site-nav--has-dropdown'),
			$subMenuLinks = $nav.find('.site-nav__dropdown').find('a'),
			activeClass = 'nav-hover',
			focusClass = 'nav-focus';

	$parents.on('mouseenter touchstart', function(evt) {
		var $el = $(this);

		if (!$el.hasClass(activeClass)) {
			evt.preventDefault();
		}

		showDropdown($el);
	});

	$parents.on('mouseleave', function() {
		hideDropdown($(this));
	});

	$subMenuLinks.on('touchstart', function(evt) {
		evt.stopImmediatePropagation();
	});

	$allLinks.focus(function() {
		handleFocus($(this));
	});

	$allLinks.blur(function() {
		removeFocus($topLevel);
	});

	function handleFocus ($el) {
		var $subMenu = $el.next('ul'),
				hasSubMenu = $subMenu.hasClass('sub-nav') ? true : false,
				isSubItem = $('.site-nav__dropdown').has($el).length,
				$newFocus = null;

		if (!isSubItem) {
			removeFocus($topLevel);
			addFocus($el);
		} else {
			$newFocus = $el.closest('.site-nav--has-dropdown').find('a');
			addFocus($newFocus);
		}
	}

	function showDropdown ($el) {
		$el.addClass(activeClass);

		setTimeout(function() {
			timber.cache.$body.on('touchstart', function() {
				hideDropdown($el);
			});
		}, 250);
	}

	function hideDropdown ($el) {
		$el.removeClass(activeClass);
		timber.cache.$body.off('touchstart');
	}

	function addFocus ($el) {
		$el.addClass(focusClass);
	}

	function removeFocus ($el) {
		$el.removeClass(focusClass);
	}
};

timber.drawersInit = function () {
	timber.LeftDrawer = new timber.Drawers('NavDrawer', 'left');
	timber.RightDrawer = new timber.Drawers('CartDrawer', 'right', {
		'onDrawerOpen': ajaxCart.load
																					});  
};

timber.mobileNavToggle = function () {
	timber.cache.$mobileSubNavToggle.on('click', function() {
		$(this).parent().toggleClass('mobile-nav--expanded');
	});
};

timber.getHash = function () {
	return window.location.hash;
};

timber.updateHash = function (hash) {
	window.location.hash = '#' + hash;
	$('#' + hash).attr('tabindex', -1).focus();
};

timber.responsiveVideos = function () {
	$('iframe[src*="youtube.com/embed"]').wrap('<div class="video-wrapper"></div>');
	$('iframe[src*="player.vimeo"]').wrap('<div class="video-wrapper"></div>');
};

timber.productPage = function (options) {
	var moneyFormat = options.money_format,
			variant = options.variant,
			selector = options.selector;

	var $productImage = $('#ProductPhotoImg'),
			$addToCart = $('#AddToCart'),
			$productPrice = $('#ProductPrice'),
			$comparePrice = $('#ComparePrice'),
			$quantityElements = $('.quantity-selector, label + .js-qty'),
			$addToCartText = $('#AddToCartText');

	if (variant) {

		if (variant.featured_image) {
			var newImg = variant.featured_image,
					el = $productImage[0];
			Haravan.Image.switchImage(newImg, el, timber.switchImage);
		}

		if (variant.available) {
			$addToCart.removeClass('disabled').prop('disabled', false);
			$addToCartText.html("Mua ngay");
			$quantityElements.show();
		} else {
			$addToCart.addClass('disabled').prop('disabled', true);
			$addToCartText.html("Tạm hết");
			$quantityElements.hide();
		}
		//console.log($productPrice);
		if (Haravan.formatMoney(variant.price, moneyFormat) == "0₫" ){
			$productPrice.html('Liên hệ');
		} else {
			$productPrice.html( Haravan.formatMoney(variant.price, moneyFormat) );
		}
		if (variant.compare_at_price > variant.price) {
			$comparePrice
			.html('<del>' + Haravan.formatMoney(variant.compare_at_price, moneyFormat) + '</del>')
			.show();
		} else {
			$comparePrice.hide();
		}

	} else {
		$addToCart.addClass('disabled').prop('disabled', true);
		$addToCartText.html(Unavailable);
		$quantityElements.hide();
	}
};

timber.productImageSwitch = function () {
	if (timber.cache.$thumbImages.length) {
		timber.cache.$thumbImages.on('click', function(evt) {
			evt.preventDefault();
			var newImage = $(this).attr('href');
			var newImageId = $(this).attr('data-image-id');
			timber.switchImage(newImage, { id: newImageId }, timber.cache.$productImage);
		});
	}
};

timber.switchImage = function (src, imgObject, el) {
	var $el = $(el);
	$el.attr('src', src);
	$el.attr('data-image-id', imgObject.id);

	
	var zoomSrc = src.replace('_medium.','_1024x1024.').replace('_large.','_1024x1024.').replace('_grande.','_1024x1024.');
	 $el.attr('data-zoom', zoomSrc);

	 $(function() {
		 timber.productImageZoom();
	 });
	 
	 };

	 timber.productImageZoom = function () {
		 

			if (!timber.cache.$productImageWrap.length || timber.cache.$html.hasClass('supports-touch')) {
				return;
			};

			 timber.cache.$productImageWrap.trigger('zoom.destroy');

			 timber.cache.$productImageWrap.addClass('image-zoom').zoom({
				 url: timber.cache.$productImage.attr('data-zoom')
			 });
			};

			timber.productImageGallery = function() {
				
				 };
				 if ($(window).width() > 768 ){
					 timber.thumbGallerySlider = function (){	 
						 if($('.thumb__element').size() > 0){
							 var owl = $("#ProductThumbs");
							 owl.on('initialize.owl.carousel initialized.owl.carousel ' +
											'initialize.owl.carousel initialize.owl.carousel ' +
											'resize.owl.carousel resized.owl.carousel ' +
											'refresh.owl.carousel refreshed.owl.carousel ' +
											'update.owl.carousel updated.owl.carousel ' +
											'drag.owl.carousel dragged.owl.carousel ' +
											'translate.owl.carousel translated.owl.carousel ' +
											'to.owl.carousel changed.owl.carousel', function(e) {
												$("#ProductThumbs").show();
											})
							 owl.owlCarousel({
								 nav: true,
								 navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								 pagination: false,
								 autoPlay:tada_adsspeed,
								 items: 4,
								 slideSpeed : 200,
								 paginationSpeed : 1000,
								 rewindSpeed : 1000,
								 itemsDesktop : [1199,4],
								 itemsDesktopSmall : [979,3],
								 itemsTablet: [768,3],
								 itemsTabletSmall: [540,1],
								 itemsMobile : [360,1],
							 });
						 }
					 };
				 } else {
					 /*timber.thumbGallerySlider = function (){	 
						 if($('.thumb__element').size() > 0){
							 $('.product-single__thumbnails').owlCarousel({
								 navigation: true,
								 navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								 pagination: true,
								 autoPlay:5000,
								 items: 1
							 });
						 }
					 };*/
					 timber.thumbGallerySlider = function (){	 
						 if($('.thumb__element').size() > 0){
							 var owl = $("#ProductThumbs-xs");
							 owl.on('initialize.owl.carousel initialized.owl.carousel ' +
											'initialize.owl.carousel initialize.owl.carousel ' +
											'resize.owl.carousel resized.owl.carousel ' +
											'refresh.owl.carousel refreshed.owl.carousel ' +
											'update.owl.carousel updated.owl.carousel ' +
											'drag.owl.carousel dragged.owl.carousel ' +
											'translate.owl.carousel translated.owl.carousel ' +
											'to.owl.carousel changed.owl.carousel', function(e) {
												$("#ProductThumbs-xs").show();
											})
							 owl.owlCarousel({
								 navigation: true,
								 navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
								 pagination: true,
								 autoPlay:5000,
								 /*items: 4,
								 slideSpeed : 200,
								 paginationSpeed : 1000,
								 rewindSpeed : 1000,
								 itemsDesktop : [1199,4],
								 itemsDesktopSmall : [979,3],
								 itemsTablet: [768,1],
								 itemsTabletSmall: [540,1],
								 itemsMobile : [360,1],
									*/
								 items: 1
							 });
						 }
					 };
				 }
				 timber.collectionViews = function () {
					 if (timber.cache.$changeView.length) {
						 timber.cache.$changeView.on('click', function() {
							 var view = $(this).data('view'),
									 url = document.URL,
									 hasParams = url.indexOf('?') > -1;
							 $(".collection-view button").removeClass("change-view--active");
							 if(view == "grid"){
								 $(".grid-uniform-category").removeClass("category-full-width");
								 $(".grid-button").addClass("change-view--active");
							 }
							 else {
								 $(".grid-uniform-category").addClass("category-full-width");
								 $(".list-button").addClass("change-view--active");
							 }
						 });
					 }
				 };

				 timber.slideshow = function () {
					 $('#carousel').flexslider({
						 animation: "slide",
						 controlNav: false,
						 animationLoop: false,
						 slideshow: false,
						 itemWidth: 292,
						 itemMargin: 0,
						 asNavFor: '#slider'
					 });

					 $('#slider').flexslider({
						 animation: "slide",
						 controlNav: false,
						 slideshowSpeed:tada_slideshowtime,
						 slideshow: false,
						 sync: "#carousel"
					 });
				 }

				 timber.sliderProduct = function () {
					 if(tada_ads==1){
						 $(".ads-banner-slider").owlCarousel({
							 navigation : false,
							 pagination: false,
							 autoPlay:tada_adsspeed,
							 items: 1,
							 slideSpeed : 200,
							 paginationSpeed : 1000,
							 rewindSpeed : 1000,
							 itemsDesktop : [1199,1],
							 itemsDesktopSmall : [979,1],
							 itemsTablet: [768,1],
							 itemsTabletSmall: [540,1],
							 itemsMobile : [360,1],
						 });
					 }
					 $(".home-gallery-slider").owlCarousel({

						 navigation : false,
						 pagination: true,
						 autoPlay:tada_block1gallery,
						 items: 1,
						 slideSpeed : 200,
						 paginationSpeed : 1000,
						 rewindSpeed : 1000,
						 itemsDesktop : [1199,1],
						 itemsDesktopSmall : [979,1],
						 itemsTablet: [768,1],
						 itemsTabletSmall: [540,1],
						 itemsMobile : [360,1],
					 });
					 $(".home-products-slider1").owlCarousel({
						 navigation : true,
						 pagination: false,
						 autoPlay:tada_block1product,
						 items: 4,
						 slideSpeed : 200,
						 paginationSpeed : 1000,
						 rewindSpeed : 1000,
						 itemsDesktop : [1199,4],
						 itemsDesktopSmall : [979,4],
						 itemsTablet: [768,3],
						 itemsTabletSmall: [540,2],
						 itemsMobile : [360,2],
					 });
					 if ($(window).width() > 768 ){
						 var owl = $(".home-products-sliders");
						 owl.on('initialize.owl.carousel initialized.owl.carousel ' +
										'initialize.owl.carousel initialize.owl.carousel ' +
										'resize.owl.carousel resized.owl.carousel ' +
										'refresh.owl.carousel refreshed.owl.carousel ' +
										'update.owl.carousel updated.owl.carousel ' +
										'drag.owl.carousel dragged.owl.carousel ' +
										'translate.owl.carousel translated.owl.carousel ' +
										'to.owl.carousel changed.owl.carousel', function(e) {
											$(".home-products-sliders").show();
										})
						 owl.owlCarousel({
							 slideBy: 4,
							 items:4,
							 merge:true,
							 lazyLoad:true,
							 pagination: false,
							 nav: true,
							 navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
							 responsiveClass:true,
							 responsive:{
								 0:{
									 items:2,
									 nav:true
								 },
								 600:{
									 items:2,
									 nav:false
								 },
								 1000:{
									 items:4,
									 nav:true,
									 loop:false
								 }
							 }
						 });
					 }
					 else if ($(window).width() < 768){
						 for(var i =7; i<=20; i++ ){
							 $('.home-products-slider .grid__item:nth-child('+i+')').hide();
						 }
					 }
					 var owl1 = $('.noi-img');
					 owl1.on('initialize.owl.carousel initialized.owl.carousel ' +
									 'initialize.owl.carousel initialize.owl.carousel ' +
									 'resize.owl.carousel resized.owl.carousel ' +
									 'refresh.owl.carousel refreshed.owl.carousel ' +
									 'update.owl.carousel updated.owl.carousel ' +
									 'drag.owl.carousel dragged.owl.carousel ' +
									 'translate.owl.carousel translated.owl.carousel ' +
									 'to.owl.carousel changed.owl.carousel', function(e) {
										 $(".noi-img").show();
									 })
					 owl1.owlCarousel({
						 slideBy: 4,
						 loop:true,
						 margin:10,
						 lazyLoad:true,
						 nav: true,
						 navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],

						 responsive:{
							 0:{
								 items:1,
								 nav:true
							 },
							 600:{
								 items:2,
								 nav:true
							 },
							 1000:{
								 items:4,
								 nav:true,
								 loop:true
							 }
						 }


					 });
					 //$('.noi-img').show();
					 $(".collection-products-slider1").owlCarousel({
						 slideBy: 4,
						 scrollPerPage : true,
						 navigation : true,
						 pagination: false,
						 autoPlay:tada_block1product,
						 items: 4,
						 dots: false,
						 loop: true,
						 slideSpeed : 200,
						 paginationSpeed : 1000,
						 rewindSpeed : 1000,
						 itemsDesktop : [1199,4],
						 itemsDesktopSmall : [979,4],
						 itemsTablet: [768,3],
						 itemsTabletSmall: [540,2],
						 itemsMobile : [360,2],
					 });
					 $(".related-products-items").owlCarousel({
						 navigation : true,
						 pagination: false,
						 scrollPerPage : true,
						 autoPlay:tada_block1product,
						 items: 4,
						 slideSpeed : 200,
						 paginationSpeed : 1000,
						 rewindSpeed : 1000,
						 itemsDesktop : [1199,4],
						 itemsDesktopSmall : [979,4],
						 itemsTablet: [768,3],
						 itemsTabletSmall: [540,2],
						 itemsMobile : [360,1],
					 });
				 }

				 timber.lightBoxAccount = function(){
					 $("#login_link").fancybox(
						 {
							 maxWidth	: 600,
							 maxHeight	: 300,
							 openEffect	: 'fade',
							 closeEffect	: 'fade',
							 openSpeed: 'fast',
							 closeSpeed : 'fast',
							 openMethod : 'zoomIn',
							 closeMethod : 'zoomOut'
						 });
					 $(".order-tracking > a").fancybox(
						 {
							 maxWidth	: 600,
							 maxHeight	: 300,
							 openEffect	: 'fade',
							 closeEffect	: 'fade',
							 openSpeed: 'fast',
							 closeSpeed : 'fast',
							 openMethod : 'zoomIn',
							 closeMethod : 'zoomOut'
						 });    
				 }

				 timber.loginForms = function() {
					 function showRecoverPasswordForm() {
						 timber.cache.$recoverPasswordForm.show();
						 timber.cache.$customerLoginForm.hide();
					 }

					 function hideRecoverPasswordForm() {
						 timber.cache.$recoverPasswordForm.hide();
						 timber.cache.$customerLoginForm.show();
					 }
					 timber.cache.$recoverPasswordLink.on('click', function(evt) {
						 evt.preventDefault();
						 showRecoverPasswordForm();
					 });

					 timber.cache.$hideRecoverPasswordLink.on('click', function(evt) {
						 evt.preventDefault();
						 hideRecoverPasswordForm();
					 });

					 if (timber.getHash() == '#recover') {
						 showRecoverPasswordForm();
					 }
				 };

				 timber.resetPasswordSuccess = function() {
					 timber.cache.$passwordResetSuccess.show();
				 };

				 timber.Drawers = (function () {
					 var Drawer = function (id, position, options) {
						 var defaults = {
							 close: '.js-drawer-close',
							 open: '.js-drawer-open-' + position,
							 openClass: 'js-drawer-open',
							 dirOpenClass: 'js-drawer-open-' + position
						 };

						 this.$nodes = {
							 parent: $('body, html'),
							 page: $('#PageContainer'),
							 moved: $('.is-moved-by-drawer')
						 };

						 this.config = $.extend(defaults, options);
						 this.position = position;

						 this.$drawer = $('#' + id);

						 if (!this.$drawer.length) {
							 return false;
						 }

						 this.drawerIsOpen = false;
						 this.init();
					 };

					 Drawer.prototype.init = function () {
						 $(this.config.open).on('click', $.proxy(this.open, this));
						 this.$drawer.find(this.config.close).on('click', $.proxy(this.close, this));
					 };

					 Drawer.prototype.open = function (evt) {
						 var externalCall = false;

						 if (evt) {
							 evt.preventDefault();
						 } else {
							 externalCall = true;
						 }

						 if (evt && evt.stopPropagation) {
							 evt.stopPropagation();
							 this.$activeSource = $(evt.currentTarget);
						 }

						 if (this.drawerIsOpen && !externalCall) {
							 return this.close();
						 }

						 this.$nodes.moved.addClass('is-transitioning');
						 this.$drawer.prepareTransition();

						 this.$nodes.parent.addClass(this.config.openClass + ' ' + this.config.dirOpenClass);
						 this.drawerIsOpen = true;

						 this.trapFocus(this.$drawer, 'drawer_focus');

						 if (this.config.onDrawerOpen && typeof(this.config.onDrawerOpen) == 'function') {
							 if (!externalCall) {
								 this.config.onDrawerOpen();
							 }
						 }

						 if (this.$activeSource && this.$activeSource.attr('aria-expanded')) {
							 this.$activeSource.attr('aria-expanded', 'true');
						 }

						 this.$nodes.page.on('touchmove.drawer', function () {
							 return false;
						 });

						 this.$nodes.page.on('click.drawer', $.proxy(function () {
							 this.close();
							 return false;
						 }, this));
					 };

					 Drawer.prototype.close = function () {
						 if (!this.drawerIsOpen) { 
							 return;
						 }

						 $(document.activeElement).trigger('blur');

						 this.$nodes.moved.prepareTransition({ disableExisting: true });
						 this.$drawer.prepareTransition({ disableExisting: true });

						 this.$nodes.parent.removeClass(this.config.dirOpenClass + ' ' + this.config.openClass);

						 this.drawerIsOpen = false;

						 this.removeTrapFocus(this.$drawer, 'drawer_focus');

						 this.$nodes.page.off('.drawer');
					 };

					 Drawer.prototype.trapFocus = function ($container, eventNamespace) {
						 var eventName = eventNamespace ? 'focusin.' + eventNamespace : 'focusin';

						 $container.attr('tabindex', '-1');

						 $container.focus();

						 $(document).on(eventName, function (evt) {
							 if ($container[0] !== evt.target && !$container.has(evt.target).length) {
								 $container.focus();
							 }
						 });
					 };

					 Drawer.prototype.removeTrapFocus = function ($container, eventNamespace) {
						 var eventName = eventNamespace ? 'focusin.' + eventNamespace : 'focusin';

						 $container.removeAttr('tabindex');
						 $(document).off(eventName);
					 };

					 return Drawer;
				 })();

				 timber.quickView = function() {
					 $(".quick_shop").fancybox({
						 openEffect	: 'elastic',
						 closeEffect	: 'elastic'
					 });
					 $.fancybox.update();
				 };

				 timber.googlemaps = function() {
					 if(jQuery().gMap){
						 if($('#contact_map').length){
							 console.log(89);
							 $('#contact_map').gMap({
								 zoom: 17,
																			scrollwheel: false,
																			maptype: 'ROADMAP',
																			markers:[
																			{
																			address: '',
																			html: '_address'
																			}
																			]
																			});
						 }
					 }
				 }

				 timber.toTop = function() {
					 function o(o) {
						 var l = $("#scroll-to-top");
						 l.removeClass("off on"), l.addClass("on" == o ? "on" : "off")
					 }
					 $(window).scroll(function() {

						 /*
						 var l = $(this).scrollTop(),
								 n = $(this).height();
						 if (l > 0) var t = l + n / 2;
						 else var t = 1;
						 o(1e3 > t && n > t ? "off" : "on")
*/
						 if ($(this).scrollTop() > 100) {
							 $('#scroll-to-top').fadeIn();
						 } else {
							 $('#scroll-to-top').fadeOut();
						 }
					 }), $("#scroll-to-top").click(function(o) {
						 o.preventDefault(), $("body,html").animate({
							 scrollTop: 0
						 }, 1000)
					 })
				 }

				 timber.ModalNewsletter = function() {
					 if ($.cookie('tada-cookies')) {
					 } 
					 else {
						 $(".newsletter_popup").fancybox({
							 beforeShow : function(){
								 $(".fancybox-skin").addClass("newsletter-skin");
								 $('#newsletter_popup').removeClass('newsletter_popup');
							 }
						 }).trigger('click');  
					 }
					 $.cookie('tada-cookies', 'true', { expires: 7});
				 }

				 $(timber.init);
