<?php
	require_once('../model/header.php');
?>
			<div class="wrapper">
				<em class="arrow_1"></em>
				<div id="left">
					<section>
					
						<div class="statistic_topic">
							<h1>TOPIC</h1>
						</div>
						<span class="separate">Write your topic !<em class="arrow_2"></em></span>
						
						<form method="post" action="check/homeCheck.php" id="form_topic">
								<textarea name="topic" placeholder="Quoi de neuf ?"></textarea>
								<input type="submit" value="Send it"/>
						</form>						
						<?php
						// include the window modale to print the comment of a topic
							require_once("../model/modale.php");
						?>
						<?php
						// the print the all the topic
						$query3 = $bdd->query('SELECT topic_id,topic_user_id, topic_topic,topic_date, user_id, user_name, user_avatar
											  FROM topic
											  INNER JOIN users ON user_id = topic_user_id
											  ORDER BY topic_date DESC');

						while($data = $query3->fetch())
						{
						?>
						<div class="presentation">
							<div class="div_Topic">
								<img src="../avatar/<?php echo $data['user_avatar'];?>" alt="avatar"/>
								<span class="line"><em class="arrow_3"></em></span>
				
								<p>
									<a href="profile.php?id=<?php echo $data['topic_user_id'];?>" title="<?php echo $data['user_name'];?>">
									<span class="name"><?php echo $data['user_name'];?>
									<em class="date"><?php echo $data['topic_date'];?></em>
									</span>
									</a>
									<?php echo $data['topic_topic'];?><a href="google.fr">google</a>
								</p>
								
								<a href="<?php echo '?set='.$data['topic_id'];?>" class="a_view_comment" title="view comment">
									<ul>
										<li>12 shares </li>
										<li>| 10 comments</li>
										<li>| 1 0000 views</li>
									</ul>
								</a>
								<div class="shareComment">
									<a href="check/homeCheck.php?set=share&id_topic=<?php echo $data['topic_id'];?>" title="share"><img src="../body/icon/share.png" alt="share" class="share"/></a>
									<form method="post" action="check/homeCheck.php?set=comment&id_topic=<?php echo $data['topic_id']; ?>" class="form_comment">
										<input type="text" name="comment" placeholder="write a comment"/>
										<input type="hidden" value="comment"/>
									</form>
								</div>
							</div>	
						</div>
						<?php
						}
						$query3->closeCursor();
						?>
						
					</section>
				</div>
				
				<div id="right">
				
					<section>
					
						<div class="statistic_top">
							<h1>TOP</h1>
						</div>
						<span class="separate">Where is the top !<em class="arrow_2"></em></span>
						
						<div class="presentation">
							<div>
							<br />
								<img src="../body/icon/avatar.png" alt="avatar"/>
								<span class="line"><em class="arrow_3"></em></span>
								<span class="name">ibrahim de guinee conakry <em class="date">04/04/2014</em></span>
								<p>Je viens d'inventer makeroof le reseau qui permet tout.. je comprend mainenant je comprend les cons on aura tous a rendre compte. <a href="google.fr">google</a></p>
								<ul>
									<li>12 shares </li>
									<li>| 10 comments</li>
									<li>| 1 0000 views</li>
								</ul>
								<div class="shareComment">
									<img src="pic/share.jpeg" alt="share" title="share" class="share"/>
									<form method="post" action="#" class="form_comment">
										<input type="text" name="comment" placeholder="write a comment"/>
										<input type="hidden" value="comment"/>
									</form>
								</div>
							</div>
						</div>
				
				</section>
				
				</div>
				
				<footer id="footer">
					<?php
						require_once("../model/footer.php"); 
					?>
				</footer>
				
			</div>
		</div>
	</body>
</html>
