						<?php 
						// print the comments of the topic on a modale window
						if(isset($_GET['set']))
						{
						// the script for the modale window
						?>
							<script src="../body/script/jquery.js"></script>
							<script src="../body/script/modale.js"></script>
							<script>
								$(function(){
									$(function(){
										$('.section_view_comment').bPopup({
											fadeSpeed: 'slow', 
											followSpeed: 1500, 
											modalColor: 'rgba(0, 0, 0, 0.9)',
											closeClass:'close'
										});
									});
								});
							</script>
						<?php
							// secure the $_Get['set']
							$id = intval($_GET['set']);
							
							$req1 = $bdd->prepare('SELECT topic_id, topic_topic, user_name, user_avatar, topic_date
												  FROM users
												  INNER JOIN topic
												  ON user_id = topic_user_id
												  WHERE topic_id = ?');
							$req1->execute(array($id));
							?>
							<section class="section_view_comment">
							<span class="close">X</span>
							<?php
							while($query1 = $req1->fetch())
							{
							?>
								<article>
										<img src="../avatar/<?php echo $query1['user_avatar'];?>" alt="avatar"/>
										<div>
											<em><?php echo $query1['topic_date'];?></em>
											<span><?php echo $query1['user_name'];?></span>
											<p><span class="arrow"></span><?php echo $query1['topic_topic'];?></p>
										</div>
								</article>
								<div id="div_comment">
										<form action="check/homeCheck.php?set=comment&mode=modal&id_topic=<?php echo $query1['topic_id']; ?>" method="post" id="form_message">
											<textarea name="comment" placeholder="Write your comment !"></textarea>
											<input type="submit" value="send"/>
										</form>
								</div>
							<?php 
							}
							?>
														
							<?php
							$req2 = $bdd->prepare('SELECT user_id, user_name, user_avatar, comment_comment, comment_date
													FROM users
													INNER JOIN comment
													ON comment_user_id = user_id
													INNER JOIN topic
													ON comment_topic_id = topic_id
													WHERE comment_topic_id = ?
													ORDER BY comment_date DESC');
							$req2->execute(array($id));
							while($query2 = $req2->fetch())
							{
							?>
								<div class="commentDescription">
									<img src="../avatar/<?php echo $query2['user_avatar'];?>" alt="avatar"/>
									<a href="profile.php?id=<?php echo $query2['user_id'];?>" title="<?php echo $query2['user_name'];?>">
									<span><?php echo $query2['user_name'];?></span>
									</a>
									<em><?php echo $query2['comment_date'];?></em>
									<div>
										<p><?php echo $query2['comment_comment'];?></p>
									</div>
								</div>
						<?php
						}}
						?>
						</section>
