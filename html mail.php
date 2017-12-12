<?php
$to = "surabhiojha12@gmail.com , asimnath00@gmail.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email test</title>

               
            <style>
                #email-wrap {
                background: #151515;
                color: #FFF;
                }
            </style>
</head>
<body>
<p>This email is sample HTML email!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>Surabhi</td>
<td>Ojha</td>
</tr>
<tr>
<td>Asim</td>
<td>Nath</td>
</tr>
</table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

$headers .= 'From: <surabhiojha12@gmail.com.com>' . "\r\n";

$mail_sent = @mail($to,$subject,$message,$headers);
echo $mail_sent ? "Mail sent" : "Mail failed";
?>