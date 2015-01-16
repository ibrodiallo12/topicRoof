<?php
	//  Class of logIn.php
	class Login
	{
			// check if the posts variables is correct.
		public function securelogIn($email,$password)
		{
		  if(strlen($email) >= 3 && strlen($email) <= 50 &&
			 strlen($password) >= 6 && strlen($password) <= 30)
			{
				if(preg_match('#^([0-9a-z]+)([0-9a-z\.-_]+)@([0-9a-z\.-_]+)\.([0-9a-z]+)$#', $email) && 
				   preg_match('#^[0-9a-zA-Z]|[.]+$#', $password))
				{
					return true;
				}
			}
			else
			{
				return false;
			}
		}
	
		// Select the variables for compare the email and the password.
		public function correctEmailPassword($email,$password)
		{
			global $bdd;
			$email = mysql_real_escape_string($email);
			$password = mysql_real_escape_string($password);
			$pass = sha1($password);

	 		$req = $bdd->prepare("SELECT user_email, user_password FROM users WHERE user_email = ? AND user_password = ?");
			$req->execute(array($email, $pass));
		
			while($query = $req->fetch())
			{
				if($query['user_email'] === $email && $query['user_password'] === $pass)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}
		
		// select the posts variables in the database.
		public function ifActiveEmail($email)
		{
			global $bdd;
			$email = mysql_real_escape_string($email);
			$active = intval(1);

	 		$req = $bdd->prepare("SELECT active_active FROM active WHERE active_email = ?");
			$req->execute(array($email));
			$query = $req->fetch();
			if(intval($query['active_active']) === $active)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}
	
	#Create the object
	$logIn = new Login();
?>
