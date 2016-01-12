<?
$name = $_POST['name']
$email = $_POST['email']
$message = $_POST['message']

$email_message = "

Name: ".$name."
Email: ".$email."
Message: ".$message."	

";
mail ("mikeypawell@gmail.com", "HEY CHECK ME OUT", $email_message);

header("Location: email_success.php")
?>