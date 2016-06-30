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


                    <div id="home-blocks-1" class="beauty-health-wrapper grid--full grid--table grid-block-full">
                        <?php
                        include $APPLICATION_PATH . '/view/home-blocks-1.php';
                        ?>
                    </div>



                    <div id="home-blocks-2" class="smartphones-wrapper grid--full grid--table grid-block-full">
                        <?php
                        include $APPLICATION_PATH . '/view/home-blocks-2.php';
                        ?>
                    </div>



                    <div id="home-blocks-3" class="kids-wrapper grid--full grid--table grid-block-full">
                        <?php
                        include $APPLICATION_PATH . '/view/home-blocks-3.php';
                        ?>
                    </div>



                    <div id="home-blocks-4" class="accessories-wrapper grid--full grid--table grid-block-full">
                        <?php
                        include $APPLICATION_PATH . '/view/home-blocks-4.php';
                        ?>
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



        <div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
            <?php
            include $APPLICATION_PATH . '/view/quick-shop-modal.php';
            ?>
        </div>




    </body>
</html>

