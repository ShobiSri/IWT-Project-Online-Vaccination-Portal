<?php
require("../php/session.php");
$ActivePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Care Point | Payment </title>
	<link rel="icon" type="image/x-icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/aboutUs.css">
	<link rel="stylesheet" type="text/css" href="../css/head_foot_style.css">


<?php
require("header.php");
?>

</head>
<body>
	<script>
        document.getElementById("<?php echo $ActivePage ?>").classList.add('active');
    </script>
    
	<div id="set1">
		<div class="payment">
			
		<form action="">
			<div class="row">
				
					<div class="col">
						<h1>Payment Portal</h1>

						<div class="inputbox">
							<span>Full name:</span>
							<input type="text" placeholder="John wick">
						</div>
						<br>
						<div class="inputbox">
							<span>Email:</span>
							<input type="text" placeholder="example@mail.com">
						</div>
						<br>
						<div class="inputbox">
							<span>address:</span>
							<input type="text" placeholder="city-street - area">
						</div>
						<br>
						<div class="inputbox">
							<span>Zip code:</span>
							<input type="text" placeholder="1023">
						</div>
						<br>
						<div class="inputbox">
							<span>Cards accepted</span>
							<img src="../images/card_img.png" alt="">
						</div>
						<br>
						<div class="inputbox">
							<span>Name on card::</span>
							<input type="text" placeholder="Mr.John wick">
						</div>
						<br>
						<div class="inputbox">
							<span>card number:</span>
							<input type="number" placeholder="1023-1111-1111-1111">
						</div>
						<br>
						<div class="inputbox">
							<span>exp month:</span>
							<input type="text" placeholder="january">
						</div>
						<br>
						<div class="inputbox">
							<span> exp year:</span>
							<input type="number" placeholder="2022">
						</div>
						<br>
						<div class="inputbox">
							<span>CVV:</span>
							<input type="text" placeholder="119">
						</div>
					</div>
			</div>
             <br>
			<input type="submit" value="Proceed to checkout" class="submit-btn">
		</form>
		</div>
	</div>
<?php
require("footer.php");
?>

</body>
</html>