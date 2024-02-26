<?php
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $mobile=$_POST['mobile'];
    $linkedin=$_POST['linkedin'];
    $date=$_POST['date'];
    $gender=$_POST['gen'];
    $branch=$_POST['dept'];
    echo nl2br("Name: ".$name."\n");
    echo nl2br("Mail: ".$mail."\n");
    echo nl2br("Mobile:".$mobile."\n");
    echo nl2br("LinkedIn ID:".$linkedin."\n");

     if (isset($_POST['gen'])) {
      echo nl2br("Gender:".$gender."\n");

      }else{
      echo "Gender not recorded"; 
      }
    if (isset($_POST['dept'])) {
      echo nl2br("Graduation In:".$branch."\n");

      }else{
      echo "Branch not recorded"; 
      }
    echo nl2br("Date Of Birth:".$date."\n");
    

    
    
    
    $file = "register.txt";
    $file_handler = fopen($file, "w");
    fwrite($file_handler, "Name: ".$name."\n");
    fwrite($file_handler, "Mail: ".$mail."\n");
    fwrite($file_handler, "Mobile: ".$mobile."\n");
    fwrite($file_handler, "LinkedIn: ".$linkedin."\n");
    fwrite($file_handler, "Gender:".$gen."\n");
    fwrite($file_handler,"Graduation In:".$branch."\n");
    fwrite($file_handler, "Date-of-Birth: ".$date."\n");
    
    




if(isset($_FILES['image'])){
      
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      $verifyext=true;
      $verifysize=true;
      
      if(in_array($file_ext,$extensions)=== false){
         echo "extension not allowed, please choose a JPEG or PNG file.";
         $verifyext=false;
         return;
      }
      
      if(!($file_size > 2097152)){
         echo 'File size must be less than 2 MB';
         $verifysize=false;
         return;

      }
      
      if($verifyext && $verifysize){
         move_uploaded_file($file_tmp,"uploads".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<br>
<a href="download.php"><button>Download As Text</button></a>
<a href="mailto:s180922@rguktrkv.ac.in?subject=image&body=image&attachment=/home/kumbhamanikanta/Desktop/project/four/formimage/register.txt" target="_blank"><button>Send To Mail</button></a>