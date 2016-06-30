
        <script id="CartTemplate" type="text/template">

            <form action="/cart" method="post" novalidate class="cart ajaxcart">
            <div class="ajaxcart__inner">
            {{#items}}
            <div class="ajaxcart__product">
            <div class="ajaxcart__row" data-line="{{line}}">
            <div class="grid">
            <div class="grid__item one-quarter">
            <a href="{{url}}" class="ajaxcart__product-image"><img src="{{img}}" alt=""></a>
            </div>
            <div class="grid__item three-quarters">
            <p>
            <a href="{{url}}" class="ajaxcart__product-name">{{name}}</a>
            {{#if variation}}
            <!--<span class="ajaxcart__product-meta">{{variation}}</span>-->
            {{/if}}
            {{#properties}}
            {{#each this}}
            {{#if this}}
            <span class="ajaxcart__product-meta">{{@key}}: {{this}}</span>
            {{/if}}
            {{/each}}
            {{/properties}}

            </p>

            <div class="grid--full display-table">
            <div class="grid__item">
            <div class="ajaxcart__qty">
            <button type="button" class="noi-tru ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-src="qty-noi-{{ id }}" data-id="{{id}}" data-qty="{{itemMinus}}" data-line="{{line}}">
            <span class="fa fa-minus" aria-hidden="true"></span>
            <span class="fallback-text">&minus;</span>
            </button>
            <input type="text" name="updates[]" class="ajaxcart__qty-num qty-noi-{{ id }}" value="{{itemQty}}" min="0" data-id="{{id}}" data-line="{{line}}" aria-label="quantity" pattern="[0-9]*">
            <button type="button" class="noi-cong ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-src="qty-noi-{{ id }}" data-id="{{id}}" data-line="{{line}}" data-qty="{{itemAdd}}">
            <span class="fa fa-plus" aria-hidden="true"></span>
            <span class="fallback-text">+</span>
            </button>
            </div>
            </div>
            <div class="grid__item price_item">
            {{{price}}}
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            {{/items}}


            <div>
            <label for="CartSpecialInstructions">Ghi chú cho đơn hàng</label>
            <textarea name="note" class="input-full" id="CartSpecialInstructions">{{ note }}</textarea>
            </div>

            </div>
            <div class="ajaxcart__footer">
            <div class="grid--full">
            <div class="grid__item title-total">
            <p>Thành tiền</p>
            </div>
            <div class="grid__item price-total">
            <p class="product-price">{{{totalPrice}}}</p>
            </div>
            </div>
            <p class="text-center">Giá đã bao gồm VAT</p>
            <button type="button" class="btn btn--full cart__shoppingcart" name="shoppingCart" onclick="location.href='/cart'">
            Vào giỏ hàng &rarr;
            </button>
            <button type="submit" class="btn btn2 btn--full cart__checkout" name="checkout">
            Tiến hành thanh toán &rarr;
            </button>

            </div>
            </form>

        </script>
        <script id="AjaxQty" type="text/template">

            <div class="ajaxcart__qty">
            <button type="button" class="noi-tru ajaxcart__qty-adjust ajaxcart__qty--minus icon-fallback-text" data-src="qty-noi-{{ id }}" data-id="{{id}}" data-qty="{{itemMinus}}">
            <span class="fa fa-minus" aria-hidden="true"></span>
            <span class="fallback-text">&minus;</span>
            </button>
            <input type="text" class="ajaxcart__qty-num qty-noi-{{ id }}" value="{{itemQty}}" min="0" data-id="{{id}}" aria-label="quantity" pattern="[0-9]*">
            <button type="button" class="noi-cong ajaxcart__qty-adjust ajaxcart__qty--plus icon-fallback-text" data-src="qty-noi-{{id }}" data-id="{{id}}" data-qty="{{itemAdd}}">
            <span class="fa fa-plus" aria-hidden="true"></span>
            <span class="fallback-text">+</span>
            </button>
            </div>

        </script>
        <script id="JsQty" type="text/template">

            <div class="js-qty">
            <button type="button" class="noi-tru js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-src="qty-noi-{{ id }}" data-id="{{id}}" data-qty="{{itemMinus}}">
            <span class="icon icon-minus" aria-hidden="true"></span>
            <span class="fallback-text">&minus;</span>
            </button>
            <input type="text" class="js-qty__num qty-noi-{{ id }}" value="{{itemQty}}" min="1" data-id="{{id}}" aria-label="quantity" pattern="[0-9]*" name="{{inputName}}" id="{{inputId}}">
            <button type="button" class="noi-cong js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-src="qty-noi-{{ id }}" data-id="{{id}}" data-qty="{{itemAdd}}">
            <span class="icon icon-plus" aria-hidden="true"></span>
            <span class="fallback-text">+</span>
            </button>
            </div>

        </script>
        <script src="/static/js/ajax-cart.js" type="text/javascript"></script>
        <script>
            var tada_index, tada_autosearchcomplete, tada_swiftype, tada_ads, tada_adsspeed, tada_slideshowtime,
                    tada_block1gallery = false, tada_block1product = false, tada_newsletter = false;

            tada_ads = 1;
            tada_adsspeed = 5000;
            tada_slideshowtime = 3000;



            jQuery(function ($) {
                ajaxCart.init({
                    formSelector: '#AddToCartForm',
                    cartContainer: '#CartContainer',
                    addToCartSelector: '#AddToCart',
                    cartCountSelector: '#CartCount',
                    cartCostSelector: '#CartCost',
                    moneyFormat: "{{amount}}₫"
                });
            });

            jQuery('body').on('ajaxCart.afterCartLoad', function (evt, cart) {
                // Bind to 'ajaxCart.afterCartLoad' to run any javascript after the cart has loaded in the DOM
                timber.RightDrawer.open();
            });
        </script>

<div class="modal-dialog fadeIn">
    <div class="modal-content">
        <div class="modal-body">
            <div class="quick-shop-modal-bg"></div>
            <div class="grid__item one-half qs-product-image">
                <div id="quick-shop-image" class="product-image-wrapper"></div>
            </div>

            <div class="grid__item one-half qs-product-information">
                <div id="quick-shop-container">              
                    <h3 id="quick-shop-title"></h3>  
                    <div class="rating-star">
                    </div>
                    <div class="description">
                        <div id="quick-shop-description" class="text-left"></div>
                    </div>                             
                    <form action="http://shop.khoedep.vn/cart/add" method="post" class="variants" id="quick-shop-product-actions" enctype="multipart/form-data">                
                        <div id="quick-shop-price-container" class="detail-price"></div>
                        <div class="quantity-wrapper clearfix">
                            <label class="wrapper-title">Số lượng</label>
                            <div class="wrapper">
                                <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                                    <i class="fa fa-minus"></i>
                                </span>
                                <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
                                <span class="qty-up" title="Increase" data-src="#qs-quantity">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </div>
                        </div>                
                        <div id="quick-shop-variants-container" class="variants-wrapper"></div>                
                        <div class="others-bottom">
                            <input id="quick-shop-add" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Cho vào giỏ hàng">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

        <script type="text/javascript">
            Haravan.resizeImage = function(image, size) {
            try {
            if (size == 'original') { return image; }
            else {
            var matches = image.match(/(.*\/[\w\-\_\.]+)\.(\w{2,4})/);
            return matches[1] + '_' + size + '.' + matches[2];
            }
            } catch (e) { return image; }
            };
            jQuery(document).ready(function($) {
            if ($('.quantity-wrapper').length){
            $('.quantity-wrapper').on('click', '.qty-up', function() {
            var $this = $(this);
            var qty = $this.data('src');
            $(qty).val(parseInt($(qty).val()) + 1);
            });
            $('.quantity-wrapper').on('click', '.qty-down', function() {
            var $this = $(this);
            var qty = $this.data('src');
            if (parseInt($(qty).val()) > 1)
                    $(qty).val(parseInt($(qty).val()) - 1);
            });
            }

            var quickShopModal = $('#quick-shop-modal');
            var quickShopContainer = $('#quick-shop-container');
            var quickShopImage = $('#quick-shop-image');
            var quickShopTitle = $('#quick-shop-title');
            var quickShopRating = $('.rating-star');
            var quickShopDescription = $('#quick-shop-description');
            var quickShopVariantsContainer = $('#quick-shop-variants-container');
            var quickShopPriceContainer = $('#quick-shop-price-container');
            var quickShopAddButton = $('#quick-shop-add');
            var quickShopAddToCartButton = $('#quick-shop-add');
            var quickShopTags = $('#quick-shop-tags');
            var quickShopProductActions = $('#quick-shop-product-actions');
            var quickShopModalBackground = $('#quick-shop-modal .quick-shop-modal-bg');
            $('body').on('click', '.quick_shop:not(.unavailable)', function(event){
            var quickShopImage = $('#quick-shop-image');
            var $this = $(this);
            var product_json = $this.find('.product-json').html();
            var selectedProduct = JSON.parse(product_json);
            var selectedProductID = selectedProduct.id;
            // Update add button
            quickShopAddButton.data('product-id', selectedProductID);
            // Update image
            quickShopImage.empty();
            quickShopImage.html('<div id="featuted-image" class="main-image featured"><img class="img-zoom img-responsive image-fly" src="' + Haravan.resizeImage(selectedProduct.featured_image, "large") + '" data-zoom-image="' + selectedProduct.featured_image + '" alt="" /></div>');
            quickShopImage.append('<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini"><div class="qs-vertical-slider product-single__thumbnails"></div></div>');
            quickShopImage.append('<div class="vertical-slider product-single__thumbnails"></div>');
            var qs_images = selectedProduct.images;
            $.each(qs_images, function(index, value) {
            if (index)
                    quickShopImage.find('.qs-vertical-slider').append('<a class="image-thumb thumb__element" href="' + value + '" alt="" data-image="' + Haravan.resizeImage(value, 'large') + '" data-zoom-image="' + Haravan.resizeImage(value, 'original') + '"><img src="' + Haravan.resizeImage(value, "small") + '" alt="" /></a>');
            else
                    quickShopImage.find('.qs-vertical-slider').append('<a class="image-thumb active thumb__element" href="' + value + '" alt="" data-image="' + Haravan.resizeImage(value, 'large') + '" data-zoom-image="' + Haravan.resizeImage(value, 'original') + '"><img src="' + Haravan.resizeImage(value, "small") + '" alt="" /></a>');
            });
            timber.thumbGallerySlider();
            $('#quick-shop-image').on('click', '.image-thumb', function() {
            var $this = $(this);
            var background = $('.product-image .main-image .main-image-bg');
            var parent = $this.parents('.product-image-wrapper');
            var src_original = $this.attr('data-image-zoom');
            var src_display = $this.attr('data-image');
            background.show();
            parent.find('.image-thumb').removeClass('active');
            $this.addClass('active');
            parent.find('.main-image').find('img').attr('data-zoom-image', src_original);
            parent.find('.main-image').find('img').attr('src', src_display).load(function() {
            background.hide();
            });
            return false;
            });
            // Update title
            quickShopTitle.html('<a href="/products/' + selectedProduct.handle + '">' + selectedProduct.title + '</a>');
            // Update Rating Review
            quickShopRating.html('<span class="haravan-product-reviews-badge" data-id="' + selectedProduct.id + '"></span>');
            // Update description
            quickShopDescription.html(selectedProduct.description.substring(0, 300) + "...");
            // Generate variants
            var productVariants = selectedProduct.variants;
            var productVariantsCount = productVariants.length;
            quickShopPriceContainer.html('');
            quickShopVariantsContainer.html('');
            quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);
            if (productVariantsCount > 1) {
            // Reveal variants container
            quickShopVariantsContainer.show();
            // Build variants element
            var quickShopVariantElement = $('<select>', { 'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
            var quickShopVariantOptions = '';
            for (var i = 0; i < productVariantsCount; i++) {
            quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
            };
            // Add variants element to page
            quickShopVariantElement.append(quickShopVariantOptions);
            quickShopVariantsContainer.append(quickShopVariantElement);
            // Bind variants to OptionSelect JS
            new Haravan.OptionSelectors(('#quick-shop-variants-' + selectedProductID), { product: selectedProduct, onVariantSelected: selectOptionCallback });
            // Add label if only one product option and it isn't 'Title'.
            if (selectedProduct.options.length == 1 && selectedProduct.options[0] != 'Title'){
            $('#quick-shop-product-actions .selector-wrapper:eq(0)').prepend('<label>' + selectedProduct.options[0] + '</label>');
            }

            // Auto-select first available variant on page load.
            var found_one_in_stock = false;
            for (var i = 0; i < selectedProduct.variants.length; i++) {
            var variant = selectedProduct.variants[i];
            if (variant.available && found_one_in_stock == false) {
            found_one_in_stock = true;
            for (var j = 0; j < variant.options.length; j++){
            $('.single-option-selector:eq(' + j + ')').val(variant.options[j]).trigger('change');
            }
            }
            }

            } else { // If product only has a single variant    
            // Hide unnecessary variants container
            quickShopVariantsContainer.hide();
            // Build variants element
            var quickShopVariantElement = $('<select>', { 'id': ('#quick-shop-variants-' + selectedProductID), 'name': 'id'});
            var quickShopVariantOptions = '';
            for (var i = 0; i < productVariantsCount; i++) {
            quickShopVariantOptions += '<option value="' + productVariants[i].id + '">' + productVariants[i].title + '</option>'
            };
            // Add variants element to page
            quickShopVariantElement.append(quickShopVariantOptions);
            quickShopVariantsContainer.append(quickShopVariantElement);
            // Add tags
            quickShopTags.html('products.general.tag' + selectedProduct.tags);
            // Update the add button to include correct variant id
            quickShopAddToCartButton.data('variant-id', productVariants[0].id);
            // Determine if product is on sale
            if (productVariants[0].compare_at_price > 0 && productVariants[0].compare_at_price > productVariants[0].price) {
            quickShopPriceContainer.html('<del class="price_compare">' + Haravan.formatMoney(productVariants[0].compare_at_price, "{{amount}}₫") + '</del>' + '<span class="price_sale">' + Haravan.formatMoney(productVariants[0].price, "{{amount}}₫") + '</span>');
            } else {
            quickShopPriceContainer.html('<span class="price">' + Haravan.formatMoney(productVariants[0].price, "{{amount}}₫") + '</span>');
            }
            }

            });
            /* selectOptionCallback
             ===================================== */
            var selectOptionCallback = function(variant, selector) {
            // selected a valid and in stock variant
            if (variant && (variant.inventory_quantity > 0 || (variant.inventory_quantity <= 0 && variant.inventory_policy == 'continue'))) {
            quickShopAddToCartButton.data('variant-id', variant.id);
            quickShopAddToCartButton.removeAttr('disabled').fadeTo(200, 1);
            // determine if variant is on sale
            if (variant.compare_at_price > 0 && variant.compare_at_price > variant.price) {
            quickShopPriceContainer.html('<del class="price_compare">' + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + '</del>' + '<span class="price_sale">' + Haravan.formatMoney(variant.price, "{{amount}}₫") + '</span>');
            } else {
            quickShopPriceContainer.html('<span class="price">' + Haravan.formatMoney(variant.price, "{{amount}}₫") + '</span>');
            };
            // selected an invalid or out of stock variant 
            } else {
            // variant doesn't exist
            quickShopAddToCartButton.attr('disabled', 'disabled').fadeTo(200, 0.5);
            var message = variant ? "Sold Out" : "Unavailable";
            quickShopPriceContainer.html('<span class="unavailable">' + message + '</span>');
            }
            //swatch
            var form = jQuery('.quick-shop form.variants');
            for (var i = 0, length = variant.options.length; i < length; i++) {
            var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
            if (radioButton.size()) {
            radioButton.get(0).checked = true;
            }
            }
            }

            });
        </script>

        <script>
            jQuery(function() {
            jQuery('.swatch :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
            });
            });
        </script>