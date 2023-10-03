<?php include "php/connect2.php";
 
$targetDir = "img/"; 
if(isset($_POST["submit"])){ 
    $txtName = $_POST["name"];
    $txtEmail = $_POST["email"];
    $txtAddress = $_POST["address"];
    $txtPhone = $_POST["moblie"];
    $txtUsername = $_POST["username"];
    $txtpassword = $_POST["password"];
    $insert = "INSERT INTO `member` (`username`, `password`, `name`, `address`, `mobile`,`email`) VALUES ('$txtUsername', '$txtpassword', '$txtName', '$txtAddress', '$txtPhone', '$txtEmail')";
    $rs = mysqli_query($con,$insert);
    $insertedId = mysqli_insert_id($con);
    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $editfilename = $insertedId . '.jpg';
        $targetFilePath = $targetDir . $editfilename;  
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                if($rs){ 
                    header("location:no8.php");
                }else{ 
                    echo "File upload failed, please try again."; 
                }  
            }else{ 
                echo "Sorry, there was an error uploading your file."; 
            } 
    }else{ 
        echo 'Please select a file to upload.'; 
    } 
}

?>  