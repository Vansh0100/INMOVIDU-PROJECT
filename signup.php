<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <style>
      *{
        font-style: italic;
        background: black;
        color: white;
      }
      /* body{
        background: black;
      } */
      .container-fluid{
        /* border: 2px solid black; */
        margin-top:0px ;
        padding: 10px;
      }
      .container-fluid h1{
        font-size: 80px;
	    text-align: center;
      height:10vh;
      line-height: 10vh;
	    color: #fcedd8;
	    /* background: #d52e3f; */
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
      form{
        margin-top: 60px;
        margin-right: 25%;
        margin-left: 25%;
        padding: 30px;
        border-radius: 40px;
        height: 655px;
        box-shadow: rgba(32, 166, 175, 0.56) 0px 22px 70px 4px;
      }
      form:hover{
        box-shadow: rgba(175, 32, 92, 0.56) 0px 22px 70px 4px;
      }
      input[type="text"],input[type="email"],input[type="password"],input[type="number"]{
        border-radius: 20px;
        outline: none;
       transition: 1s;
        width: 400px;
        color:white;
        background: none;
        border: 2px solid rgb(0, 162, 255);
      }
      input[type="text"]:focus,input[type="email"]:focus,input[type="password"]:focus,input[type="number"]:focus{
        width: 500px;
        background: none;
        color:white;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container-fluid ">
      <center>
      <h1 style="font-style: italic;margin-top: 5px;">REGISTRATION FORM</h1>
      </center>
      <form method="POST" action="connection.php">
        <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName" name="fname"/>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            name="email"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            name="password"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label"
            >Confirm Password</label
          >
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword2"
            name="cpassword"
          />
        </div>
        <div class="mb-3">
          <label for="exampleInputGender" class="form-label">Gender</label>
          <input type="text" class="form-control" id="exampleInputGender" name="gender"/>
        </div>
        <div class="mb-3">
          <label for="exampleInputPhone" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="exampleInputPhone" name="phone"/>
        </div>
        <button type="submit" class="btn btn-outline-success rounded-pill" name="submit">Submit</button>
        <p style="margin-top: 5px;">Already have an account? <a href="login.php">Login</a> </p>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
