<div class="wrapper">
    <div id="main-header" class="grid--full grid--table">

        <div class="grid__item small--one-whole medium--one-whole two-eighths list_collection_fixed" style="display: none">
            <div id="top-home-blocks" class="grid--full grid--table">

                <div class="grid__item one-quarter shop-by-collections medium-down--hide">
                    <div class="sidebar-collections">
                        <?php
                        include $APPLICATION_PATH . '/view/sidebar-collections.php';
                        ?>
                    </div>    
                </div>

            </div>
        </div>


        <div class="grid__item small--one-whole medium--one-whole four-eighths mobile-bottom t-fix show-xs">
            <div class="large--hide medium-down--show navigation-icon">
                <div class="grid">
                    <div class="grid__item one-half">
                        <div class="site-nav--mobile">
                            <button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
                                <span class="icon icon-hamburger" aria-hidden="true"></span>
                                <span class="fallback-text">Menu</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-header__search">

                <h1 class="site-header__logo large--left" itemscope="" itemtype="http://schema.org/Organization">


                    <a href="/" itemprop="url" class="site-header__logo-link">
                        <img src="/static/image/website/logo_mobile.png"  itemprop="logo">
                    </a>


                </h1>

            </div>            


            <div class="large--hide medium-down--show navigation-cart">              
                <div class="grid__item text-right">
                    <div class="site-nav--mobile">
                        <a href="http://shop.khoedep.vn/cart" class="js-drawer-open-right site-nav__link" aria-controls="CartDrawer" aria-expanded="false">
                            <span class="icon-fallback-text">
                                <span class="icon icon-cart" aria-hidden="true"></span>
                                <span class="fallback-text">Giỏ hàng</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="large--hide medium-down--show navigation-cart search_btn_mobile">
                <a href="javascript:;"><i class="fa fa-search"></i></a>
            </div>
        </div>
        <div class="small--one-whole medium--one-whole two-eighths logo_hidden_fixed search_bar_mobile">

            <div class="site-header__search search-xs">
                <form action="http://shop.khoedep.vn/search" class="input-group search-bar ultimate-search">

                    <div class="collections-selector">
                        <div class="kd_search_text">
                            Tất cả
                        </div>
                        <div id="kd-info" class="kd_list_search">

                            <div class="kd_item" value="thuc-pham-chuc-nang" data-coll-name="Thực phẩm chức năng" data-coll-handle="thuc-pham-chuc-nang" data-coll-id="1000240752">Thực phẩm chức năng</div>

                            <div class="kd_item" value="thuc-pham-dinh-duong" data-coll-name="Thực phẩm dinh dưỡng" data-coll-handle="thuc-pham-dinh-duong" data-coll-id="1000333167">Thực phẩm dinh dưỡng</div>

                            <div class="kd_item" value="thuc-pham-the-thao" data-coll-name="Thực phẩm thể thao" data-coll-handle="thuc-pham-the-thao" data-coll-id="1000240753">Thực phẩm thể thao</div>

                            <div class="kd_item" value="cham-soc-da" data-coll-name="Chăm sóc da" data-coll-handle="cham-soc-da" data-coll-id="1000240785">Chăm sóc da</div>

                            <div class="kd_item" value="trang-diem" data-coll-name="Trang điểm" data-coll-handle="trang-diem" data-coll-id="1000240786">Trang điểm</div>

                            <div class="kd_item" value="nuoc-hoa" data-coll-name="Nước hoa" data-coll-handle="nuoc-hoa" data-coll-id="1000240787">Nước hoa</div>

                            <div class="kd_item" value="cham-soc-toc" data-coll-name="Chăm sóc tóc" data-coll-handle="cham-soc-toc" data-coll-id="1000240788">Chăm sóc tóc</div>

                            <div class="kd_item" value="cham-soc-co-the" data-coll-name="Chăm sóc cơ thể" data-coll-handle="cham-soc-co-the" data-coll-id="1000240789">Chăm sóc cơ thể</div>

                            <div class="kd_item" value="giam-can-1" data-coll-name="Giảm cân" data-coll-handle="giam-can-1" data-coll-id="1000240764">Giảm cân</div>

                            <div class="kd_item" value="thiet-bi-the-thao" data-coll-name="Thiết bị thể thao" data-coll-handle="thiet-bi-the-thao" data-coll-id="1000242417">Thiết bị thể thao</div>

                            <div class="kd_item" value="thiet-bi-y-te" data-coll-name="Thiết bị y tế" data-coll-handle="thiet-bi-y-te" data-coll-id="1000333168">Thiết bị y tế</div>

                            <div class="kd_item" value="phu-kien" data-coll-name="Phụ kiện" data-coll-handle="phu-kien" data-coll-id="1000240790">Phụ kiện</div>

                            <div class="kd_liner_search"></div>  
                            <div class="kd_item active" value="all" data-coll-name="all" data-coll-handle="all" data-coll-id="0">Tất cả</div>
                        </div>

                    </div>

                    <input type="hidden" name="type" value="product">
                    <input type="search" name="q" value="" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text" aria-label="Tìm sản phẩm" autocomplete="off">
                    <span class="input-group-btn">
                        <button type="submit" class="btn icon-fallback-text">
                            <i class="fa fa-search"></i>
                            <span class="fallback-text">Tìm</span>
                        </button>
                    </span>
                    <input type="hidden" class="collection_id" value="(collectionid:product&gt;=0)">
                    <input type="hidden" class="collection_handle" value="all">
                    <input type="hidden" class="collection_name" value="all">
                </form>
                <style>
                    .site-header__search form.search-bar .collections-selector{
                        position: relative;
                    }
                    .site-header__search form.search-bar .collections-selector:before{
                        position: absolute;
                        font-family: FontAwesome;
                        right: 5px;
                        top: 10px;
                    }
                    .kd_search_text {
                        height: 40px;
                        text-align: center;
                        line-height: 40px;
                        cursor: pointer;
                        padding: 0px 20px 0px 5px;
                        width: 100%;
                        font-size: 14px;
                        border-right: 1px solid #f6f6f6;
                    }
                    .kd_list_search {
                        display: none;
                        background: #fff;
                        border: 1px solid #ccc;
                        background-color: #fff;
                        position: absolute;
                        top: 100%;
                        min-width: 200px;
                        width: auto;
                        z-index: 3;
                        font-weight: 400!important;
                        font-family: Roboto,sans-serif;
                        border-radius: 0;
                        right: auto;
                        margin-top: 4px;
                        margin-left: -2px;
                        font-size: 13px;
                        padding: 4px 0;
                    }
                    .kd_search_text:before{
                        display: inline-block;
                        width: 0;
                        height: 0;
                        margin-left: 2px;
                        vertical-align: middle;
                        border-top: 4px dashed;
                        border-top: 4px solid\9;
                        border-right: 4px solid transparent;
                        border-left: 4px solid transparent;
                        content: "";
                        position: absolute;
                        top: 50%;
                        right: 6px;
                        margin-top: -1px;
                    }
                    .kd_list_search .kd_item {
                        text-align: left;
                        display: block;
                        padding-left: 24px;
                        position: relative;
                        opacity: 1;
                        filter: alpha(opacity=100);
                        filter: none;
                        height: auto;
                        min-height: 24px;
                        line-height: 30px;
                        padding: 0 20px;
                        cursor: pointer;
                    }
                    .kd_list_search .kd_item:hover{
                        background-color: #f7f7f7;
                    }
                    .kd_list_search .kd_item.active {
                        background-color: #f7941e;
                        color: #fff!important;
                    }
                    .kd_liner_search {
                        width: 100%;
                        height: 1px;
                        background: #efefef;
                        margin: 8px 0px;
                    }
                </style>

                <script>
                    $(document).ready(function () {
                        $('.ultimate-search .collection_id').val('(collectionid:product>=0)');
                        $('.ultimate-search .collection_handle').val('all');
                        $('.ultimate-search .collection_name').val('all');
                        $('.site-header__search form.search-bar .st-default-search-input').val(localStorage.search);
                        $('.search-yes').html('Tất cả sản phẩm cho từ khóa ' + '"' + localStorage.search + '" được tìm thấy');
                        $('.search-no').html('Không có sản phẩm nào với từ khóa ' + '"' + localStorage.search + '"');
                        $('.tem-search span:last-child').html(localStorage.search);
                    })

                    $('.kd_search_text').click(function () {
                        $(this).next().slideToggle(200);
                        $('.ovelay-kd').show();
                    })
                    $(document).on('click', '.ovelay-kd, .close-window', function () {
                        $('.kd_list_search').hide(200);
                        $('.ovelay-kd').hide();
                    });
                    $('.kd_list_search .kd_item').on('click', function (e) {
                        $('.ovelay-kd').hide();
                        var optionSelected = $(this);
                        var id = optionSelected.attr('data-coll-id');
                        var handle = optionSelected.attr('data-coll-handle');
                        var coll_name = optionSelected.attr('data-coll-name');
                        var title = optionSelected.text();
                        var filter = '(collectionid:product' + (id == 0 ? '>=0' : ('=' + id)) + ')';
                        //console.log(coll_name);
                        $('.kd_search_text').text(title);
                        $('.ultimate-search .collection_id').val(filter);
                        $('.ultimate-search .collection_handle').val(handle);
                        $('.ultimate-search .collection_name').val(coll_name);
                        $(".search-text").focus();
                        optionSelected.addClass('active').siblings().removeClass('active');
                        //console.log($('.kd_search_text').innerWidth());
                        $('.kd_list_search').slideToggle(0);
                        sessionStorage.setItem('last_search', JSON.stringify({title: title, handle: handle, filter: filter, name: coll_name}));
                    });
                    /*String.prototype.toUnicode = function(){
                     var result = "";
                     for(var i = 0; i < this.length; i++){
                     var partial = this[i].charCodeAt(0).toString(16);
                     while(partial.length !== 4) partial = "0" + partial;
                     result += "\\u" + partial;
                     }
                     return result;
                     };*/
                    $('.ultimate-search').submit(function (e) {
                        e.preventDefault();
                        debugger
                        var filter = $(this).find('.collection_id').val();
                        var handle = $(this).find('.collection_handle').val();
                        var q = $(this).find('input[name=q]').val();
                        if (!q) {
                            window.location = '/collections/' + handle;
                            return;
                        }

                        if (filter == '(collectionid:product>=0)') {
                            window.location = '/search?type=product&q=filter=((collectionid:product>=0)&&(title:product**' + q + ')||(sku:product**' + q + ')||(product_type:product**' + q + ')||(handle:product**' + q + ')||(body:product**' + q + ')||(tag:product**' + q + ')||(variant:product**' + q + '))';
                        } else {
                            window.location = '/search?type=product&q=filter=(' + filter + '&&(title:product**' + q + ')||(sku:product**' + q + ')||(product_type:product**' + q + ')||(handle:product**' + q + ')||(body:product**' + q + ')||(tag:product**' + q + ')||(variant:product**' + q + '))';
                        }
                        if (typeof (Storage) !== "undefined") {
                            localStorage.search = q;
                        }
                        ;
                    });
                    function selectSuggest(act) {
                        cur = $('.smart-search-wrapper > .select').index();
                        length = $('.smart-search-wrapper > a').length;
                        if (act == 38)
                        {
                            if (cur == -1 || cur == 0)
                                cur = length - 1;
                            else
                                cur = cur - 1;
                        }
                        if (act == 40)
                        {
                            if (cur == -1 || cur == length - 1)
                                cur = 0;
                            else
                                cur = cur + 1;
                        }
                        $('.smart-search-wrapper>a').removeClass('select');
                        $('.smart-search-wrapper>a:nth-child(' + (cur + 1) + ')').addClass('select');
                        $('.ultimate-search input[name=q]').val($('.smart-search-wrapper>.select').attr('data-title'));
                        return false;
                    }

                    (function ($) {
                        $.fn.smartSearch = function (_option) {

                            $('.collection-select li a').click(function () {
                                $('.collectionid').val($(this).attr('data-id'));
                                $('.input-group .text').html($(this).html());
                            })

                            var o, issending = false,
                                    timeout = null;
                            var option = {
                                smartoffset: true, //auto calc offset
                                searchoperator: '**', //** contain, *= begin with, =* end with
                                searchfield: "title",
                                searchwhen: 'keyup', //0: after keydown, 1: after keypress, after space
                                searchdelay: 500, //delay time before load data
                            };
                            if (typeof (_option) !== 'undefined') {
                                $.each(_option, function (i, v) {
                                    if (typeof (_option[i]) !== 'undefined')
                                        option[i] = _option[i];
                                })
                            }
                            o = $(this);
                            o.attr('autocomplete', 'off');
                            this.bind(option.searchwhen, function (event) {
                                if (event.keyCode == 38 || event.keyCode == 40) {
                                    return selectSuggest(event.keyCode);
                                } else {
                                    $(".smart-search-wrapper." + option.wrapper).remove();
                                    clearTimeout(timeout);
                                    timeout = setTimeout(l, option.searchdelay, $(this).val());
                                }
                            });
                            var l = function (t) {
                                if (issending)
                                    return this;
                                issending = true;
                                coll = ''
                                if (option.collection != null)
                                    coll = $(option.collection).val() + "&&";
                                $.ajax({
                                    url: "/search?q=filter=(" + coll + "(" + option.searchfield + ":product" + option.searchoperator + t + "))&view=ultimate-search",
                                    dataType: "JSON",
                                    async: false,
                                    success: function (data) {
                                        if ($('.smart-search-wrapper.' + option.wrapper).length == 0) {
                                            $('body').append("<div class='smart-search-wrapper " + option.wrapper + "'></div>");
                                        }
                                        p();
                                        $.each(data, function (i, v) {
                                            $(".smart-search-wrapper." + option.wrapper).append("<a data-title='" + v.title + "' href='" + v.url + "'>" + v.title + "<span class='price-search'>" + Haravan.formatMoney(v.price, '') + "đ</span></a>");
                                        });
                                        issending = false;
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        //alert(xhr.status);
                                        //alert(thrownError);
                                    }
                                });
                            }
                            $(window).resize(function () {
                                p();
                            });
                            $(window).scroll(function () {
                                p();
                            });
                            $(this).blur(function () {
                                $('.smart-search-wrapper.' + option.wrapper).slideUp();
                            });
                            var p = function () {
                                if (!o.offset()) {
                                    return;
                                }

                                $(".smart-search-wrapper." + option.wrapper).css("width", o.outerWidth() + "px");
                                $(".smart-search-wrapper." + option.wrapper).css("left", o.offset().left + "px");
                                if (option.smartoffset) {
                                    h = $(".smart-search-wrapper." + option.wrapper).height();
                                    if (h + o.offset().top - $(window).scrollTop() + o.outerHeight() > $(window).height()) {
                                        $(".smart-search-wrapper." + option.wrapper).css('top', '');
                                        $(".smart-search-wrapper." + option.wrapper).css('bottom', ($(window).scrollTop() + $(window).height() - o.offset().top) + "px");
                                    } else {
                                        $(".smart-search-wrapper." + option.wrapper).css('bottom', '');
                                        $(".smart-search-wrapper." + option.wrapper).css('top', (o.offset().top - $(window).scrollTop() + o.outerHeight()) + "px");
                                    }
                                } else {
                                    $(".smart-search-wrapper." + option.wrapper).css('top', (o.offset().top - $(window).scrollTop() + o.outerHeight()) + "px");
                                }
                            }
                            return this;
                        };
                    }(jQuery));
                    $('.ultimate-search input[name=q]').smartSearch({searchdelay: 400, wrapper: 'search-wrapper', collection: '.collection_id'});
                </script>
            </div>            

        </div>
        <style>
            @media screen and (min-width: 768px){
                .search-xs{
                    display: none
                }
            }
        </style>
        <script>
            $('.search_btn_mobile').click(function () {
                $('.search_bar_mobile').slideToggle('fast');
            })
        </script>



        <div class="grid__item small--one-whole medium--one-whole two-eighths logo_hidden_fixed xs-hidden">

            <h1 class="site-header__logo large--left" itemscope="" itemtype="http://schema.org/Organization">


                <a href="/" itemprop="url" class="site-header__logo-link">
                    <img src="/static/image/website/logo.png" itemprop="logo">
                </a>


            </h1>

        </div>
        <div class="grid__item small--one-whole medium--one-whole four-eighths mobile-bottom xs-hidden">
            <div class="large--hide medium-down--show navigation-icon">
                <div class="grid">
                    <div class="grid__item one-half">
                        <div class="site-nav--mobile">
                            <button type="button" class="icon-fallback-text site-nav__link js-drawer-open-left" aria-controls="NavDrawer" aria-expanded="false">
                                <span class="icon icon-hamburger" aria-hidden="true"></span>
                                <span class="fallback-text">Menu</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-header__search">
                <form action="http://shop.khoedep.vn/search" class="input-group search-bar ultimate-search">

                    <div class="collections-selector">
                        <div class="kd_search_text">
                            Tất cả
                        </div>
                        <div id="kd-info" class="kd_list_search">

                            <div class="kd_item" value="thuc-pham-chuc-nang" data-coll-name="Thực phẩm chức năng" data-coll-handle="thuc-pham-chuc-nang" data-coll-id="1000240752">Thực phẩm chức năng</div>

                            <div class="kd_item" value="thuc-pham-dinh-duong" data-coll-name="Thực phẩm dinh dưỡng" data-coll-handle="thuc-pham-dinh-duong" data-coll-id="1000333167">Thực phẩm dinh dưỡng</div>

                            <div class="kd_item" value="thuc-pham-the-thao" data-coll-name="Thực phẩm thể thao" data-coll-handle="thuc-pham-the-thao" data-coll-id="1000240753">Thực phẩm thể thao</div>

                            <div class="kd_item" value="cham-soc-da" data-coll-name="Chăm sóc da" data-coll-handle="cham-soc-da" data-coll-id="1000240785">Chăm sóc da</div>

                            <div class="kd_item" value="trang-diem" data-coll-name="Trang điểm" data-coll-handle="trang-diem" data-coll-id="1000240786">Trang điểm</div>

                            <div class="kd_item" value="nuoc-hoa" data-coll-name="Nước hoa" data-coll-handle="nuoc-hoa" data-coll-id="1000240787">Nước hoa</div>

                            <div class="kd_item" value="cham-soc-toc" data-coll-name="Chăm sóc tóc" data-coll-handle="cham-soc-toc" data-coll-id="1000240788">Chăm sóc tóc</div>

                            <div class="kd_item" value="cham-soc-co-the" data-coll-name="Chăm sóc cơ thể" data-coll-handle="cham-soc-co-the" data-coll-id="1000240789">Chăm sóc cơ thể</div>

                            <div class="kd_item" value="giam-can-1" data-coll-name="Giảm cân" data-coll-handle="giam-can-1" data-coll-id="1000240764">Giảm cân</div>

                            <div class="kd_item" value="thiet-bi-the-thao" data-coll-name="Thiết bị thể thao" data-coll-handle="thiet-bi-the-thao" data-coll-id="1000242417">Thiết bị thể thao</div>

                            <div class="kd_item" value="thiet-bi-y-te" data-coll-name="Thiết bị y tế" data-coll-handle="thiet-bi-y-te" data-coll-id="1000333168">Thiết bị y tế</div>

                            <div class="kd_item" value="phu-kien" data-coll-name="Phụ kiện" data-coll-handle="phu-kien" data-coll-id="1000240790">Phụ kiện</div>

                            <div class="kd_liner_search"></div>  
                            <div class="kd_item active" value="all" data-coll-name="all" data-coll-handle="all" data-coll-id="0">Tất cả</div>
                        </div>
                    </div>

                    <input type="hidden" name="type" value="product">
                    <input type="search" name="q" value="" placeholder="Tìm sản phẩm" class="input-group-field st-default-search-input search-text" aria-label="Tìm sản phẩm" autocomplete="off">
                    <span class="input-group-btn">
                        <button type="submit" class="btn icon-fallback-text">
                            <i class="fa fa-search"></i>
                            <span class="fallback-text">Tìm</span>
                        </button>
                    </span>
                    <input type="hidden" class="collection_id" value="(collectionid:product&gt;=0)">
                    <input type="hidden" class="collection_handle" value="all">
                    <input type="hidden" class="collection_name" value="all">
                </form>
                <style>
                    .site-header__search form.search-bar .collections-selector{
                        position: relative;
                    }
                    .site-header__search form.search-bar .collections-selector:before{
                        position: absolute;
                        font-family: FontAwesome;
                        right: 5px;
                        top: 10px;
                    }
                    .kd_search_text {
                        height: 40px;
                        text-align: center;
                        line-height: 40px;
                        cursor: pointer;
                        padding: 0px 20px 0px 5px;
                        width: 100%;
                        font-size: 14px;
                        border-right: 1px solid #f6f6f6;
                    }
                    .kd_list_search {
                        display: none;
                        background: #fff;
                        border: 1px solid #ccc;
                        background-color: #fff;
                        position: absolute;
                        top: 100%;
                        min-width: 200px;
                        width: auto;
                        z-index: 3;
                        font-weight: 400!important;
                        font-family: Roboto,sans-serif;
                        border-radius: 0;
                        right: auto;
                        margin-top: 4px;
                        margin-left: -2px;
                        font-size: 13px;
                        padding: 4px 0;
                    }
                    .kd_search_text:before{
                        display: inline-block;
                        width: 0;
                        height: 0;
                        margin-left: 2px;
                        vertical-align: middle;
                        border-top: 4px dashed;
                        border-top: 4px solid\9;
                        border-right: 4px solid transparent;
                        border-left: 4px solid transparent;
                        content: "";
                        position: absolute;
                        top: 50%;
                        right: 6px;
                        margin-top: -1px;
                    }
                    .kd_list_search .kd_item {
                        text-align: left;
                        display: block;
                        padding-left: 24px;
                        position: relative;
                        opacity: 1;
                        filter: alpha(opacity=100);
                        filter: none;
                        height: auto;
                        min-height: 24px;
                        line-height: 30px;
                        padding: 0 20px;
                        cursor: pointer;
                    }
                    .kd_list_search .kd_item:hover{
                        background-color: #f7f7f7;
                    }
                    .kd_list_search .kd_item.active {
                        background-color: #f7941e;
                        color: #fff!important;
                    }
                    .kd_liner_search {
                        width: 100%;
                        height: 1px;
                        background: #efefef;
                        margin: 8px 0px;
                    }
                </style>

                <script>
                    $(document).ready(function () {
                        $('.ultimate-search .collection_id').val('(collectionid:product>=0)');
                        $('.ultimate-search .collection_handle').val('all');
                        $('.ultimate-search .collection_name').val('all');
                        $('.site-header__search form.search-bar .st-default-search-input').val(localStorage.search);
                        $('.search-yes').html('Tất cả sản phẩm cho từ khóa ' + '"' + localStorage.search + '" được tìm thấy');
                        $('.search-no').html('Không có sản phẩm nào với từ khóa ' + '"' + localStorage.search + '"');
                        $('.tem-search span:last-child').html(localStorage.search);
                    })

                    $('.kd_search_text').click(function () {
                        $(this).next().slideToggle(200);
                        $('.ovelay-kd').show();
                    })
                    $(document).on('click', '.ovelay-kd, .close-window', function () {
                        $('.kd_list_search').hide(200);
                        $('.ovelay-kd').hide();
                    });
                    $('.kd_list_search .kd_item').on('click', function (e) {
                        $('.ovelay-kd').hide();
                        var optionSelected = $(this);
                        var id = optionSelected.attr('data-coll-id');
                        var handle = optionSelected.attr('data-coll-handle');
                        var coll_name = optionSelected.attr('data-coll-name');
                        var title = optionSelected.text();
                        var filter = '(collectionid:product' + (id == 0 ? '>=0' : ('=' + id)) + ')';
                        //console.log(coll_name);
                        $('.kd_search_text').text(title);
                        $('.ultimate-search .collection_id').val(filter);
                        $('.ultimate-search .collection_handle').val(handle);
                        $('.ultimate-search .collection_name').val(coll_name);
                        $(".search-text").focus();
                        optionSelected.addClass('active').siblings().removeClass('active');
                        //console.log($('.kd_search_text').innerWidth());
                        $('.kd_list_search').slideToggle(0);
                        sessionStorage.setItem('last_search', JSON.stringify({title: title, handle: handle, filter: filter, name: coll_name}));
                    });
                    /*String.prototype.toUnicode = function(){
                     var result = "";
                     for(var i = 0; i < this.length; i++){
                     var partial = this[i].charCodeAt(0).toString(16);
                     while(partial.length !== 4) partial = "0" + partial;
                     result += "\\u" + partial;
                     }
                     return result;
                     };*/
                    $('.ultimate-search').submit(function (e) {
                        e.preventDefault();
                        debugger
                        var filter = $(this).find('.collection_id').val();
                        var handle = $(this).find('.collection_handle').val();
                        var q = $(this).find('input[name=q]').val();
                        if (!q) {
                            window.location = '/collections/' + handle;
                            return;
                        }

                        if (filter == '(collectionid:product>=0)') {
                            window.location = '/search?type=product&q=filter=((collectionid:product>=0)&&(title:product**' + q + ')||(sku:product**' + q + ')||(product_type:product**' + q + ')||(handle:product**' + q + ')||(body:product**' + q + ')||(tag:product**' + q + ')||(variant:product**' + q + '))';
                        } else {
                            window.location = '/search?type=product&q=filter=(' + filter + '&&(title:product**' + q + ')||(sku:product**' + q + ')||(product_type:product**' + q + ')||(handle:product**' + q + ')||(body:product**' + q + ')||(tag:product**' + q + ')||(variant:product**' + q + '))';
                        }
                        if (typeof (Storage) !== "undefined") {
                            localStorage.search = q;
                        }
                        ;
                    });
                    function selectSuggest(act) {
                        cur = $('.smart-search-wrapper > .select').index();
                        length = $('.smart-search-wrapper > a').length;
                        if (act == 38)
                        {
                            if (cur == -1 || cur == 0)
                                cur = length - 1;
                            else
                                cur = cur - 1;
                        }
                        if (act == 40)
                        {
                            if (cur == -1 || cur == length - 1)
                                cur = 0;
                            else
                                cur = cur + 1;
                        }
                        $('.smart-search-wrapper>a').removeClass('select');
                        $('.smart-search-wrapper>a:nth-child(' + (cur + 1) + ')').addClass('select');
                        $('.ultimate-search input[name=q]').val($('.smart-search-wrapper>.select').attr('data-title'));
                        return false;
                    }

                    (function ($) {
                        $.fn.smartSearch = function (_option) {

                            $('.collection-select li a').click(function () {
                                $('.collectionid').val($(this).attr('data-id'));
                                $('.input-group .text').html($(this).html());
                            })

                            var o, issending = false,
                                    timeout = null;
                            var option = {
                                smartoffset: true, //auto calc offset
                                searchoperator: '**', //** contain, *= begin with, =* end with
                                searchfield: "title",
                                searchwhen: 'keyup', //0: after keydown, 1: after keypress, after space
                                searchdelay: 500, //delay time before load data
                            };
                            if (typeof (_option) !== 'undefined') {
                                $.each(_option, function (i, v) {
                                    if (typeof (_option[i]) !== 'undefined')
                                        option[i] = _option[i];
                                })
                            }
                            o = $(this);
                            o.attr('autocomplete', 'off');
                            this.bind(option.searchwhen, function (event) {
                                if (event.keyCode == 38 || event.keyCode == 40) {
                                    return selectSuggest(event.keyCode);
                                } else {
                                    $(".smart-search-wrapper." + option.wrapper).remove();
                                    clearTimeout(timeout);
                                    timeout = setTimeout(l, option.searchdelay, $(this).val());
                                }
                            });
                            var l = function (t) {
                                if (issending)
                                    return this;
                                issending = true;
                                coll = ''
                                if (option.collection != null)
                                    coll = $(option.collection).val() + "&&";
                                $.ajax({
                                    url: "/search?q=filter=(" + coll + "(" + option.searchfield + ":product" + option.searchoperator + t + "))&view=ultimate-search",
                                    dataType: "JSON",
                                    async: false,
                                    success: function (data) {
                                        if ($('.smart-search-wrapper.' + option.wrapper).length == 0) {
                                            $('body').append("<div class='smart-search-wrapper " + option.wrapper + "'></div>");
                                        }
                                        p();
                                        $.each(data, function (i, v) {
                                            $(".smart-search-wrapper." + option.wrapper).append("<a data-title='" + v.title + "' href='" + v.url + "'>" + v.title + "<span class='price-search'>" + Haravan.formatMoney(v.price, '') + "đ</span></a>");
                                        });
                                        issending = false;
                                    },
                                    error: function (xhr, ajaxOptions, thrownError) {
                                        //alert(xhr.status);
                                        //alert(thrownError);
                                    }
                                });
                            }
                            $(window).resize(function () {
                                p();
                            });
                            $(window).scroll(function () {
                                p();
                            });
                            $(this).blur(function () {
                                $('.smart-search-wrapper.' + option.wrapper).slideUp();
                            });
                            var p = function () {
                                if (!o.offset()) {
                                    return;
                                }

                                $(".smart-search-wrapper." + option.wrapper).css("width", o.outerWidth() + "px");
                                $(".smart-search-wrapper." + option.wrapper).css("left", o.offset().left + "px");
                                if (option.smartoffset) {
                                    h = $(".smart-search-wrapper." + option.wrapper).height();
                                    if (h + o.offset().top - $(window).scrollTop() + o.outerHeight() > $(window).height()) {
                                        $(".smart-search-wrapper." + option.wrapper).css('top', '');
                                        $(".smart-search-wrapper." + option.wrapper).css('bottom', ($(window).scrollTop() + $(window).height() - o.offset().top) + "px");
                                    } else {
                                        $(".smart-search-wrapper." + option.wrapper).css('bottom', '');
                                        $(".smart-search-wrapper." + option.wrapper).css('top', (o.offset().top - $(window).scrollTop() + o.outerHeight()) + "px");
                                    }
                                } else {
                                    $(".smart-search-wrapper." + option.wrapper).css('top', (o.offset().top - $(window).scrollTop() + o.outerHeight()) + "px");
                                }
                            }
                            return this;
                        };
                    }(jQuery));
                    $('.ultimate-search input[name=q]').smartSearch({searchdelay: 400, wrapper: 'search-wrapper', collection: '.collection_id'});
                </script>
            </div>            

            <div class="large--hide medium-down--show navigation-cart">              
                <div class="grid__item text-right">
                    <div class="site-nav--mobile">
                        <a href="http://shop.khoedep.vn/cart" class="js-drawer-open-right site-nav__link" aria-controls="CartDrawer" aria-expanded="false">
                            <span class="icon-fallback-text">
                                <span class="icon icon-cart" aria-hidden="true"></span>
                                <span class="fallback-text">Giỏ hàng</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid__item small--one-whole two-eighths medium-down--hide"> 
            <ul class="link-list">


                <li class="header-account">                

                    <a href="http://shop.khoedep.vn/#loginBox" id="login_link">
                        <i class="fa fa-user"></i>
                        <span class="name">Tài khoản</span>
                    </a>
                    <div id="loginBox" class="loginLightbox" style="display:none;">
                        <div id="lightboxlogin">
                            <form accept-charset="UTF-8" action="http://shop.khoedep.vn/account/login" id="customer_login" method="post">
                                <input name="form_type" type="hidden" value="customer_login">
                                <input name="utf8" type="hidden" value="✓">

                                <div id="bodyBox">
                                    <h3>Đăng nhập</h3>

                                    <p class="create">Bạn chưa có tài khoản ? <a href="http://shop.khoedep.vn/#create_accountBox" onclick="showCreateAccountForm();
                                            return false;" id="CreateAccountPassword">Đăng ký</a></p>

                                    <label for="CustomerEmail" class="hidden-label">Email</label>
                                    <input type="email" name="customer[email]" id="CustomerEmail" class="input-full" placeholder="Email">


                                    <label for="CustomerPassword" class="hidden-label">Mật khẩu</label>
                                    <input type="password" value="" name="customer[password]" id="CustomerPassword" class="input-full" placeholder="Mật khẩu">

                                    <div>

                                        <p class="forgot"><a href="http://shop.khoedep.vn/#recover" onclick="showRecoverPasswordForm(); return false;" id="RecoverPassword">Quên mật khẩu ?</a></p>

                                    </div>
                                    <input type="submit" class="btn btn2 btn--full" value="Đăng nhập">    

                                                        <!--	<p><a href="#" onclick="$.fancybox.close();">Thoát</a></p> -->
                                </div>
                            </form>
                        </div>
                        <div id="recover-password" style="display:none;">
                            <h3>Đặt lại mật khẩu</h3>
                            <p class="note">Chúng tôi sẽ gửi cho bạn một email để đặt lại mật khẩu mới của bạn.</p>

                            <form accept-charset="UTF-8" action="http://shop.khoedep.vn/account/recover" method="post">
                                <input name="form_type" type="hidden" value="recover_customer_password">
                                <input name="utf8" type="hidden" value="✓">



                                <p><label for="recover-email" class="label">Email</label></p>
                                <input type="email" value="" size="30" name="email" id="recover-email" class="text">
                                <div class="action_bottom">
                                    <input class="btn btn2" type="submit" value="Cấp lại mật khẩu">
                                    <a class="btn back" href="http://shop.khoedep.vn/#" onclick="hideRecoverPasswordForm();
                                            return false;">Trở lại đăng nhập</a>
                                </div>                      
                                <p class="close"><a href="http://shop.khoedep.vn/#" onclick="$.fancybox.close();">Thoát</a></p>
                            </form>
                        </div>
                        <div id="create_accountBox" style="display:none;">    
                            <h3>Tạo tài khoản</h3>
                            <div class="form-vertical">
                                <form accept-charset="UTF-8" action="http://shop.khoedep.vn/account" id="create_customer" method="post">
                                    <input name="form_type" type="hidden" value="create_customer">
                                    <input name="utf8" type="hidden" value="✓">




                                    <label for="FirstName" class="hidden-label">Tên</label>
                                    <input type="text" name="customer[first_name]" id="FirstName" class="input-full" placeholder="Tên">

                                    <label for="LastName" class="hidden-label">Họ</label>
                                    <input type="text" name="customer[last_name]" id="LastName" class="input-full" placeholder="Họ">

                                    <label for="Email" class="hidden-label">Email</label>
                                    <input type="email" name="customer[email]" id="Email" class="input-full" placeholder="Email">

                                    <label for="CreatePassword" class="hidden-label">Mật khẩu</label>
                                    <input type="password" name="customer[password]" id="CreatePassword" class="input-full" placeholder="Mật khẩu">

                                    <p>
                                        <input type="submit" value="Tạo mới" class="btn btn2 btn--full">
                                    </p>
                                    <p><span><a class="btn btn--full" href="http://shop.khoedep.vn/#" onclick="hideRecoverPasswordForm(); return false;">Trở lại đăng nhập</a></span></p>
                                    <p class="close"><a href="http://shop.khoedep.vn/#" onclick="$.fancybox.close();">Thoát</a></p>

                                </form>
                            </div> 
                        </div>
                        <script>
                            function showRecoverPasswordForm() {
                                $('#recover-password').css("display", 'block');
                                $('#lightboxlogin').css("display", 'none');
                                $('#create_accountBox').css("display", 'none');
                            }

                            function hideRecoverPasswordForm() {
                                $('#recover-password').css("display", 'none');
                                $('#lightboxlogin').css("display", 'block');
                                $('#create_accountBox').css("display", 'none');
                            }
                            function showCreateAccountForm() {
                                $('#recover-password').css("display", 'none');
                                $('#lightboxlogin').css("display", 'none');
                                $('#create_accountBox').css("display", 'block');
                            }
                        </script>
                    </div>

                </li>
                <li class="header-cart head_des">
                    <a href="http://shop.khoedep.vn/cart" class="site-header__cart-toggle js-drawer-open-right" aria-controls="CartDrawer" aria-expanded="false">
                        <i class="fa fa-shopping-basket"></i>                  
                        <span id="CartCount">0</span>
                        <span class="name">Giỏ hàng</span>
                    </a>
                </li>
            </ul>			
        </div>
    </div>        
</div>