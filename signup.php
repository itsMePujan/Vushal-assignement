<?php 
session_start();



	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: mediumaquamarine;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
	<form method="POST" action="">
            <div class="form-group">
                <label>UserName:</label><input type="text" name="UserName" class="form-control" autofocus placeholder="username">
            </div>
            <div class="form-group">
                <label>Password:</label><input type="Password" name="Password" class="form-control" autofocus placeholder="Password">
            </div>

      <label>Enter Captcha:</label>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input type="text" class="form-control" readonly id="capt">
        </div>
        <div class="form-group col-md-6">
          <input type="text" class="form-control" id="textinput">
        </div>
      </div>

    <div class="form-group">
                <button onclick="validcap()" class="btn btn-lg btn-success btn-block">Submit</button>
            </div>
        </form>
		<h6>Captcha not visible <img src="refresh.jpg" width="40px" onclick="cap()"></h6>
    <p>New Here?<a href="">Sign Up</a> </p>
        <p>Forgotten Password?<a href="">Recover here</a> </p>
    </div>
</div>
</div>
<script type="text/javascript">
  function cap(){
    var alpha = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
                 ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
                 'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z', '!','@','#','$','%','^','&','','+'];
                 var a = alpha[Math.floor(Math.random()*71)];
                 var b = alpha[Math.floor(Math.random()*71)];
                 var c = alpha[Math.floor(Math.random()*71)];
                 var d = alpha[Math.floor(Math.random()*71)];
                 var e = alpha[Math.floor(Math.random()*71)];
                 var f = alpha[Math.floor(Math.random()*71)];

                 var final = a+b+c+d+e+f;
                 document.getElementById("capt").value=final;
               }
               function validcap(){
                var stg1 = document.getElementById('capt').value;
                var stg2 = document.getElementById('textinput').value;
                if(stg1==stg2){
                  alert("Form is validated Succesfully");
                  return true;
                }else{
                  alert("Please enter a valid captcha");
                  return false;
                }
               }
			   </script>
	</div>
</body>
</html>