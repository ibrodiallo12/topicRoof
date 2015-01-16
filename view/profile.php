<?php
	require_once('../model/header.php');
?>
<?php
// check the get id for select user in the table users
	if(!empty($_GET['id']))
	{
		$id = intval($_GET['id']);
	}
	else
	{
		$id = $_SESSION['id'];
	}
?>
<?php
if(isset($id))
	{
		
	$req1 = $bdd->prepare('SELECT topic_date, COUNT(topic_topic) as nb_topic, user_id, user_name,user_avatar
									  FROM topic
									  INNER JOIN users ON user_id = topic_user_id
									  WHERE topic_user_id = ?
									  ');
	$req1->execute(array($id));
	}
	while($query1 = $req1->fetch())
	{
	?>	

		<div class="wrapper">
			<em class="arrow_1"></em>
			
			<div id="div_details">
				<ul>
					<?php if(isset($id))
					{
						if(intval($_SESSION['id']) === intval($id))
						{
							echo '<a href="option.php?set=profile" title="edit"><li>Edit your profile<span class="separate_li_details"><em class="arrow_2"></em></span></li></a>';
						}
						else
						{
							echo '<a href="message.php?id='.$query1['user_id'].'" title="send"><li>Send a message<span class="separate_li_details"><em class="arrow_2"></em></span></li></a>';
						}
					}
					?>
				</ul>
			</div>
			
			<section id="section_details">
			<?php
			if(!empty($query1['user_avatar']))
			{
				echo '<img src="../avatar/'.$query1['user_avatar'].'" alt="avatar" id="profile_avatar"/>';
			}
			else
			{
				echo '<img src="../body/icon/avatar.png" alt="avatar" id="profile_avatar"/>';
			}
			?>
				<h4><?php echo $query1['user_name'];?></h4>
				<h5><?php echo $query1['nb_topic'].' TOPICS';?><span class="separate_li_details"><em class="arrow_2"></em></span></h5>
				<h5><?php echo $query1['nb_topic'].' 000 VIEWS';?><span class="separate_li_details"><em class="arrow_2"></em></span></h5>
			</section>
		<?php
		}
		$req1->closeCursor();
		?>
		
			<section id="section_list_topics">
					<div class="presentation presentation_profile">
					<span class="separate_list_topics">TOPICS !<em class="arrow_2"></em></span>
					<?php
					if(isset($id))
					{
						$req2 = $bdd->prepare('SELECT topic_date, topic_topic, user_name,user_avatar
									  FROM topic
									  INNER JOIN users ON user_id = topic_user_id
									  WHERE topic_user_id = ?
									  ORDER BY topic_date DESC');
						$req2->execute(array($id));
					}
					while($query2 = $req2->fetch())
					{
					?>
						<div>
							<?php
							if(!empty($query2['user_avatar']))
							{
								echo '<img src="../avatar/'.$query2['user_avatar'].'" alt="avatar" id="profile_avatar"/>';
							}
							else
							{
								echo '<img src="../body/icon/avatar.png" alt="avatar" id="profile_avatar"/>';
							}
							?>
							
							<p>
								<span class="name">
								<?php echo $query2['user_name'];?> <em class="date"><?php echo $query2['topic_date'];?></em>
								</span>
								<?php echo $query2['topic_topic'];?> <a href="google.fr">google</a>
							</p>
							<ul>
								<li>12 shares </li>
								<li>| 10 comments</li>
								<li>| 1 0000 views</li>
							</ul>
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
