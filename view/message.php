<?php
	require_once('../model/header.php');
?>
<?php
	if(isset($_GET['id']))
	{
		$id = intval($_GET['id']);
	}
	else
	{
		$req = $bdd->prepare('SELECT user_id FROM users 
							INNER JOIN message ON message_user_id = user_id
							OR message_receiver_id = user_id
							WHERE message_user_id = ? AND user_id != ? 
							OR message_receiver_id = ? AND user_id != ?
							GROUP BY user_id ORDER BY message_date DESC LIMIT 0,1');
		$req->execute(array($_SESSION['id'],$_SESSION['id'],$_SESSION['id'],$_SESSION['id']));
		$query = $req->fetch();
		
		if(!isset($query['user_id']))
		{
			$id = intval($_SESSION['id']);
		}
		else
		{
			$id = intval($query['user_id']);
		}
	}
?>
			<div class="wrapper">
				<em class="arrow_1"></em>
				
				<div id="div_details">
					<ul>
						<li>Private message<span class="separate_li_details"><em class="arrow_2"></em></span></li>
					</ul>
				</div>
				
				<section id="section_message">
						<h4>Members</h4>
						<ul>
						<?php
						if(isset($id))
						{
						$req1 = $bdd->prepare('SELECT user_id, user_name, user_avatar FROM users 
											INNER JOIN message ON message_user_id = user_id
											OR message_receiver_id = user_id
											WHERE message_user_id = ? AND user_id != ? 
											OR message_receiver_id = ? AND user_id != ?
											GROUP BY user_id ORDER BY message_date DESC');
						$req1->execute(array($_SESSION['id'],$_SESSION['id'],$_SESSION['id'],$_SESSION['id']));
						
						while($query1 = $req1->fetch())
						{
						?>
							<a href="message.php?id=<?php echo $query1['user_id'];?>"><li><img src="../avatar/<?php echo $query1['user_avatar'];?>" alt="avatar"/><span><?php echo $query1['user_name'];?></span></li></a>
						<?php
						}
						$req1->CloseCursor();
						}
						?>
						</ul>
				</section>
				
				<section id="section_list_message">
						<div class="presentation presentation_profile">
						<span class="separate_list_topics">MESSAGE !<em class="arrow_2"></em></span>						
						<?php
						if(isset($_GET['id']))
						{
						// req3 because this is an additionnal option
						$req3 = $bdd->prepare('SELECT user_id, user_name, user_avatar 
											FROM users 
											WHERE user_id = ?');
						$req3->execute(array($id));
						$query3 = $req3->fetch();
						?>
						
						<div id="div_Send_To">
							<em>Send to:</em>
							<a href="profile.php?id=<?php echo $query3['user_id'];?>" title="<?php echo $query3['user_name'];?>">
							<img src="../avatar/<?php echo $query3['user_avatar'];?>" alt="avatar"/>
							<span><?php echo $query3['user_name'];?></span>
							</a>
						</div>
						<?php
						$req3->CloseCursor();
						}
						?>						
						
						<div id="div_message">
							<form action="check/messageCheck.php?set=message&id=<?php echo $id;?>" method="post" >
								<textarea name="message" placeholder="Write your message !"></textarea>
								<input type="submit" value="send"/>
							</form>
						</div>
						<?php
						if(isset($id))
						{
						$req2 = $bdd->prepare('SELECT user_name, user_avatar, message_message, message_date
											   FROM users
											   INNER JOIN message
											   ON message_user_id = user_id
											   WHERE (message_user_id = ? AND message_receiver_id = ?) 
											   OR 
											   (message_user_id = ? AND message_receiver_id = ?)
											   ORDER BY message_date DESC');
						$req2->execute(array($id,$_SESSION['id'],$_SESSION['id'],$id));
						}
		
						while($query2 = $req2->fetch())
						{
						?>
							
							<div class="user_message">
								<img src="../avatar/<?php echo $query2['user_avatar'];?>" alt="avatar"/>
								<p>
									<span class="name"><?php echo $query2['user_name'];?> <em class="date"><?php echo $query2['message_date'];?></em></span>
									<?php echo $query2['message_message'];?> <a href="google.fr">google</a>
								</p>
							</div>
						<?php
						}
						?>

						</div>
				</section>
			</div>
				
				<footer id="footer">
				</footer>
				
		</div>
	</body>
</html>
