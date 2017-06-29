<?php

include "./config.php";
include "./vnm-string-util.php";
$uri = explode("?", $_SERVER["REQUEST_URI"]);

$array_param = explode("/", $uri[0]);
for ($index = 0; $index < 5; $index++) {
    $array_param[] = '';
}
//var_dump($array_param);
if ($array_param[1] == ""){
     include "./controller/home.php";
    include "./view/home.php";
}else if ($array_param[1] == "c" && trim($array_param[2]) != "") {
    include "./controller/category.php";
    include "./view/category.php";
} else if ($array_param[1] == "sc" && trim($array_param[2]) != "") {
    include "./controller/subcategory.php";
    include "./view/subcategory.php";
} else if ($array_param[1] == "p" && trim($array_param[2]) != "") {
    include "./controller/product.php";
    include "./view/product.php";

} else if ($array_param[1] == "capnhat" && trim($array_param[2]) != "") {
    include "./controller/update-product.php";
    include "./view/update-product.php";
} else if ($array_param[1] == "themsanpham") {
    include "./controller/add-product.php";
    include "./view/add-product.php";
} else if ($array_param[1] == "quanlycategory") {
    include "./controller/manage-category.php";
    include "./view/manage-category.php";
} else if ($array_param[1] == "ajax") {
    if ($array_param[2] == "am") {
        if ($array_param[3] == "up") {
            include "./controller/ajax/update-product.php";
        } else if ($array_param[3] == "add-product") {
            include "./controller/ajax/add-product.php";
        } else if ($array_param[3] == "delete-product") {
            include "./controller/ajax/delete-product.php";
        } else if ($array_param[3] == "get-list-image.js") {
            include "./controller/ajax/get-list-image.php";
        } else if ($array_param[3] == "update-product-image-handler") {
            include "./controller/ajax/update-product-image-handler.php";
        } else if ($array_param[3] == "add-product-image-handler") {
            include "./controller/ajax/update-product-image-handler.php";
        }
    }
} else if ($array_param[1] == "search") {
    if (isset($_REQUEST["keyword"]) == false || $_REQUEST["keyword"] == "" || escape_data($_REQUEST["keyword"]) == "") {
//        include "./controller/home.php";
//        include "./view/home.php";

        var_dump($_REQUEST["keyword"]);
    } else {
        include "./controller/search.php";
        include "./view/search.php";
    }
} else if ($array_param[1] == $ggmap_link) {
    include "./controller/map.php";
    include "./view/map.php";
} else if ($array_param[1] == "test") {
    include "./test.php";
} else {
    header("HTTP/1.0 404 Not Found");
    exit;
}

?>