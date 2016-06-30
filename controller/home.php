<?php

foreach ($list_category as $category) {
    if (!$category["showinhome"]) {
        continue;
    }
    $query = "select *from product,subcategory "
            . "where subcategory.url=product.subcategory "
            . "and subcategory.category='{$category['url']}' limit $limit_home_category_product";
    $query_result_categoryproduct = mysqli_query($db, $query);
    $map_home_category_product[$category["url"]][] = get_list_product_from_query_result($query_result_categoryproduct);
}
//var_dump($map_home_category_product);