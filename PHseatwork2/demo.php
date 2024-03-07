<html>
	<head>
		<title>Demo Pic</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
	</head>
	
	<body>
		<h1>Demo Pic</h1>
		
		<?php
		/*
		
			$folder = 'pic/';
			$images = glob($folder. '*.{jpg, jpeg, png, gif}', GLOB_BRACE);
		
			$x = 0;
			foreach($images as $image) {
				
				echo $x++;
				echo "<img src = '$image' width='500px'>";
				echo "<br>";
				
			}
			
		*/
		?>

    <div class="container">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width:1000px;">
			<ol class="carousel-indicators">
				
				<?php
					
				$folder = 'pic/';
				$images = glob($folder. '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
				
				$x = 0;
				foreach($images as $image){
					if($x ==0){
							 
						echo "<li data-target='#mycarousel' data-slide-to='0' class = 'active'></li>";
							 
					} else {

						echo "<li data-target='#mycarousel' data-slide-to='$x'></li>";
							
					}
						 
					$x++;
						 
				}
					?>
					
			</ol>
				
			<div class = "carousel-inner">
			
				<?php

				$x = 0;
				foreach ($images as $image) {
					if ($x == 0) {
						echo "
							<div class='item active'>
								<img src='$image' width='1000px' height='1000px'>
								<div class='carousel-caption'>
									<h3>Karasuno</h3>
									<p>All players for Karasuno team...</p>
								</div>
							</div> ";
					} else {
						echo "
							<div class='item'>
								<img src='$image' width='1000px' height='1000px'>
								<div class='carousel-caption'>
									<h3>All Team in Haikyu</h3>
									<p>All players different team...</p>
								</div>
							</div> ";
					}
					
					$x++;
					
				}
				?>

				<a class="left carousel-control" href="#mycarousel" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>

				<a class="right carousel-control" href="#mycarousel" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
	
</body>
	
</html>