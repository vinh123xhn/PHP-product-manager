<?php

require 'src/product_adapter.php';
require 'src/functions.php';

// Trong trường hợp người dùng submit thì tìm kiếm product
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Xử lý việc POST

    if (isset($_POST['search'])) {
        // Tìm kiếm
        $searchString = $_POST['search'];
        $products = searchProduct($searchString);
    } elseif (isset($_POST['delete'])) {
        deleteProduct($_POST['delete']);
    }

} else {
    // Mặc định thì lấy tất cả
    $products = getProduct();
}

include 'template.php';
