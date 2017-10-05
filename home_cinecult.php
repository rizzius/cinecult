<!doctype html>
<html>
<head>
<title>Home Cinecult</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="widht=device-widht, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="stilecss.css">
<script type="text/javascript">
	
        $('document').ready(function(){
	    $('#mostra').bind('click', mostra);
		 $('#nascondi').bind('click', nascondi);
       
       
			
			
			
	    function nascondi() {
			$('#carousel').slideUp(1000);
			
			}
		
			
			 function mostra() {
			$('#carousel').slideDown();
			}
		

});
	
	


</script>


</head>

<body>





<div id="headerWrap" class="wrap">
 <nav id="mainNav" class="navbar navbar-inverse" role="navigation">
     <div class="container-fluid">
	 <!--logo-->
	 <div class="navbar-header">
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
	 <span class="icon-bar"></span>
     <span class="icon-bar"></span>
	 <span class="icon-bar"></span>
	 </button>
	 <a href="home_cinecult.php" class="navbar-brand">CINECULT</a>
	 </div>
	 <div class="collapse navbar-collapse" id="mainNavBar">
        <ul class="nav navbar-nav">
	         <li class="active"><a href="home_cinecult.php">Home</a></li>
  
	
	  <li>
	 <a href="DVDphp.php">Dvd</a>
     </li>	
	 
	 <li><a href="carrello.php">Carrello</a></li>
	 <li><a href="about_us.html">About us</a></li>
	    </ul>
	    
	   
	 
	 <ul class="nav navbar-nav navbar-right">
	 <li><a href="login.html">Login</a></li>
	 </ul>
	 
	 	 
     </div>
	 
	 
	 
	 </div>
</nav>
	</div>
	
	
<div class="container" >
<!--carosello-->

  <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
	<!--indicatore immagini-->
	    <ol class="carousel-indicators" >
		<li data-target="#carousel" data slide="0" class="active"></li>
		<li data-target="#carousel" data slide="1"></li>
		<li data-target="#carousel" data slide="2"></li>
	    </ol>
	 <!--commento immagini-->
	    <div class="carousel-inner" >
	    	<div class="item active">
	    	<img src="img/apocalipse_now.jpg"/>
	    		
	    	</div>
	    	<div class="item">
	    	<img src="img/cera_una_volta_in_america.jpg"/>
	    		
	    	</div>
	    	<div class="item">
	    	<img src="img/taxi_driver.jpg"/>
	    		
	    	</div>
	    </div>
	
	
   </div>
<!--controlli-->
   <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
   	<spam class="glyphicon glyphicon-chevron-left"></spam>
   </a>
   <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
   	<spam class="glyphicon glyphicon-chevron-right"></spam>
   </a>
</div>	

<input type="button" id="mostra" value="Mostra Slideshow">
<input type="button" id="nascondi" value="Nascondi Slideshow">










<!--Content-->
<div id="content">
<div class="row" id="services">
	<h2 class="text-center">Servizi</h2>
	<div class="col-md-6 text-center">
		<div class="service">
			<i class="fa fa-film fa-2x" aria-hidden="true"></i>
			<h3>Le nostre offerte</h3>
		</div>
	</div>
	<div class="col-md-6 text-center">
		<div class="service">
			<i class="fa fa-film fa-2x" aria-hidden="true"></i>
			<h3><a href="recensioni.html">Recensioni degli utenti</a></h3>
		</div>
	</div>
</div>

	
</div>

















<div id="footerWrap">
	<footer class="container">
		<p class="text-center">Copyright &copy; 2017 <br> Via Genova 91/32 <br> Tel:011-9042040 <br> E-mail: cinecult@info.it</p>
	</footer>
</div>
	
	
	
	
	
</body>
</html>
