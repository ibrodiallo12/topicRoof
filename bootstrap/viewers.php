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
					       <ul class="nav navbar-nav">
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
	
		
		<div class="row div_center" style="padding-left: 100px;">
			<h3 class="text-muted">Check your informations before saved</h3>
		
	        <div class="row col-lg-9"> 	  
	        	  <div class="div_form_option">
					
					<div class="alert col-lg-10 alert-success" id="alert_Error" style="text-align: center;">
						<strong>Here you can make who view your like you want</strong>
					</div>

		       <!-- form option-->
		            <form class="form-horizontal col-lg-10 form_option" method="post" action="#" id="form_signUp" style="margin-top: -30px;">
						  <div class="form-group">
							<legend><h2 class="text-muted"><span class="glyphicon glyphicon-eye-open"></span> Change your viewers</h2></legend>
						  </div>
							 
							 <div class="input-group col-lg-12"> 
								  <label class="input-group-addon" for="password">Old Password</label>
								  <input type="password" name="password" class="form-control" placeholder="Your password" id="password"/>
							 </div>
							 
							 <!--#progress-->
							<div id="progress1">
								  <div class="btn-group" role="group">
									<span class="btn-default">Choose your viewers:</span>
								  </div>
									<div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										Aleatory <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu">
										<li><a href="#">Engineer</a></li>
										<li class="divider"></li>
										<li><a href="#">Programmeur</a></li>
										<li class="divider"></li>
										<li><a href="#">New paper</a></li>
									  </ul>
									</div>
									<h4 class="text-muted pull-right"><span class="glyphicon glyphicon-user"></span> Engineer</h4>
									<div class="progress">
									  <div class="progress-bar progress-bar-striped active" style="width: 60%;">
										60%
									  </div>
									</div>
								 <div  class="pull-right" id="onChange1">
									  <input type="number" name="bus1" value="60" class="btn-info"/>
									  <span class="glyphicon glyphicon-ok btn-success"></span>
								  </div>
							</div> <!--./#progress-->
						
							 <!--#progress-->
							<div id="progress1">
								  <div class="btn-group" role="group">
									<span class="btn-default">Choose your viewers:</span>
								  </div>
									<div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										Aleatory <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu">
										<li><a href="#">Engineer</a></li>
										<li class="divider"></li>
										<li><a href="#">Programmeur</a></li>
										<li class="divider"></li>
										<li><a href="#">New paper</a></li>
									  </ul>
									</div>
									<h4 class="text-muted pull-right"><span class="glyphicon glyphicon-user"></span> Engineer</h4>
									<div class="progress">
									  <div class="progress-bar progress-bar-striped active" style="width: 60%;">
										60%
									  </div>
									</div>
								 <div  class="pull-right" id="onChange1">
									  <input type="number" name="bus1" value="60" class="btn-info"/>
									  <span class="glyphicon glyphicon-ok btn-success"></span>
								  </div>
							</div> <!--./#progress-->
							
							 <!--#progress-->
							<div id="progress1">
								  <div class="btn-group" role="group">
									<span class="btn-default">Choose your viewers:</span>
								  </div>
									<div class="btn-group">
									  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										Aleatory <span class="caret"></span>
									  </button>
									  <ul class="dropdown-menu" role="menu">
										<li><a href="#">Engineer</a></li>
										<li class="divider"></li>
										<li><a href="#">Programmeur</a></li>
										<li class="divider"></li>
										<li><a href="#">New paper</a></li>
									  </ul>
									</div>
									<h4 class="text-muted pull-right"><span class="glyphicon glyphicon-user"></span> Engineer</h4>
									<div class="progress">
									  <div class="progress-bar progress-bar-striped active" style="width: 60%;">
										60%
									  </div>
									</div>
								 <div  class="pull-right" id="onChange1">
									  <input type="number" name="bus1" value="60" class="btn-info"/>
									  <span class="glyphicon glyphicon-ok btn-success"></span>
								  </div>
							</div> <!--./#progress-->
				
							
							<div class="row"> 
								<div class="col-lg-12">
									<input type="submit" class="btn btn-success btn-block form-control" name="submit" value="Save change">
								</div>
							 </div>
					
					</form><!--./form option-->

				 </div>
	          
	        </div>

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
