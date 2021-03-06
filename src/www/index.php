<?php require_once('index.ctrl.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>EveryBill Pokébag</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div>
		<h1 class="text-center" style="margin-top: 20px;">Welcome to the EveryBill Pokémon Bag Application</h1>
		<div class="container" style="margin-top: 35px;">
			<div class="text-center" style="margin-bottom:10px;">
				The purpose of this exercise is not to see your coding skills, but to assess how you work as a team, how you deal with unfamiliar technologies, and how you think when approaching problems.
			</div>
			<div>
				Start by reading all instructions, and then drawing a plan and outlining the steps your team will take to accomplish this 'project.' The planning phase, as you might know, is the most important one in building a product.
				<i><b>ATTN: EveryBill engineers will gladly work with you to help your team build the plan.</b></i>
			</div>
			<div class="row" style="margin-top:25px;">
				<div class="list-group col-4" id="myList" role="tablist">
				  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#db" role="tab">Database Configuration</a>
				  <a class="list-group-item list-group-item-action" data-toggle="list" href="#python" role="tab">Python Script</a>
				  <a class="list-group-item list-group-item-action" data-toggle="list" href="#web" role="tab">Web Application</a>
				</div>

				<!-- Tab panes -->
				<div class="tab-content col-8">
				  <div class="tab-pane active" id="db" role="tabpanel">
			  		Our friendly team of engineers have already configured the server for you, however:
			  		<ul>
			  			<li>You will need to check if APACHE, PHP-FPM, and MySQL are running correctly on the server.</li>
			  			<li><i><b>HINT</b>: Just ask an EveryBill engineer; they might give you the answer!!</i></li>
			  		</ul>
			  		We will be using ADMINER, which is a MySQL Database Management System in a single PHP file.
					<ul>
						<li>*Search for the file location.</li>
						<li>*Navigate to ADMINER on the browser.</li>
						<li>Login with the MySQL user assigned to your team.</li>
						<li><i><b>Check if the database "ebpokemon" exists. If not, please create it.</b></i></li>
					</ul>
				  </div>
				  <div class="tab-pane" id="python" role="tabpanel">
				  	We created a Python script that scrapes data from a Pokédex web application and stores data to the database.
				  	<ul>
				  		<li>You will need to read the script before beginning work.</li>
				  		<li>*You will need to add your database credentials to the Python script in order to be able to connect and execute queries.</li>
				  		<li><i><b>ATTN</b>: There are two ways to populate the database!! They are both implemented in the Python script.</i></li>
				  	</ul>
					After running the script, please check the database for any issues. Let your supervisor know if you have any issues with the script.
				  </div>
				  <div class="tab-pane" id="web" role="tabpanel">
				  	You are now ready to start building your PHP-based web application.
					<ul>
						Your team supervisor can assist your team with terminology and syntax since not all of you are familiar with PHP.
						The actions users should be able to perform on your web application include:
						<li>Pick a Pokémon from a dropdown list</li>
						<li>Show the details for a selected Pokémon</li>
						<li>See the Pokémon bag at all times</li>
						<li>Add Pokémon to the bag</li>
						<li>Be restricted to a maximum of 6 Pokémon in the bag (<i><b>You cannot add more than 6 Pokémon to a bag!!</b></i>)</li>
						<li>Remove a Pokémon from the bag</li>
					</ul>
				  </div>
				</div>
			</div>
			<!-- <div class="row">
			For the purpose of this exercise, you will not need to configure the server. Our nice team of engineers already did that for you.
			You will need to check the following:
			<ul>
				<li>You will need to check if APACHE, PHP-FPM and MySQL are running correctly on the server</li>
				<li><i><b>HINT</b>: Just ask an everybill engineer, they might give you the answer!!</i></li>
			</ul>
				<div class="list-group" id="myList" role="tablist">
					<a class="list-group-item list-group-item-action active" data-toggle="list" href="#listdb" role="tab">Database Configuration</a>
					<a class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="python">Python Script</a>
					<a class="list-group-item list-group-item-action" data-toggle="list" role="tab" aria-controls="web">Python Script</a>
				</div>
				<div class="tab-content">
					<div class="tab-pane fade show active" id="listdb" role="tabpanel" aria-labelledby="list-db-list">
					</div>
				</div>
				<div class="tab-pane fade" id="list-python" role="tabpanel" aria-labelledby="list-python-list">
					We created a python script that scrapes data from a pokedex web application and stores the data to the database.
				</div>
			</div> -->
		</div>
	</div>
</body>
</html>