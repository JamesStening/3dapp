
<?php
#This bit forces the user to view the site with https
#because the 3d model had some issues with secure and non-secure in and out of iframes during initial testing
if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<!-- Awsomefont -->
	<!--<link rel="stylesheet" href="css/all.css"> <!--Icons do not show when I put the identical file in my own directory-->
	<!--<link rel="stylesheet" href="http://users.sussex.ac.uk/~martinwh/3dapp/3dapp/lab1/css/all.css">--> <!--This no longer works-->
	<!--<link rel="stylesheet" href="http://users.sussex.ac.uk/~martinwh/3dapp/labs/css/custom.css">-->
	
	<!--the IT system is blocking me accessing basically all folders including the css, had to move them into main directory-->
	<!-- Managed to resolve the week before deadline -->
	<link rel="stylesheet" href="css/bootstrap.css"><!--[4]-->
	<link rel="stylesheet" href="css/all.css"><!--[2]-->
	<link rel="stylesheet" href="css/jamie.css">


	


    <title>Drinks, A History</title>
	
	
	
	
	
	
</head>


<body>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script><!-- [6] -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.js"></script><!-- [5] -->
    <!--<script src="js/bootstrap.js"></script> ha as if the server lets me use folders-->
	<script src="js/bootstrap.js"></script><!--[4]-->
	
	
	<link rel="stylesheet" type="text/css" href="https://x3dom.org/release/x3dom.css"><!-- [8] -->
	<script type='text/javascript' src='https://www.x3dom.org/x3dom/release/x3dom.js'></script>
	<script type='text/javascript' src='js/modelControls.js'></script>
	
	
	
	
	
	<form method="post" action="index.php">
    <nav class=" navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container-fluid">
    
			<div class=" row">
				<div class="cols-sm-12" sytle="background-colour: red;">
					
				</div>
			</div>
			
			<!-- Brand -->
			<a class=" navbar-brand" href="#">Coca Cola Journey</a>
			<!-- End of Brand -->
			
			<!-- collapsable navbar button -->
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse ">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- Collapsable navbar -->
			<div class="collapse navbar-collapse">
				<!-- Links-->
				<ul class=" navbar-nav ml-auto">
					<li class=" nav-item">
						<button type="submit" class="nav-link" name="home">Home</button>
						<!--<a class="nav-link" href="#">Home</a>-->
					</li>
					<li class=" nav-item">
						<button type="submit" class="nav-link" name="about">About</button>
						<!--<a class="nav-link" href="#">About</a>-->
					</li>

					<!--Dropdown-->
					<li class=" nav-item ">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Drinks</a>
						<div class=" dropdown-menu">
							<button type="submit" class="dropdown-item" name="coke">Cola</button>
							<button type="submit" class="dropdown-item" name="sprite">Sprite</button>
							<button type="submit" class="dropdown-item" name="pepper">Pepper</button>
							
						</div>
					</li>

				</ul>
			</div>
		</div>
	
    </nav>
	</form>

