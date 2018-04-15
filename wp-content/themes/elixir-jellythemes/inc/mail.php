<?php global $jellythemes; ?>
<?php
if(isset($_POST['email'])){ 

$mailTo = $_POST['emailto'];
$subject = "Email de www.saporitaliani.net" ;
$from = "De";
$name = "Nom";
$comment = "Commentaire";
$newMsg = "Nouveau message depuit saporitaliani.net";
 
$body = $newMsg. "<br><br>
		".$from." : ".$_POST['email']."<br>
		".$name." : ".$_POST['name']."<br><br>
		".$comment." : ".$_POST['message']."<br>";

$headers = "To: Solido <".$mailTo.">\r\n";
$headers .= "From: ".$_POST['author']." <".$_POST['email'].">\r\n";
$headers .= "Content-Type: text/html";
//envio destinatario
$mail_success =  mail($mailTo,utf8_decode($subject), utf8_decode($body), $headers);

} 
?> 