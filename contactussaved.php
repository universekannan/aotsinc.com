<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<?php
alert("check");
	require("aots-database.php");
	$str_name = $_POST['name'];
	$str_email = $_POST['email'];
	$str_message = $_POST["message"];
	//$str_current_date = date("Y-m-d H:i:s");
	alert("page");
	echo $str_name;
	$str_query = "INSERT INTO contact (CONTACT_NAME ,EMAIL,MESSAGE) VALUES ('" . $str_name . "'  , '" . $str_email . "' , '" . $str_message . "' )";
	echo $str_query;

	
	 
	 if(mysql_query($str_query))
							{
								echo "Thank You for Contacting Us.<br /> We will get back to you as soon as possible.";
							}
							else
							{
								echo "Error in saving your contact us datails.<br /> Please try after some time.<br>Sorry for the i";
							}
	 
/*if ($row_query = mysql_fetch_array($rset_row_queryijuiiiiii))
	{
$str_role_id=$row_admin_login['USER_ROLE_ID'];
session_start();
$_SESSION['roleid']=$str_role_id;
$_SESSION['username']=$str_username;
		$str_url_to_forward = "main";
		header("HTTP/1.1 301");
		header("Location: {$str_url_to_forward}"); 
	}
	else
	{
		$str_url_to_forward = "error-login.php";
		header("HTTP/1.1 301");
		header("Location: {$str_url_to_forward}"); 
	}
?>*/

?>