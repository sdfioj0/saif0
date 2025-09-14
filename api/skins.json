<?php
// السماح بالوصول من أي مصدر (يمكن استبداله بنطاق محدد للأمان)
header("Access-Control-Allow-Origin: https://wormate.io");
// السماح بأساليب محددة
header("Access-Control-Allow-Methods: GET, OPTIONS");
// السماح برؤوس محددة
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
// تحديد نوع المحتوى
header("Content-Type: application/json; charset=UTF-8");

try {
    $file = 'skins.json';
    // التحقق من وجود الملف
    if (!file_exists($file)) {
        throw new Exception('File not found: ' . $file);
    }
    $json = file_get_contents($file);
    // التحقق من صحة JSON
    if (json_decode($json) === null && json_last_error() !== JSON_ERROR_NONE) {
        throw new Exception('Invalid JSON format');
    }
    echo $json;
} catch (Exception $e) {
    // إعادة رمز حالة مناسب
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
?>
