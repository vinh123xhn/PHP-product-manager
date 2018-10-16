<?php
/**
 * Created by PhpStorm.
 * User: dungda
 * Date: 9/14/18
 * Time: 3:38 PM
 */
require 'database.php';

global $conn;

$database = new Database();
$conn = $database->connect('root', '123456@Abc', 'classicmodels');


/**
 * @return array
 */
function getProduct() {
    global $conn;

    $sql = "SELECT * FROM products ORDER BY quantityInStock DESC";

    $result = $conn->prepare($sql);
    $result->execute();
    $products = $result->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

/**
 * @return array
 */
function searchProduct($searchString) {
    global $conn;

    $fieldsToSearch = [
        'productCode',
        'productName',
        'productLine',
        'productVendor',
    ];
    $searchQuery = [];
    foreach ($fieldsToSearch as $fieldName) {
        $searchQuery[] = "$fieldName LIKE '%$searchString%'";
    }
    $searchQuery = implode(' OR ', $searchQuery);
    $sql = "SELECT * FROM products WHERE $searchQuery";
    $result = $conn->query($sql);
    $result = $result->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function deleteProduct($productCode) {
    global $conn;
    $sql = "DELETE FROM products WHERE productCode = '$productCode'";
    $result = $conn->prepare($sql);
    $result->execute();
}