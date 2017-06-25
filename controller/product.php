<?php

$product_id = escape_data($array_param[3]);
$query_product_info = "select *from product where url='$product_id' or id='$product_id' limit 1";
$query_product_info_result = mysqli_query($db, $query_product_info);
if (mysqli_num_rows($query_product_info_result) == 0) {
    exit();
}
$product = mysqli_fetch_array($query_product_info_result);
$product["product_name"] = $product["name"];
$product["product_url"] = "/p/" . $product["subcategory"] . "/" . $product['url'];
$product["product_thumb"] = "/static/image/product/" . $product['id'] . ".jpg";
$product["product_image"] = "/static/image/product/" . $product["id"] . ".jpg";
if ($product["price"] > 0) {
    $product['product_price'] = number_format($product['price']) . " VNĐ";
} else {
    $product['product_price'] = "LH $mobile_phone";
}


$subcategory_id = ($product['subcategory']);
$subcategory_info=$list_subcategory[$subcategory_id];
$category_id=$subcategory_info['category'];
$category_info=$list_category[$category_id];
//$title = $category_info['name'] . " - " . $product_info['name'];
////var_dump(isset($category_info));
//$num_product_per_page = 6;
$query_subcategory_product = "select * from product where subcategory='$subcategory_id' limit $limit_subcategory_in_product_page";
$query_subcategory_product_result = mysqli_query($db, $query_subcategory_product);
$list_subcategory_product = get_list_product_from_query_result($query_subcategory_product_result);
?>
