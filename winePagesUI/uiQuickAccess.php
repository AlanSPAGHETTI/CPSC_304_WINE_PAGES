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

<h2 class="FormTitle">Quick Access Panel</h2>	

	<form class="Search2" id="AlternateSearch" action="selection_query.php" method="post">
        <h4>Selection Query for the Wine Table:</h4>
		<div>
			<label for="FieldOne">Select a Field to Display:</label>
			<select name="FieldOne" required>
				<option value="" disabled selected>Disp. Attr</option>
				<option value="WineID">WineID</option>
				<option value="WineryID">WineryID</option>
				<option value="WineName">WineName</option>
				<option value="WineYear">WineYear</option>
				<option value="WineCost">WineCost</option>
				<option value="WineABV">WineABV</option>
			</select>
		</div>
		<div>
			<label for="FieldTwo">Select a Comparison Field:</label>
			<select name="FieldTwo" required>
				<option value="" disabled selected>Comp. Attr</option>
				<option value="WineID">WineID</option>
				<option value="WineryID">WineryID</option>
				<option value="WineYear">WineYear</option>
				<option value="WineCost">WineCost</option>
				<option value="WineABV">WineABV</option>
			</select>
		</div>
		<div>
			<label for="Operator">Where the Comparison Field is:</label>
			<select name="Operator" required>
				<option value="" disabled selected>Operator</option>
				<option value="<"><</option>
				<option value=">">></option>
				<option value=">=">>=</option>
				<option value="<="><=</option>
				<option value="=">=</option>
				<option value="<>">!=</option>
			</select>
		</div>
		<div>
		<label for="Value">Than/To the Following Value:</label>
		<input type="text" name="Value" size="30" required>
		</div>
		<button>Search</button>
	</form>


</body>
</html>