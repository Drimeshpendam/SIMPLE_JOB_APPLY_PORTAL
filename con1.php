<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{//Check it is coming from a form
	
	//set PHP variables like this so we can use them anywhere in code below
		
	$name = $_POST["name"];
	$numbe = $_POST["numbe"];
	$email = $_POST["email"];
	$address = $_POST["address"];

}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  //Check it is comming from a form

	//mysql credentials
	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "demo";
	
 //set PHP variables like this so we can use them anywhere in code below

    $name = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
	$numbe = filter_var($_POST["numbe"],FILTER_SANITIZE_STRING);
	$email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
	$address = filter_var($_POST["address"],FILTER_SANITIZE_STRING);

	if (empty($name)){
		die("Please enter your name");
	}
	if (empty($numbe)){
		die("Please enter your number");
	}
	if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
		die("Please enter valid email address");
	}
	if (empty($address)){
		die("Please enter your address");



	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	$statement = $mysqli->prepare("INSERT INTO `con`(`name`, `numbe`, `email`, `address`) VALUES (?,?,?,?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssss', $name,$numbe,$email,$address); //bind values and execute insert query
	
	if($statement->execute()){
		echo '<script>alert("Your Form Has Been Submitted . Updates Will be Forwarded To Your Email")</script>';
		header('location:confirm.php');
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
?>
