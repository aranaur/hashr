<?php
	require_once("function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hashr</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link href="main.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito|Orbitron" rel="stylesheet">

</head>
<body>
	<div class="container header">
		<div class="row justify-content-around">
			<div class="col-12 col-md-6">
				<form name ="hashform" method="post" onsubmit="return validateform()">
					<label>Input string: </label>
					<input type="text" size="25" name="input" required oninvalid="this.setCustomValidity('You can\'t leave the input string blank!')">
					</div>
					<div class="col-12 col-md-6">
					<input type="submit" class="submit" name="submit" value="Hash!">
				</form>
			</div>
		</div>
		<br>
			<?php
			$odds = 0;
			foreach (hash_algos() as $algo) {
				if ($odds%2 == 0){
					echo "			<div class='row equal justify-content-around'>\n";
				}?>
				<div class='col-10 col-md-6'>
					<div class="hash_algo">
						<p class="algo"><b><?= $algo; ?></b></p>
						<p class="hash">Hash: <span style="font-family: Nunito"><?= $hashes[$algo]; ?></span></p>
						<small>Execution time: <span class="exec-time" style="font-family: Nunito"><?= number_format($hashTime[$algo] * 1000000000, 0); ?> nanoseconds</span></small>
					</div>
				</div>
				<?php
				if ($odds%2 == 1){
					echo "</div>\n";
				}
				$odds++;

			} ?>
	</div>
</body>
</html>
