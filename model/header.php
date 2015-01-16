<?php
session_start();

if(empty($_SESSION['id']))
{
	header('Location:../index.php');
}
require_once('../model/connectPDO.php');
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8"/>
		<title>Welcome to! Makeroof</title>
		<link rel="stylesheet" href="../body/css/on_session.css"/>
	</head>
	<body>
		<div id="main">
			<header>
				<div>
					<h1><img src="logo.png" alt="logo"/></h1>
				</div>
				<nav>
					<ul>
						<li><a href="home.php" title="home">Home</a></li>
						<li><a href="profile.php" title="profile">Profile</a></li>
						<li><a href="message.php" title="message">Message</a></li>
						<li><a href="option.php" title="options">Options</a></li>
						<li><a href="../check/Out.php" title="log-out">Log-out</a></li>
					</ul>
				</nav>
				<?php if(isset($_SESSION['error']))
				{
				?>
				<div id="div_error">
					<p><img src="../body/icon/s.png"/><?php echo $_SESSION['error'];?></p>
				</div>
				<?php
				}
				?>
			</header>
