  <?php
  $host="localhost";
  $username="root";
  $password="";
  $dbname="job_portal";
  $conn=mysqli_connect($host,$username,$password,$dbname);
  if($conn->connect_error){
  die("Connection Failed".$conn->connect_error);
  }

  $sql="SELECT * FROM `company`";
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
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
  />
  <style>
  .insert{
  display: flex;
  flex-direction:row ;
  flex-wrap: wrap;
  justify-content:flex-start;
  width:100%;
  gap:50px;
  /* border:2px solid black; */
  padding:20px;
  }
  .card{
    box-shadow: -2px 1px 14px 18px rgba(175, 32, 92, 0.56);
-webkit-box-shadow: -2px 1px 14px 18px rgba(175, 32, 92, 0.56);
-moz-box-shadow: -2px 1px 14px 18px rgba(175, 32, 92, 0.56);
  background-color: black;
  color: white;
  margin-bottom:20px;
  font-style:italic;
  }
  h1{
    font-size: 100px;
	    text-align: center;
      height:30vh;
      line-height: 30vh;
	    color: #fcedd8;
	    background: #d52e3f;
	   	font-family: 'Niconne', cursive;
	    font-weight: 700;
      text-shadow: 5px 5px 0px #eb452b, 
                  10px 10px 0px #efa032, 
                  15px 15px 0px #46b59b, 
                  20px 20px 0px #017e7f, 
                  25px 25px 0px #052939, 
                  30px 30px 0px #c11a2b, 
                  35px 35px 0px #c11a2b, 
                  40px 40px 0px #c11a2b, 
                  45px 45px 0px #c11a2b;
  }
  </style>
  </head>
  <body>
  <div class="container-fluid">
  <h1 >JOB PORTAL</h1>
  </div>
  <div class="insert">
  <?php 
  while($rows=$result->fetch_assoc()){
  ?>
  <div class="card " style="width: 30rem;">
  <div class="card-body">

  <h5 class="card-title" style="color:#FF4C29"><?php echo $rows['Company']; ?></h5>
  <h5 class="card-title" style="color:#28FFBF"><?php echo $rows['Position']; ?></h5>
  <p class="card-text" style="color:#FAFCC2"><?php echo $rows['Descp']; ?></p>
  <h6><span class="badge bg-danger">SKILLS REQUIRED</span> <?php echo $rows['Skills']; ?></h6>
  <h6><span class="badge bg-info">JOB LOCATION</span> <?php echo $rows['Location']; ?></h6>
  <h6><span class="badge bg-secondary">CTC</span> <?php echo $rows['CTC']; ?></h6>
  <button type="button" class="btn btn-outline-success rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" name="apply">APPLY</button>

  </div>
  </div>
  <?php
  }
  ?>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply For Job</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="connection.php">
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Applicant Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="aname">
  </div>
  <div class="mb-3">
    <label for="exampleInputApply" class="form-label">Applying For</label>
    <input type="text" class="form-control" id="exampleInputApply" name="apply">
  </div>
  <div class="mb-3">
    <label for="exampleInputQual" class="form-label">Qualification</label>
    <input type="text" class="form-control" id="exampleInputQual" name="qual">
  </div>
  <div class="mb-3">
    <label for="exampleInputAge" class="form-label">Age</label>
    <input type="number" class="form-control" id="exampleInputAge" name="age">
  </div>
  <div class="mb-3">
    <label for="exampleInputPass" class="form-label">Passing Year</label>
    <input type="text" class="form-control" id="exampleInputPass" name="pass">
  </div>
  
  <button type="submit" class="btn btn-outline-success rounded-pill" name="insert">Apply</button>
</form>
      </div>
    </div>
  </div>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
  </html>