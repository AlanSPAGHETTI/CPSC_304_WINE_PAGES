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
   <a href="uiQuickAccess.php">Quick Access Panel</a>
</div>

<h1 class="FormTitle">Welcome to the Wine Pages Admin Page!</h1>

<h3>Quick Access Panel:</h3>
	
	<form class="Search2" id="AlternateSearch">

		<div>
			Selection Query for Wine Table:
			<label for="FieldOne">Select a Field to Display:</label>
			<select name="FieldOne" required>
				<option value="" disable selected>Attribute</option>
				<option value="WineID">WineID</option>
				<option value="WineryID">WineryID</option>
				<option value="WineryName">WineName</option>
				<option value="WineYear">WineYear</option>
				<option value="WineCost">WineCost</option>
				<option value="WineABV">WineABV</option>
			</select>
		</div>
		<div>
			<label for="FieldTwo">Select a Comparison Field:</label>
			<select name="FieldTwo">
				<option value="" disable selected>Attribute</option>
				<option>WineID</option>
				<option>WineryID</option>
				<option>WineYear</option>
				<option>WineCost</option>
				<option>WineABV</option>
			</select>
		</div>
		Where the Comparison Field is:

		<button>Search</button>
	</form>

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