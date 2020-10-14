<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">


    html, body {
        margin: 0; padding: 0;
        scroll-behavior: smooth;
        font-family: 'Roboto', sans-serif;
      }
      .animated_background {
        background:url("welcome_page_collage_edited.jpg") repeat 0 0;
        height:1450px;
        width:100%;
        margin:0;


        box-sizing: border-box;
        -webkit-animation: slide 30s linear infinite;

        

      }
      @-webkit-keyframes slide {
        from { background-position: 0 0; }
        to { background-position: -400px 0; }
    }

	.form-control{
		min-height: 41px;
		box-shadow: none;
		border-color: #e1e1e1;
	}
	.form-control:focus{
		border-color: #00cb82;
	}	
    .form-control, .btn{        
        border-radius: 3px;
    }
	.form-header{
		margin: -30px -30px 20px;
		padding: 30px 30px 10px;
		text-align: center;
		background: black;
		border-bottom: 1px solid #eee;
		color: #fff;
	}
	.form-header h2{
		font-size: 34px;
		font-weight: bold;
        margin: 0 0 10px;
		font-family: 'Pacifico', sans-serif;
    }
	.form-header p{
		margin: 20px 0 15px;
		font-size: 17px;
		line-height: normal;
		font-family: 'Courgette', sans-serif;
	}
    .signup-form{
		width: 390px;
		margin: 0 auto;	
		padding: 30px 0;	
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}		
	.signup-form label{
		font-weight: normal;
		font-size: 13px;
	}
    .signup-form input[type="checkbox"]{
		margin-top: 2px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: black;
		border: none;
		min-width: 200px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background:gold; 
        outline: none;
	}
    .signup-form a{
		color: #00cb82;		
	}
    .signup-form a:hover{
		text-decoration: underline;
	}
</style>
</head>
<body class="animated_background" style="height:100%;">
<div class="signup-form">
    <form action="login.php" method="post">
    <?php include('errors.php'); ?>
		<div class="form-header">
			<h2>Login</h2>
			<p>Foopeeps awaits you!</p>
		</div>
        <div class="form-group">
			<label>Username</label>
        	<input type="text" class="form-control" name="username" required="required">
        </div>

		<div class="form-group">
			<label>Password</label>
            <input type="password" class="form-control" name="password" required="required">
        </div>

		<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block btn-lg" name="login_user">Login</button>
		</div>	
    </form>
	<div class="text-center small">Not a member yet? <a href="register.php">Sign up here</a></div>
</div>
</body>
</html>                            
