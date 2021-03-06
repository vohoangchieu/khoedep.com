<!DOCTYPE html>
<html class="supports-js supports-no-touch supports-csstransforms supports-csstransforms3d supports-fontface"><!--<![endif]-->
    <head>
           <?php
        include $APPLICATION_PATH . '/view/head.php';
        ?>       
    </head>

    <body id="vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-ly" class="template-product">

        <script>
            var lastViewProducts = new LastViewProducts({
                max: 20
            });
        </script>

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
                include $APPLICATION_PATH . '/view/head.php';
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
                <!--<link href='//hstatic.net/844/1000032844/1000122658/product.css?v=776' rel='stylesheet' type='text/css'  media='all'  /> -->
                <script>
                    (function saveAlgorithm() {
                        lastViewProducts.add('vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine');
                    }());
                </script>
                <div class="breadcrumb-wrapper">
                    <div class="wrapper">
    <nav class="breadcrumb " role="navigation" aria-label="breadcrumbs">
        <a href="/" title="Trở về trang chủ">Trang chủ</a>
        <span aria-hidden="true">›</span>
        <a href="/c/<?php echo $category_info['url']?>" target="_self"><?php echo $category_info['name']?></a>
        <span aria-hidden="true">›</span>
        <a href="/sc/<?php echo $subcategory_info['url']?>" target="_self"><?php echo $subcategory_info['name']?></a>
        <span aria-hidden="true">›</span>
        <span><?php echo $product['name']?></span>
    </nav>
</div>
                </div>
                <div class="wrapper">
                    <div class="grid--rev">
                        <div class="grid__item">
                            <div itemscope="" itemtype="http://schema.org/Product">

                                <meta itemprop="url" content="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine">
                                <meta itemprop="image" content="//hstatic.net/844/1000032844/1/2016/6-1/chewies-lysine-box-60-s_grande.jpg">


                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="product-single">
                                        <div class="grid__item large--two-fifths product-info-img text-center">
                                            <div class="product-single__photos xs-hidden image-zoom" id="ProductPhoto" style="position: relative; overflow: hidden;">

                                                <img src="<?php echo $product['product_image']?>" alt="" id="ProductPhotoImg" data-zoom="<?php echo $product['product_image']?>" data-image-id="1022286629">
                                                <img src="/static/image/website/chewies-lysine-box-60-s_1024x1024.jpg" class="zoomImg" style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 869px; height: 1024px; border: none; max-width: none; max-height: none;"></div>

                                            <ul class="product-single__thumbnails grid-uniform fix-vector" style="display:none;" id="ProductThumbs-xs">

                                                <li class="thumb__element">
                                                    <a href="javascript:;" class="product-single__thumbnail">
                                                        <img src="<?php echo $product['product_image']?>" alt="">
                                                    </a>
                                                </li>

                                            </ul>



                                        </div>

                                        <div class="grid__item large--three-fifths">
                                            <div class="product-info-left grid__item one-whole">


                                                <h1 itemprop="name"><?php echo $product['product_name']?></h1>
                                                <span itemprop="description" class="hidden"></span>


                                                <!--	<div class="rating-star">
<div class="haravan-product-reviews-badge" data-id="1002205897">  </div>
</div> -->

