//var domainapp = "http://appbuyxgetone.sku.vn/";
//var domainapp = "http://localhost:50465/";
var domainapp = "https://inapp.haravan.com/buyxgety/";
//var domainapp = "https://localhost:44300/";
var shopname = "";
var location_host = "//" + window.location.host + "/meta.json";
var buynowbutton = false;
var buyone_ischecking = false;

function AddItemCart(variant_id, quantity, function_callback) {
    var quantity = quantity || 1;
    var params = {
        type: 'POST',
        async: false,
        url: '/cart/add.js',
        data: 'quantity=' + quantity + '&id=' + variant_id,
        dataType: 'json',
        success: function (line_item) {
            window.location.reload();
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    };
    jQuery.ajax(params);
};

function ChangeItemCart(variant_id, quantity) {
    var params = {
        type: 'POST',
        async: false,
        url: '/cart/change.js',
        data: 'quantity=' + quantity + '&id=' + variant_id,
        dataType: 'json',
        success: function (cart) {
            window.location.reload();
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    };
    jQuery.ajax(params);
};

function AddMore(variant_id) {
    jQuery.ajax({
        cache: false,
        async: false,
        dataType: "json",
        type: "GET",
        url: '/cart.js',
        success: function (cartdata) {
            if (cartdata.items.length > 0) {
                var has_variant_already = false;
                var current_quantity = 0;
                cartdata.items.forEach(function (product) {
                    if (product.variant == variant_id) {
                        has_variant_already = true;
                        current_quantity = product.quantity
                    }
                });

                if (has_variant_already) {
                    ChangeItemCart(variant_id, current_quantity + 1);
                }
                else {
                    AddItemCart(variant_id, 1);
                }
            }
        }
    });
}

function UpdateAllCart(newcart) {
    var params = {
        type: 'POST',
        async: false,
        url: '/cart/update.js',
        data: newcart,
        dataType: 'json',
        success: function (line_item) {
            if (line_item.items.length == 0) {
                alert('Có vấn đề về tồn kho trong giỏ hàng!');
                window.location.reload();
            }
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    };
    jQuery.ajax(params);
};

function ClearCart(data, callback) {
    var params = {
        type: 'POST',
        async: false,
        url: '/cart/clear.js',
        dataType: 'json',
        success: function (line_item) {
            UpdateAllCart(data, callback);
        },
        error: function (XMLHttpRequest, textStatus) {
            Haravan.onError(XMLHttpRequest, textStatus);
        }
    };
    jQuery.ajax(params);
};
jQuery(document).ready(function () {
    jQuery.get(location_host, function (obj) {
        if (obj != null) {
            shopname = obj.myharavan_domain
            window.callcart = 0;

            HandleBuyXGetOneCart(false);
            return;
        }

    });

    jQuery('option').each(function () {
        if (jQuery(this).text().indexOf('BuyXGetY') != -1) {
            jQuery(this).remove();
        }
    });
    jQuery(document).on("click", '.suggest_buyxgetone h2 a.btn-toggle', function () {
        jQuery(this).toggleClass('active');
        if (jQuery(this).hasClass('active')) {
            jQuery(".dvWrapperSuggest").slideUp();
            //jQuery(".buyxcontent").slideUp();
        } else {
            jQuery(".dvWrapperSuggest").slideDown();
            //jQuery(".buyxcontent").slideDown();
        }
    });
    jQuery(document).on("click", '.suggest_buyxgetone h2 a.btn-hide', function () {
        jQuery('.suggest_buyxgetone').remove();
    });
    jQuery(document).on("click", '.buyxgetone_center h2 a', function () {
        jQuery('.suggest_buyxgetone').remove();
    });

    jQuery('*[id=checkout],*[name=checkout]').click(function (e) {
        e.stopPropagation();
        e.preventDefault();
        jQuery.ajax({
            url: "/cart",
            data: jQuery(this).parents('form').serialize(),
            type: 'POST',
            success: function () {
                HandleBuyXGetOneCart(false);
            }
        })
    })
});
jQuery(document).ajaxComplete(function (event, request, settings) {

    if (settings.url == "/cart.js" || settings.url == "/cart/add.js") {
        if (window.callcart == 0) {

            HandleBuyXGetOneCart(false);

            window.callcart = 1;
        }
        else {
            window.callcart = 0;
        }
    }
    else if (settings.url == "/cart") {
        buynowbutton = true;
        HandleBuyXGetOneCart(true);
    }
});
function suggestProdcutBuyXGetOne(message, colorbg, position) {
    jQuery(".suggest_buyxgetone").remove();
    var class_position = "buyxgetone_left";
    switch (position) {
        case "left":
            class_position = "buyxgetone_left";
            break;
        case "right":
            class_position = "buyxgetone_right";
            break;
        case "center":
            class_position = "buyxgetone_center";
            break;
    }

    var str = "<div class='suggest_buyxgetone " + class_position + "' style='background:" + colorbg + "'>";
    str += "<link rel='stylesheet' type='text/css' href='" + domainapp + "Content/css/buyer.css'>" + message + "</div>";
    jQuery("body").append(str);
};


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
function HandleBuyXGetOneCart(isbuynow) {
    if (shopname == "")
        return;

    var function_callback = null;

    jQuery.ajax({
        cache: false,
        async: false,
        dataType: "json",
        type: "GET",
        url: '/cart.js',
        success: function (cartdata) {
            jQuery(".suggest_buyxgetone").remove();
            if (cartdata.items.length > 0) {
                jQuery.ajax({
                    cache: false,
                    async: false,
                    dataType: "json",
                    type: "POST",
                    url: domainapp + 'handecart/calcart',
                    data: { shop: shopname, cart: cartdata },
                    success: function (res) {
                        if (res.Config && res.Config.app_status == 0) {
                            if (res.Data) {
                                if (res.Data.isUpdate) {
                                    ClearCart(res.Data.updates);
                                }
                            }
                            if (res && res.Data && res.Data.listSuggest.products && res.Data.listSuggest.products.length > 0) {

                                var str = "";


                                str = "<h2 style='background:" + res.Config.colorbackground_popup_headder;
                                str += ";color:" + res.Config.colortext_headder;
                                str += "'>";
                                str += res.Config.lable_product_recommend + "<a class='btn-toggle'></a><a class='btn-hide'></a></h2>";
                                if (res.Data.listSuggest.products.length > 3) {
                                    str += "<div class='dvWrapperSuggest'  style=\"overflow-y:auto; height: 300px;\">";
                                }
                                else {
                                    str += "<div class='dvWrapperSuggest'  style=\"overflow-y:auto;\">";
                                }

                                res.Data.listSuggest.products.forEach(function (product) {
                                    if (product.images.length > 0)
                                        str += " <div class='buyxcontent clearfix'><img src='" + Haravan.resizeImage(product.images[0].src, "thumb") + "'/>";
                                    else
                                        str += " <div class='buyxcontent clearfix'><img src='//hstatic.net/0/0/global/noDefaultImage6_small.gif'/>";

                                    if (res.Config.is_show_popup_button == true) {
                                        str += "<div style='max-width: 265px; float:left'>";
                                    }
                                    else {
                                        str += "<div>";
                                    }
                                    str += "<a href='" + window.location.origin + "/products/" + product.handle + "' ";

                                    if (res.Config.click_popup_event != 1) {
                                        str += "target='_blank' ";
                                    }
                                    str += "style='color:" + (res.Config.colortext ? res.Config.colortext : "#53a1cc") + "'>";
                                    str += product.title;

                                    str += "<p style='margin-bottom:0px;'>" + (res.Config.lable_disscount ? res.Config.lable_disscount : "Giảm giá") + " <span style='color:" + (res.Config.colortext_lable_disscount ? res.Config.colortext_lable_disscount : "#53a1cc") + "'>" + (product.discounttype == 1 ? numberWithCommas(product.discount) + "₫" : product.discount + "%") + "</span>. ";
                                    if (res.Config.is_showdiscountedprice == true) {
                                        str += (res.Config.lable_disscount_after ? res.Config.lable_disscount_after : "Sau giảm giá") + ": <span style='color:" + (res.Config.colortext_lable_disscount ? res.Config.colortext_lable_disscount : "#53a1cc") + "'>" + numberWithCommas(product.discountedprice) + "₫. </span>";
                                    }
                                    str += "Khi mua <span style='color:" + (res.Config.colortext_lable_disscount ? res.Config.colortext_lable_disscount : "#53a1cc") + "'>" + product.countbuy + " " + product.main_item_promotion + "</span>";
                                    str += "</p></a></div>";
                                    if (res.Config.is_show_popup_button == true) {
                                        if (product.variants != null && product.variants.length > 0) {
                                            str += "<a class='btn btn-default' style='float: right; background-color: #C3D946; padding:5px;' href='javascript:AddMore(" + product.variants[0].id + ")'>" + (res.Config.label_popup_button == null || res.Config.label_popup_button == "" ? "Mua ngay" : res.Config.label_popup_button) + "</a>";
                                        }
                                    }
                                    str += "</div>"
                                });
                                str += "</div>";

                                suggestProdcutBuyXGetOne(str, res.Config.colorbackground_popup, res.Config.position_popup);
                            }
                            else {
                                jQuery(".suggest_buyxgetone").remove();
                            }

                            if (res != null && res.Config != null && res.Data != null)
                                function_callback = res.Config.function_callback;

                            if (isbuynow) {
                                window.location = '/checkout';
                            }
                        }
                    }
                }).always(function (res) {
                    if (window.location.pathname == "/cart") {
                        if (!res || !res.Data || res.Data.isUpdate)
                            window.location.reload();
                    }
                    else {
                        if (function_callback)
                            eval(function_callback);
                    }
                    if (buynowbutton) {
                        buynowbutton = false;
                        window.location = '/checkout';
                    }
                });
            }
        }
    });
}