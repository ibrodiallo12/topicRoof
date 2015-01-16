<?php
	session_start();
	require_once('../model/connectPDO.php');
	require_once('class/signUp.class.php');
	
	if(!empty($_SESSION['id']))
	{
		header('Location:../view/home.php');
	}
?>
<?php
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']))
	{
		if($signUp->securesignUp($_POST['name'],$_POST['email'],$_POST['password']))
		{
			if($signUp->issetEmail($_POST['email']))
			{
				$signUp->insertsignUp($_POST['name'],$_POST['email'],$_POST['password']);
				$signUp->insertActiveEmail($_POST['email'],$_POST['email']);
				$email = mysql_real_escape_string($_POST['email']);
		 		$req = $bdd->prepare("SELECT user_id FROM users WHERE user_email = ?");
				$req->execute(array($email));
				$query = $req->fetch();
				$_SESSION['id'] = $query['user_id'];
				header('Location:../view/welcome.php');
			}
			else
			{
				$error = 'This email ['.$_POST['email'].'] is not available.';
			}
		}
		else
		{
			$error = 'Your informations is not correct. Try again!';
		}
	}
	else
	{
		$error = 'Send your informations first';
	}
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8"/>
		<title>Welcome to! Makeroof</title>
		<link rel="stylesheet" href="../body/css/no_session.css"/>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div>
					<h1><a href="../index.php" title="index"><img src="logo.png" alt="logo"/></a></h1>
				</div>
				<div id="div_check">
					<p><img src="../body/icon/cross.png" alt="X"/><?php if(isset($error)){echo $error;}?></p>
				</div>
			</header>
			<section class="section_check">
				<form method="post" action="signUp.php" id="form_sign">
					<p>
						<span><em class="arrow"></em>Try again !<br />
						.................................
						Email must be correct.<br />
						Name must not contain special characters.</span>
						
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="your name" autofocus/>
						<label for="email">Email</label>
						<input type="text" name="email" id="email" placeholder="your email"/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" placeholder="your password"/>
						<em class="terms">if you click on the button you also accept our <a href="#" title="terms">terms of use</a></em>
						<input type="submit" value="sign up"/>
					</p>
				</form>
			</section>
			<footer id="footer">
				<ul>
					<li><a href="#">Apropos</a></li>
					<li><a href="#">Confidentialite</a></li>
					<li><a href="#">Conditions d'utilisation</a></li>
					<li><a href="#">Aide</a></li>
				</ul>
			</footer>
		<div>
	</body>
</html>
