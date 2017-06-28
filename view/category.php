<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface"><!--<![endif]-->
    <head>
        <?php
        include $APPLICATION_PATH . '/view/head.php';
        ?>        
    </head>

    <body id="thuc-pham-chuc-nang" class="template-collection">

        <div id="NavDrawer" class="drawer drawer--left" data-img="//hstatic.net/844/1000032844/1000122658/banner.jpg?v=776">
            <div class="drawer__header">
                <div class="drawer__title h3">Danh mục</div>
                <div class="drawer__close js-drawer-close">
                    <button type="button" class="icon-fallback-text">
                        <span class="icon icon-x" aria-hidden="true"></span>
                        <span class="fallback-text">Thoát</span>
                    </button>
                </div>
            </div>
            <!-- begin mobile-nav -->
            <ul class="mobile-nav">

                <?php
                include $APPLICATION_PATH . '/view/mobile-nav.php';
                ?>        

            </ul>
        </div>
        <div id="CartDrawer" class="drawer drawer--right">
            <div class="drawer__header">
                <div class="drawer__title h3">Giỏ hàng của bạn</div>
                <div class="drawer__close js-drawer-close">
                    <button type="button" class="icon-fallback-text">
                        <span class="fa fa-times" aria-hidden="true"></span>
                        <span class="fallback-text">"Close Cart"</span>
                    </button>
                </div>
            </div>
            <div id="CartContainer"></div>    
        </div>
        <div id="PageContainer" class="is-moved-by-drawer">

            <!-- Ads Banner -->
            <div id="adv-banner">

            </div>


            <!-- Top Other -->
            <div id="top-header" class="grid--full grid--table">
                <?php
                include $APPLICATION_PATH . '/view/top-header.php';
                ?>
            </div> 
            <!-- Main Header -->
            <header class="site-header affix-top">
                <?php
                include $APPLICATION_PATH . '/view/site-header.php';
                ?>
            </header>

            <!-- Navigation Bar -->
            <nav class="nav-bar">
                <?php
                include $APPLICATION_PATH . '/view/nav-bar.php';
                ?>
            </nav>

            <!-- Main Content -->
            <main class="main-content">

                <div class="breadcrumb-wrapper">
                    <div class="wrapper">

                        <nav class="breadcrumb " role="navigation" aria-label="breadcrumbs">
                            <a href="/" title="Trở về trang chủ">Trang chủ</a>



                            <span aria-hidden="true">›</span>

                            <span><?php echo $category_info["name"] ?></span>



                        </nav>


                        <!--	<h1 class="section-header__title">Thực phẩm chức năng</h1> -->
                    </div>
                </div>
                <div class="wrapper">
                    <div id="filter-loading" style="display:none"><img src="/static/image/website/gears.svg" alt="filter loading"></div>

                    <div class="grid--rev" id="collection">
                        <div class="grid__item large--six-eighths">


                            <header class="section-header">
                                <div class="rte rte--header">
                                    <!--                                    <div>
                                                                            <img src="/static/image/website/1459480980167_3994810.jpg" alt="thuc pham chuc nang banner" data-mce-src="//hstatic.net/844/1000032844/10/2016/4-11/1459480980167_3994810.jpg">
                                                                        </div>-->
                                    <p style="text-align: justify;" data-mce-style="text-align: justify;"><span style="font-size: 15pt; color: #14b74b;" data-mce-style="font-size: 15pt; color: #14b74b;"><strong>Thực phẩm chức năng</strong></span><br><span style="font-size: 15pt;" data-mce-style="font-size: 15pt;"><strong>Những điều chúng ta cần biết !</strong></span></p><div style="text-align: justify;" data-mce-style="text-align: justify;">- Có thể dễ dàng nhận biết những thực phẩm chức năng ở dạng tự nhiên được sử dụng hằng ngày. Nhưng với những thực phẩm có bổ sung và biến đổi, bạn phải biết cách đọc nhãn bao bì thực phẩm.</div><div style="text-align: justify;" data-mce-style="text-align: justify;">- Loại thực phẩm chức năng được kể đến đầu tiên là những thực phẩm mà khi ở dạng tự nhiên đã có những hoạt chất có lợi với lượng lớn. Tiếp đó là nhóm thực phẩm có ít hoạt chất hơn, phải bổ sung hoặc tinh chế cô đặc lại ở dạng dễ sử dụng, hay gây biến đổi gene để tăng hàm lượng một số chất có lợi.</div>
                                </div>
                            </header>




                            <header>
                                <div class="product-grid collection-products-slider noi-img chuaload owl-carousel owl-theme " >

                                    <?php
                                    foreach ($list_category_product_feature as $product) {
                                        ?>


                                        <div class="item">
                                            <div class="coll-items">

                                                <a href="<?php echo $product["product_url"] ?>"><img class="coll-img" src="<?php echo $product["product_image"] ?>" ></a>

                                                <div class="detail">
                                                    <div class="coll-name"><a href="<?php echo $product["product_url"] ?>"><?php echo $product["product_name"] ?></a></div>
                                                    <!--<div class="coll-number">16 sản phẩm</div>-->
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                               <!--<div class="owl-controls clickable"><div class="owl-nav owl-buttons"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div></div>-->
                                </div> <!-- / .products -->
                            </header>
                            <hr>
                            <div class="collection-sorting">
                                <div class="section-header">
                                    <div class="section-header__left">
                                        <h3 class="title_filter_result">
<?php echo $category_info["name"] ?> | <span id="total_item"><?php echo $num_product ?> sản phẩm</span>
                                        </h3>
                                    </div>
                                    <div class="section-header__right">

                                        <div class="form-horizontal sort_by">
                                            <label for="SortBy">Lọc theo</label>
                                            <select name="SortBy" id="SortBy">
                                                <option value="/c/<?php echo $category_info["url"] ?>"Nổi bật</option>
                                                <option value="/c/<?php echo $category_info["url"] ?>/order-by-name-inc">Bảng chữ cái, A-Z</option>
                                                <option value="/c/<?php echo $category_info["url"] ?>/order-by-name-desc">Bảng chữ cái, Z-A</option>
                                                <option value="/c/<?php echo $category_info["url"] ?>/order-by-price-inc">Giá tăng dần</option>
                                                <option value="/c/<?php echo $category_info["url"] ?>/order-by-price-desc">Giá giảm dần</option>
                                            </select>
                                        </div>



                                        <div class="collection-view">
                                            <button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
                                                <span class="icon-fallback-text">
                                                    <span class="fa fa-th" aria-hidden="true"></span>
                                                    <span class="fallback-text">Grid view</span>
                                                </span>
                                            </button>
                                            <button type="button" title="List view" class="list-button change-view " data-view="list">
                                                <span class="icon-fallback-text">
                                                    <span class="fa fa-list" aria-hidden="true"></span>
                                                    <span class="fallback-text">List view</span>
                                                </span>
                                            </button>
                                        </div>

                                        <div class="btn_filter">
                                            <a class="btn btn--wd btn--with-icon btn--sm wave" id="showFilterMobile">
                                                <span class="icon-filter"></span>Filter</a>
                                        </div>

                                        <script>
                                            /*============================================================================
                                             Inline JS because collection liquid object is only available
                                             on collection pages and not external JS files
                                             ==============================================================================*/
                                            Haravan.queryParams = {};
                                            if (location.search.length) {
                                                for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
                                                    aKeyValue = aCouples[i].split('=');
                                                    if (aKeyValue.length > 1) {
                                                        Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
                                                    }
                                                }
                                            }

                                            $(function () {
//                                                $('#SortBy')
//                                                        .val('manual')
//                                                        .bind('change', function () {
//                                                            Haravan.queryParams.sort_by = jQuery(this).val();
//                                                            location.search = jQuery.param(Haravan.queryParams);
//                                                        }
//                                                        );
                                                $("#SortBy").change(function () {
                                                    window.location = $(this).val();
                                                })
                                            });
                                            $(function () {
                                                $('#SortBy_mobile')
                                                        .val('manual')
                                                        .bind('change', function () {
                                                            Haravan.queryParams.sort_by = jQuery(this).val();
                                                            location.search = jQuery.param(Haravan.queryParams);
                                                        }
                                                        );
                                            });
                                        </script>

                                    </div>
                                </div></div>


                            <div class="grid-uniform grid-uniform-category ">
