<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico"/>

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="bootstrap/css/on.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<!-- NAVBAR
================================================== -->
  <body>
	  <div class="container">
		 
		<div class="navbar-wrapper navBanner">
			<div class="container">
				<div class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar navbar-default navbar-fixed-top">
						  <div class="navbar-header" id="logo">
							<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-share"></span> ToPiCRooF</a>
						  </div>
				<div class="container">
					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">Menu</button>
					</div>
						<div class="navbar-collapse collapse ul_nav" id="navbar-main">
						    <ul class="nav navbar-nav" >
								<li class="active li_home">
									<a href="#">
										<span class="glyphicon glyphicon-home"></span> Home 
										<span class="badge home_badge">230</span>
									</a>
								</li>
								<li>
									<a href="#"> <span class="glyphicon glyphicon-user"></span> Profile</a>
								</li>
								<li class="li_message">
									<a href="#">
										<span class="glyphicon glyphicon-envelope"></span> Message 
										<span class="badge message_badge">230</span> 
									</a>
								</li>
								<li>
									<img class="img-circle img_top" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
								</li>
						  </ul>
						  <form class="navbar-form col-lg-4 form_search">
							  <input type="text" class="form-control" placeholder="Search">
							  <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-search"></span></button>
					      </form>
					       <ul class="nav navbar-nav" >
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
									  <span class="glyphicon glyphicon-cog"></span> Option
									  <span class="caret"></span>
								  </a>
								  <ul class="dropdown-menu" role="menu">
									  <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log-out</a></li>
									  <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
									  <li class="divider"></li>
									  <li class="dropdown-header">Viewers</li>
									  <li><a href="#"><span class="glyphicon glyphicon-eye-open"></span> My Viewers</a></li>
						 		 </ul>
								</li>
						  </ul>
						</div>
			     </div>
						    
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="row">
			<div class="user_profile">
			<div id="head_profile">
			 <h2>
				 <div class="alert btn-default active">
					 
					 <strong><span class="glyphicon glyphicon-user"></span> SOPHIE LEBEL</strong>
					 <p class="pull-right">
						 <a class="btn btn-primary" href="#" role="button">
						 	<span class="glyphicon glyphicon-plus">Suscribe</span>
						 </a>
					 </p>
				 </div>					 
			 </h2>
			</div>
				 <article>
					 <img src="bootstrap/icon/bigger.jpeg" alt="photo"/>
					 <h4 class="alert col-lg-offset-1 btn-primary">
					 	<span class="glyphicon glyphicon-eye-open"></span> Views<p class="badge pull-right">2505550000</p>
					 </h4>
					 <h4 class="alert col-lg-offset-1 btn-primary">
					 	<span class="glyphicon glyphicon-send"></span> Topics<p class="badge pull-right">258</p>
					 </h4>
					 <h4 class="alert col-lg-offset-1 btn-default active">
					 	<span class="glyphicon glyphicon-envelope"></span> Send a message</p>
					 </h4>
					 <h4 class="alert col-lg-offset-1 btn-default active">
					 	<span class="glyphicon glyphicon-cog"></span> Edit your profile</p>
					 </h4>
				</article>
			</div>
		</div>
		<div class="row div_center">

			<!--the div profile_topic-->
			<div class="col-lg-5" id="profile_topic">
				<div class="row">
					<a href="#">
						<div class="alert col-lg-offset-1 col-lg-10 alert-success">
							<strong>ToPiC</strong>
						</div>
					</a>
				</div>
				
				<!--presentation_topic -->
				<div class="row presentation_roof">
					<!--div_print_stat-->
					  <div class="div_print_stat pull-right">
				  		<ul class="text-muted">
				  			<li><span class="glyphicon glyphicon-share"></span> 150 |</li>
				  			<li><span class="glyphicon glyphicon-comment"></span> 2000 |</li>
				  			<li><span class="glyphicon glyphicon-eye-open"></span> 25222 |</li>
				  			<li><span class="glyphicon glyphicon-calendar"></span> 2+959+8</li>
				  		</ul>
					  </div><!--./div_print_stat-->
					  <img class="img-circle img_avatar" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image">
					  <h2 class="username">Heading</h2>
					  <p class="p_topic">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, pna.</p>
					  <!--div_shareComment-->
					  <div class="row div_shareComment_right">
						  <p><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-share">Share</a></span></p>
						  <form class="navbar-form">
							  <input type="text" style="width:300px" class="form-control" placeholder="Write your comment">
							  <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-send"></span></button>
						  </form>
					 </div><!-- /.div_shareComment -->
				</div><!-- /.presentation_topic -->
				
				<!--presentation_topic -->
				<div class="row presentation_topic">
					<span class="pull-right text-muted">15-1555 mas</span>
					  <img class="img-circle img_avatar" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
					  <h2 class="username">Heading</h2>
					  <p class="p_topic">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, pna.</p>
					  <!--div_shareComment-->
					  <div class="row div_shareComment">
						  <p><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-share">Share</a></span></p>
						  <form class="navbar-form">
							  <input type="text" style="width:320px" class="form-control" placeholder="Write your comment">
							  <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-send"></span></button>
						  </form>
					 </div><!-- /.div_shareComment -->
				</div><!-- /.presentation_topic -->
				
				<!--presentation_topic -->
				<div class="row presentation_topic">
					  <img class="img-circle img_avatar" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image">
					  <h2 class="username">Heading</h2>
					  <p class="p_topic">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, pna.</p>
					  <!--div_shareComment-->
					  <div class="row div_shareComment">
						  <p><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-share">Share</a></span></p>
						  <form class="navbar-form">
							  <input type="text" style="width:320px" class="form-control" placeholder="Write your comment">
							  <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-send"></span></button>
						  </form>
					 </div><!-- /.div_shareComment -->
				</div><!-- /.presentation_topic -->
				
				<!--presentation_topic -->
				<div class="row presentation_topic">
					  <img class="img-circle img_avatar" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image">
					  <h2 class="username">Heading</h2>
					  <p class="p_topic">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, pna.</p>
					  <!--div_shareComment-->
					  <div class="row div_shareComment">
						  <p><a class="btn btn-default" href="#" role="button"><span class="glyphicon glyphicon-share">Share</a></span></p>
						  <form class="navbar-form">
							  <input type="text" style="width:320px" class="form-control" placeholder="Write your comment">
							  <button type="submit" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-send"></span></button>
						  </form>
					 </div><!-- /.div_shareComment -->
				</div><!-- /.presentation_topic -->
				
			</div><!--/the div profile_topic-->
			
			
			
			
			
			
			<!-- the div notif-->
			<div class="row col-lg-offset-1 alert-success col-lg-2" id="div_notif">
				<h4 class="alert col-lg-offset-1 col-lg-8 btn-primary">
					Subscribe <span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-resize-horizontal"></span>
					<span class="glyphicon glyphicon-user"></span>
				</h4>
				<ul>
					<li class="col-lg-12">
						<img class="img-circle" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
						<span class="badge">sophi dsfgdfge</span>
						<button class="row btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
					</li>
					<li class="col-lg-12">
						<img class="img-circle" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
						<span class="badge">ibrodiallo1</span>
						<button class="row btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
					</li>
					<li class="col-lg-12">
						<img class="img-circle" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
						<span class="badge">sfatout ma tou </span>
						<button class="row btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
					</li>
					<li class="col-lg-12">
						<img class="img-circle" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
						<span class="badge">sfatout ma tou </span>
						<button class="row btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
					</li>
					<li class="col-lg-12">
						<img class="img-circle" src="bootstrap/icon/bigger.jpeg" alt="Generic placeholder image"/>
						<span class="badge">sfatout ma tou </span>
						<button class="row btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
					</li>
				</ul>
			</div><!--/the div notif-->
		</div>
		
		  <!-- FOOTER -->
		  <footer class="col-lg-12">
		    <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
				
			<!-- Bootstrap core JavaScript
			================================================== -->
			<!-- Placed at the end of the document so the pages load faster -->
			<script src="bootstrap/js/jquery.js"></script>
			<script src="bootstrap/js/bootstrap.min.js"></script>
			<script src="bootstrap/js/js.js"></script>
		  </footer><!-- /FOOTER -->

		</div><!-- /.container -->
  </body>
</html>
