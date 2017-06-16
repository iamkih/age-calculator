	<?php
	function getTotalDaysOfMonth()
	{
		if($_POST['selectMonth']== "01" || $_POST['selectMonth']== "03" || $_POST['selectMonth']== "05" || $_POST['selectMonth']== "07" || $_POST['selectMonth']== "08" || $_POST['selectMonth']== "10" || $_POST['selectMonth']== "12")
		{
			$totalDays= 31;
			return $totalDays;
		}
		if($_POST['selectMonth']== "04" || $_POST['selectMonth']== "06" || $_POST['selectMonth']== "09" || $_POST['selectMonth']== "11")
		{
			$totalDays= 30;
			return $totalDays;
		}
		if(date('L', mktime(1, 1, 1, 1, 1, $_POST['selectYear'])) == 1 && $_POST['selectMonth']== "02")
		{
			$totalDays=31;
			return $totalDays;
		} else 
		{
			$totalDays=31;
			return $totalDays;
		}
	}
	?>