<?php
//                                var_dump($list_category_product);
foreach ($list_category_product as $product) {
    ?>
                                    <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="<?php echo $product["product_url"] ?>" class="grid__image product-image">
                                                    <img src="<?php echo $product["product_image"] ?>" alt="">    
                                                </a>
                                            </div>

                                            <div class="title-info">
                                                <div class="product-title">
                                                    <a href="<?php echo $product["product_url"] ?>"><?php echo $product["product_name"] ?></a>
                                                </div>
                                                <p class="product-price">

    <?php echo $product["product_price"] ?>

                                                </p>
                                            </div>
                                            <div class="list-mode-description">
    <?php echo $product["product_short_desc"] ?>
                                            </div>

                                        </div>
                                    </div>
<?php } ?>
                            </div>

                            <hr>
                                <?php if ($num_page > 1) { ?>
                                <div class="content_sortPagiBar">
                                    <div class="pagination">
                                <?php
                                for ($i = 1; $i <= $num_page; $i++) {
                                    if ($i == $page) {
                                        echo "<span class=\"page current\"> $i </span> ";
                                    } else {
                                        echo "<span class=\"page\"><a  href=\"/c/$category_id/$sorttype/$i\"> $i </a> </span> ";
                                    }
                                }
                                ?>
                                    </div>
                                </div>
                                    <?php } ?>
                        </div>
                        <div class="grid__item large--two-eighths">
                            <div class="group_sidebar">




                                <div class="open outer ">
                                    <div id="filtersCol" class="filters-col" style="">
                                        <div class="filters-col__close" id="filtersColClose">
                                            <a href="http://shop.khoedep.vn/collections/thuc-pham-chuc-nang#" class="icon-clear"></a>
                                        </div>

                                        <div class="form-horizontal sort_by_mobile" style="display: none">
                                            <label for="SortBy_mobile">Lọc theo</label>
                                            <select name="SortBy" id="SortBy_mobile">
                                                <option value="manual">Nổi bật</option>
                                                <option value="best-selling">Bán chạy nhất</option>
                                                <option value="title-ascending">Bảng chữ cái, A-Z</option>
                                                <option value="title-descending">Bảng chữ cái, Z-A</option>
                                                <option value="price-ascending">Giá tăng dần</option>
                                                <option value="price-descending">Giá giảm dần</option>
                                                <option value="created-descending">Mới nhất</option>
                                                <option value="created-ascending">Cũ nhất </option>
                                            </select>
                                        </div>

                                        <div class="filters-col__collapse type-filter-block open">
                                            <div class="filters-col__collapse__content">
                                                <div class="list_coll">
                                                    <h5 class="col-title">







                                                        <a href="http://shop.khoedep.vn/collections/thuc-pham-chuc-nang">Thực phẩm chức năng</a>

                                                    </h5>







                                                    <ul class="list-unstyled">

                                                        <li><a href="http://shop.khoedep.vn/collections/thuc-pham-giam-can"><span><i class="fa fa-caret-right"></i> Thực phẩm giảm cân</span> <span class="collection-count">(1)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/tim-mach-huyet-ap"><span><i class="fa fa-caret-right"></i> Tim mạch &amp; Huyết áp</span> <span class="collection-count">(3)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/giai-doc-gan"><span><i class="fa fa-caret-right"></i> Giải độc gan</span> <span class="collection-count">(1)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/lam-dep"><span><i class="fa fa-caret-right"></i> Làm đẹp</span> <span class="collection-count">(16)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/sinh-li-nam"><span><i class="fa fa-caret-right"></i> Sinh lí nam</span> <span class="collection-count">(2)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/sinh-li-nu"><span><i class="fa fa-caret-right"></i> Sinh lí nữ</span> <span class="collection-count">(3)</span></a></li>

                                                        <li><a href="http://shop.khoedep.vn/collections/xuong-khop"><span><i class="fa fa-caret-right"></i> Xương khớp</span> <span class="collection-count">(3)</span></a></li>

                                                    </ul>

                                                </div>

                                            </div>
                                        </div>



                                        <div class="filters-col__collapse open price-filter-block" col="thuc-pham-chuc-nang">
                                            <h4 class="filters-col__collapse__title text-uppercase">Giá</h4>
                                            <div class="filters-col__collapse__content">
                                                <ul class="filter-list price-filter">
                                                    <li class="checkbox-group ">
                                                        <input type="checkbox" id="price_1" value="(price:product&lt;=200000)">
                                                        <label for="price_1"><span class="check"></span><span class="box"></span>&lt; 200.000 đ (<b class="count_item">3</b>)</label>
                                                    </li>
                                                    <li class="checkbox-group ">
                                                        <input type="checkbox" id="price_2" value="((price:product&gt;200000)&amp;&amp;(price:product&lt;=500000))">
                                                        <label for="price_2"><span class="check"></span><span class="box"></span>200.000 - 500.000 đ (<b class="count_item">4</b>)</label>
                                                    </li>
                                                    <li class="checkbox-group ">
                                                        <input type="checkbox" id="price_3" value="((price:product&gt;500000)&amp;&amp;(price:product&lt;=1000000))">
                                                        <label for="price_3"><span class="check"></span><span class="box"></span>500.000 - 1.000.000 đ (<b class="count_item">15</b>)</label>
                                                    </li>
                                                    <li class="checkbox-group ">
                                                        <input type="checkbox" id="price_4" value="((price:product&gt;1000000)&amp;&amp;(price:product&lt;=2000000))">
                                                        <label for="price_4"><span class="check"></span><span class="box"></span>1.000.000 - 2.000.000 đ (<b class="count_item">13</b>)</label>
                                                    </li>
                                                    <li class="checkbox-group ">
                                                        <input type="checkbox" id="price_5" value="(price:product&gt;2000000)">
                                                        <label for="price_5"><span class="check"></span><span class="box"></span>&gt; 2.000.000 đ (<b class="count_item">5</b>)</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>
                            <script>
                                $('.filter-list li').each(function (index) {
                                    var coll_id = 1000240752;
                                    var query = '/search?q=filter=((collectionid:product' + (coll_id == 0 ? '>=0' : '=' + coll_id) + ')';
                                    _query = query;
                                    _query_count = query;
                                    var query1 = '';
                                    var query2 = '';
                                    if (index == 0) {
                                        //_query += $(this).val().indexOf('collectionid') != -1 ? '||' : '&&';
                                        query1 += '&&(';
                                    }

                                    query1 += '&&' + $(this).find('input').val();
                                    query2 += '&&' + $(this).find('input').val();

                                    _query += query1 + ')';
                                    _query_count += query2 + ')';
                                    //console.log(_query);
                                    var parent = $(this);
//                                    $.ajax({
//                                        url: _query_count + '&view=total_item',
//                                        async: false,
//                                        success: function (data) {
//                                            total_item = parseInt(data);
//                                            $(parent).find('.count_item').html(data);
//                                        }
//                                    });
                                });
                                $(document).ready(function () {
                                    $('.filter-list input').on('change', function (event, instance) {
                                        $('.custom-loader').show(0).delay(1000).hide(0);
                                        Stringfilter();
                                    })

                                    var Stringfilter = function () {
                                        var q = "", total_page = 0, cur_page = 1, pri = "", mate = "";

                                        q = "filter=(collectionid:product=1000240752)";


                                        $('.filter-list li input:checked').each(function () {
                                            mate = mate + $(this).val() + '||';
                                        })


                                        mate = mate.substring(0, mate.length - 2);
                                        if (mate != "") {
                                            mate = '&&(' + mate + ')';
                                            q += mate;
                                        }

                                        console.log(q);

//                                        $.ajax({// lấy tổng số trang của kết quả filter
//                                            url: "/search?q=" + q + "&view=page",
//                                            async: false,
//                                            success: function (data) {
//                                                total_page = parseInt(data);
//                                            }
//                                        })
//                                        $.ajax({
//                                            url: "/search?q=" + q + "&view=total_item",
//                                            async: false,
//                                            success: function (data) {
//                                                total_item = parseInt(data);
//                                                $('#total_item').html('Tìm thấy ' + data + ' sản phẩm');
//                                            }
//                                        });
                                        //console.log(total_page);
                                        if (cur_page <= total_page) {
//                                            $.ajax({
//                                                url: "/search?q=" + q + "&view=filter",
//                                                success: function (data) {
//                                                    $('.grid-uniform-category').html(data);
//
//                                                }
//                                            })
//                                            $.ajax({// đoạn code 
//                                                url: "/search?q=" + q + "&view=paginate",
//                                                async: false,
//                                                success: function (data) {
//                                                    $(".content_sortPagiBar").html(data); // in phân trang
//                                                    $(window).on("load resize", function (e) {
//                                                        replace_img();
//                                                    });
//                                                }
//                                            })
                                        } else {
                                            $(".grid-uniform-category").html("<div class='grid__item'><p>Danh mục sản phẩm đang được cập nhật<br/>Quý khách vui lòng quay lại sau</p></div>");
                                            $(".content_sortPagiBar").html('');
                                        }
                                        $('.content_sortPagiBar').on("click", "a", function () { // bắt sự kiện click các nút phân trang
                                            var link = $(this).attr("data-link");
                                            if (link == 'prev') {
                                                link = cur_page - 1;
                                            }
                                            if (link == 'next') {
                                                link = cur_page + 1;
                                            }
                                            link = parseInt(link);
                                            if ($('.content_sortPagiBar span').hasClass('current'))
                                            {
                                                $('.content_sortPagiBar span').removeClass('current');
                                                $(this).addClass('current');
                                            }


//                                            $.ajax({
//                                                url: "/search?q=" + q + "&view=filter&page=" + link,
//                                                success: function (data) {
//                                                    $('.grid-uniform-category').html(data);
//                                                    cur_page = link;
//
//                                                }
//                                            })
                                        })
                                    }
                                })
                            </script>
                            <script>
                                jQuery(function ($j) {

                                    "use strict";
                                    $j('.mobile-collapse__title').click(function (e) {
                                        e.preventDefault;
                                        $j(this).parent('.mobile-collapse').toggleClass('open');
                                    })


                                });

                                // Filter collapse
                                jQuery(function ($j) {
                                    "use strict";
                                    $j('.filters-col__collapse__title').click(function (e) {
                                        e.preventDefault;
                                        $j(this).parent('.filters-col__collapse').toggleClass('open');
                                    })
                                });

                                jQuery(function ($j) {

                                    "use strict";

                                    var windowW = window.innerWidth || $j(window).width();

                                    if (windowW < 768) {
                                        $j('#filtersCol').css({
                                            'height': $j(window).height()
                                        });
                                    }

                                    var filterneg = '-100%';

                                    $j("#showFilterMobile").click(function () {

                                        var active = $j('#filtersCol').hasClass('filter-active');

                                        $j('body').toggleClass('modal-open');

                                        $j('#filtersCol').stop().animate({
                                            right: active ? filterneg : '0px'
                                        });

                                        $j('#filtersCol').toggleClass('filter-active');

                                    });

                                    $j("#filtersColClose").click(function () {

                                        $j('#filtersCol').stop().animate({
                                            right: filterneg
                                        });

                                        $j('body').removeClass('modal-open');

                                        $j('#filtersCol').toggleClass('filter-active');

                                    });


                                });
                            </script>
                            <style>
                                @font-face {
                                    font-family: 'Welldone';
                                    src: url('//hstatic.net/844/1000032844/1000122658/Welldone.eot?v=776');
                                    src: url('//hstatic.net/844/1000032844/1000122658/Welldone.eot?v=776?#iefix') format('embedded-opentype'), url('//hstatic.net/844/1000032844/1000122658/Welldone.woff?v=776') format('woff'), url('//hstatic.net/844/1000032844/1000122658/Welldone.ttf?v=776') format('truetype'), url('//hstatic.net/844/1000032844/1000122658/Welldone.svg?v=776') format('svg');
                                    font-weight: normal;
                                    font-style: normal;
                                }
                                [class^="icon-"], [class*=" icon-"] {
                                    font-family: 'Welldone';
                                    speak: none;
                                    font-style: normal;
                                    font-weight: normal;
                                    font-variant: normal;
                                    text-transform: none;
                                    line-height: 1;

                                    /* Better Font Rendering =========== */
                                    -webkit-font-smoothing: antialiased;
                                    -moz-osx-font-smoothing: grayscale;
                                }
                                [class^="icon-"]:hover , [class*=" icon-"]:hover {
                                    text-decoration: none;
                                }
                                .icon-add:before {
                                    content: "\e600";
                                }
                                .icon-arrow-down:before {
                                    content: "\e601";
                                }
                                .icon-arrow-right:before {
                                    content: "\e602";
                                }
                                .icon-arrow-left:before {
                                    content: "\e603";
                                }
                                .icon-award:before {
                                    content: "\e604";
                                }
                                .icon-bag:before {
                                    content: "\e605";
                                }
                                .icon-bag-alt:before {
                                    content: "\e606";
                                }
                                .icon-bars:before {
                                    content: "\e607";
                                }
                                .icon-behance:before {
                                    content: "\e608";
                                }
                                .icon-mail-fill:before {
                                    content: "\e609";
                                }
                                .icon-delete-fill:before {
                                    content: "\e60a";
                                }
                                .icon-blogger:before {
                                    content: "\e60b";
                                }
                                .icon-box:before {
                                    content: "\e60c";
                                }
                                .icon-buttons:before {
                                    content: "\e60d";
                                }
                                .icon-chat:before {
                                    content: "\e60e";
                                }
                                .icon-clear:before {
                                    content: "\e60f";
                                }
                                .icon-clock:before {
                                    content: "\e610";
                                }
                                .icon-clock-arrow:before {
                                    content: "\e611";
                                }
                                .icon-delete:before {
                                    content: "\e612";
                                }
                                .icon-digg:before {
                                    content: "\e613";
                                }
                                .icon-dribbble:before {
                                    content: "\e614";
                                }
                                .icon-ecommerce:before {
                                    content: "\e615";
                                }
                                .icon-eye:before {
                                    content: "\e616";
                                }
                                .icon-facebook:before {
                                    content: "\e617";
                                }
                                .icon-favorite:before {
                                    content: "\e618";
                                }
                                .icon-star-fill:before {
                                    content: "\e619";
                                }
                                .icon-flickr:before {
                                    content: "\e61a";
                                }
                                .icon-forward:before {
                                    content: "\e61b";
                                }
                                .icon-gear:before {
                                    content: "\e61c";
                                }
                                .icon-google:before {
                                    content: "\e61d";
                                }
                                .icon-help:before {
                                    content: "\e61e";
                                }
                                .icon-home-alt:before {
                                    content: "\e61f";
                                }
                                .icon-home:before {
                                    content: "\e620";
                                }
                                .icon-hourglass:before {
                                    content: "\e621";
                                }
                                .icon-identification-alt:before {
                                    content: "\e622";
                                }
                                .icon-identification:before {
                                    content: "\e623";
                                }
                                .icon-info:before {
                                    content: "\e624";
                                }
                                .icon-instagram:before {
                                    content: "\e625";
                                }
                                .icon-keyboard:before {
                                    content: "\e626";
                                }
                                .icon-last:before {
                                    content: "\e627";
                                }
                                .icon-lightbulb:before {
                                    content: "\e628";
                                }
                                .icon-linkedin:before {
                                    content: "\e629";
                                }
                                .icon-list:before {
                                    content: "\e62a";
                                }
                                .icon-search:before {
                                    content: "\e62b";
                                }
                                .icon-mail:before {
                                    content: "\e62c";
                                }
                                .icon-man:before {
                                    content: "\e62d";
                                }
                                .icon-message:before {
                                    content: "\e62e";
                                }
                                .icon-money:before {
                                    content: "\e62f";
                                }
                                .icon-users:before {
                                    content: "\e630";
                                }
                                .icon-arrow-up:before {
                                    content: "\e631";
                                }
                                .icon-newspaper:before {
                                    content: "\e632";
                                }
                                .icon-operator:before {
                                    content: "\e633";
                                }
                                .icon-pencil:before {
                                    content: "\e634";
                                }
                                .icon-person:before {
                                    content: "\e635";
                                }
                                .icon-pinterest-circle:before {
                                    content: "\e636";
                                }
                                .icon-pinterest:before {
                                    content: "\e637";
                                }
                                .icon-play:before {
                                    content: "\e638";
                                }
                                .icon-quotes:before {
                                    content: "\e639";
                                }
                                .icon-rectangular:before {
                                    content: "\e63a";
                                }
                                .icon-quotes-alt:before {
                                    content: "\e63b";
                                }
                                .icon-user-circle:before {
                                    content: "\e63c";
                                }
                                .icon-delete-fill-alt:before {
                                    content: "\e63d";
                                }
                                .icon-sales:before {
                                    content: "\e63e";
                                }
                                .icon-sales-alt:before {
                                    content: "\e63f";
                                }
                                .icon-shop-label:before {
                                    content: "\e640";
                                }
                                .icon-dots-horizontal:before {
                                    content: "\e657";
                                }
                                .icon-dots:before {
                                    content: "\e641";
                                }
                                .icon-skype:before {
                                    content: "\e642";
                                }
                                .icon-smartphone:before {
                                    content: "\e643";
                                }
                                .icon-responsive:before {
                                    content: "\e644";
                                }
                                .icon-speech:before {
                                    content: "\e645";
                                }
                                .icon-star:before {
                                    content: "\e646";
                                }
                                .icon-stumbleupon:before {
                                    content: "\e647";
                                }
                                .icon-telephone:before {
                                    content: "\e648";
                                }
                                .icon-textlines:before {
                                    content: "\e649";
                                }
                                .icon-truck:before {
                                    content: "\e64a";
                                }
                                .icon-tumblr:before {
                                    content: "\e64b";
                                }
                                .icon-twitter:before {
                                    content: "\e64c";
                                }
                                .icon-twitter-alt:before {
                                    content: "\e64d";
                                }
                                .icon-verification:before {
                                    content: "\e64e";
                                }
                                .icon-vimeo:before {
                                    content: "\e64f";
                                }
                                .icon-vk:before {
                                    content: "\e650";
                                }
                                .icon-wordpress:before {
                                    content: "\e651";
                                }
                                .icon-write:before {
                                    content: "\e652";
                                }
                                .icon-xing:before {
                                    content: "\e653";
                                }
                                .icon-youtube:before {
                                    content: "\e654";
                                }
                                .icon-youtube-alt:before {
                                    content: "\e655";
                                }
                                .icon-filter:before {
                                    content: "\e656";
                                }
                                .icon-televisions:before {
                                    content: "\e658";
                                }
                                .icon-ipad:before {
                                    content: "\e659";
                                }
                                .icon-mobile-phone:before {
                                    content: "\e65a";
                                }
                                .icon-headphone:before {
                                    content: "\e65c";
                                }
                                .icon-computer:before {
                                    content: "\e65d";
                                }
                                .icon-watch:before {
                                    content: "\e65b";
                                }
                                .icon-iwatch:before {
                                    content: "\e65f";
                                }
                                .icon-spa:before {
                                    content: "\e65e";
                                }
                                .icon-tablets:before {
                                    content: "\e660";
                                }
                                .icon-medicine:before {
                                    content: "\e661";
                                }
                                .icon-feeding:before {
                                    content: "\e662";
                                }
                                .icon-baby:before {
                                    content: "\e663";
                                }
                                .icon-pet:before {
                                    content: "\e664";
                                }
                                .icon-leaf:before {
                                    content: "\e665";
                                }
                                .icon-weight:before {
                                    content: "\e666";
                                }
                                .icon-fruit:before {
                                    content: "\e667";
                                }
                                .icon-cocktail:before {
                                    content: "\e668";
                                }
                                .icon-wiping:before {
                                    content: "\e669";
                                }
                                .icon-basket:before {
                                    content: "\e66a";
                                }
                                .icon-couple:before {
                                    content: "\e66b";
                                }
                                .icon-music:before {
                                    content: "\e66c";
                                }
                                .icon-flowers:before {
                                    content: "\e66d";
                                }
                                .icon-sweet:before {
                                    content: "\e66e";
                                }
                                .icon-utensil:before {
                                    content: "\e66f";
                                }
                                .icon-wedding:before {
                                    content: "\e670";
                                }
                                .icon-speaker:before {
                                    content: "\e671";
                                }
                                .icon-folder:before {
                                    content: "\e930";
                                }
                            </style>

                        </div>
                    </div>
                </div>


                <div id="custom-preloader">
                    <div class="custom-loader" style="display: none;">
                        <img width="32" height="32" alt="" src="/static/image/website/ajax-loader.gif">
                    </div>
                </div>


            </main>

            <!-- Footer -->
            <footer class="site-footer">
<?php
include $APPLICATION_PATH . '/view/site-footer.php';
?>

            </footer>
            <div class="ovelay-kd">

            </div>
        </div>


        <div id="scroll-to-top" title="Scroll to Top">
            <i class="fa fa-caret-up"></i>
        </div>






<?php
include $APPLICATION_PATH . '/view/quick-shop-modal.php';
?>



        <script>
            function replace_img() {
                var windowsize = $(window).width();
                if (windowsize < 480) {
                    $(".grid__image.").find('img').each(function () {
                        var str = $(this).attr('src');
                        var res = str.replace("medium", "compact");
                        $(this).attr('src', res);
                    })
                } else {
                    $(".grid__image").find('img').each(function () {
                        var str = $(this).attr('src');
                        var res = str.replace("medium", "compact");
                        $(this).attr('src', res);
                    })
                }
            }
            $(window).on("load resize", function (e) {
                replace_img();
            });
        </script>

    </body>
</html>