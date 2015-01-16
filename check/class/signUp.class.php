<?php
// class of signUp.php
class Signup
{
		// check if the posts variables is correct.
	public function securesignUp($name,$email,$password)
	{
	  if(strlen($name) >= 3 && strlen($name) <= 30 &&
		 strlen($email) >= 3 && strlen($email) <= 50 &&
		 strlen($password) >= 6 && strlen($password) <= 30)
		{
			if(preg_match('#^[0-9a-zA-Z]+$#', $name) && 
			   preg_match('#^([0-9a-z]+)([0-9a-z\.-_]+)@([0-9a-z\.-_]+)\.([0-9a-z]+)$#', $email) && 
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
	// if the email is avaible for in the database.
	public function issetEmail($email)
	{
		global $bdd;
		$email = mysql_real_escape_string($email);

 		$req = $bdd->prepare("SELECT user_email FROM users WHERE user_email = ?");
		$req->execute(array($email));
		$query = $req->fetch();
		if($query['user_email'] === $email)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	// insert the posts variables in the database.
	public function insertsignUp($name,$email,$password)
	{
		global $bdd;
		$name = mysql_real_escape_string($name);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);
		$pass = sha1($password);

 		$req = $bdd->prepare("INSERT INTO users(user_name, user_email, user_password, user_date) VALUES(?, ?, ?, NOW())");
		$req->execute(array($name,$email, $pass));
	}
	
	// insert the posts variables in the database.
	public function insertActiveEmail($email,$emailHash)
	{
		global $bdd;
		$emailHash = mysql_real_escape_string($emailHash);
		$email = mysql_real_escape_string($email);
		$hass = sha1($emailHash);
		$active = intval(1);

 		$req = $bdd->prepare("INSERT INTO active(active_email, active_emailHash,active_active) VALUES(?, ?, ?)");
		$req->execute(array($email,$hass,$active));
	}	
}
// Create an object
$signUp = new Signup();		
?>
