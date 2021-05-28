<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];
$field_subject = $_POST['cf_subject']

$mail_to = 'theo.clement.p@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'De: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'De: '.$field_email."\r\n";
$headers .= 'Réponse à: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html#contact';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to theo.clement.p@gmail.com');
		window.location = 'index.html#contact';
	</script>
<?php
}
?>