<?php
	#if(isset($_POST["home"])) {
	if(isset($_POST["home"]) or empty($_POST)) {
		#could use switch case, allows default, just did this as a stop gap while making the other sections
		
		echo'
		<!-- Main body -->
		<div class="container-fluid"><!--changing this to just container leaves whitespace-->
			<div class="row">
				<div class="col-sm-12" style="background-color: red;">
					<div class="card.my-2" height="363px" align="center">
						<br>
						<img src="images/main_3D.jpg">
						<br><br>
					</div>
				</div>
			</div>
			<!--[3]-->
			<div class="row">
				<div class="col-sm-4" style="background-color: lavenderblush;">
					<img src="images/coca_cola.jpg" style="margin-top: 10px"><br>
					<h2>Coca Cola</h2>
					
					<p>
					History of Coca Cola: 1886-1892
					Atlanta Beginnings: It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled.
					Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs\' Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs\' Pharmacy put it on sale for five cents (about 3p) a glass.
					</p>				
				</div>
				
				<div class="col-sm-4" style="background-color: lightgray;">
					<img src="images/sprite.jpg" style="margin-top: 10px"><br>
					<h2>Sprite</h2>
					
					<p>
					First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world\'s leading lemon and lime flavoured soft drink and is sold in more than 190 different countries.
					Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories. 
					</p>				
				</div>
				
				<div class="col-sm-4" style="background-color: lavender;">
					<img src="images/dr_pepper.jpg" style="margin-top: 10px"><br>
					<h2>Dr Pepper</h2>
					
					<p>
					Dr Pepper\'s unique, sparkling blend of 23 fruit flavours has been around for well over a century and it\'s still the same, with that distinctive flavour you just can\'t quite put your tongue on.
					It was created by Texas pharmacist Charles Alderton in 1885. He gave a sample of the first ever batch to Wade Morrison, a local shop owner, and Mr Morrison instantly agreed to stock the drink. The distinctive, bold taste of Dr Pepper has been popular ever since.
					</p>
					<!--[7]-->
				</div>
				
			</div>
		</div>
		<!-- End of Main body -->
	';
	}
	
	
	
	
	
	#moved the buttons into a seperate function for reusability
	function modelButtons() {
		echo '
		
	<div class="row">
		<div class="col">
			<div class="">
				Camera
			</div>
			<div id="modelCamera" class="">
				<a href="#" class="btn" onclick="camera1()">Camera 1</a>
				<a href="#" class="btn" onclick="camera2()">Camera 2</a>
				<a href="#" class="btn" onclick="camera3()">Camera 3</a>
			</div>
		</div>
		
		
		<div class="col-sm-4">
			<div class="">
				Lights
			</div>
			<div id="modelLights" class="">
				<a href="#" class="btn lightButtOn" onclick="light(1)" id="l1">Light 1</a>
				<a href="#" class="btn lightButtOn" onclick="light(2)" id="l2">Light 2</a>
				<a href="#" class="btn lightButtOn" onclick="light(3)" id="l3">Light 3</a>
				<a href="#" class="btn lightButtOn" onclick="light(4)" id="l4">Light 4</a>
				<a href="#" class="btn lightButtOn" onclick="light(5)" id="l5">Light 5</a>
				<a href="#" class="btn lightButtOn" onclick="light(6)" id="l6">Light 6</a>
				<a href="#" class="btn lightButtOn" onclick="light(0)" id="l0">All On</a>
			</div>
		</div>
		
		<div class="col-sm-4">
			<div class="">
				Controls
			</div>
			<div class="" >
				<a href="#" class="btn" onclick="animationStart()">Start </a>
				<a href="#" class="btn" onclick="animationSlow()">Start Slower</a>
				<a href="#" class="btn" onclick="texture()">Change Texture</a>
			</div>
		</div>
	</div>
		';
	}
	
	
	
	
	
	
	
	if(isset($_POST["coke"])) {

		echo'
		<div id="models" class="card-body"  >
		
				<div id="main_3d_image" class="row col-sm-12">
						<x3d id=”model3D”  > 
						<scene pickmode="idBuf">
							<inline mapDEFToID="true"  nameSpaceName="model" url="https://users.sussex.ac.uk/~js765/3dapp/3Dsmax/export/coke.X3D"  onload="enter()" > </inline>
						</scene> 
						</x3d>    
				</div>
				
				';
				modelButtons();
		echo '
		</div>
		';
				
		
	}
	
	if(isset($_POST["sprite"])) {
		echo'
		<div class="card-body row" width="auto">
		Exceptional circumstances prevented me doing most of the work, including making the other models.<br>
		Although I am sure I did a sprite bottle but have not been able to find it.<br>
		</div>
		
		<div id="models" class="card-body" width="auto" >
		';
		modelButtons();
		echo'
		</div>
		';
	}
	
	if(isset($_POST["pepper"])) {
		echo'
		Exceptional circumstances prevented me doing most of the work, including making the other models.<rb>
		';
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST["about"])) {
		echo'<p>About coming soon</p>
		<a href="https://github.com/JamesStening/3dapp">My Github Repository</a>
		';
	}
	?>
	
	
	
	
	
	
	
	<br><!--there cause css not yet-->
	
	<!-- Footer -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="containter-fluid"><!--could remove fluid-->
			<div class="row">
				<div class="col-sm-3">
					<div class="navbar-text float-left copyright">
						<p><span class="allign-baseline">&copy 2020 </span></p>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="navbar-text float-center social">
						<a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
						<a href="#"><i class="fab fa-twitter fa-2x"></i></a>
						<a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
						<a href="#"><i class="fab fa-github-square fa-2x"></i></a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="navbar-text float-left">
						<a href="statement.html">Statement of Originality</a>
						<br>
						<a href="https://github.com/JamesStening/3dapp">Github</a>
					</div><!--this refuses to use the actual width-->
				</div>
			</div>
		</div>
	</nav>
	<!-- End of Footer -->
	<!-- [9] -->



    
	
	
	
</body>
</html>

<!-- [] -->