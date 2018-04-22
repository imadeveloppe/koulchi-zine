<?php
if(isset($_POST['reservation_email'])){
		$mailTo = "reservation@koulchizine.com";
		$subject = "Nouvelle reservation";
		$body = "
<strong>Nom :</strong> ".$_POST['reservation_name']."<br>
<strong>Email :</strong> ".$_POST['reservation_email']."<br>
<strong>Telephone :</strong> ".$_POST['reservation_phone']."<br>
<strong>Date :</strong> ".$_POST['date']."<br>
<strong>Heure :</strong> ".$_POST['time']."<br>
<strong>Nombre de place :</strong> ".$_POST['party'];	
		$headers = "To: Elixir <".$mailTo.">\r\n";
		$headers .= "From: Réservation <no-replay@koulchizine.com>\r\n";
		$headers .= "Content-Type: text/html;  charset=UTF-8";
		//envio destinatario
		$mail_success =  mail($mailTo, ($subject), utf8_decode($body), $headers);		
}
?>  