<!-- <span class="point"><strong><i class="fa fa-hashtag"></i> Điểm tích luỹ:</strong> </span> -->

                                                <div class="product-sku">
                                                    <strong><i class="fa fa-hashtag"></i> Mã sản phẩm:</strong> <span></span>
                                                </div>



                                                <div class="product-type"><i class="fa fa-tags"></i> <b>Loại : <a title="Show type" href="http://shop.khoedep.vn/collections/types?q=supplement">Supplement</a></b></div>

                                                <div class="product-price">
                                                    <span class="visually-hidden">Regular price</span>
                                                    <span id="ProductPrice" class=""><?php echo $product['product_price']?></span>

                                                </div>
                                                <div class="scroll-add" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                    <meta itemprop="priceCurrency" content="VND">
                                                    <span itemprop="price" class="hidden" content="120.000">120.000</span>

                                                    <link itemprop="availability" href="http://schema.org/InStock">
                                                    <div class="product-action ">
                                                        <form action="http://shop.khoedep.vn/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         

















                                                            <style>
                                                                label[for="product-select-option-0"] { display: none; }
                                                                #product-select-option-0 { display: none; }
                                                                #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                                            </style>
                                                            <script>$(window).load(function () {
                                                                    $('.selector-wrapper:eq(0)').hide();
                                                                });</script>






                                                            <div class="swatch clearfix" data-option-index="0">
                                                                 <div class="product-information xs-hidden">
                                        <div id="tabs-information" data-easytabs="true">
                                            <ul class="nav nav-tabs tabs-left sideways nav-pills nav-stacked">
                                                <li class="warranty description active"><a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine#desc" data-toggle="tab" class="active">Mô tả</a></li>


                                                <li class="warranty comment"><a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine#comment" data-toggle="tab">Bình luận</a></li>
                                                <li class="warranty comment"><a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine#productreviews" data-toggle="tab">Đánh giá sản phẩm</a></li>
                                            </ul>
                                            <div class="tab-panel active" id="desc" style="display: block;">
                                                <h3>Tăng cường hấp thu vitamine Chewies Multivitamin with Lysine. H60v</h3><p><strong>CÔNG DỤNG :</strong></p><p>Bổ sung các vitamin , acid folic và lysine giúp tăng cường hấp thu chất dinh dưỡng, giúp duy trì cơ thể khỏe mạnh</p><p><strong>CÁCH DÙNG&nbsp;</strong></p><p>Trẻ em trên 4 tuổi : 1-2 viên/ ngày</p><p><strong>QUY CÁCH ĐÓNG GÓI :</strong></p><p>1 lọ x 60 viên</p><p><strong>Thành phần&nbsp;</strong></p><p>Mỗi viên Chewies Lysine chứa: Lysine 50mg, Vitamin A 1500IU, Vitamin E 10IU, Vitamin D3 100IU, Vitamin B1 250mcg, Vitamin B2 250mcg, Vitamin B6 250mcg, Vitamin B12 2,0mcg, Nicotinamide 2,5mg, Vitamin C 50mg, Acid Folic 250 mcg</p><p><strong>Phụ gia :</strong></p><p>Sorbitol Powder, Aspartame, Vanila Powder 87.0474, Stawberry Powder 877988, Violet Lake Blend 300568, Magnesium Stearate G-EP</p><p><strong>Lưu ý:</strong> Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</p>
                                            </div>
                                        </div>  
                                        <script>
                                            $('#tabs-information').easytabs({animationSpeed: 'fast', updateHash: false});
                                        </script>
                                    </div>







                                                            </div>







                                                         

                                                            <label for="Quantity" class="quantity-selector">Số lượng</label>
                                                            <div class="outer">
                                                                <div class="qty_select pull-left">
                                                                    <input type="number" id="Quantity" name="quantity" value="1" min="1" class="quantity-selector hidden" style="display: inline-block;">
                                                                    <div class="adr incrementer detail" data-max-value="380">
                                                                        <div class="dropdown count-item selectAmount">
                                                                            <span class="select-qty" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                                                <span class="value">1</span>
                                                                                <span class="caret"></span>
                                                                            </span>
                                                                            <ul class="dropdown-menu t-qty" role="menu" aria-labelledby="count-item">
                                                                                <li><a>1</a></li>
                                                                                <li><a>2</a></li>
                                                                                <li><a>3</a></li>
                                                                                <li><a>4</a></li>
                                                                                <li><a>5</a></li>
                                                                                <li><a>6</a></li>
                                                                                <li><a>7</a></li>
                                                                                <li><a>8</a></li>
                                                                                <li><a>9</a></li>
                                                                                <li><a>10</a></li>

                                                                            </ul>
                                                                        </div>
                                                                        <input id="pStockQuantity" type="text" maxlength="6" class="form-control hide " value="1" data-toggle="tooltip" data-container="body" data-placement="bottom" data-template="" title="Nhấn enter cho sản phẩm vào giỏ hàng">
                                                                    </div>
                                                                </div>
                                                                <div class="pull-left">
                                                                    <button type="submit" name="add" id="AddToCart" class="btn add-cart">
                                                                        <span class="icon"><i class="fa fa-shopping-basket"></i></span><span id="AddToCartText">Mua ngay</span>
                                                                    </button>
                                                                </div>

                                                            </div>
                                                        </form>

                                                    </div>          
                                                </div>




                                                <div class="clearfix"></div>


                                            </div>


                                        </div>
                                    </div>

                                

                                    <div class="clearfix"></div>
                                    <div class="show-xs tab-scroll-xs">
                                        <div class="tab-panel-scroll tab-panel-xs" id="des-xs">
                                            <h3>
                                                Mô tả
                                            </h3>
                                            <div class="content">
                                                <h3>Tăng cường hấp thu vitamine Chewies Multivitamin with Lysine. H60v</h3><p><strong>CÔNG DỤNG :</strong></p><p>Bổ sung các vitamin , acid folic và lysine giúp tăng cường hấp thu chất dinh dưỡng, giúp duy trì cơ thể khỏe mạnh</p><p><strong>CÁCH DÙNG&nbsp;</strong></p><p>Trẻ em trên 4 tuổi : 1-2 viên/ ngày</p><p><strong>QUY CÁCH ĐÓNG GÓI :</strong></p><p>1 lọ x 60 viên</p><p><strong>Thành phần&nbsp;</strong></p><p>Mỗi viên Chewies Lysine chứa: Lysine 50mg, Vitamin A 1500IU, Vitamin E 10IU, Vitamin D3 100IU, Vitamin B1 250mcg, Vitamin B2 250mcg, Vitamin B6 250mcg, Vitamin B12 2,0mcg, Nicotinamide 2,5mg, Vitamin C 50mg, Acid Folic 250 mcg</p><p><strong>Phụ gia :</strong></p><p>Sorbitol Powder, Aspartame, Vanila Powder 87.0474, Stawberry Powder 877988, Violet Lake Blend 300568, Magnesium Stearate G-EP</p><p><strong>Lưu ý:</strong> Sản phẩm này không phải là thuốc và không có tác dụng thay thế thuốc chữa bệnh.</p>
                                            </div>
                                            <a href="javascript:;" class="view-more-tab">Xem thêm <i class="fa fa-angle-down"></i></a>
                                        </div>

                                        <div class="tab-panel-xs" id="tab-xs-1">
                                            <h3 class="tab-title-xs">
                                                Hướng dẫn sử dụng
                                            </h3>
                                            <div class="content">

                                            </div>
                                            <a href="javascript:;" class="view-more-tab">Xem thêm <i class="fa fa-angle-down"></i></a>
                                        </div>

                                        <div class="tab-panel-xs" id="tab-xs-2">
                                            <h3 class="tab-title-xs">
                                                Thành phần
                                            </h3>
                                            <div class="content">

                                            </div>
                                            <a href="javascript:;" class="view-more-tab">Xem thêm <i class="fa fa-angle-down"></i></a>
                                        </div>



                                    </div>
                                    <div class="clearfix"></div>




                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 chewies" style="padding: 30px 0px 0px;">
                                        <div class="product-brand">
                                    <h3 class="title-brand title_des_prod">   
                                       Sản phẩm của Shiseido
                                    </h3>
                                    <div id="owl-hasbrand" class="owl-each content-product-list" style="display: none; padding:15px 0px 0px 0px;">
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/chi-ke-chan-may-shiseido-natural-eyebrow-pencil" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/chi-ke-chan-may-shiseido-natural-eyebrow-pencil-br603_compact.jpg" alt="chi ke chan may shiseido natural eyebrow pencil BR603">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/chi-ke-chan-may-shiseido-natural-eyebrow-pencil">Chì Kẻ Chân Mày Shiseido Natural Eyebrow Pencil</a>
                                                </div>
                                                <p class="product-price">
                                                   420,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Chì Kẻ Chân Mày Shiseido Natural Eyebrow Pencil với thiết kế độc đáo, dễ cầm, dễ sử dụng. Phong cách định hình chân mày chuyên nghiệp, giúp bạn dễ dàng tạo đường chân mày một cách hoàn hảo nhất. Ruột chì được làm bằng loại...
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200412">Gy901 - 420,000₫</option>
                                                
                                                
                                                
                                                <option value="1007200413">Br602 - 420,000₫</option>
                                                
                                                
                                                
                                                <option value="1007200414">Br603 - 420,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='/products/chi-ke-chan-may-shiseido-natural-eyebrow-pencil';" title="Select Options"><i class="fa fa-bars"></i> Tùy chọn</button>
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/co-ma-hong-shiseido-blush-brush" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/co-ma-hong-shiseido-blush-brush_compact.jpg" alt="co ma hong shiseido blush brush">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/co-ma-hong-shiseido-blush-brush">Cọ má hồng Shiseido Blush Brush</a>
                                                </div>
                                                <p class="product-price">
                                                   920,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Cọ má hồng được cấu tạo từ lông tự nhiên mềm mại giúp tán màu và xác định vùng gò má một cách chuyên nghiệp và dễ dàng.
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200424">Default Titile - 920,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/co-moi-shiseido-portable-lip-brush" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/co-moi-shiseido-portable-lip-brush_compact.jpg" alt="co moi shiseido portable lip brush">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/co-moi-shiseido-portable-lip-brush">Cọ môi Shiseido Portable Lip Brush</a>
                                                </div>
                                                <p class="product-price">
                                                   400,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Cọ môi nhỏ được cấu tạo từ lông tự nhiên, nhỏ gọn để giúp bạn định hình đường nét của đôi môi và tô son dễ dàng, chính xác.
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200428">Default Titile - 400,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/co-phan-mat-shiseido-eye-shadow-brush" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/shiseido-eye-shadow-brush_compact.jpg" alt="">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/co-phan-mat-shiseido-eye-shadow-brush">Cọ phấn mắt Shiseido Eye Shadow Brush</a>
                                                </div>
                                                <p class="product-price">
                                                   390,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Cọ mắt được cấu tạo từ lông tự nhiên mềm mại giúp tán màu mắt đều và hoàn hảo.
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200425">Default Titile - 390,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/co-phan-phu-shiseido-powder-brush" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/co-phan-phu-shiseido-powder-brush_compact.jpg" alt="co phan phu shiseido powder brush">    
                                                </a>
                                                <div class="kd-gift">
                                                   <img src="//hstatic.net/844/1000032844/1000122658/icon-gift.png?v=1053" alt="Quà tặng Cọ phấn phủ Shiseido Powder Brush">
                                                </div>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/co-phan-phu-shiseido-powder-brush">Cọ phấn phủ Shiseido Powder Brush</a>
                                                </div>
                                                <p class="product-price">
                                                   1,760,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Một loại chổi được cấu tạo từ những sợi lông tự nhiên, to và mềm mại, dùng để đánh phấn phủ, hiệu chỉnh phần trang điểm hoàn hảo với cảm giác dễ chịu tuyệt vời.
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200423">Default Titile - 1,760,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-18/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush_compact.jpg" alt="co ve chan may va ke mat shiseido eyebrow eyeliner brush">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush">Cọ vẽ chân mày và kẻ mắt Shiseido Eyebrow & Eyeliner Brush</a>
                                                </div>
                                                <p class="product-price">
                                                   440,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Cọ vẽ chân mày và eyeliner được cấu tạo từ lông tự nhiên dành cho mắt và chân mày, giúp làm nổi bật đường viền mi mắt và lông mày.
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200426">Default Titile - 440,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/dung-cu-bam-long-mi-shiseido-eyelash-curler" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-20/dung-cu-bam-long-mishiseido-eyelash-curler_compact.jpg" alt="dung cu bam long mi shiseido eyelash curler">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/dung-cu-bam-long-mi-shiseido-eyelash-curler">Dụng Cụ Bấm Lông Mi Shiseido Eyelash Curler</a>
                                                </div>
                                                <p class="product-price">
                                                   500,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Dụng Cụ Bấm Lông Mi Shiseido Eyelash Curler là dòng sản phẩm được xếp vào hạng top 5 kẹp mi nên sử dụng. Theo đó, Dụng Cụ Bấm Lông Mi Shiseido Eyelash Curler được yêu thích nhiều nhất bởi người châu Á nhờ kích cỡ...
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200410">Default Titile - 500,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/gel-duong-da-vung-mat-shiseido-the-skincare-eye-moisture-recharge" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-17/gel-duong-da-vung-mat-shiseido-the-skincare-eye-moisture-recharge_compact.jpg" alt="gel duong da vung mat shiseido the skincare eye moisture recharge">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/gel-duong-da-vung-mat-shiseido-the-skincare-eye-moisture-recharge">Gel Dưỡng Da Vùng Mắt Shiseido The Skincare Eye Moisture Recharge</a>
                                                </div>
                                                <p class="product-price">
                                                   810,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Gel phục hồi giúp cung cấp độ ẩm và làm giảm bọng mắt. Đồng thời giảm thiểu sự xuất hiện của nếp nhăn do mệt mỏi hoặc căng thẳng, dẫn đến lão hóa sớm.Cải thiện hiệu quả trang điểm cho vùng mắt. (Có thể dùng...
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200420">Default Titile - 810,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/gel-tay-trang-shiseido-the-skincare-rinse-off-cleansing-gel" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-17/gel-duong-da-vung-mat-shiseido-the-skincare-eye-moisture-recharge_9c0b46e0-b051-4fd2-72da-62818aa69d3b_compact.jpg" alt="gel tay trang shiseido the skincare rinse off cleansing gel">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/gel-tay-trang-shiseido-the-skincare-rinse-off-cleansing-gel">Gel Tẩy Trang Shiseido The Skincare Rinse Off Cleansing Gel</a>
                                                </div>
                                                <p class="product-price">
                                                   760,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Gel Tẩy Trang Shiseido The Skincare Rinse Off Cleansing Gel tươi mát mà hấp thụ hiệu quả sản phẩm trang điểm, dầu, và các tạp chất đồng thời duy trì độ ẩm cần thiết trên da. Rửa sạch đi cho một làn da hoàn toàn...
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200416">Default Titile - 760,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                       <div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                          <div class="grid__item_wrapper">
                                             <div class="grid__image product-image">
                                                <a href="/products/kem-duong-the-shiseido-future-solution-lx-total-regenerating-body-cream" class="grid__image product-image">
                                                <img src="//hstatic.net/844/1000032844/1/2016/6-17/kem-duong-the-shiseido-future-solution-lx-total-regenerating-body-cream_compact.jpg" alt="kem duong the shiseido future solution lx total regenerating body cream">    
                                                </a>
                                             </div>
                                             <div class="title-info">
                                                <div class="product-title">
                                                   <a href="/products/kem-duong-the-shiseido-future-solution-lx-total-regenerating-body-cream">Kem Dưỡng Thể Shiseido Future Solution LX Total Regenerating Body Cream</a>
                                                </div>
                                                <p class="product-price">
                                                   3,270,000₫
                                                </p>
                                             </div>
                                             <div class="list-mode-description">
                                                Kem Dưỡng Thể Shiseido Future Solution LX Total Regenerating Body Cream với công thức nuôi dưỡng và giữ ẩm cho da suốt cả ngày, mang tới cho bạn làn da mềm mại, trắng mịn và khỏe mạnh đến không ngờ. Sở hữu thành phần Skingenecell...
                                             </div>
                                             <!--<ul class="action-button">    
                                                <li class="add-to-cart-form">
                                                <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                
                                                <div class="hide clearfix"> 
                                                <select name="id" >
                                                
                                                
                                                
                                                
                                                
                                                <option selected="selected" value="1007200093">Default Titile - 3,270,000₫</option>
                                                
                                                
                                                
                                                </select>
                                                </div>  
                                                
                                                <div class="effect-ajax-cart">
                                                
                                                <input type="hidden" name="quantity" value="1" />
                                                
                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                
                                                
                                                </div>
                                                </form>
                                                </li>
                                                
                                                
                                                </ul> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                    </div>



                                    <div class="clearfix"></div>
                                    <div class="col-md-12 col-sm-12 col-xs-12" style="padding: 0px;">
                                        <div class="product-coll">










































                                            <h3 class="title-coll title_des_prod">   
                                                Các sản phẩm về Vitamin các loại
                                            </h3>
                                            <div id="owl-hascoll" class="owl-each content-product-list vitamin-cac-loai owl-carousel owl-theme owl-loaded" style="padding: 15px 0px 0px;">   






































































                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 885px;"><div class="owl-item active" style="width: 211.25px; margin-right: 10px;"><div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                                                <div class="grid__item_wrapper">
                                                                    <div class="grid__image product-image">
                                                                        <a href="http://shop.khoedep.vn/products/nuoc-uong-rau-cu-qua-plant-enzyme-green-juice" class="grid__image product-image">
                                                                            <img src="/static/image/website/nuoc-uong-rau-cu-qua-plant-enzyme-green-juice_medium.jpg" alt="">    
                                                                        </a>

                                                                    </div>
                                                                    <!--<div class="rating-star">
                                                                      <span class="haravan-product-reviews-badge" data-id="1002289810"></span>
                                                                    </div> -->
                                                                    <div class="title-info">
                                                                        <div class="product-title">
                                                                            <a href="http://shop.khoedep.vn/products/nuoc-uong-rau-cu-qua-plant-enzyme-green-juice">Nước uống rau củ quả Plant Enzyme Green Juice</a>
                                                                        </div>
                                                                      <!--	<span class="point">Điểm tích luỹ: </span> -->
                                                                        <p class="product-price">



                                                                            600,000₫





                                                                        </p>
                                                                    </div>
                                                                    <div class="list-mode-description">
                                                                        Nước uống rau củ quả Plant Enzyme Green Juice với chiết xuất&nbsp;từ mầm lúa mạch và 87 loại rau củ quả đạt chuyển JAS của Nhật Bản nên không những cung cấp đầy đủ Vitamin và khoáng chất cho cơ thể mà còn đảm bảo...
                                                                    </div>
                                                                    <!--<ul class="action-button">    
                                                                      <li class="add-to-cart-form">
                                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                                          
                                                                          <div class="hide clearfix"> 
                                                                            <select name="id" >
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              <option selected="selected" value="1006975692">60g - 600,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                            </select>
                                                                          </div>  
                                                                          
                                                                         <div class="effect-ajax-cart">
                                                                            
                                                                              <input type="hidden" name="quantity" value="1" />
                                                                              
                                                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                                              
                                                                            
                                                                          </div>
                                                                        </form>
                                                                      </li>
                                                                                  
                                                                                  
                                                                    </ul> -->
                                                                </div>
                                                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 10px;"><div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                                                <div class="grid__item_wrapper">
                                                                    <div class="grid__image product-image">
                                                                        <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine" class="grid__image product-image">
                                                                            <img src="/static/image/website/chewies-lysine-box-60-s_medium.jpg" alt="">    
                                                                        </a>

                                                                    </div>
                                                                    <!--<div class="rating-star">
                                                                      <span class="haravan-product-reviews-badge" data-id="1002205897"></span>
                                                                    </div> -->
                                                                    <div class="title-info">
                                                                        <div class="product-title">
                                                                            <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine">Viên uống bổ sung cho trẻ em giúp ăn ngon Chewies Multivitamin With Lysine</a>
                                                                        </div>
                                                                      <!--	<span class="point">Điểm tích luỹ: </span> -->
                                                                        <p class="product-price">



                                                                            120,000₫





                                                                        </p>
                                                                    </div>
                                                                    <div class="list-mode-description">
                                                                        Tăng cường hấp thu vitamine Chewies Multivitamin with Lysine. H60vCÔNG DỤNG :Bổ sung các vitamin , acid folic và lysine giúp tăng cường hấp thu chất dinh dưỡng, giúp duy trì cơ thể khỏe mạnhCÁCH DÙNG&nbsp;Trẻ em trên 4 tuổi : 1-2 viên/ ngàyQUY CÁCH...
                                                                    </div>
                                                                    <!--<ul class="action-button">    
                                                                      <li class="add-to-cart-form">
                                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                                          
                                                                          <div class="hide clearfix"> 
                                                                            <select name="id" >
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              <option selected="selected" value="1006796300">30 vi&#234;n - 120,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                              <option value="1006796301">60 vi&#234;n - 210,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                            </select>
                                                                          </div>  
                                                                          
                                                                         <div class="effect-ajax-cart">
                                                                            
                                                                              <input type="hidden" name="quantity" value="1" />
                                                                              
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine';" title="Select Options"><i class="fa fa-bars"></i> Tùy chọn</button>
                                                                              
                                                                            
                                                                          </div>
                                                                        </form>
                                                                      </li>
                                                                                  
                                                                                  
                                                                    </ul> -->
                                                                </div>
                                                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 10px;"><div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                                                <div class="grid__item_wrapper">
                                                                    <div class="grid__image product-image">
                                                                        <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-thong-minh-chewies-multivitamin-with-taurine" class="grid__image product-image">
                                                                            <img src="/static/image/website/chewies-taurine-box-60-s_medium.jpg" alt="">    
                                                                        </a>

                                                                    </div>
                                                                    <!--<div class="rating-star">
                                                                      <span class="haravan-product-reviews-badge" data-id="1002205898"></span>
                                                                    </div> -->
                                                                    <div class="title-info">
                                                                        <div class="product-title">
                                                                            <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-thong-minh-chewies-multivitamin-with-taurine">Viên uống bổ sung cho trẻ em giúp thông minh Chewies Multivitamin With Taurine</a>
                                                                        </div>
                                                                      <!--	<span class="point">Điểm tích luỹ: </span> -->
                                                                        <p class="product-price">



                                                                            120,000₫





                                                                        </p>
                                                                    </div>
                                                                    <div class="list-mode-description">
                                                                        CÔNG DỤNG :- Bổ sung các vitamin giúp tăng cường hấp thu chất dinh dưỡng, duy trì cơ thể khỏe mạnh - Bổ sung Taurine và Acid Folic hỗ trợ tăng cường hoạt động của não bộ và thị lực của trẻ.CÁCH DÙNG&nbsp;Trẻ em trên...
                                                                    </div>
                                                                    <!--<ul class="action-button">    
                                                                      <li class="add-to-cart-form">
                                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                                          
                                                                          <div class="hide clearfix"> 
                                                                            <select name="id" >
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              <option selected="selected" value="1006796302">30 vi&#234;n - 120,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                              <option value="1006796303">60 vi&#234;n - 210,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                            </select>
                                                                          </div>  
                                                                          
                                                                         <div class="effect-ajax-cart">
                                                                            
                                                                              <input type="hidden" name="quantity" value="1" />
                                                                              
                                                                                <button class="btn btn-1 select-option" type="button" onclick="window.location='/products/vien-uong-bo-sung-cho-tre-em-giup-thong-minh-chewies-multivitamin-with-taurine';" title="Select Options"><i class="fa fa-bars"></i> Tùy chọn</button>
                                                                              
                                                                            
                                                                          </div>
                                                                        </form>
                                                                      </li>
                                                                                  
                                                                                  
                                                                    </ul> -->
                                                                </div>
                                                            </div></div><div class="owl-item active" style="width: 211.25px; margin-right: 10px;"><div class="grid__item large--one-quarter medium--one-half grid-xs-2">
                                                                <div class="grid__item_wrapper">
                                                                    <div class="grid__image product-image">
                                                                        <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-vitamin-c-cho-tre-em-chewies-vitamin-c-orange-flavor" class="grid__image product-image">
                                                                            <img src="/static/image/website/chewies-orange-vitc-box-30-s_medium.jpg" alt="">    
                                                                        </a>

                                                                    </div>
                                                                    <!--<div class="rating-star">
                                                                      <span class="haravan-product-reviews-badge" data-id="1002205899"></span>
                                                                    </div> -->
                                                                    <div class="title-info">
                                                                        <div class="product-title">
                                                                            <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-vitamin-c-cho-tre-em-chewies-vitamin-c-orange-flavor">Viên uống bổ sung Vitamin C cho trẻ em Chewies Vitamin C Orange Flavor</a>
                                                                        </div>
                                                                      <!--	<span class="point">Điểm tích luỹ: </span> -->
                                                                        <p class="product-price">



                                                                            72,000₫





                                                                        </p>
                                                                    </div>
                                                                    <div class="list-mode-description">
                                                                        CÔNG DỤNG :Bổ sung các vitamin và Acid Folic giúp tăng cường hấp thu và chuyển hóa các chất dinh dưỡng, hổ trợ miễn dịch, duy trì cơ thể khỏe mạnhCÁCH DÙNG&nbsp;Trẻ em trên 7 tuổi : 1-3 viên/ ngàyQUY CÁCH ĐÓNG GÓI :2 lọ...
                                                                    </div>
                                                                    <!--<ul class="action-button">    
                                                                      <li class="add-to-cart-form">
                                                                        <form action="/cart/add" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">         
                                                                          
                                                                          <div class="hide clearfix"> 
                                                                            <select name="id" >
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              
                                                                              <option selected="selected" value="1006796304">30 vi&#234;n - 72,000₫</option>
                                                                              
                                                                              
                                                                              
                                                                            </select>
                                                                          </div>  
                                                                          
                                                                         <div class="effect-ajax-cart">
                                                                            
                                                                              <input type="hidden" name="quantity" value="1" />
                                                                              
                                                                                <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</span></button>              
                                                                              
                                                                            
                                                                          </div>
                                                                        </form>
                                                                      </li>
                                                                                  
                                                                                  
                                                                    </ul> -->
                                                                </div>
                                                            </div></div></div></div><div class="owl-controls clickable"><div class="owl-nav owl-buttons"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 tfix-col3">

                                    <div class="grid__item product-info-right">      

                                        <div class="product-extrainfo xs-hidden">
                                            <div style="background: #ebebeb; padding: 13px;">
                                                <img style="float:left" src="/static/image/website/free-delivery.png"> <strong>MIỄN PHÍ VẬN CHUYỂN</strong><br>Hóa đơn trên 600.000đ
                                            </div>
                                            <ul style="padding:10px 15px 0 15px;">
                                                <li>
                                                    <img style="float:left;padding-right:23px;" src="/static/image/website/location-icon.jpg"><span class="detail_more_info">Địa điểm giao hàng
                                                        <span class="sub">Giao hàng toàn quốc</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <img style="float:left;padding-right:20px;" src="/static/image/website/cam-ket.jpg">
                                                    <span class="detail_more_info">Cam kết
                                                        <span class="sub">100% chính hãng</span>
                                                    </span>
                                                </li>
                                                <li class="last">
                                                    <img style="float:left;padding-right:12px;" src="/static/image/website/hotrotuvan.jpg"><span class="detail_more_info">Hỗ trợ tư vấn
                                                        <span class="sub">Thứ 2-Thứ 7 : 08g30 - 17g30</span>
                                                    </span>
                                                </li>	
                                            </ul>

                                        </div>          

                                        <div id="khoedep-td">

                                        </div>

                                        <div id="product-additional-information">
							






<div class="related-products">
	<h2 class="title_prod_rela">Có thể bạn quan tâm</h2>
	
	
	<ul class="grid-uniform owl_related">
		
		
		
		
		
		
		
		<li class="realted-element">
			
			

			
			
			
			
			
			
			
			<div class="grid__item">
				<div class="grid__item_wrapper">
					<div class="grid__image product-image">
						<a href="/collections/shiseido/products/co-ma-hong-shiseido-blush-brush" class="grid__image product-image">
							<img src="//hstatic.net/844/1000032844/1/2016/6-18/co-ma-hong-shiseido-blush-brush_compact.jpg" alt="co ma hong shiseido blush brush">    
						</a>
						
					</div>
					<h3 class="h6 product-title">
						<a href="/collections/shiseido/products/co-ma-hong-shiseido-blush-brush">Cọ má hồng Shiseido Blush Brush</a>
					</h3>
				
					<p class="product-price">
						
						
						
						920,000₫
						
						
						
						
						
					</p>
					<!--	<ul class="action-button hidden">                
<li class="add-to-cart-form">
<form action="/cart/add" method="post">

<div class="hide clearfix"> 
<select name="id" >





<option selected="selected" value="1007200424">Default Titile - 920,000₫</option>



</select>
</div>  

<div class="effect-ajax-cart">

<input type="hidden" name="quantity" value="1" />

<button class="btn btn-1 add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Buy Now"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</button>


</div>
</form>
</li>


</ul>-->
				</div>
			</div>
		</li>
		
		
		
		
		
		<li class="realted-element">
			
			

			
			
			
			
			
			
			
			<div class="grid__item">
				<div class="grid__item_wrapper">
					<div class="grid__image product-image">
						<a href="/collections/shiseido/products/co-moi-shiseido-portable-lip-brush" class="grid__image product-image">
							<img src="//hstatic.net/844/1000032844/1/2016/6-18/co-moi-shiseido-portable-lip-brush_compact.jpg" alt="co moi shiseido portable lip brush">    
						</a>
						
					</div>
					<h3 class="h6 product-title">
						<a href="/collections/shiseido/products/co-moi-shiseido-portable-lip-brush">Cọ môi Shiseido Portable Lip Brush</a>
					</h3>
				
					<p class="product-price">
						
						
						
						400,000₫
						
						
						
						
						
					</p>
					<!--	<ul class="action-button hidden">                
<li class="add-to-cart-form">
<form action="/cart/add" method="post">

<div class="hide clearfix"> 
<select name="id" >





<option selected="selected" value="1007200428">Default Titile - 400,000₫</option>



</select>
</div>  

<div class="effect-ajax-cart">

<input type="hidden" name="quantity" value="1" />

<button class="btn btn-1 add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Buy Now"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</button>


</div>
</form>
</li>


</ul>-->
				</div>
			</div>
		</li>
		
		
		
		
		
		<li class="realted-element">
			
			

			
			
			
			
			
			
			
			<div class="grid__item">
				<div class="grid__item_wrapper">
					<div class="grid__image product-image">
						<a href="/collections/shiseido/products/co-phan-mat-shiseido-eye-shadow-brush" class="grid__image product-image">
							<img src="//hstatic.net/844/1000032844/1/2016/6-18/shiseido-eye-shadow-brush_compact.jpg" alt="">    
						</a>
						
					</div>
					<h3 class="h6 product-title">
						<a href="/collections/shiseido/products/co-phan-mat-shiseido-eye-shadow-brush">Cọ phấn mắt Shiseido Eye Shadow Brush</a>
					</h3>
				
					<p class="product-price">
						
						
						
						390,000₫
						
						
						
						
						
					</p>
					<!--	<ul class="action-button hidden">                
<li class="add-to-cart-form">
<form action="/cart/add" method="post">

<div class="hide clearfix"> 
<select name="id" >





<option selected="selected" value="1007200425">Default Titile - 390,000₫</option>



</select>
</div>  

<div class="effect-ajax-cart">

<input type="hidden" name="quantity" value="1" />

<button class="btn btn-1 add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Buy Now"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</button>


</div>
</form>
</li>


</ul>-->
				</div>
			</div>
		</li>
		
		
		
		
		
		<li class="realted-element">
			
			

			
			
			
			
			
			
			
			<div class="grid__item">
				<div class="grid__item_wrapper">
					<div class="grid__image product-image">
						<a href="/collections/shiseido/products/co-phan-phu-shiseido-powder-brush" class="grid__image product-image">
							<img src="//hstatic.net/844/1000032844/1/2016/6-18/co-phan-phu-shiseido-powder-brush_compact.jpg" alt="co phan phu shiseido powder brush">    
						</a>
						
					</div>
					<h3 class="h6 product-title">
						<a href="/collections/shiseido/products/co-phan-phu-shiseido-powder-brush">Cọ phấn phủ Shiseido Powder Brush</a>
					</h3>
				
					<p class="product-price">
						
						
						
						1,760,000₫
						
						
						
						
						
					</p>
					<!--	<ul class="action-button hidden">                
<li class="add-to-cart-form">
<form action="/cart/add" method="post">

<div class="hide clearfix"> 
<select name="id" >





<option selected="selected" value="1007200423">Default Titile - 1,760,000₫</option>



</select>
</div>  

<div class="effect-ajax-cart">

<input type="hidden" name="quantity" value="1" />

<button class="btn btn-1 add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Buy Now"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</button>


</div>
</form>
</li>


</ul>-->
				</div>
			</div>
		</li>
		
		
		
		
		
		<li class="realted-element">
			
			

			
			
			
			
			
			
			
			<div class="grid__item">
				<div class="grid__item_wrapper">
					<div class="grid__image product-image">
						<a href="/collections/shiseido/products/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush" class="grid__image product-image">
							<img src="//hstatic.net/844/1000032844/1/2016/6-18/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush_compact.jpg" alt="co ve chan may va ke mat shiseido eyebrow eyeliner brush">    
						</a>
						
					</div>
					<h3 class="h6 product-title">
						<a href="/collections/shiseido/products/co-ve-chan-may-va-ke-mat-shiseido-eyebrow-eyeliner-brush">Cọ vẽ chân mày và kẻ mắt Shiseido Eyebrow &amp; Eyeliner Brush</a>
					</h3>
				
					<p class="product-price">
						
						
						
						440,000₫
						
						
						
						
						
					</p>
					<!--	<ul class="action-button hidden">                
<li class="add-to-cart-form">
<form action="/cart/add" method="post">

<div class="hide clearfix"> 
<select name="id" >





<option selected="selected" value="1007200426">Default Titile - 440,000₫</option>



</select>
</div>  

<div class="effect-ajax-cart">

<input type="hidden" name="quantity" value="1" />

<button class="btn btn-1 add-to-cart" data-parent=".parent-fly" type="submit" name="add" title="Buy Now"><i class="fa fa-shopping-cart"></i> Cho vào giỏ hàng</button>


</div>
</form>
</li>


</ul>-->
				</div>
			</div>
		</li>
		
		
		
		
		
		
		
	</ul>
</div>


<script>
$(document).ready(function() {
	if ($(window).width() <  992 ){
		setTimeout(function() {
			var owl = $(".owl_related");		
			owl.owlCarousel({
				slideBy: 2,
				loop:true,
				margin:10,
				lazyLoad:true,
				nav: true,
				navigationText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
				responsive:{
					0:{
						items:2,
						nav:true
					},
					400:{
						items:3,
						nav:false
					},
					600:{
						items:4,
						nav:false
					},
					991:{
						items:6,
						nav:false
					},
					1199:{
						items:8,
						nav:true,
						loop:false
					}
				}
			});

			$("#daxem-next").click(function(){
				owl.trigger('owl.next');
			});
			$("#daxem-prev").click(function(){
				owl.trigger('owl.prev');
			});
		}, 0)
	}
});
</script>
                  
						</div>

                                    </div>

                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="col-md-12 last-view-products">
                                        <div class="last-view-products-wrapper">
                                            <h2 class="title_des_prod">
                                                Sản phẩm vừa xem
                                            </h2>
                                            <div class="row product-list">
                                                <div class="content-product-list list-viewed owl-carousel owl-theme owl-loaded" style="padding: 15px 0px 0px 0px;">







                                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 743.75px;"><div class="owl-item active" style="width: 138.75px; margin-right: 10px;"><div class="item col-md-12">
                                                                    <div class="box-sh col-md-12">
                                                                        <div class="product">
                                                                            <div class="product-img">
                                                                                <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine" title="">
                                                                                    <img alt="Viên uống bổ sung cho trẻ em giúp ăn ngon Chewies Multivitamin With Lysine" src="/static/image/website/chewies-lysine-box-60-s_compact.jpg"> 
                                                                                </a>
                                                                            </div><!-- End .product-img -->
                                                                            <h3 class="h6 product-title">
                                                                                <a href="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine">Viên uống bổ sung cho trẻ em giúp ăn ngon Chewies Multivitamin With Lysine</a>
                                                                            </h3>
                                                                    <!--	<span class="point">Điểm tích luỹ:  </span> -->
                                                                        </div><!-- End .product -->
                                                                    </div><!-- End .col-md-4 -->
                                                                </div></div><div class="owl-item active" style="width: 138.75px; margin-right: 10px;"><div class="item col-md-12">
                                                                    <div class="box-sh col-md-12">
                                                                        <div class="product">
                                                                            <div class="product-img">
                                                                                <a href="http://shop.khoedep.vn/products/mascara-lam-tao-do-day-mi-infinite-volume-setting-mascara-9g" title="">
                                                                                    <img alt="Mascara làm tạo độ dày mi Infinite Volume Setting Mascara 9g" src="/static/image/website/infinite-volume-setting-mascara-01_compact.png"> 
                                                                                </a>
                                                                            </div><!-- End .product-img -->
                                                                            <h3 class="h6 product-title">
                                                                                <a href="http://shop.khoedep.vn/products/mascara-lam-tao-do-day-mi-infinite-volume-setting-mascara-9g">Mascara làm tạo độ dày mi Infinite Volume Setting Mascara 9g</a>
                                                                            </h3>
                                                                    <!--	<span class="point">Điểm tích luỹ:  </span> -->
                                                                        </div><!-- End .product -->
                                                                    </div><!-- End .col-md-4 -->
                                                                </div></div><div class="owl-item active" style="width: 138.75px; margin-right: 10px;"><div class="item col-md-12">
                                                                    <div class="box-sh col-md-12">
                                                                        <div class="product">
                                                                            <div class="product-img">
                                                                                <a href="http://shop.khoedep.vn/products/phan-nen-min-da-true-match-dang-nen-true-match-micro-perfecting-powder" title="">
                                                                                    <img alt="Phấn nền mịn da True Match dạng nén True Match Micro-Perfecting Powder" src="/static/image/website/tm-two-way-cake-1_be9a38eb-e3c1-4d4d-60db-c99a8b44b4fd_compact.png"> 
                                                                                </a>
                                                                            </div><!-- End .product-img -->
                                                                            <h3 class="h6 product-title">
                                                                                <a href="http://shop.khoedep.vn/products/phan-nen-min-da-true-match-dang-nen-true-match-micro-perfecting-powder">Phấn nền mịn da True Match dạng nén True Match Micro-Perfecting Powder</a>
                                                                            </h3>
                                                                    <!--	<span class="point">Điểm tích luỹ:  </span> -->
                                                                        </div><!-- End .product -->
                                                                    </div><!-- End .col-md-4 -->
                                                                </div></div><div class="owl-item active" style="width: 138.75px; margin-right: 10px;"><div class="item col-md-12">
                                                                    <div class="box-sh col-md-12">
                                                                        <div class="product">
                                                                            <div class="product-img">
                                                                                <a href="http://shop.khoedep.vn/products/but-ke-mat-dang-gel-super-liner-gel-matic" title="">
                                                                                    <img alt="Bút kẻ mắt dạng Gel Super Liner Gel Matic" src="/static/image/website/but-ke-mat-dang-gel-super-liner-gel-matic_620ef383-b3b5-4d24-52e8-dfde6be6f2e1_compact.png"> 
                                                                                </a>
                                                                            </div><!-- End .product-img -->
                                                                            <h3 class="h6 product-title">
                                                                                <a href="http://shop.khoedep.vn/products/but-ke-mat-dang-gel-super-liner-gel-matic">Bút kẻ mắt dạng Gel Super Liner Gel Matic</a>
                                                                            </h3>
                                                                    <!--	<span class="point">Điểm tích luỹ:  </span> -->
                                                                        </div><!-- End .product -->
                                                                    </div><!-- End .col-md-4 -->
                                                                </div></div><div class="owl-item active" style="width: 138.75px; margin-right: 10px;"><div class="item col-md-12">
                                                                    <div class="box-sh col-md-12">
                                                                        <div class="product">
                                                                            <div class="product-img">
                                                                                <a href="http://shop.khoedep.vn/products/hop-qua-don-mat-ong-hoa-cafe-tracybee" title="">
                                                                                    <img alt="Hộp quà đơn mật ong hoa cafe Tracybee" src="/static/image/website/hop-qua-don-mat-ong-hoa-cafe-tracybee_compact.jpg"> 
                                                                                </a>
                                                                            </div><!-- End .product-img -->
                                                                            <h3 class="h6 product-title">
                                                                                <a href="http://shop.khoedep.vn/products/hop-qua-don-mat-ong-hoa-cafe-tracybee">Hộp quà đơn mật ong hoa cafe Tracybee</a>
                                                                            </h3>
                                                                    <!--	<span class="point">Điểm tích luỹ:  </span> -->
                                                                        </div><!-- End .product -->
                                                                    </div><!-- End .col-md-4 -->
                                                                </div></div></div></div><div class="owl-controls clickable"><div class="owl-nav owl-buttons"><div class="owl-prev" style="">prev</div><div class="owl-next" style="">next</div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
                                            </div>
                                        </div>
                                    </div>

                                    <script id="product-loop-tpl" type="text/template">

                                        {{#products}}
                                        <div class="item col-md-12">
                                        <div class="box-sh col-md-12">
                                        <div class="product">
                                        <div class="product-img">
                                        <a href="{{ url }}" title="">
                                        {{#image}}
                                        <img alt="{{ title }}" src="{{ image.src }}"> 
                                        {{/image}}
                                        {{^image}}
                                        <img alt="{{ title }}" src="//hstatic.net/0/0/global/design/theme-default/no-image.png">
                                        {{/image}}	
                                        </a>
                                        </div><!-- End .product-img -->
                                        <h3 class="h6 product-title">
                                        <a href="{{ url }}">{{ title }}</a>
                                        </h3>
                                        <!--	<span class="point">Điểm tích luỹ:  {{metafields.hrvloyalty.point_apply}}</span> -->
                                        </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        </div>
                                        {{/products}}

                                    </script>

                                    <script>
                                        (function loadProducts() {
                                            var products = lastViewProducts.all(0, 10);

                                            if (!products.length) {
                                                return;
                                            }

                                            var source = jQuery('#product-loop-tpl').html();
                                            var template = Hogan.compile(source);

                                            products.map(function (product) {
                                                var first_variant = product.variants[0];
                                                var on_sale = first_variant.compare_at_price > first_variant.price;


                                                product.on_sale = on_sale;
                                                product.price = Haravan.formatMoney(first_variant.price + '00', '{{amount}}₫');
                                                product.compare_at_price = Haravan.formatMoney(first_variant.compare_at_price + '00', '{{amount}}₫');

                                                if (product.image) {
                                                    product.image.src = Haravan.resizeImage(product.image.src, 'compact');
                                                }

                                                if (on_sale) {
                                                    product.sale_percent = Math.round(((first_variant.compare_at_price - first_variant.price) / first_variant.compare_at_price) * 100);
                                                }

                                                product.url = '/products/' + product.handle;

                                                return product;
                                            });

                                            var html = template.render({products: products});

                                            jQuery('.last-view-products .list-viewed').html(html);
                                            jQuery('.last-view-products').removeClass('hidden');

                                        }());

                                        $(document).ready(function () {
                                            setTimeout(function () {
                                                var owl = $(".list-viewed");
                                                owl.owlCarousel({
                                                    slideBy: 8,
                                                    loop: true,
                                                    margin: 10,
                                                    lazyLoad: true,
                                                    nav: true,
                                                    navigationText: ['<i class="icon-angle-left"></i>', '<i class="icon-angle-right"></i>'],
                                                    responsive: {
                                                        0: {
                                                            items: 2,
                                                            nav: true
                                                        },
                                                        600: {
                                                            items: 4,
                                                            nav: true
                                                        },
                                                        1000: {
                                                            items: 8,
                                                            nav: true,
                                                            loop: true
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
                                        });
                                    </script>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="contact-kd" class="loginLightbox" style="display:none;">
                    <?php
                    include $APPLICATION_PATH . '/view/loginLightbox.php';
                    ?>
                </div>
                <script src="/static/js/option_selection.js" type="text/javascript"></script>
                <style>
                    .sticky_cart{
                        position: fixed;
                        bottom: 0;
                        z-index: 999;
                        -webkit-transition: all 0.5s ease;
                        -moz-transition: all 0.5s ease;
                        -o-transition: all 0.5s ease;
                        -ms-transition: all 0.5s ease;
                        animation-duration: 1.5s;
                        animation-name: fadeIn;
                    }
                    @media screen and (max-width: 480px){
                        .sticky_cart{
                            width: 100%;
                            left: 0;
                        }
                    }
                </style>
                <?php
                include $APPLICATION_PATH . '/view/product-script.php';
                ?>
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


        <div id="scroll-to-top" title="Scroll to Top" style="opacity: 0.175276;">
            <i class="fa fa-caret-up"></i>
        </div>


        <div class="modal fade kd-popup" id="myModalEmbed" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="overlay"></div>		
            <div class="content">
                <div class="modal-header">
                    <button type="button" class="close close-window" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title modal-box-title" id="myModalLabel">Mã nhúng</h4>
                </div>
                <div class="modal-body">
                    <p>Bạn có thể chia sẻ cho bạn bè bằng cách copy đoạn mã dưới và dán trong trang blog, website riêng.</p>
                    <div class="form-group">
                        <textarea class="form-control border-modal-body" rows="5" id="modal_embed">&lt;iframe src="http://shop.khoedep.vn/products/vien-uong-bo-sung-cho-tre-em-giup-an-ngon-chewies-multivitamin-with-lysine?view=iframe" width="280" height="470" frameborder="0"&gt;&lt;/iframe&gt;</textarea>
                    </div>
                </div>
                <div class="modal-footer border-box-footer">
                    <button type="button" class="btn btn-default close-window " data-dismiss="modal">Close</button>
                    <button type="button" id="copy-embed-btn" data-clipboard-target="#modal_embed" class="btn btn-primary btn-modal btn-copyclip">Copy mã nhúng</button>
                </div>
            </div>
        </div>
        <script>
                                        new Clipboard('.btn-copyclip');
        </script>
        <style>
            .kd-popup {
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -ms-flex-align: center;
                -webkit-align-items: center;
                -webkit-box-align: center;
                align-items: center;
                position: fixed;
                z-index: 9999;
                top: 0;
                height: 0;
                width: 0;
                left: 0;
                right: 0;
                bottom: 0;
                text-align: center;
                overflow: hidden;
                visibility: hidden;
                opacity: 0;
                -webkit-transition: all 300ms ease-in-out;
                -moz-transition: all 300ms ease-in-out;
                -ms-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
            }
            .kd-popup.active {
                visibility: visible;
                opacity: 1;
                top: -100px;
                height: auto;
                width: auto;
            }
            .kd-popup .overlay {
                background-color: rgba(0, 0, 0, 0.3);
                color: rgba(0, 0, 0, 0.4);
                position: fixed;
                top: 0 !important;
                left: 0;
                right: 0;
                bottom: 0;
                margin: auto;
                width: 0;
                height: 0;
            }
            .kd-popup.active .overlay {
                width: 100%;
                height: 100%;
            }
            .kd-popup .content{
                max-width: 500px;
                padding: 10px 20px;
                margin: 0 auto;
                text-align: left;
                position: relative;
                background: #fff;
                min-width: 380px;
                -webkit-transition: all 300ms ease-in-out;
                -moz-transition: all 300ms ease-in-out;
                -ms-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
            }
            button.close.close-window {
                float: right;
            }
            h4#myModalLabel {
                color: #00a651;
                border-bottom: 1px solid;
            }
            textarea#modal_embed {
                width: 100%;
                border-color: #00a651;
            }
            @media screen and (max-width: 480px){
                .kd-popup .content{
                    min-width: 300px;
                    max-width: 310px !important;
                }
                .kd-popup.active {
                    top: -50px;
                }
            }
        </style> 





        <div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
            <?php
            include $APPLICATION_PATH . '/view/quick-shop-modal.php';
            ?>
        </div>


        <script>
            jQuery(function () {
                jQuery('.swatch :radio').change(function () {
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

        <script>
            $(document).ready(function () {
                var w = $('body').innerWidth();
                if (w < 768) {
                    var $header = $('.site-header'),
                            off_Top = ($('#PageContainer').length > 0) ? $('#PageContainer').offset().top : 10,
                            menuH = $header.outerHeight(),
                            latestScroll = 0;
                    if ($(window).scrollTop() > 2) {
                        $header.removeClass('affix-top').addClass('affix');
                    }
                    $(window).scroll(function () {
                        var current = $(this).scrollTop();
                        if (current > 2) {
                            $header.removeClass('affix-top').addClass('affix');
                        } else {
                            $header.removeClass('affix').addClass('affix-top');
                        }

                        if (current > latestScroll && current > menuH + off_Top) {
                            if (!$header.hasClass('menu-hidden')) {
                                $header.addClass('menu-hidden');
                            }
                        } else {
                            if ($header.hasClass('menu-hidden')) {
                                $header.removeClass('menu-hidden');
                            }
                        }
                        latestScroll = current;
                    })
                }
            })
        </script>



        <script>
            localStorage.search = '';
        </script>

        <script>
            if ($(window).width() < 768) {
                $('.collection-name .catelogry-xs').click(function (e) {
                    //e.preventDefault();
                    //$(this).parent().next().find('ul.bh-tags').toggleClass('show-xs');
                    var check = $(this).parent().next().find('ul.bh-tags').hasClass('show-xs');
                    if (check) {
                        $(this).parent().next().find('ul.bh-tags').removeClass('show-xs');
                    } else {
                        $(this).parent().next().find('ul.bh-tags').addClass('show-xs');
                    }
                })
            }
        </script>


    </body></html>