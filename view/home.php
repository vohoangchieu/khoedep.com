<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface"><!--<![endif]-->
    <head>
        <?php
        include $APPLICATION_PATH . '/view/head.php';
        ?>
    </head>

    <body id="shop-suc-khoe-lam-dep" class="template-index" style="">

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
            <?php
            include $APPLICATION_PATH . '/view/mobile-nav.php';
            ?>
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
                <div class="wrapper">
                    <div id="top-home-blocks" class="grid--full grid--table">
                        <?php
                        include $APPLICATION_PATH . '/view/top-home-blocks.php';
                        ?>
                    </div>


      
                    <?php
                    $count = 0;
                    foreach ($map_home_category_product as $keycategory => $list_home_category_product) {
                        $count++;
//                                var_dump($list_home_category_product);
                        $category = $list_category[$keycategory];
//                        var_dump($category);
                        ?>

                        <div id="home-blocks-<?php echo $count ?>" class="beauty-health-wrapper grid--full grid--table grid-block-full">
                            <div class="home-blocks-<?php echo $count ?>-inner">
                                <div class="bh-top home-block-title">
                                    <div class="collection-name">
                                        <img class="collection-icon" src="/static/image/website/<?php echo $category["url"] ?>.png" alt="home blocks 1">
                                        <a href="<?php echo $category["map_url"] ?>"><?php echo $category["name"] ?></a>
                                        <div class="visible-xs catelogry-xs">
                                            Danh mục <i class="fa fa-caret-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="collection-tags">
                                        <ul class="bh-tags">
                                            <?php
                                            $list_subcategory_tmp = $map_category[$category["url"]];
                                            foreach ($list_subcategory_tmp as $subcategory) {
                                                ?>
                                                <li class=""><a href="<?php echo $subcategory["map_url"] ?>"><?php echo $subcategory["name"] ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bh-btm">
                                    <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
                                        <div class="home-slideshow-block bh-slideshow">
                                            <div class="home-gallery-slider owl-carousel owl-theme owl-loaded">





                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 875px;"><div class="owl-item active" style="width: 875px; margin-right: 0px;"><div><a href="http://shop.khoedep.vn/collections/trang-diem"><img src="/static/image/website/home_block1_slide1.png" alt=""></a></div></div></div></div><div class="owl-controls clickable"><div class="owl-nav owl-buttons"><div class="owl-prev" style="display: none;">prev</div><div class="owl-next" style="display: none;">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
                                        </div>
                                        <div class="home-products-block bh-products">
                                            <!--  <div class="home-products-block-title">
    <span></span>
    </div> -->
                                            <div class="home-products-block-content">
                                                <div class="home-products-slider" style="display: none">
<?php
    foreach ($list_home_category_product as $product) {
//        var_dump($list_home_category_product);
?>


                        <div class="grid__item">
                            <div class="grid__item_wrapper">
                                <div class="grid__image product-image">
                                    <a href="<?php echo $product["product_url"]?>">
                                        <img class="hidden-xs lazy" data-original="<?php echo $product["product_image"]?>" alt="" src="<?php echo $product["product_thumb"]?>">
                                    </a>


                                </div>
                                <h3 class="h6 product-title">
                                    <a href="<?php echo $product["product_url"]?>"><?php echo $product["product_name"]?></a>
                                </h3>
                                <p class="product-price">
                                    <?php echo $product["product_price"]?>
                                </p>
                            </div>
                        </div>
<?php
        
    }
?>

                                                </div>
                                            </div>
                                        </div>
                                        <div align="center" style="clear:both;">
                                            <a class="btn btn2 text-center" href="<?php echo $category["map_url"] ?>">Xem tất cả sản phẩm</a>
                                        </div>
                                    </div>
                                    <div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
                                        <div class="brands-area">
                                            <ul class="brands-elements">



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/laneige"><img src="/static/image/website/home_block1_brand1.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/loreal"><img src="/static/image/website/home_block1_brand2.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/lovite"><img src="/static/image/website/home_block1_brand3.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/maybelline"><img src="/static/image/website/home_block1_brand4.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/cle-de-peau"><img src="/static/image/website/home_block1_brand5.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/revitalash"><img src="/static/image/website/home_block1_brand6.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/collections/shiseido"><img src="/static/image/website/home_block1_brand7.png" alt=""></a>
                                                </li>



                                                <li class="">
                                                    <a href="http://shop.khoedep.vn/#"><img src="/static/image/website/home_block1_brand8.png" alt=""></a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="banner-area">
                                            <a href="http://shop.khoedep.vn/products/son-chong-kho-va-nut-ne-moi-lanolin-lip-balm"><img src="/static/image/website/home_block1_banner.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
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



        <div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
            <?php
            include $APPLICATION_PATH . '/view/quick-shop-modal.php';
            ?>
        </div>




    </body>
</html>

