<?php
    //Login
    session_start();
    header('Access-Control-Allow-Origin: *');  
	include "config.php";
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	$strSQL = "SELECT * FROM ggj 
               WHERE email = '".$_POST["email"]."'
               AND password = '".md5($_POST["password"])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");
    if($objResult["id"])
    {
        session_start();
        $_SESSION["id"] = $objResult["id"];
        $_SESSION["fullname"] = $objResult["fullname"];      
        header( "location: profile.php" );
    }
	mysqli_close($objCon);
?>