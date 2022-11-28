<?php
    session_start();
    error_reporting(0);
    //update
    if(isset($_FILES['fileToUpload'])){
        $errors= array();
        $file_name = $_FILES['fileToUpload']['name'];
        $file_size = $_FILES['fileToUpload']['size'];
        $file_tmp = $_FILES['fileToUpload']['tmp_name'];
        $file_type = $_FILES['fileToUpload']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['fileToUpload']['name'])));
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 20097152) {
           $errors[]='File size must be excately 20 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"uploads/".$file_name);
           include "config.php";
            $objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
            $strSQL = "UPDATE ggj SET ggj_user ='".$_POST["ggj_user"]."',confirm='1',transfer='".$file_name."' WHERE id='".$_SESSION["id"]."'";
            $result = mysqli_query($objCon, $strSQL);
            header( "location: profile.php" );
            $objCon->close();
        }else{
           print_r($errors);
        }
     }
    
?>