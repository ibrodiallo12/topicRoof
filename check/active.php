<?php
	session_start();
	require_once('../model/connectPDO.php');
	require_once('class/active.class.php');
	
	if(!empty($_SESSION['id']))
	{
		header('Location:../view/home.php');
	}
?>
<?php 
	// The array for $_GET['set']
	$Array = array('forgot','send','active');
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
					<p><?php 
					// echo error check
							if(isset($_GET['set']))
							{
							// check for send the message for change the password
								if($_GET['set'] === 'forgot')
								{
									
									if(empty($_POST['email']))
									{
										$error = '<img src="../body/icon/lock.png"/>Enter your email to change your password !';
									}
									else
									{
										if($Active->secureSendEmail($_POST['email']))
										{
											if(!$Active->issetEmail($_POST['email']))
											{
												$Active->sendActivateEmail($_POST['email']);
												$error = 'You just got a message for change your password.<br /> Look to your email account ! look to the spam.';
												
											}
											else
											{
												$error = 'This email is not registered first.';
											}
											
										}
										else
										{
											$error = 'The email isn\'t correct. Try again!';
										}
									}
								}
								// just show the message for the send message to user.
								elseif($_GET['set'] === 'send')
								{
									$error = '<img src="../body/icon/checkground.png"/>Check your email account to activate your account.';
								}
								// check for resend the message for active the account of user.
								elseif($_GET['set'] === 'active')
								{
									if(empty($_POST['email']))
									{
										$error = '<img src="../body/icon/cross.png"/>Enter your email to send a another message to your account.';
									}
									else
									{
										if($Active->secureSendEmail($_POST['email']))
										{
											if(!$Active->issetEmail($_POST['email']))
											{
												if($Active->EmailNotActiveYet($_POST['email']))
												{
													$Active->sendActivateEmail($_POST['email']);
													header('Location:active.php?set=send');
												}
												else
												{
													$error = 'This email is already active.<br /><a href="../index.php" title="connect"> Connect you !</a>';
												}
											}
											else
											{
												$error = 'This email is not registered first.';
											}
										}
										else
										{
											$error = 'The email isn\'t correct. Try again!';
										}
									}
								}
								// if the $_GET['set'] is not correct.
								else
								{
									$error = 'Hello ! What do you need?';
								}
							}
							// if the $_GET['set'] is not exist.
							else
							{
								$error = 'Hello ! What do you need?';
							}
							// echo error manu manupilation
							if(isset($error))
							{
								echo $error;
							}
							else
							{
								echo 'Hello ! What do you need?';
							}
						?>
					</p>		
				</div>
			</header>
						
			<section class="section_check">
				 
	<?php
	// create the html code for manu option on active page.
		if(isset($_GET['set']))
		{
			if($Active->issetArray($_GET['set'],$Array))
			{
				if($_GET['set'] === 'forgot')
				{
					echo 
					'<form method="post" action="active.php?set=forgot" id="form_sign">
						<p>
							<span><em class="arrow"></em>Enter your email !<br />
							.................................
							Email must be correct.</span>
						
							<label for="email">Email</label>
							<input type="text" name="email" id="email" placeholder="your email" autofocus/>
							<input type="submit" value="send"/>
							<br />
						</p>
					</form>';
				}
				elseif($_GET['set'] === 'send')
				{	
					echo 
					'<div class="div_send">
						<p>
							<img src="../body/icon/mail.png" alt="k"/>
							<h2>A message was sent to you !</h2>
							<h4>Check your email account to activate your account.</h4>
							<h4>Or look in the spam in your account.</h4>
							<h4>Woops!! you don\'t see the message <a href="active.php?set=active" title="active">try to send</a></h4>
						</p>
					</div>';
				}
				else
				{
					echo 
					'<form method="post" action="active.php?set=active" id="form_sign">
						<p>
							<span><em class="arrow"></em>Enter your email !<br />
							.................................
							Email must be correct.</span>
						
							<label for="email">Email</label>
							<input type="text" name="email" id="email" placeholder="your email" autofocus/>
							<input type="submit" value="send"/>
							<br />
						</p>
					</form>';
			   }
			}
			else
			{
				echo 
					'<div class="div_send">
						<p>
							<img src="../body/icon/cmd.png" alt="k"/>
							<h4>To change your password ? <a href="active.php?set=forgot" title="change"> Change</a></h4>
							<h4>To active your account ? <a href="active.php?set=active" tile="active"> Active it</a></h4>
						</p>
					</div>';
			}
		}
		else
		{
			echo 
				'<div class="div_send">
					<p>
						<img src="../body/icon/cmd.png" alt="k"/>
						<h4>To change your password ? <a href="active.php?set=forgot" title="change"> Change</a></h4>
						<h4>To active your account ? <a href="active.php?set=active" tile="active"> Active it</a></h4>
					</p>
				</div>';
		}
	?>
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
