<?php
error_log("◆=== > purchaseへ到達しました");

// include '../conf/db_config.php';
include '../mail/admin_email_template.php';
include '../mail/customer_email_template.php';

// POSTリクエストの内容を取得
$data = json_decode(file_get_contents('php://input'), true);
if (!empty($data)) {

    error_log("◆=== > リクエスト内部に入りました");

    // データベースにデータを記録
    // $stmt = $pdo->prepare("INSERT INTO purchases (name, email, address, items) VALUES (?, ?, ?, ?)");
    // $stmt->execute([
    //     $data['name'],
    //     $data['email'],
    //     $data['address'],
    //     json_encode($data['items']) // カートのアイテムはJSON形式で保存
    // ]);

    // 購入者へのメール内容を生成
    $customerEmailContent = getAdminEmailContent($data);

    // 運営者へのメール内容を生成
    $adminEmailContent = getAdminEmailContent($data);

    

    // 購入者へのメール送信
    mail($data['email'], "ご購入ありがとうございます", $customerEmailContent);

    // 運営者への報告メール送信
    // $adminEmail = "admin@example.com"; // 運営者のメールアドレス
    // mail($adminEmail, "商品購入の報告", $adminEmailContent);
    error_log("◆=== > メールを送信しました");

    error_log(json_encode($data));
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => "データがありません"]);
}
