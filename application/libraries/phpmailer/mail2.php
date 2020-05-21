<?php

//引入文件
require_once("class.phpmailer.php");

//宣告一個PHPMailer物件
$mail = new PHPMailer();

//設定使用SMTP發送
$mail->IsSMTP();

//Gmail的SMTP主機需要使用SSL連線
$mail->SMTPSecure = "ssl";

//指定Gamil的SMTP的服務器位址 
$mail->Host = "smtp.gmail.com";

//設定Gamil的SMTP主機的POST
$mail->Port = 465;

//設定為安全驗證方式
$mail->SMTPAuth = true;

//GMAIL的SMTP的帳號
$mail->Username = "bau720123";
//GMAIL的SMTP的密碼
$mail->Password = "720123";

//寄件人Email
$mail->From = "bau720123@gmail.com";
//寄件人名稱
$mail->FromName = "WEB A+ 網頁設計工作室";

//設定收件人的另一種格式("Email","收件人名稱")
$mail->AddAddress("bau720123@gmail.com","小包");
//設定密件副本
$mail->AddBCC("coza228@gmail.com","Lisa");

//回信Email及名稱
$mail->AddReplyTo("bau720123@gmail.com", "WEB A+ 網頁設計工作室");

//設定GMAIL信件字元編碼
$mail->CharSet="utf-8";

//設定信件編碼，大部分郵件工具都支援此編碼方式
$mail->Encoding = "base64";

//設置郵件格式為HTML
$mail->IsHTML(true);

//每50自斷行
$mail->WordWrap = 50;

//傳送附檔
//$mail->AddAttachment("download.gif");
//傳送附檔的另一種格式，可替附檔重新命名
//$mail->AddAttachment("download.gif", "newname.gif");

//郵件標題
$mail->Subject="WEB A+ 網頁設計工作室，線上估價請求協助";

//郵件內容
$mail->Body =
"
<html>
<head>
</head>
<body>
親愛的管理者您好，網站在 ".date("Y-m-d H:i:s")." 時多了一筆估價需求，請盡速處理。
</body>
</html>
"
;

//附加內容
$mail->AltBody = '這是附加的信件內容';

//寄送郵件
if(!$mail->Send())
{
echo "郵件無法順利寄出!";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}
?>
