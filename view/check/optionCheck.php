<?php
	session_start();
// Include functions and connectPDO.
	require_once('../../model/connectPDO.php');
	require_once('class/optionCheck.class.php');
?>
<?php
	$gets = array('name','email','password','profile','account');
	
	if(isset($_GET['set']))
	{
		if(in_array($_GET['set'],$gets))
		{
		// if the password is correct for set in the database.
			if(isset($_POST['password']))	
			{
			// get the id user in the users for find the email.
				$id = intval($_SESSION['id']);
				$req = $bdd->prepare("SELECT user_email FROM users WHERE user_id = ?");
				$req->execute(array($id));
				$query = $req->fetch();
				// check the email and password
				if($option->correctEmailPassword($query['user_email'],$_POST['password']))
				{
				// GET NAME
					if($_GET['set'] === 'name')
					{
						if(isset($_POST['name']) && isset($_POST['confirm_name']))
						{
							// set the name in the table users
							if($option->secureGetName($_POST['name']) && $option->secureGetName($_POST['confirm_name']))
							{
								if($option->samePostedVariables($_POST['name'],$_POST['confirm_name']))
								{
									$id = intval($_SESSION['id']);
									$option->setName($_POST['name'],$id);
									$_SESSION['error'] = $_POST['name'].' is your name now';
								}
								else
								{
									$_SESSION['error'] = 'The name and confirmation name is not same';
								}
							}
							else
							{
								$_SESSION['error'] = 'Your name is not correct. Try again!';
							}
						}
						else
						{
							$_SESSION['error'] = 'Send your information first';
						}
					}
					// GET EMAIL
					elseif($_GET['set'] === 'email')
					{
						if(isset($_POST['email']) && isset($_POST['confirm_email']))
						{
							//the email is avaible for in the database.
							if($option->issetEmail($_POST['email']))
							{
								// set the email in the table users
								if($option->secureGetEmail($_POST['email']) && $option->secureGetEmail($_POST['confirm_email']))
								{
									if($option->samePostedVariables($_POST['email'],$_POST['confirm_email']))
									{
										if($option->issetEmail($_POST['email']))
										{
											$id = intval($_SESSION['id']);
											$option->setEmail($_POST['email'],$id);
											$option->ActiveEmail($query['user_email'],$_POST['email']);
										}
										else
										{
											$_SESSION = 'This email ['.$_POST['email'].'] is not available.';
										}
									}
									else
									{
										$_SESSION['error'] = 'The email and confirmation email is not same';
									}
								}
								else
								{
									$_SESSION['error'] = 'Your email is not correct. Try again!';
								}
							}
							else
							{
								$_SESSION['error'] = 'This email is not available';
							}
						}
						else
						{
							$_SESSION['error'] = 'Send your information first';
						}
					}
					// GET PASSWORD
					elseif($_GET['set'] === 'password')
					{
						if(isset($_POST['new_password']) && isset($_POST['confirm_password']))
						{
						// set the name in the table users
							if($option->secureGetPassword($_POST['new_password']) && $option->secureGetPassword($_POST['confirm_password']))
							{
								
								if($option->samePostedVariables($_POST['new_password'],$_POST['confirm_password']))
								{
									$id = intval($_SESSION['id']);
									$option->setPassword($_POST['new_password'],$id);
								}
								else
								{
									$_SESSION['error'] = 'The new password and confirmation password is not same';
								}
							}
							else
							{
								$_SESSION['error'] = 'Your password is not correct. Try again!';
							}
						}
						else
						{
							$_SESSION['error'] = 'Send your information first';
						}
					}
					// GET PROFILE
					elseif($_GET['set'] === 'profile')
					{
						if(isset($_FILES['avatar']))
						{	
							// set the name in the table users
							if($option->secureGetAvatar($_FILES['avatar']['error'],$_FILES['avatar']['size'],$_FILES['avatar']['tmp_name']))   
							{
								$option->insertAvatar($_FILES['avatar']['tmp_name'],$_SESSION['id']);
							}
							else
							{
								echo 'Error saved avatar';
							}
						}
						else
						{
							$_SESSION['error'] = 'Send your information first';
						}
					}
					// GET ACCOUNT
					else
					{
						if(isset($_POST['password']) && isset($_POST['email']))
						{
						// set the active account in the table active
							if($option->secureGetEmail($_POST['email']))
							{
								$option->setAccount($_POST['email']);
							}
							else
							{
								$_SESSION['error'] = 'Your password is not correct. Try again!';
							}
						}
						else
						{
							$_SESSION['error'] = 'Send your information first';
						}
					}
				}
				else
				{
					$_SESSION['error'] = 'Your password is not correct';
				}
			}	
		}
	}
	header('Location:../option.php?set=name');
?>
