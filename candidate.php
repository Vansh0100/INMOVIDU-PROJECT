<?php
$host="localhost";
$username="root";
$password="";
$dbname="job_portal";
$conn=mysqli_connect($host,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}

$sql="SELECT `applicant`,`position`,`qual`,`age`,`pass` FROM `candidate`";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JOB PORTAL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    .sidebar {
      margin-top: 20px;
      padding: 0;
      border-radius:20px;
      width: 200px;
      background-color: #000010;
      position: absolute;
      height: 70%;
      overflow: auto;
      box-shadow: -2px 18px 38px 38px rgba(191,62,212,1);
-webkit-box-shadow: -2px 18px 38px 38px rgba(191,62,212,1);
-moz-box-shadow: -2px 18px 38px 38px rgba(191,62,212,1);
    }

    /* Sidebar links */
    .sidebar a {
      display: block;
      color: #F7F7F7;
      padding: 16px;
      text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
      background-color: #43D8C9;
      color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
      background-color: #A68DAD;
      color: white;
    }
    /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
    div.content {
      position: absolute;
      margin-left: 250px;
      margin-top: 0px;
      padding: 15px;
      width: 1200px;
      /* border: 2px solid black; */
      height: 80%;
    }
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.dashboard{
            width: 100%;
            /* min-height: 30vh; */
            /* border-radius:20px; */
            position: relative;
            /* left:2%; */
            height:160px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:#000;
        }

        .text{
            font-weight: 600;
            font-size: 70px;
            line-height:65px;
            letter-spacing: 10px;
            text-align: center;
            text-transform: uppercase;
            color: transparent;
            -webkit-background-clip: text;
            background-clip: text;
            background-size: 300%;
            animation: move 2s ease infinite;
            background-image: linear-gradient( 68.7deg,  rgba(29,173,235,1) 13.2%, rgba(137,149,250,1) 29.8%, rgba(229,109,212,1) 48.9%, rgba(255,68,128,1) 68.2%, rgba(255,94,0,1) 86.4% );
        }

        @keyframes move {
            0%,100%{
                background-position: 200% 0%;
            }

            50%{
                background-position: 0% 200%;
            }
        }
  </style>
</head>

<body>
<div class="dashboard">
    <div class="text">Admin Dashboard</div>
  </div>
  <div class="container-fluid">
    <div class="sidebar">
      <a href="index.php">JOBS</a>
      <a href="candidate.php " class="active">CANDIDATES APPLIED</a>
      <a href="#contact">CONTACT</a>
      <a href="#about">ABOUT</a>
    </div>

    <!-- Page content -->
    <div class="content">
      <table class="table styled-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Candidate Name</th>
            <th scope="col">Applied For</th>
            <th scope="col">Qualification</th>
            <th scope="col">Age</th>
            <th scope="col">Passing Year</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=0;
            while($rows=$result->fetch_assoc()){
              ?>
          <tr>
            <th scope="row"><?php echo ++$i ?></th>
            <td><?php echo $rows['applicant']; ?></td>
            <td><?php echo $rows['position']; ?></td>
            <td><?php echo $rows['qual']; ?></td>
            <td><?php echo $rows['age']; ?></td>
            <td><?php echo $rows['pass']; ?></td>
          </tr>
          <?php
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
</body>

</html>