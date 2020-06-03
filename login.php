<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style>
		
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Josefin Sans', sans-serif;
	}

	.bgimage{
	background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url('images/img9.jpeg');
	
	background-size: 100% 110%;
	width: 100%;
	height: 100vh;
	}

	.main_div{
		width: 100%;
		height: 100vh;
		position: relative;
	}

	.box{
		width: 400px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		padding:50px;
		background: rgba(0,0,0,0.8);
		border-radius: 10px;
	}

	.box h1{
		margin-bottom: 30px;
		color: #fff;
		text-align: center;
		text-transform: capitalize;
	}

	.box .inputBox{
		position: relative;
	}

	.box .inputBox input{
		width: 100%;
		padding: 10px;
		font-size: 16px;
		color: #fff;
		letter-spacing: 1px;
		margin-bottom: 30px;
		border: none;
		border-bottom: 1px solid #fff;
		background: transparent; 
		outline: none;
    }

    .box .inputBox label{
    	position: absolute;
    	top: 0;
    	left: 0;
    	letter-spacing: 1px;
    	padding: 10px 0;
    	font-size: 16px;
    	color: #fff;
    	transition: 0.5s;
     }

     .box .inputBox input:focus ~ label,
     .box .inputBox input:valid ~ label{
     	top: -20px;
     	left: 0;
     	color: #03a9f4;
     	font-size: 12px;
     }

     .box input[type="submit"]{
     	background: transparent;
     	border: none;
     	outline: none;
     	color: #fff;
     	background: #03c03c;
     	padding: 8px 16px;
     	border-radius: 5px;
     	font-size: 14px;
     }

     


	</style>
</head>
<body>

	
<div class="bgimage">

	<div class="main_div">
		<div class="box">
			<h1> Login </h1>
			<form method="" action="">
				<div class="inputBox">
					<input type="text" name="username" autocomplete="off" 
					required >
					<label> username </label>

				</div>

				<div class="inputBox">
					<input type="password" name="password" autocomplete="off" 
					required >
					<label> password </label>

				</div>
				
				<a href="index.php" type="submit"  class="btn btn-success">Login</a>
				
			</form>
		   

		</div>
		
	</div>
</div>

</body>
</html>