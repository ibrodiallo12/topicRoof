<?php
class Message
{
		// check the id to users table.	
	public function issetIdUser($id_user)
	{
		global $bdd;
		$id_user = intval($id_user);

 		$req = $bdd->prepare("SELECT user_id FROM users WHERE user_id = ?");
		$req->execute(array($id_user));
		$query = $req->fetch();
		if(intval($query['user_id']) === $id_user)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// check if the posts variables is correct.

	public function securePost($post)
	{
	  if(strlen($post) >= 3)
		{
			if(preg_match('#^[0-9a-zA-Z]|[.]+$#', $post))
			{
				return true;
			}
		}
		else
		{
			return false;
		}
	}
// check the id_topic to insert comment.
	
	public function issetIdTopic($id_topic)
	{
		global $bdd;
		$id_topic = intval($id_topic);

 		$req = $bdd->prepare("SELECT topic_id FROM topic WHERE topic_id = ?");
		$req->execute(array($id_topic));
		$query = $req->fetch();
		if(intval($query['topic_id']) === $id_topic)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
////////////////////////////////// for the get message
	public function noSameId($id_user,$id_receiver)
	{
		if(intval($id_user) !== intval($id_receiver))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	// insert the message.
	public function insertMessage($id_user,$id_receiver,$message)
	{
		global $bdd;
		$id_user = intval($id_user);
		$id_receiver = intval($id_receiver);
		$message = mysql_real_escape_string($message);
		
 		$req = $bdd->prepare("INSERT INTO message (message_user_id, message_receiver_id, message_message, message_date) VALUES(?, ?, ?, NOW())");
		$req->execute(array($id_user,$id_receiver,$message));
	}	
}
// Create an object
$message = new Message();
?>
