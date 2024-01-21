<?php
function getAdminEmailContent($data) {
    $itemsList = '';
    foreach ($data['items'] as $item) {
        $itemsList .= $item['name'] . ' - 数量: ' . $item['quantity'] . ' - 価格: ' . $item['price'] . "\n";
    }

    return "購入者情報:\n"
         . "お名前: {$data['name']}\n"
         . "メールアドレス: {$data['email']}\n"
         . "住所: {$data['address']}\n"
         . "購入商品:\n$itemsList";
}
