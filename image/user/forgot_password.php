<?php $_SESSION=''; ?>
<?php $email=''; ?>
<p style="color:#FF0000; font-size:12px;">
<?php echo isset($_SESSION['msg']) ? $_SESSION['msg'] : "";?>
</p>
<form name="mail" action="" method="post">
Email :<input type="email" name="email" value="" class="form-control" required />
Subject  :<input type="text" name="subject" value="Demo from PHP GURUKUL Programing Blog" class="form-control" readonly />
Message : <textarea name="message" rows="6" class="form-control" readonly>
This is sample text for testing.
From : PHP GURUKUL Programing Blog
</textarea>
<input type="submit" value="Send" name="send"  class="btn-primary" />
</form>
<?php
if(isset($_POST['send']))
{
	$email=$_POST[email];
 $fromAddr='PHP Gurukul Programing Blog <www.phpgurukul.com>'; // the address to show in From field.
 $recipientAddr = $_POST[email];
 $subjectStr = 'PHP Gurukul demo from Website';
$mailBodyText = <<<HHHHHHHHHHHHHH
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Demo From Website</title>
</head>
<body>
<table>
<tr>
<td style="width:150px;"><b>Subject:</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[subject]</td>
</tr>
<tr>
<td><b>Message</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[message]</td>
</tr>
</table>
</body>
</html>
HHHHHHHHHHHHHH;
$headers= <<<TTTTTTTTTTTT
From: $fromAddr
MIME-Version: 1.0
Content-Type: text/html;
TTTTTTTTTTTT;
mail($recipientAddr,$subjectStr,$mailBodyText,$headers);
//echo "($recipientAddr,$subjectStr,$mailBodyText,$headers)";
$_SESSION['msg']="Your Information has been send sucessfully...";
}
?>