<!DOCTYPE html>
<html>
<head>
	<title>The Wine Pages</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="winePagesUI.css">
	<link rel="icon" type="image/ico" href="logo.png" />
</head>
<body>
	<div class="header">
	<p><span>Wine / Pages <span>| Admin Page</span><span><img src="logo.png"></p>
    </div>
  <div class="topnav">
  <a class="active" href="index.php">Home</a>
  <form class="searchbox" id="searchbox" action="searchbox_results.php" method="post">
  	<input name="search_keyword" type="text" placeholder="Browse inventory...">
  	<button type="submit"><i class="fa fa-search"></i></button>
  </form>
  <a href="uiRegistration.php">Manage Users</a>
  <a href="uiFavourite.php">Manage Favorites</a>
  <a href="uiInventory.php">Inventory Stats</a>
</div>

<h1 class="FormTitle">Browse our local wines!</h1>
	<form class="Search2" id="AlternateSearch">

		<div>
			Grape Color:
			<label for="Red">Red</label>
			<input id="Red" type="radio" name="Color" value="Red" required>
			<label for="Purple">Purple</label>
			<input id="Purple" type="radio" name="Color" value="Purple" required>
			<label for="Green">Green</label>
			<input id="Green" type="radio" name="Color" value="Green" required>
			<label for="Black">Black</label>
			<input id="Black" type="radio" name="Color" value="Black" required>
		</div>
		<div>
			<label for="WineryName">Winery Name:</label>
			<select name="WineryName">
				<option>Winery</option>
				<option>St. Hubertus & Oak Bay Estate</option>
				<option>Gehringer Brothers Estate</option>
				<option>King Estate Suppliers</option>
				<option>The Durell Vineyard</option>
				<option>Chateau Montelena Estate</option>
			</select>
		</div>
		<button>Search</button>
	</form>
</body>
</html>