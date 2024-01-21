<?php
function getCustomerEmailContent($data) {
    $itemsList = '';
    foreach ($data['items'] as $item) {
        $itemsList .= $item['name'] . ' - 数量: ' . $item['quantity'] . ' - 価格: ' . $item['price'] . "\n";
    }

    return "お名前: {$data['name']}\n"
         . "メールアドレス: {$data['email']}\n"
         . "住所: {$data['address']}\n"
         . "購入商品:\n$itemsList\n"
         . "振込先情報:\n"
         . "[銀行名]\n"
         . "[支店名]\n"
         . "[口座種類]\n"
         . "[口座番号]\n"
         . "[口座名義]\n";
}
