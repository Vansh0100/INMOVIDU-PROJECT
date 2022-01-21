<?php
$host="localhost";
$username="root";
$password="";
$dbname="job_portal";
$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo"";

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];

    $sql="INSERT INTO `registration` (`username`,`email`,`password`,`gender`,`phone`) VALUES ('$fname','$email','$pass','$gender','$phone')";
    if(mysqli_query($conn,$sql)){
        echo '<script>alert("Congratulations! Your account has been created successfully.Please Login")</script>';
        // header("location:login.php");
        echo'<a href="login.php">Click here to login...</a>';
    }
    else{
        echo 'Connection Failed'.$sql->connect_error($conn);
    }
}
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM registration WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    }
    else{
        echo'<script>alert("Invalid Email or Password")</script>';

        echo'<a href="login.php">Click here to login again...</a>';
    }
}
if(isset($_POST['Add'])){
    $company=$_POST['cname'];
    $position=$_POST['position'];
    $descp=$_POST['descp'];
    $skill=$_POST['skill'];
    $location=$_POST['location'];
    $ctc=$_POST['ctc'];
    
    $sql="INSERT INTO `company` (`Company`,`Position`,`Descp`,`Skills`,`Location`,`CTC`) VALUES ('$company','$position','$descp','$skill','$location','$ctc') ";

    if(mysqli_query($conn,$sql)){
        echo "New Job Posted!";
        header("location:index.php");
    }
    else{
        echo "Connection Failed $sql.".connect_error($conn);
    }
}
if(isset($_POST['insert'])){
    $candidate=$_POST['aname'];
    $position=$_POST['apply'];
    $qual=$_POST['qual'];
    $age=$_POST['age'];
    $pass=$_POST['pass'];
    $sql="INSERT INTO `candidate` (`applicant`,`position`,`qual`,`age`,`pass`) VALUES ('$candidate','$position','$qual','$age','$pass') ";
    // var_dump($sql);
    if(mysqli_query($conn,$sql)){
        echo "Applied For Job";
        header("location:career.php");
    }
    else{
        echo "Connection Failed $sql.".connect_error($conn);
    }
}
mysqli_close($conn);
?>