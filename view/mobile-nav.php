<ul class="mobile-nav">
    <?php
    foreach ($list_category as $keycategory => $category) {
        ?> 

        <li class="mobile-nav__item" aria-haspopup="true">
            <div class="mobile-nav__has-sublist">
                <a href="<?php echo $category["map_url"] ?>" class="mobile-nav__link"><?php echo $category["name"] ?></a>
                <div class="mobile-nav__toggle">
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-open">
                        <span class="fa fa-angle-right fa-lg" aria-hidden="true"></span>
                        <span class="fallback-text">See More</span>
                    </button>
                    <button type="button" class="icon-fallback-text mobile-nav__toggle-close">
                        <span class="fa fa-angle-right fa-lg fa-rotate-90" aria-hidden="true"></span>
                        <span class="fallback-text">"Close Cart"</span>
                    </button>
                </div>
            </div>
            <ul class="mobile-nav__sublist">
                <?php
                foreach ($list_subcategory as $keysubcategory => $subcategory) {
                    if ($subcategory["category"] != $category["url"]) {
                        continue;
                    }
                    ?> 
                    <li class="mobile-nav__item ">
                        <a href="<?php echo $subcategory["map_url"] ?>" class="mobile-nav__link"><?php echo $subcategory["name"] ?></a>
                    </li>
                    <?php
                }
                ?>


            </ul>
        </li>



        <?php
    }
    ?>






</ul>