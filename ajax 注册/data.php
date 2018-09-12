<?php
	$type = $_GET["type"];
	if($type == "yanzheng")
	{
	/*获取这个注册的名字*/
		$uname = $_GET["uname"];
		/*如果有这个名字的时候*/
		if($uname == "kwooshung" || $uname == "w3cfuns")
		{
			echo "1";
		}
	}
	else if($type == "uinfo")
	{

		$uname = $_GET["uname"];
		$email = $_GET["email"];
		$mobile = $_GET["mobile"];
		/*加密*/
		$pwd = md5($_GET["pwd"]);
		
		echo 
		'
			{
				"uname":"'.$uname.'",
				"email":"'.$email.'",
				"mobile":"'.$mobile.'",
				"pwd":"'.$pwd.'"
			}
		';
	}
?>