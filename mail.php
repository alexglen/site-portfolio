


<meta charset="utf-8"> 
<?php
error_reporting( E_ERROR );   
	
if (isset($_POST['name']))			{$name1			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['email']))		{$email1		= $_POST['email'];		if ($email1 == '')	{unset($email);}}
if (isset($_POST['topic']))			{$text			= $_POST['topic'];		if ($text == '')	{unset($topic);}}
if (isset($_POST['message']))			{$sab			= $_POST['message'];		if ($message == '')		{unset($message);}}

if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($topic) ) {
$topic=stripslashes($topic);
$topic=htmlspecialchars($topic);
}

$address="alex_smoleev@gmail.com";

$note_text="���� : $urok \r\n��� : $name \r\n Email : $email \r\n �������������� ���������� : $topic";

if (isset($name)  &&  isset ($message) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 

echo "<p style='color:#009900;'>���������(��) <b>$name1</b> ���� ������ ����������� �������. <br> �������. <br>��� ����� ������� �� ����� <b> $email</b>.</p>";
}

?>