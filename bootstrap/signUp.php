<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style.css" rel="stylesheet">

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
        <div id="main_area">
        
		    <div class="navbar-wrapper">
			   <div class="container">
				   <div class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
							</button>
							<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-share"></span> ToPiCRooF</a>
						</div>
					 </div>
		           </div>
		     </div>
		     
    	</div>

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-12 ddescription_signUp">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla.</p>
        </div>
      </div>
	</hr> <!-- /END THE FEATURETTES -->
	
	<div class="alert col-lg-offset-1 col-lg-10 alert-danger" id="alert_Error">
		<strong>Danger ! Danger ! vDanger !Danger !Danger !Danger !Danger !Danger !Danger !Danger !Danger !Danger !</strong>
	</div>

           <!-- form sign Up-->
                <form class="form-horizontal col-lg-12 form_signUp" method="post" action="#" id="form_signUp">
					  <div class="form-group">
						<legend><h1 class="text-muted">Sign Up</h1></legend>
					  </div>
						 <div class="input-group col-lg-12"> 
							  <label class="input-group-addon" for="name">Name</label>
							  <input type="text"  name="name" class="form-control" placeholder="Your name" id="name">
						 </div>
						  
						 <div class="input-group col-lg-12"> 
							  <label class="input-group-addon" for="email">Email</label>
							  <input type="email" name="email" class="form-control" placeholder="Your email" id="email">
						 </div>
						  
						 <div class="input-group col-lg-12"> 
							  <label class="input-group-addon" for="password">Password</label>
							  <input type="password" name="password" class="form-control" placeholder="Your password" id="password">
						 </div>

						  <div class="col-lg-12">
							<label for="select" class="input-group-addon">What's your business?</label>
							<select id="select" class="form-control" >
							  <option>Option 1</option>
							  <option>Option 2</option>
							  <option>Option 3</option>
							</select>
						  </div>
						<div class="row"> 
							<div class="col-lg-12">
								<input type="submit" class="btn btn-success btn-block form-control" name="submit" value="Sign Up">
							</div>
						 </div>
					
				</form><!--./form sign Up-->

      <!-- FOOTER -->
      <footer class="col-lg-12">
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        
		     <!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="bootstrap/js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/js.js"></script>
      </footer>
	</div>
    </div><!-- /.container -->
  </body>
</html>
