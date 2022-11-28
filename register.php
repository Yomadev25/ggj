<?php
    //Create
    session_start();
    header('Access-Control-Allow-Origin: *');  
	include "config.php";
	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
    $strSQL = "SELECT * FROM ggj WHERE email = '".$_POST["email"]."'";
	$objQuery = mysqli_query($objCon,$strSQL);
    $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    if(!$objResult)
    {
            $password = md5($_POST["password"]);
            $InsertstrSQL = "INSERT INTO ggj(fullname,email,password,ggj_user,confirm,register_date)
            VALUES('".$_POST["fullname"]."','".$_POST["email"]."','".$password."','".$_POST["ggj_user"]."','0',NOW());";
            $objQuery = mysqli_query($objCon,$InsertstrSQL);
            header( "location: login.html" );
            exit(0);
    }
	mysqli_close($objCon);
?>