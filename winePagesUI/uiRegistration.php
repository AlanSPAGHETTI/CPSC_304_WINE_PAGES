<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages: Registration</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="winePagesUI.css">
	<link rel="icon" type="image/ico" href="logo.png" />
</head>
<body>
	<div class="header">
	<p><span>Wine / Pages <span>| CPSC 304</span></span><img src="logo.png"></p>
    </div>

   <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <form class="searchbox" id="searchbox" action="searchbox_results.php" method="post">
  	<input name="search_keyword" type="text" placeholder="Search our local wines...">
  	<button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="uiRegistration.php">Customer Registration</a>
  <a href="uiFavourite.php">Favourites</a>
  <a href="uiAdmin.php">Administrator's Page</a>
</div>
<h1 class="FormTitle">Registration Form to Add New User</h1>
	<form class="RegistrationForm" id="Registration">
		<div><label for="FirstName">First Name:</label>
		<input type="text" name="FirstName" placeholder="John" required>
		<label for="LastName">Last Name</label>
		<input type="text" name="LastName" placeholder="Smith" required></div>

		<div>
			<label for="Male">Male</label>
			<input id="Male" type="radio" name="Gender" value="Male" required>
			<label for="Female">Female</label>
			<input id="Female" type="radio" name="Gender" value="Female" required>
			<label for="Other">Other</label>
			<input id="Other" type="radio" name="Gender" value="Other" required>
		</div>
		<div>
			<label for="Email">Email</label>
			<input type="email" id="Email" name="Email" placeholder="Your Email" required>
		</div>
		<div>
			<label for="Birthday">Birthday:</label>
			<select name="Day">
				<option>Day</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<select name="Month">
				<option>Month</option>
				<option>January</option>
				<option>February</option>
				<option>March</option>
			</select>
			<select name="Year">
				<option>Year</option>
				<option>2018</option>
				<option>2019</option>
				<option>2020</option>
			</select>
		</div>
		<button>Submit</button>
	</form>

</body>
</html>