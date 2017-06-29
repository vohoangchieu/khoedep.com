  <div class="sdcollections-title sb-title">
                            <i class="fa fa-list"></i>
                            <span>Danh mục sản phẩm</span>
                        </div>    
                        <div class="sdcollections-content">
                            <ul class="sdcollections-list">
                                <?php
                                foreach ($map_category as $keycategory => $list_subcategory1) {
                                    $category = $list_category[$keycategory];
//                                    var_dump($category);
                                    ?>



                                    <li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
                                        <a href="<?php echo $category["map_url"] ?>" class="site-nav__link">
                                            <div class="element-main">

                                                <div class="collection-icon icons-1">

                                                </div>

                                                <div class="collection-area have-icons">
                                                    <div class="collection-name">
                                                        <?php echo $category["name"] ?> 
                                                    </div>
                                                </div>

                                            </div>
                                            <span class="icon icon-arrow-right" aria-hidden="true"></span>
                                        </a>
                                        <ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">

                                            <li class="nav-links nav-links01 grid__item large--one-half">

                                                <ul>
                                                    <li class="list-title">Nổi bật</li>
                                                    <?php
                                                    
                                                    foreach ($list_subcategory1 as $subcategory) {
                                                        ?>
                                                        <li class="list-unstyled nav-sub-mega">
                                                            <i class="fa fa-angle-right fa-1"> </i> <a href="<?php echo $subcategory["map_url"]?>"><?php echo $subcategory["name"]?></a>
                                                        </li>

        <?php
    }
    ?>

                                                </ul>
                                            </li>

                                            <!--                                                        <li class="grid__item large--one-half">
                                                                                                        <ul>
                                                                                                            <li class="list-title">Mới nhất</li>
                                                                                                            <li class="list-product">
                                            
                                                                                                                <div class="list-product-image"><a href="http://shop.khoedep.vn/products/sua-ong-chua-63-1-super-royal-jelly">
                                                                                                                        <img src="/static/image/website/supreme-royal-jelly-63-1_compact.jpg" alt=""></a></div>
                                                                                                                <div class="list-product-name">Sữa ong chúa 63.1 Super Royal Jelly</div>
                                                                                                                <div class="list-product-link"><a href="http://shop.khoedep.vn/products/sua-ong-chua-63-1-super-royal-jelly">Xem chi tiết</a></div>
                                            
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>-->
                                        </ul>
                                    </li>
    <?php
}
?>

<!--                                <li class="sdc-element">
                                    <a href="http://shop.khoedep.vn/collections/phu-kien">
                                        <div class="element-main">

                                            <div class="collection-icon icons-12">

                                            </div>

                                            <div class="collection-area have-icons">
                                                <div class="collection-name">
                                                    Phụ kiện 
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </li>-->


                            </ul>
                        </div>