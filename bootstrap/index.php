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
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">connexion</button>
						<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-share"></span> ToPiCRooF</a>
					</div>
						<div class="navbar-collapse collapse" id="navbar-main">
						    <form class="navbar-form navbar-right" role="sign in" method="post" action="#"   id="form_logIn">
						        <div class="form-group">
						            <input type="text" class="form-control" name="email" placeholder="Email">
						        </div>
						        <div class="form-group">
						            <input type="text" class="form-control" name="password" placeholder="Password">
						        </div>
						        <button type="submit" class="btn btn-primary">Connexion</button>
						    </form>
						</div>
			     </div>
               </div>
         </div>
         
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row" id="top_Carousel">
                            <div class="col-sm-8" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>

                                        <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>

                                        <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>

                                        <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--/Slider-->
                
                <!-- form sign Up-->
                <form class="form-horizontal col-lg-4 form_signUp_index" method="post" action="#" id="form_signUp">
					  <div class="form-group">
						<legend><h1 class="text-muted"><span class="glyphicon glyphicon-user"></span> Sign Up</h1></legend>
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

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img src="bootstrap/icon/one.gif"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img src="bootstrap/icon/two.gif"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img src="bootstrap/icon/three.gif"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img src="bootstrap/icon/four.gif"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
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
