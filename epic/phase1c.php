<!DOCTYPE=html>
<html lan="en">
<head>
	<link rel="stylesheet" href="style.css"/>
	<meta charset="UTF-8">
	<Title>Phase One</Title>
<body>
<h1>Entities and Attributes</h1>
<h2>User</h2>
<ul>
	<li>userID(Strong Entity)</li>
	<li>userName</li>
	<li>userPhoneNumber</li>
	<li>userEmailAddress</li>
</ul>
<h2>reservation(Strong Entity)</h2>
<ul>
	<li>reservationID</li>
	<li>reservationDate</li>
	<li>reservationTime</li>
	<li>reservation</li>
</ul>
<h2>confirmationEmail(Weak Entity)</h2>
<ul>
	<li>userID</li>
	<li>userEmailAddress</li>
	<li>reservationID</li>
	<li>reservationDate</li>
	<li>reservationTime</li>

</ul>
</body>