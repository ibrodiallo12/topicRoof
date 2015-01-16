<?php
	// class of active.php
class Active
{		
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
	
	// if $_GET is correct.
	public function issetArray($get,$Array)
	{
		if(in_array($get,$Array))
		{
			return true;
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
	public function sendActivateEmail($email)
	{

		$mail = $email; 

		$pass_line = "\n";
		//the message in HTML/CSS.
		$message = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";

		 
		//the boundary
		$boundary = "-----=".sha1(rand());

		//the object
		$object = "Makeroof:: Active your account !";
		 
		//create the header
		$header = "From: \"makeroof\"<contact@makeroof.com>".$pass_line;
		$header.= "Reply-to: \"contact@makeroof.com\" <contact@makeroof.com>".$pass_line;
		$header.= "MIME-Version: 1.0".$pass_line;
		$header.= "Content-Type: multipart/alternative;".$pass_line." boundary=\"$boundary\"".$pass_line;

		//create messge
		$message.= $pass_line."--".$boundary.$pass_line;
		//for the format HTML
		$message.= "Content-Type: text/html; charset=\"UTF-8\"".$pass_line;
		$message.= "Content-Transfer-Encoding: 8bit".$pass_line;
		$message.= $pass_line.$message .$pass_line;

		$message.= $pass_line."--".$boundary."--".$pass_line;
		//send the mail
		mail($mail,$object,$message,$header);

	}
	// check if the posts variables is correct.
	public function secureSendEmail($email)
	{
	  if(strlen($email) >= 3 && strlen($email) <= 50)
		{
			if(preg_match('#^([0-9a-z]+)([0-9a-z\.-_]+)@([0-9a-z\.-_]+)\.([0-9a-z]+)$#', $email))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
	// if the email is not active yet.
	public function EmailNotActiveYet($email)
	{
		global $bdd;
		$email = mysql_real_escape_string($email);

 		$req = $bdd->prepare("SELECT active_active FROM active WHERE active_email = ?");
		$req->execute(array($email));
		$query = $req->fetch();
		if(intval($query['active_active']) === intval(1))
		{
			return false;
		}
		else
		{
			return true;
		}
	}
}

// Create an object
$Active = new Active();	
?>
