<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html>

<head>

	<title>Age Calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

	<!-- (Optional) Latest compiled and minified JavaScript translation files -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/i18n/defaults-*.min.js"></script>

	<link rel="stylesheet" href="public.css">

</head>

<body>
<div class="wrapper text-center">
	<div class="container">
		<div class="page-header">
		  <h1>What's My AGE?</h1>
		</div>
	<form class="form-inline" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<select class= "selectpicker" name="selectDay">
		<option value="none">Select Day</option>
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
	</select>
	<select class="selectpicker" name="selectMonth">
		<option value="none">Select Month</option>
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
	</select>
	<div class="form-group">
	<input type="text" name="selectYear" class="form-control" placeholder="Enter Birth Year">
	</div>
	<input type="submit" name="formSubmit" class="btn btn-primary" value="Submit" >
	</form>

	<div class="content-area">
	<?php
	if(isset($_POST['formSubmit']))
	{
		$getDay= $_POST['selectDay'];
		$getMonth= $_POST['selectMonth'];
		$getYear= $_POST['selectYear'];
		$birthDate= $_POST['selectDay'].$_POST['selectMonth'].$_POST['selectYear'];

		if(!isset($_POST['selectDay']) || !isset($_POST['selectMonth']) || !isset($_POST['selectYear']) )
		{
			$errorMsg= "You didn't select an option";
			echo $errorMsg;
		} 
		else
		{

		echo "<p>Your Date Of Birth Is: <b>$getDay</b>, <b>$getMonth</b>, <b>$getYear</b>.</p>";

		$currentDay= date('d');
		$currentMonth= date('m');
		$currentYear= date('Y');

		$year= $currentYear- $getYear;
		$month= $currentMonth - $getMonth;
		$day= $currentDay - $getDay;
			if($month <= 0 && $day<0)
			{
				$year--;
				$month+=11;
				$day+= getTotalDaysOfMonth();
			}
			if($month>0 && $day<0)
			{
				$month-=1;
				$day+= getTotalDaysOfMonth();
			}
			if($month<0 && $day>=0)
			{
				$year--;
				$month+=12;
			}
			if($_POST['selectMonth']== "02" && $day<0 )
			{
				$day+= getTotalDaysOfMonth();
			}
			echo "<p>Your Age Is: <b>$year Year</b> , <b>$month Months</b> , <b>$day Days</b>.</p>";
		}	
	} 
	?>
	</div>
		</div>
	</div>
</body>
</html>