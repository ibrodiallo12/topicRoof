<?php
	session_start();
	require_once('class/logIn.class.php');
	require_once('../model/connectPDO.php');
	
	if(!empty($_SESSION['id']))
	{
		header('Location:../view/home.php');
	}
?>
<?php
	if(!empty($_POST['email']) && !empty($_POST['password']))
	{
		if($logIn->securelogIn($_POST['email'],$_POST['password']))
		{
			if($logIn->correctEmailPassword($_POST['email'],$_POST['password']))
			{
				if($logIn->ifActiveEmail($_POST['email']))
				{
					$email = mysql_real_escape_string($_POST['email']);
			 		$req = $bdd->prepare("SELECT user_id FROM users WHERE user_email = ?");
					$req->execute(array($email));
					$query = $req->fetch();
					$_SESSION['id'] = $query['user_id'];
					header("Location:../view/home.php");
				}
				else
				{
					$error = 'Your email is not active. <a href="active.php?set=active" title="active">Active it !</a>';
				}
			}
			else
			{
				$error = 'Your email or password is not correct. Try again!<br /> or <a href="active.php?set=forgot" title="Forgot password">Forgot password.</a>';
			}
		}
		else
		{
			$error = 'Your informations is not correct. Try again !';
		}
	}
	else
	{
		$error = 'Send your informations first.';
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
					<p><img src="../body/icon/cross.png"/><?php if(isset($error)){echo $error;} ?></p>
				</div>
			</header>
			<section class="section_check">
				<form method="post" action="logIn.php" id="form_sign">
					<p>
						<span><em class="arrow"></em>Try again !<br />
						.................................
						Your email and password must be correct.<br /></span>
						 
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="your email" autofocus/>
						<label for="password">Password</label>
						<input type="password" name="password" id="password" placeholder="your password"/>
						<input type="submit" value="connexion"/>
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
