<?php

foreach ($list_category as $category) {
    if (!$category["showinhome"]) {
        continue;
    }
    $query = "select DISTINCT  p.id as id,p.url as url,p.name as name,p.description as description,"
            . " p.price as price, p.subcategory as subcategory, sc.category as category "
            . " from product p,subcategory sc "
            . " where sc.url=p.subcategory "
            . " and sc.category='{$category['url']}' limit $limit_home_category_product";
    $query_result_categoryproduct = mysqli_query($db, $query);
    if(!$query_result_categoryproduct){
        echo mysqli_error($db);
        exit();
    }
    $map_home_category_product[$category["url"]] = get_list_product_from_query_result($query_result_categoryproduct);
}
//var_dump($map_home_category_product);