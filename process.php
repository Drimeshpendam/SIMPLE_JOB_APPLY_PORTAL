<?php
//process.php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{//Check it is coming from a form
	
	//set PHP variables like this so we can use them anywhere in code below
		
	$name = $_POST["name"];
	$numbe = $_POST["numbe"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$dob = $_POST["dob"];
	$gender = $_POST["gender"];
	$sname = $_POST["sname"];
	$snumber = $_POST["snumber"];
	$sPercentage = $_POST["sPercentage"];
	$SSC  = $_POST["SSC"];
	$hname = $_POST["hname"];
	$hnumber = $_POST["hnumber"];
	$hPercentage = $_POST["hPercentage"];
	$HSC = $_POST["HSC"];
	$upname = $_POST["upname"];
	$upnumber = $_POST["upnumber"];
	$upPercentage = $_POST["upPercentage"];
	$Degree = $_POST["Degree"];
	$Image = $_POST["Image"];
	$Sign = $_POST["Sign"];
	$Resume = $_POST["Resume"];
	
	//print output text
	print "Hello " . $name . "!, we have received your message and email ". $email;
	print "We will contact you very soon!";
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
	$dob = filter_var($_POST["dob"],FILTER_SANITIZE_STRING);
	$gender = filter_var($_POST["gender"],FILTER_SANITIZE_STRING);
	$sname = filter_var($_POST["sname"],FILTER_SANITIZE_STRING);
	$snumber = filter_var($_POST["snumber"],FILTER_SANITIZE_STRING);
	$sPercentage = filter_var($_POST["sPercentage"],FILTER_SANITIZE_STRING);
	$SSC  = filter_var($_POST["SSC"],FILTER_SANITIZE_STRING);
	$hname = filter_var($_POST["hname"],FILTER_SANITIZE_STRING);
	$hnumber = filter_var($_POST["hnumber"],FILTER_SANITIZE_STRING);
	$hPercentage = filter_var($_POST["hPercentage"],FILTER_SANITIZE_STRING);
	$HSC = filter_var($_POST["HSC"],FILTER_SANITIZE_STRING);
	$upname = filter_var($_POST["upname"],FILTER_SANITIZE_STRING);
	$upnumber = filter_var($_POST["upnumber"],FILTER_SANITIZE_STRING);
	$upPercentage = filter_var($_POST["upPercentage"],FILTER_SANITIZE_STRING);
	$Degree = filter_var($_POST["Degree"],FILTER_SANITIZE_STRING);
	$Image = filter_var($_POST["Image"],FILTER_SANITIZE_STRING);
	$Sign = filter_var($_POST["Sign"],FILTER_SANITIZE_STRING);
	$Resume = filter_var($_POST["Resume"],FILTER_SANITIZE_STRING); 
    





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
	}
	if (empty($dob)){
		die("Please enter your Date od Birth");
	}
	if (empty($gender)){
		die("Please enter your gender");
	}
	if (empty($sname)){
		die("Please enter your name");
	}
	if (empty($snumber)){
		die("Please enter your Marks");
	}
	if (empty($sPercentage)){
		die("Please enter your Percentage");
	}
	if (empty($SSC)){
		die("Please Upload your SSC Marksheet");
	}
	if (empty($hname)){
		die("Please enter your name");
	}
	if (empty($hnumber)){
		die("Please enter your Marks");
	}
	if (empty($hPercentage)){
		die("Please enter your Percentage");
	}
	if (empty($HSC)){
		die("Please Upload your HSC Marksheet");
	}
	if (empty($upname)){
		die("Please enter your name");
	}
	if (empty($upnumber)){
		die("Please enter your Marks");
	}
	if (empty($upPercentage)){
		die("Please enter your Percentage");
	}
	if (empty($Degree)){
		die("Please Upload your Degree Marksheet");
	}
	if (empty($Image)){
		die("Please Upload your your Image");
	}
	if (empty($Sign)){
		die("Please Upload your your Sign");
	}
	if (empty($Resume)){
		die("Please Upload your your Resume");
	}
	
	

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO `form`(`name`, `numbe`, `email`, `address`, `dob`, `gender`, `sname`, `snumber`, `sPercentage`, `SSC`, `hname`, `hnumber`, `hPercentage`, `HSC`, `upname`, `upnumber`, `upPercentage`, `Degree`, `Image`, `Sign`, `Resume`, `id`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,0)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('sssssssssssssssssssss', $name,$numbe,$email,$address,$dob,$gender,$sname,$snumber,$sPercentage,$SSC,$hname,$hnumber,$hPercentage,$HSC,$upname,$upnumber,$upPercentage,$Degree,$Image,$Sign,$Resume); //bind values and execute insert query
	
	if($statement->execute()){
		echo '<script>alert("Your Form Has Been Submitted . Updates Will be Forwarded To Your Email")</script>';
		header('location:confirm.php');
	}else{
		print $mysqli->error; //show mysql error if any
	}
}
?>
