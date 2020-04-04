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
<h1 class="FormTitle">Registration Form to Add New Customers</h1>
	<form class="Search2" id="Registration" action="insert_customers.php" method="post">
		<div>
		<label for="FullName">Full Name:</label>
		<input type="text" name="FullName" placeholder="John P Smith" size="30" required>
		</div>

		<div>
		<label for="Address">Address:</label>
		<input type="text" name="Address" placeholder="2222 Adelaide St, Toronto" size="30" required>
		</div>

		<div>
		<label for="Age">Age:</label>
		<input type="number" name="Age" placeholder="21" size="1" min="1" max="130" required>
		</div>

		<button>Submit</button>
	</form>

</body>
</html>