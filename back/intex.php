<?php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/php/purchase.php':
        // POSTリクエストの処理
        include './php/purchase.php';
        break;
    default:
        // その他のリクエストに対する処理
        break;
    case '/front/page-product.html':
        include './front/page-product.html'
        break;
    case '/front/page-purchase.html':
        include './front/page-purchase.html'
        break;
}
