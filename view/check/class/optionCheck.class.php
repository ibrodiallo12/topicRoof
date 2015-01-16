<?php

class Option
{
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
	// check if the post variable is correct
	public function samePostedVariables($var1,$var2)
	{
	  $var1 = mysql_real_escape_string($var1);
	  $var2 = mysql_real_escape_string($var2);
	  if($var1 === $var2)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
////////////////////////////////// for the get name
// check if the post variable is correct
	public function secureGetName($name)
	{
	  if(strlen($name) >= 3 && strlen($name) <= 30)
		{
			if(preg_match('#^[0-9a-zA-Z]+$#', $name))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
//////////////////////////////// for the get email
// check if the post variable is correct
	public function secureGetEmail($email)
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
////////////////////////////// for the get password
// check if the post variable is correct.
	public function secureGetPassword($password)
	{
	  if(strlen($password) >= 6 && strlen($password) <= 30)
		{
			if(preg_match('#^[0-9a-zA-Z]|[.]+$#', $password))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
// set the name in the table users.
	public function setName($name,$id)
	{
		global $bdd;
		$name = mysql_real_escape_string($name);	
 		$req = $bdd->prepare("UPDATE users SET user_name = ? WHERE user_id = ? ");
		$req->execute(array($name,$id));
	}
// set the email in the table users.
	public function setEmail($email,$id)
	{
		global $bdd;
		$email = mysql_real_escape_string($email);	
 		$req = $bdd->prepare("UPDATE users SET user_email = ? WHERE user_id = ? ");
		$req->execute(array($email,$id));
	}
	public function ActiveEmail($old_email,$email)
	{
		global $bdd;
		$old_email = mysql_real_escape_string($old_email);
		$email = mysql_real_escape_string($email);

 		$req = $bdd->prepare("UPDATE active SET active_email = ? WHERE active_email = ?");
		$req->execute(array($email,$old_email));
	}
	
//	set the password in the table users.
	public function setPassword($password,$id)
	{
		global $bdd;
		$password = mysql_real_escape_string(sha1($password));	
 		$req = $bdd->prepare("UPDATE users SET user_password = ? WHERE user_id = ? ");
		$req->execute(array($password,$id));
	}
//	check avatar
	public function secureGetAvatar($avatar_Error,$avatar_Size,$avatar_Tmp_name)
	{
		// max of picture
		$maxSize = 1000000;
		
		if($avatar_Error == 0 && $avatar_Size < $maxSize)
		{
		
			if(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_GIF )
			{
				return true;
			}
			elseif(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_PNG)
			{
				return true;
			}
			elseif(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_JPEG)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
// insert the avatar in the table avatar and directory avatar
	public function insertAvatar($avatar_Tmp_name,$user_id)
	{
		// check the extension
		if(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_GIF) 
		{
			$extension = 'gif';
		}
		elseif(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_PNG) 
		{
			$extension = 'png';
		}
		elseif(exif_imagetype($avatar_Tmp_name) == IMAGETYPE_JPEG) 
		{
			$extension = 'jpg';
		}
		else
		{
			$extension = 'txt';
		}
		
		$Directory = "../../avatar/{$user_id}.{$extension}";
		move_uploaded_file($avatar_Tmp_name,$Directory);
		$avatar = $user_id.'.'.$extension;
		global $bdd;	
 		$req = $bdd->prepare("UPDATE users SET user_avatar = ? WHERE user_id = ? ");
		$req->execute(array($avatar,$user_id));
	}
	
	public function setAccount($email)
	{
		global $bdd;
		$email = mysql_real_escape_string($email);
		$active = intval(0);

 		$req = $bdd->prepare("UPDATE active SET active_active = ? WHERE active_email = ?");
		$req->execute(array($active,$email));
	}
	
}
// Create an object
	$option = new Option();
?>
