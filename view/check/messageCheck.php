<?php 
	session_start();
	require_once("../../model/connectPDO.php");
	require_once("class/messageCheck.class.php");
?>
<?php
// setting for the message page
if($_GET['set'] === 'message')
{
	if(!empty($_GET['id']) && $message->issetIdUser($_GET['id']))
	{
			// Secure and insert the post MESSAGE.
		if(!empty($_POST['message']))
		{
			if($message->securePost($_POST['message']))
			{
				if($message->noSameId($_SESSION['id'],$_GET['id']))
				{
					$message->insertMessage($_SESSION['id'],$_GET['id'],$_POST['message']);
					$_SESSION['error'] = 'Your message was send!';
				} 
			}
			else
			{
				$_SESSION['error'] = 'Your message is not correct. Try again!'; 
			}
		}
		else
		{
			$_SESSION['error'] = 'Send your message yet!';
		}
	}
	else
	{
		$_SESSION['error'] = 'Wasn\'t send try again';
	}
}
else
{
	// send the error on home page
	$_SESSION['error'] = 'Wasn\'t send try again';
}
header('Location:../message.php?id='.$_GET['id']);
?>
