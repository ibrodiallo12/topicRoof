<?php 
	session_start();
	require_once("../../model/connectPDO.php");
	require_once("class/homeCheck.class.php");
?>
<?php 
	// Secure and insert the post TOPIC.
if(!empty($_POST['topic']))
{
	if($home->securePost($_POST['topic']))
	{
		$home->insertTopic($_SESSION['id'],$_POST['topic']);
		$_SESSION['error'] = 'Your topic was send!';
	}
	else
	{
		$_SESSION['error'] = 'Your topic is not correct. Try again!'; 
	}
}

if(isset($_GET['set']))
{
	
	if($_GET['set'] === 'share')
	{
	// Secure and insert the get SHARE.
		if($home->issetIdTopic($_GET['id_topic']))
		{
			if($home->notYetShare($_SESSION['id'],$_GET['id_topic']))
			{
				$home->insertShare($_SESSION['id'],$_GET['id_topic']);
				// select the thousand in the table users
				
		 		$req = $bdd->query("SELECT user_id FROM users");
				while($data = $req->fetch())
				{
					$home->insertViews($_SESSION['id'],$_GET['id_topic'],$data['user_id']);
				}
				
				$_SESSION['error'] = 'Share successful !';
			}
			else
			{
				$_SESSION['error'] = 'You can not share this topic again.';
			}
		}
		else
		{
			$_SESSION['error'] = 'Error share. Try again!';
		}
	}

	if($_GET['set'] === 'comment')
	{
		// Secure and insert the post COMMENT.
		if(!empty($_POST['comment']))
		{
			if($home->securePost($_POST['comment']))
			{
				if($home->issetIdTopic($_GET['id_topic']))
				{
					$home->insertComment($_SESSION['id'],$_GET['id_topic'],$_POST['comment']);
					$_SESSION['error'] = 'Your comment was send!';
				}
				else
				{
					$_SESSION['error'] = 'Send error. Try again!';
				} 
			}
			else
			{
				$_SESSION['error'] = 'Your comment is not correct. Try again!'; 
			}
		}
		else
		{
			$_SESSION['error'] = 'Send your comment yet!';
		}
	}
	
}
// header on modal windows
	if(isset($_GET['mode']))
	{
		header('Location:../home.php?set='.$_GET['id_topic']);
	}
	else
	{
		//for redirection 
		header('Location:../home.php');
	}
?>
