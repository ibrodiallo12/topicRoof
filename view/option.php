	<?php
		require_once('../model/header.php');
	?>
			<div class="wrapper">
				<em class="arrow_1"></em>
				
				<div id="div_details">
					<ul>
						<li>Check your data before saving<span class="separate_li_details"><em class="arrow_2"></em></span></li>
					</ul>
				</div>
				
				<section id="section_settings">
						<h4>Make change on :</h4>
						<ul>
							<a href="option.php?set=name" title="change your name"><li><h3> > Name</h3></li></a>
							<a href="option.php?set=email" title="change your email"><li><h3> > Email</h3></li></a>		
							<a href="option.php?set=password" title="change your password"><li><h3> > Password</h3></li></a>
							<a href="option.php?set=profile" title="change your profile"><li><h3> > Profile</h3></li></a>
							<a href="option.php?set=account" title="change your account"><li><h3> > Account</h3></li></a>
						</ul>
				</section>
			<?php 
				//change the html from get set
				if(isset($_GET['set']))
				{
					if($_GET['set'] === 'name')
					{
					?>
						<section id="section_list_topics">
							<div class="presentation presentation_profile presentation_option">
								<span class="separate_list_topics">OPTION !<em class="arrow_2"></em></span>
								<h4 class="h4_changed">Change your name :</h4>
								<div id="form_settings">
									<form action="check/optionCheck.php?set=name" method="post">
										<label for="password">Password</label>
										<input type="password" name="password" id="password"/>
										<label for="name">Change your name</label>
										<input type="text" name="name" value="ibrodiallo12" id="name"/>
										<label for="confirm_name">Confirm your name</label>
										<input type="text" name="confirm_name" id="confirm_name"/>
										<input type="submit" value="Save change"/>
									</form>
								</div>	
							</div>
						</section>
					<?php
					}
					elseif($_GET['set'] === 'email')
					{
					?>
						<section id="section_list_topics">
							<div class="presentation presentation_profile presentation_option">
								<span class="separate_list_topics">OPTION !<em class="arrow_2"></em></span>
								<h4 class="h4_changed">Change your email :</h4>
								<div id="form_settings">
									<form action="check/optionCheck.php?set=email" method="post">
										<label for="password">Password</label>
										<input type="password" name="password" id="password"/>
										<label for="email">Change your email</label>
										<input type="email" name="email" value="ibrodiallo12@yahoo.fr" id="email"/>
										<label for="confirm_email">Confirm your email</label>
										<input type="email" name="confirm_email" id="confirm_email"/>
										<input type="submit" value="Save change"/>
									</form>
								</div>	
							</div>
						</section>
					<?php
					}
					elseif($_GET['set'] === 'password')
					{
					?>
						<section id="section_list_topics">
							<div class="presentation presentation_profile presentation_option">
							<span class="separate_list_topics">OPTION !<em class="arrow_2"></em></span>
								<h4 class="h4_changed">Change your password :</h4>
								<div id="form_settings">
									<form action="check/optionCheck.php?set=password" method="post">
										<label for="old_password">Old password</label>
										<input type="password" name="password" id="old_password"/>
										<label for="new_password">New password</label>
										<input type="password" name="new_password" id="new_password"/>
										<label for="confirm_password">Confirm your password</label>
										<input type="password" name="confirm_password" id="confirm_password"/>
										<input type="submit" value="Save change"/>
									</form>
								</div>	
							</div>
						</section>
					<?php
					}
					elseif($_GET['set'] === 'profile')
					{
					?>
					 	<section id="section_list_topics">
							<div class="presentation presentation_profile presentation_option">
								<span class="separate_list_topics">OPTION !<em class="arrow_2"></em></span>
								<h4 class="h4_changed">Change your profile :</h4>
								<div id="div_avatar">
									<img src="../body/icon/avatar.png" alt="avatar"/><p>Change your profile picture</p>
								</div>
								<div id="form_settings">
									<form action="check/optionCheck.php?set=profile" method="post" enctype="multipart/form-data">
										<label for="avatar">Photo</label>
										<input type="file" name="avatar" id="avatar"/>
										<label for="password">password</label>
										<input type="password" name="password" id="password"/>
										<input type="submit" value="Send"/>
									</form>
								</div>	
							</div>
						</section>
					<?php
					}
					elseif($_GET['set'] === 'account')
					{
					?>
						<section id="section_list_topics">
								<div class="presentation presentation_profile presentation_option">
									<span class="separate_list_topics">OPTION !<em class="arrow_2"></em></span>
									<h4 class="h4_changed">Close your account:</h4>
									<div id="form_settings">
										<form action="check/optionCheck.php?set=account" method="post">
											<label for="password">Password</label>
											<input type="password" name="password" id="password"/>
											<label for="email">Your email</label>
											<input type="email" name="email" id="email"/>
											<input type="submit" value="Save change"/>
										</form>
									</div>	
								</div>
							</section>
					<?php
					}
					else{}
				}
				else
				{
					header('Location:option.php?set=name');
				}
				?>
				
			</div>
				
				<footer id="footer">
				</footer>
		</div>
	</body>
</html>
