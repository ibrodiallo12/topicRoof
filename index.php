<?php
	session_start();
	
	if(!empty($_SESSION['id']))
	{
		header("Location:view/home.php");
	}
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8"/>
		<title>Welcome to! Makeroof</title>
		<link rel="stylesheet" href="body/css/no_session.css"/>
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div>
					<h1><img src="logo.png" alt="logo"/></h1>
				</div>
				<form method="post" action="check/logIn.php" id="form_log">
					<p>
						<label for="email">Email :</label>
						<input type="email" name="email" id="email" placeholder="your email" autofocus/>
						<label for="password">Password :</label>
						<input type="password" name="password" id="password" placeholder="your password"/>
						<input type="submit" value="connexion"/>
					</p>
				</form>
			</header>
			<section>
				<article id="description">
					<p><em class="arrow"></em>
					Bienvenue Makeroof est reseau qui vous permet de partager et de faire connaitre vos opinions, experience, entreprise.... <br />
					et suivre,connaitre,partager avec les votres dans le monde entier aussi rapidement que possible.... en quelques secondes le monde entier vous vois... tant que votre topic est en mode...<br /> Makeroof pour vous...!!</p>
				</article>
				<form method="post" action="check/signUp.php" id="form_sign">
					<p>
						<span><em class="arrow"></em>REGISTRATION<br />
						.................................
						Create your account in a few seconds</span>
						
						<label for="name">Name</label>
						<input type="text" name="name" id="name" placeholder="your name"/>
						<label for="email">Email</label>
						<input type="email" name="email" id="email" placeholder="your email"/>
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
