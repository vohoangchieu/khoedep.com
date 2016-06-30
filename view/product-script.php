        <script>
                                        $(document).ready(function () {
                                            var height = $("#AddToCart").offset().top;
                                            var w = $('body').innerWidth();
                                            if (w < 768) {
                                                $(window).scroll(function () {
                                                    var scroll_home = $(window).scrollTop();
                                                    if (scroll_home >= height) {
                                                        $("#AddToCart").addClass("sticky_cart");
                                                    } else {
                                                        $("#AddToCart").removeClass("sticky_cart");
                                                    }
                                                });
                                            }
                                            $('.cart-sold').click(function () {
                                                var link = 'Gọi cho tôi khi có sản phẩm này: http://shop.khoedep.vn' + $(this).attr('data-linker');
                                                $('textarea#contactFormMessage').val(link);
                                            })
                                            $(".cart-sold").fancybox(
                                                    {
                                                        maxWidth: 600,
                                                        maxHeight: 300,
                                                        minWidth: 300,
                                                        openEffect: 'fade',
                                                        closeEffect: 'fade',
                                                        openSpeed: 'fast',
                                                        closeSpeed: 'fast',
                                                        openMethod: 'zoomIn',
                                                        closeMethod: 'zoomOut'
                                                    });
                                        })
                </script>

                <script>
                    $(document).ready(function () {
                        $(".owl-each .grid__image").find('img').each(function () {
                            var str = $(this).attr('src');
                            var res = str.replace("compact", "medium");
                            $(this).attr('src', res);
                        })
                    })

                    setTimeout(function () {
                        var owl = $(".owl-each");
                        owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                                'initialize.owl.carousel initialize.owl.carousel ' +
                                'resize.owl.carousel resized.owl.carousel ' +
                                'refresh.owl.carousel refreshed.owl.carousel ' +
                                'update.owl.carousel updated.owl.carousel ' +
                                'drag.owl.carousel dragged.owl.carousel ' +
                                'translate.owl.carousel translated.owl.carousel ' +
                                'to.owl.carousel changed.owl.carousel', function (e) {
                                    $(".owl-each").show();
                                })
                        owl.owlCarousel({
                            items: 4,
                            slideBy: 4,
                            loop: true,
                            margin: 10,
                            lazyLoad: false,
                            nav: true,
                            navigationText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
                            responsive: {
                                0: {
                                    items: 2,
                                    nav: true
                                },
                                600: {
                                    items: 4,
                                    nav: false
                                },
                                1000: {
                                    items: 4,
                                    nav: true,
                                    loop: false
                                }
                            }
                        });

                        $("#daxem-next").click(function () {
                            owl.trigger('owl.next');
                        });
                        $("#daxem-prev").click(function () {
                            owl.trigger('owl.prev');
                        });
                    }, 0)


                    var selectCallback = function (variant, selector) {
                        timber.productPage({
                            money_format: "{{amount}}₫",
                            variant: variant,
                            selector: selector
                        });
                        if (variant.sku) {
                            $('.product-sku span').html(variant.sku);
                        }
                        if (variant.price < variant.compare_at_price) {
                            jQuery('#price-preview').html("<span>" + Haravan.formatMoney(variant.price, "{{amount}}₫") + "</span><del>" + Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫") + "</del>");
                            var pro_sold = variant.price;
                            var pro_comp = variant.compare_at_price / 100;
                            var sale = 100 - (pro_sold / pro_comp);
                            var kq_sale = Math.round(sale);
                            var pri = variant.compare_at_price;
                            var mon_sale = pri - pro_sold;
                            jQuery('#surround .product-sale span').html("<label class='sale-lb'>Sale</label> " + kq_sale + '%');
                            jQuery('.pt-sale').html('Tiết kiệm được: <span id="price-tk">' + Haravan.formatMoney(mon_sale, "{{amount}}₫") + '</span> <span id="price-tk">' + kq_sale + '%</span>')
                        } else {
                            jQuery('.pt-sale').html('');
                            jQuery('#price-preview').html("<span>" + Haravan.formatMoney(variant.price, "{{amount}}₫" + "</span>"));
                        }
                    };

                    jQuery(function ($) {
                        new Haravan.OptionSelectors('productSelect', {
                            product: {"available": true, "compare_at_price_max": 0.0, "compare_at_price_min": 0.0, "compare_at_price_varies": false, "compare_at_price": 0.0, "content": null, "description": "<h3>Tăng cường hấp thu vitamine Chewies Multivitamin with Lysine. H60v</h3><p><strong>CÔNG DỤNG :</strong></p><p>Bổ sung các vitamin , acid folic và lysine giúp tăng cường hấp thu chất dinh dưỡng, giúp duy trì cơ thể khỏe mạnh</p><p><strong>CÁCH DÙNG&nbsp;</strong></p><p>Trẻ em trên 4 tuổi : 1-2 viên/ ngày</p><p><strong>QUY CÁCH ĐÓNG GÓI :</strong></p><p>1 lọ x 60 viên</p><p><strong>Thành phần&nbsp;</strong></p><p>Mỗi viên Chewies Lysine chứa: Lysine 50mg, Vitamin A 1500IU, Vitamin E 10IU, Vitamin D3 100IU, Vitamin B1 250mcg, Vitamin B2 250mcg, Vitamin B6 250mcg, Vitamin B12 2,0mcg, Nicotinamide 2,5mg, Vitamin C 50mg, Acid Folic 250 mcg</p><p><strong>Phụ gia :</strong></p><p>Sorbitol Powder, Aspartame, Vanila Powder 87.0474, Stawberry Powder 877988, Violet Lake Blend 300568, Magnesium Stearate G-EP</p><p><strong>Lưu ý:</strong> Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</p>", "featured_image": "http://hstatic.net/844/1000032844/1/2016/6-1/chewies-lysine-box-60-s.jpg", "handle": "vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine", "id": 1002205897, "images": ["http://hstatic.net/844/1000032844/1/2016/6-1/chewies-lysine-box-60-s.jpg"], "options": ["Kích thước"], "price": 12000000.0, "price_max": 21000000.0, "price_min": 21000000.0, "price_varies": false, "tags": null, "template_suffix": null, "title": "Viên uống bổ sung cho trẻ em giúp ăn ngon Chewies Multivitamin With Lysine", "type": "Supplement", "url": "/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine", "pagetitle": "Viên uống bổ sung cho trẻ em giúp ăn ngon Chewies Multivitamin With Ly", "metadescription": null, "variants": [{"id": 1006796300, "barcode": null, "available": true, "price": 12000000.0, "sku": null, "option1": "30 viên", "option2": "", "option3": "", "options": ["30 viên"], "inventory_quantity": 0, "old_inventory_quantity": 0, "title": "30 viên", "weight": 0.0, "compare_at_price": 0.0, "inventory_management": "haravan", "inventory_policy": "continue", "selected": false, "url": null, "featured_image": null}, {"id": 1006796301, "barcode": null, "available": true, "price": 21000000.0, "sku": null, "option1": "60 viên", "option2": "", "option3": "", "options": ["60 viên"], "inventory_quantity": 0, "old_inventory_quantity": 0, "title": "60 viên", "weight": 0.0, "compare_at_price": 0.0, "inventory_management": "haravan", "inventory_policy": "continue", "selected": false, "url": null, "featured_image": null}], "vendor": "Chewies", "published_at": "2016-06-01T06:53:42.478Z", "created_at": "2016-05-06T06:17:32.823Z"},
                            onVariantSelected: selectCallback,
                            enableHistoryState: true
                        });

                        // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                        $('.selector-wrapper:eq(0)').prepend('<label for="productSelect-option-0">K&#237;ch thước</label>');


                        // Hide selectors if we only have 1 variant and its title contains 'Default'.

                    });
                </script>


                <script>
                    (function ($) {
                        var variantImages = {},
                                thumbnails,
                                variant,
                                variantImage,
                                optionValue;

                        variant = {"error": "json not allowed for this object"};
                        if (typeof variant.featured_image !== 'undefined' && variant.featured_image !== null) {
                            variantImage = variant.featured_image.src.split('?')[0].replace(/http(s)?:/, '');
                            variantImages[variantImage] = variantImages[variantImage] || {};



                            if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
                                variantImages[variantImage]["option-0"] = "30 viên";
                            } else {
                                var oldValue = variantImages[variantImage]["option-0"];
                                if (oldValue !== null && oldValue !== "30 viên") {
                                    variantImages[variantImage]["option-0"] = null;
                                }
                            }

                        }

                        variant = {"error": "json not allowed for this object"};
                        if (typeof variant.featured_image !== 'undefined' && variant.featured_image !== null) {
                            variantImage = variant.featured_image.src.split('?')[0].replace(/http(s)?:/, '');
                            variantImages[variantImage] = variantImages[variantImage] || {};



                            if (typeof variantImages[variantImage]["option-0"] === 'undefined') {
                                variantImages[variantImage]["option-0"] = "60 viên";
                            } else {
                                var oldValue = variantImages[variantImage]["option-0"];
                                if (oldValue !== null && oldValue !== "60 viên") {
                                    variantImages[variantImage]["option-0"] = null;
                                }
                            }

                        }

                        $(function () {
                            thumbnails = $('img[src*="/products/"]').not(':first');
                            if (thumbnails.size()) {
                                thumbnails.bind('click', function () {
                                    var image = $(this).attr('src').split('?')[0].replace(/(_thumb\.)|(_small\.)|(_compact\.)|(_medium\.)|(_large\.)|(_grande\.)/, '.');
                                    if (typeof variantImages[image] !== 'undefined') {

                                        optionValue = variantImages[image]['option-0'];
                                        if (optionValue !== null && $('.single-option-selector:eq(0) option').filter(function () {
                                            return $(this).text() === optionValue
                                        }).length) {
                                            $('.single-option-selector:eq(0)').val(optionValue).trigger('change');
                                        }

                                    }
                                });
                            }
                        });
                    })(jQuery);
                </script> 

                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            var owl = $("#owl-attach");
                            owl.owlCarousel({
                                items: 5,
                                pagination: false,
                                //navigationText : false,
                                navigation: true,
                                navigationText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
                                itemsDesktop: false,
                                itemsDesktopSmall: false,
                                itemsTablet: [760, 2],
                                itemsMobile: [480, 2]
                            });
                            $("#daxem-next").click(function () {
                                owl.trigger('owl.next');
                            });
                            $("#daxem-prev").click(function () {
                                owl.trigger('owl.prev');
                            });
                        }, 0)

                        $('span.select-qty').click(function () {
                            $(this).next().slideToggle().addClass('checkshow');
                        })
                        $('.t-qty a').on('click', function () {
                            $('.adr span.value').html($(this).html());
                            $('input#Quantity').attr('value', $(this).html());
                            $('.t-qty').hide();
                        })
                        $('body').click(function (e) {
                            if (!$(e.target).closest('.select-qty').length) {
                                $('.checkshow').hide();
                                //$('.t-qty').removeClass('checkshow');
                            }
                        });
                        $(".warranty a").click(function () {
                            var cls = $(this).attr('href');
                            $('html,body').animate({
                                scrollTop: $(cls).offset().top - 50}, 'slow');
                        });
                    });
                </script>
                <script>
                    $(document).ready(function () {
                        var flag = false;
                        //console.log(flag);
                        $(".view-more-tab").on('click', function (e) {
                            e.preventDefault();
                            if ($(this).find('i').hasClass('fa-angle-down')) {
                                flag = false;
                            } else {
                                flag = true;
                            }
                            if (flag == false) {
                                //console.log(flag);
                                //$(this).find('i').addClass("fa-angle-up");
                                //$(this).find('i').removeClass("fa-angle-down");
                                $(this).html('Thu gọn <i class="fa fa-angle-up"></i>');
                                $(this).prev().toggleClass('show-tab-xs');
                                $(this).toggleClass('no-bg');
                                flag = true;
                            } else {
                                //console.log(flag);
                                //$(this).find('i').addClass("fa-angle-down");
                                //$(this).find('i').removeClass("fa-angle-up");
                                $(this).html('Xem thêm <i class="fa fa-angle-down"></i>');
                                $(this).prev().toggleClass('show-tab-xs');
                                $(this).toggleClass('no-bg');
                                flag = false;
                            }
                        });

                    })
                </script>
                <script>
                    $(document).ready(function () {
                        var w = $('body').innerWidth();
                        var height = $("ul.sideways").offset().top;
                        var cart = $("#AddToCart").offset().top + 100;
                        if (w > 991) {
                            $(window).scroll(function () {
                                var scroll_home = $(window).scrollTop();
                                if (scroll_home >= height) {
                                    $("ul.sideways").addClass("sticky-tab");
                                    $("#AddToCart").addClass("sticky-btn");
                                    //$('.logo_hidden_fixed').hide();
                                } else {
                                    $("ul.sideways").removeClass("sticky-tab");
                                    $("#AddToCart").removeClass("sticky-btn");
                                }
                            });

                            $(window).scroll(function () {
                                var scroll_home = $(window).scrollTop();
                                if (scroll_home >= cart) {
                                    $("#AddToCart").removeClass("add-cart");
                                } else {
                                    $("#AddToCart").addClass("add-cart");
                                }
                            });
                        }

                        /*$(window).scroll(function() {
                         var scrollPos = $(document).scrollTop();
                         $('.warranty a').each(function () {
                         var currLink = $(this);
                         var refElement = $(currLink.attr("href"));
                         if (refElement.position().top >= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                         $('.warranty').removeClass("active");
                         currLink.parent().addClass("active");
                         }
                         else{
                         currLink.parent().removeClass("active");
                         }
                         });
                         })*/
                    })

                    /*
                     
                     $(document).ready(function () {
                     //$('#content').css('margin-top', $('header').height())
                     $(window).scroll(function () {
                     var y = $(this).scrollTop();
                     $('.warranty a').each(function (event) {
                     if (y >= $($(this).attr('href')).offset().top - $('.sticky-tab').height()) {
                     $('.warranty').not(this).removeClass('active');
                     $(this).parent().addClass('active');
                     }
                     });
                     
                     }).scroll();
                     });
                     
                     */

                </script>
                <script>
                    $(document).ready(function () {
                        setTimeout(function () {
                            $('.suggest_buyxgetone').css({'position': 'inherit', 'display': 'block'}).clone().remove().appendTo('#test');
                        }, 4000);
                        setTimeout(function () {
                            $('.sweettooth-widget-rendered').css({'position': 'inherit', 'display': 'block'}).clone().remove().appendTo('#khoedep-td');
                        }, 4000);
                        $('#AddToCart').click(function () {
                            setTimeout(function () {
                                $('.suggest_buyxgetone').css({'position': 'inherit', 'display': 'block'}).clone().remove().appendTo('#test');
                            }, 3000);
                        });
                        var a = "//hstatic.net/844/1000032844/1/2016/6-1/chewies-lysine-box-60-s_large.jpg";
                        var zoom = "//hstatic.net/844/1000032844/1/2016/6-1/chewies-lysine-box-60-s_1024x1024.jpg";
                        var id = "1022286629"
                        //console.log(id)
                        $('.product-single__photos #ProductPhotoImg').attr('src', a).attr('data-zoom', zoom).attr('data-image-id', id);
                    });
                </script>