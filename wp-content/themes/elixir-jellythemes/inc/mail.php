<?php global $jellythemes; ?>
<?php
if(isset($_POST['email'])){ 

$mailTo = $_POST['emailto'];
$subject = "Formulaire de contact";
$body = "
<strong>Nom :</strong> ".$_POST['name']."<br>
<strong>Email :</strong> ".$_POST['email']."<br>
<strong>Sujet :</strong> ".$_POST['subject']."<br><br>
<strong>Message :</strong> ".$_POST['message']."<br>";	
		$headers = "To: Koulchi Zine <".$mailTo.">\r\n";
		$headers .= "From: Formulaire de contact <no-replay@koulchizine.com>\r\n";
		$headers .= "Content-Type: text/html;  charset=UTF-8";
		//envio destinatario
		$mail_success =  mail($mailTo, ($subject), utf8_decode($body), $headers);

} 
?> 