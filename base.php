<?php
   $connection = mysqli_connect('localhost','root','Mani@1010','project');
   echo "You have already logged in.";
  

if($_SERVER['REQUEST_METHOD']=='POST'){
      $name = $_POST['name'];
      $id = $_POST['id'];
      $request = " insert into logins(Name,Student_ID) values('$name','$id')";
      mysqli_query($connection,$request);

      header('Location:mainpage.html'); 
      
   }else{
      echo 'something went wrong please try again!';
}



?>
