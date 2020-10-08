<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $dbconnect = mysqli_connect('localhost', 'root','', 'ashu-resume');
    $sql = mysqli_query($dbconnect, "insert into resume(s_no,name,email,message) values('', '$name', '$email','$message')");
    if($sql){
        echo "data insert";
    }else{
        echo "problem";
    }
}

?>