<?php
	#echo 'Hello';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/app.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<!-- registration -->
			<div class="col-md-6">
				<h2>Teachers Registation Form</h2>
				<form method="POST" action="teacher_register_post.php">
					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<label for="firstname">First Name</label>
								<input type="text" name="firstname" class="form-control" id="name" placeholder="First Name">
							</div>	
							<div class="col-md-4">
								<label for="middlename">Middle Name</label>
								<input type="text" name="middlename" class="form-control" id="middlename" placeholder="Middle Name">
							</div>
							<div class="col-md-4">
								<label for="lastname">Last Name</label>
								<input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name">
							</div>	
						</div>
					</div>	
					
					<div class="form-group">
						<h4>Gender</h4>
						<input type="radio" name="gender" value="male" checked> Male<br>
						<input type="radio" name="gender" value="female"> Female<br>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<h4>Date Of Birth</h4>
							</div>
							<div class="col-md-4">
								<label for="day">Day</label>
								<select class="form-control" name="day">
									<option>1</option>       
									<option>2</option>       
									<option>3</option>       
									<option>4</option>       
									<option>5</option>       
									<option>6</option>       
									<option>7</option>       
									<option>8</option>       
									<option>9</option>       
									<option>10</option>       
									<option>11</option>       
									<option>12</option>       
									<option>13</option>       
									<option>14</option>       
									<option>15</option>       
									<option>16</option>       
									<option>17</option>       
									<option>18</option>       
									<option>19</option>       
									<option>20</option>       
									<option>21</option>       
									<option>22</option>       
									<option>23</option>       
									<option>24</option>       
									<option>25</option>       
									<option>26</option>       
									<option>27</option>       
									<option>28</option>       
									<option>29</option>       
									<option>30</option>       
									<option>31</option>       
								</select>
							</div>
							<div class="col-md-4">
								<label for="Month">Month</label>
								<select name="month" placeholder="Month" class="form-control">
									<option value="jan">Jan</option>
									<option value="feb">Feb</option>
									<option value="march">March</option>
									<option value="april">April</option>
									<option value="may">May</option>
									<option value="june">June</option>
									<option value="july">July</option>
									<option value="august">August</option>
									<option value="september">September</option>
									<option value="october">October</option>
									<option value="november">November</option>
									<option value="december">December</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="Year">Year</label>
								<input type="text" name="year" class="form-control" id="year" placeholder="Year">
								
							</div>
						</div>
					</div>				
					<div class="form-group">
						<label for="teacherid">Teacher ID</label>
						<input type="text" name="teacherid" class="form-control" id="teacherid" placeholder="Teacher ID">
					</div>
					<button type="submit" class="btn btn-default">Register</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="assets/js/app.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>