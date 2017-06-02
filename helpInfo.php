<html>
<head>
	<title>REQUEST FOR HELP</title>
	
</head>
<body>
	<h1>please fill up the form</h1>

	<form method="post" action="ProcessDonor.php">
		<label for="fname">First Name</label>
		<input type="text" size="10" name="fname"/>
		<p>
		<label for="lname">Last Name</label>
		<input type="text" size="10" name="lname"/>
		<p>
		<label for="address">Full Address</label>
		<input type="text" size="150" name="address"/>
		<p>
		<label for="donation">Money amount</label>
		<input type="int" size="10" name="Mdonation"/>
		<p>
		<label for="clothes">Blood amount</label>
		<input type="text" size="100" name="Bdonation"/>
		<p>
		<label for="clothes">Cause</label>
		<input type="text" size="100" name="cause"/>
		<p>
		<label for="clothes">Deadline</label>
		<input type="text" size="100" name="deadline"/>
		<p>
			<input type="submit" value="submit" class="inline"/>
			<input type="reset" value="cancel" class="inline"/>
		</p>
	</form>