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
	<li>userName</li>
	<li>userPhoneNumber</li>
	<li>userEmailAddress</li>
</ul>
<h2>reservation(Strong Entity)</h2>
<ul>
	<li>reservationID (primary key)</li>
	<li>reservationDate</li>
	<li>reservationTime</li>
</ul>
<h2>confirmation(Weak Entity)</h2>
<ul>
	<li>confirmationUserID (foreign key)</li>
	<li>confirmationReservationID (foreign key)</li>
</ul>

<div class="container">
	<img id="diagram" src="Diagram.jpg"
</div>
</body>
</html>