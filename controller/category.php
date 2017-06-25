<?php

$category_id = escape_data($array_param[2]);
$query_num_product = "select count(DISTINCT  p.id)"
        . " from product p,subcategory sc "
        . " where sc.url=p.subcategory "
        . " and sc.category='{$category_id}' limit $limit_category_product";
$query_num_product_result = mysqli_query($db, $query_num_product);
$row = mysqli_fetch_array($query_num_product_result);
$num_product = $row[0];
$num_page = (int) ($num_product / $limit_category_product ) + 1;
//var_dump($num_product);
$page = $array_param[4];
//var_dump($page);
if ($page == '' || (int) $page < 1) {
    $page = 1;
}
$page = (int) $page;
if ($page > $num_page) {
    $page = $num_page;
}

$offset = ($page - 1) * $limit_category_product;

if (isset($array_param[3])) {
    $sorttype = $array_param[3];
    switch ($sorttype) {
        case "order-by-name-inc":
            $order = "name";
            break;
        case "order-by-name-desc":
            $order = "name desc";
            break;
        case "order-by-price-inc":
            $order = "price";
            break;
        case "order-by-price-desc":
            $order = "price desc";
            break;
        default :
            $sorttype = "order";
            $order = "p.order desc";
    }
} else {
    $sorttype = "order";
    $order = "p.order desc";
}

$query = "select DISTINCT  p.id as id,p.url as url,p.name as name,p.description as description,"
        . " p.price as price, sc.category as category "
        . " from product p,subcategory sc "
        . " where sc.url=p.subcategory "
        . " and sc.category='{$category_id}'"
        . " order by $order"
        . " limit $offset,$limit_category_product";
//var_dump($query);
$query_result_categoryproduct = mysqli_query($db, $query);
$list_category_product = get_list_product_from_query_result($query_result_categoryproduct);

$query_feature = "select DISTINCT  p.id as id,p.url as url,p.name as name,p.description as description,"
        . " p.price as price, sc.category as category "
        . " from product p,subcategory sc "
        . " where sc.url=p.subcategory "
        . " and sc.category='{$category_id}' order by feature desc limit $limit_category_feature";
//var_dump($query);
$query_result_categoryproduct_feature = mysqli_query($db, $query_feature);
$list_category_product_feature = get_list_product_from_query_result($query_result_categoryproduct_feature);

$category_info = $list_category[$category_id];
$title = $category_info['name'];
?>