@php
    $expiration = 60;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รีเซ็ตรหัสผ่าน</title>
</head>

<body style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; line-height: 1.6;">

    <p style="font-size: 18px;">สวัสดี!</p>
    <p style="font-size: 16px;">คุณได้รับอีเมลนี้เนื่องจากเราได้รับคำขอรีเซ็ตรหัสผ่านสำหรับบัญชีของคุณ</p>
    <p style="font-size: 16px;">คลิกที่ปุ่มด้านล่างเพื่อรีเซ็ตรหัสผ่านของคุณ:</p>
    <a href="{{ $actionUrl }}"
        style="background-color: #4CAF50; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer; border-radius: 8px;">{{ $actionText }}</a>
    <p style="font-size: 16px;">ลิงก์รีเซ็ตรหัสผ่านนี้จะหมดอายุใน {{ $expiration }} นาที</p>
    <p style="font-size: 16px;">หากคุณไม่ได้ร้องขอรีเซ็ตรหัสผ่าน ไม่จำเป็นต้องดำเนินการเพิ่มเติม</p>
    <p style="font-size: 16px;">ขอบคุณ!</p>

</body>

</html>
