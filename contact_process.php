<?php
$subject = "Contact Details";
$message = "
<html>
<head>
<title>Contact Details</title>
</head>
<body>
<p>Contact Details</p>
<table style='text-align:center' cellspacing='5' cellpadding='5'>
<tr>
<th style='text-align: right; font-weight:bold;'>General</th>
<th style='text-align: left; font-weight:bold; padding-left:60px'>Details</th>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>First Name</td>
<td style='text-align: left; padding-left:60px'>".$_POST['f_name']."</td>
</tr><tr>
<td style='text-align: right; font-weight:bold;'>Last Name</td>
<td style='text-align: left; padding-left:60px'>".$_POST['l_name']."</td>
</tr><tr>
<td style='text-align: right; font-weight:bold;'>Email Address</td>
<td style='text-align: left; padding-left:60px'>".$_POST['email']."</td>
</tr><tr>
<td style='text-align: right; font-weight:bold;'>Phone</td>
<td style='text-align: left; padding-left:60px'>".$_POST['phone']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Address</td>
<td style='text-align: left; padding-left:60px'>".$_POST['address']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>City</td>
<td style='text-align: left; padding-left:60px'>".$_POST['city']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Address</td>
<td style='text-align: left; padding-left:60px'>".$_POST['address']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Province</td>
<td style='text-align: left; padding-left:60px'>".$_POST['province']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Postal Code</td>
<td style='text-align: left; padding-left:60px'>".$_POST['postal_code']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Reason</td>
<td style='text-align: left; padding-left:60px'>".$_POST['reason']."</td>
</tr>
<tr>
<td style='text-align: right; font-weight:bold;'>Comment</td>
<td style='text-align: left; padding-left:60px'>".$_POST['comments']."</td>
</tr>

</table>
</body>
</html>
";


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: <".$_POST['email'].">" . "\r\n";

mail("info@lisbonchicken.ca",$subject,$message,$headers);
?>

<script>
    document.location="index.php?success=true";
</script>