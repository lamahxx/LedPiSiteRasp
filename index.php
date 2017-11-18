<!DOCTYPE html>
<html>
<title>Franky Pi</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://googleapis.com/css?family=Lato">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
		body,h1,h2 {font-family : "Lato"; sans-serif}
		body,html {height: 100%}
		p {line-height : 2}
		.bgimg{ 
			min-height: 100%;
			background-position: center;
			background-size: cover; 
		}

		.bgimg {background-image: url("https://i.imgur.com/4c8hBV0.jpg")}
		</style>

	<body>

		<?php 
		if(isset($_POST['Led']))
		{
			exec("sudo python /home/pi/rpi_ws281x/python/examples/strandtest.py");
		}
		?>
	

		<header class="w3-display-container w3-wide bgimg w3-grayscale-mine" id="home">
			<div class="w3-display-middle w3-text-white w3-center">
				<h1 class="w3-jumbo">
					<?php 
						if (isset($_POST['password']) AND
						 $_POST['password'] == "netflix")
						{
							echo 'Welcome Master';		
						}
						else 
						{
							echo 'What are you doing Stranger';
						}
						?>
				</h1>
				<?php 
				if(isset($_POST['password']) AND $_POST['password'] == "netflix")
					?>
				
					<form method="post">
						<button class="btn" name="Led">CLIQUEZ BANDE DE SALOPES</button>
					</form>
				


				<h2><b>nothing here matters...</b></h2>
				<p><?php echo date('d/m h:i'); ?>
			</div>
		</header>

		<footer class="w3-center w3-black w3-padding-16">
			<p>Powered by Lamahxx</p>
		</footer>
	</body>
</html>