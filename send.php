<?php 

mail($to, $subject, $message [,mixed $additional_headers [,string $additional_parameters ]]);

$to ='alexandar@rohov.bg';
$subject='Test message from our system.';
$message='This is a test message from our PHP system...';
$message


$to='alexandar@rohov.bg';
$subject='Birthday Reminder';
$message='
<html>
<head>
<title>Birth day Reminder</title>
</head>
<body>
<p>Here sre the birthday upcoming</p>
<table>
<tr>
<th>Person</th><th>Day</th><th>Month</th><th>Year</th>
</tr>
<tr>
<td>Alex</td><td>10th</td><td>August</td><td>1980</td>
</tr>
<tr>
<td>Sally</td><td>17th</td><td>August</td><td>1980</td>
</tr>
</table>
</body>
</html>';

