<?php
class Home
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
	  if(strlen($post) >= 3 && strlen($post) < 201)
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
	
////////////////////////////////// for the get home
	// insert the post TOPIC.
	public function insertTopic($id,$topic)
	{
		global $bdd;
		$topic = mysql_real_escape_string($topic);

 		$req = $bdd->prepare("INSERT INTO topic(topic_user_id, topic_topic, topic_date) VALUES(?, ?, NOW())");
		$req->execute(array($id,$topic));
	}
	
/////////////////////////////////////// for the get comment
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
	
		// insert the post COMMENT.
	public function insertComment($id,$id_topic,$comment)
	{
		global $bdd;
		$comment = mysql_real_escape_string($comment);
		$id_topic = intval($id_topic);
		
 		$req = $bdd->prepare("INSERT INTO comment (comment_user_id, comment_topic_id, comment_comment, comment_date) VALUES(?, ?, ?, NOW())");
		$req->execute(array($id,$id_topic,$comment));
	}
	
	//insert the get share
	public function insertShare($id,$id_topic)
	{
		global $bdd;
		$share = intval(1);
		$id_topic = intval($id_topic);
		
 		$req = $bdd->prepare("INSERT INTO share (share_user_id, share_topic_id, share_share, share_date) VALUES(?, ?, ?, NOW())");
		$req->execute(array($id,$id_topic,$share));
	}
	
	// check if id_session is yet share his topic 
	public function notYetShare($id_user,$topic_id)
	{
		global $bdd;
		$id_user = intval($id_user);
		$topic_id = intval($topic_id);
		
 		$req = $bdd->prepare("SELECT share_user_id FROM share WHERE share_topic_id = ?");
		$req->execute(array($topic_id));
		
		$query = $req->fetch();
		if(intval($query['share_user_id']) === 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	// insert in the table view	 
	public function insertViews($id_user,$topic_id,$viewer_id)
	{
		global $bdd;
		$id_user = intval($id_user);
		$topic_id = intval($topic_id);
		$viewer_id = intval($viewer_id);
		
 		$req = $bdd->prepare("INSERT INTO view (view_user_id, view_topic_id, view_viewer_id, view_date) VALUES(?, ?, ?, NOW())");
		$req->execute(array($id_user,$topic_id,$viewer_id));
	}
	
}

$home = new Home(); 
?>
