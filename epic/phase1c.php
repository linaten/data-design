<!DOCTYPE=html>
<html lan="en">
<head>
	<link rel="stylesheet" href="style.css"/>
	<meta charset="UTF-8">
	<Title>Phase Two</Title>
<body>
<h1>Entities and Attributes</h1>
<h2>user (Strong Entity)</h2>
<ul>
	<li>userID (primary key)</li>
	<li>userHash (primary key)</li>
	<li>userEmailAddress(primary key)</li>
</ul>
<h2>restaurant (Strong Entity)</h2>
<ul>
	<li>restaurantID (primary key)</li>
	<li>restaurantHash</li>
	<li>restaurantEmailAddress</li>
</ul>
<h2>reservation (Weak Entity)</h2>
<ul>
	<li>reservationUserID (foreign key)</li>
	<li>reservationRestaurantID (foreign key)</li>
</ul>

<div class="container">
	<img id="diagram" src="Diagram2.jpg"
</div>
</body>
</html>