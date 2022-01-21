<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>
    <style>
      *{
        font-style: italic;
        background: black;
        color: white;
      }
      .container-fluid{
      
        margin-top:10px ;
        padding: 10px;
      }
      .container-fluid h1{
        font-size: 100px;
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
        margin-top: 120px;
        margin-right: 25%;
        margin-left: 25%;
        padding: 40px;
        border-radius: 40px;
        height: 300px;
        box-shadow: rgba(223, 135, 20, 0.56) 0px 15px 50px 4px;
      }
      form:hover{
        box-shadow: rgba(32, 166, 175, 0.56) 0px 22px 70px 4px;
      }
      input[type="email"],input[type="password"]{
        border-radius: 20px;
        outline: none;
       transition: 1s;
        width: 400px;
        background: none;
        color:white;  
        border: 2px solid rgb(0, 162, 255);
      }
      input[type="email"]:focus,input[type="password"]:focus{
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
      <h1 style="font-style: italic;margin-top: 30px;">LOGIN FORM</h1>
      </center>
      <form method="POST" action="connection.php">
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
        <button type="submit" class="btn btn-outline-success rounded-pill" name="login">Submit</button>
        <p style="margin-top: 10px;">Doesn't have an account? <a href="signup.php">SignUp</a> </p>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
