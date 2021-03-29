<?php
 session_start();

 $errors = array();
 
	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'crs-help'); 
	
	//if the register button is clicked
	if(isset($_POST['register'])){
	
		$destination = mysqli_real_escape_string($db, $_POST['destination']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$numOfVolunteers =  mysqli_real_escape_string($db, $_POST['numOfVolunteers']);
		$duration =  mysqli_real_escape_string($db, $_POST['duration']);
	    $crisisType =  mysqli_real_escape_string($db, $_POST['crisisType']);
		$tripDate =  mysqli_real_escape_string($db, $_POST['tripDate']);
		
		$chk="select * from trip where  destination = '$destination';";
		//$chk="select * from trip where  description = '$description';";
		
		
		//store the above query
		$result= mysqli_query($db, $chk);
		
		//count the number of rows that username appeared in DB
		$num= mysqli_num_rows($result);
		
		if($num >= 1){
			echo '<script type="text/javascript"> alert("Username already taken.") 
			window.location= "trip1.php?formSubmitted";
				</script>';
		}
		else{
			if($userType == "officer"){
			   $position = "manager";
			}
			else{
				 $position = "";
			}
			
			$tripID = '';
			
			
		//if there are no errors, save user to database
		if(count($errors)== 0){
			$sql = "INSERT INTO trip (destination , description, numOfVolunteers, duration, crisisType, tripDate) 
						VALUES ('$destination', '$description', '$numOfVolunteers', '$duration', '$crisisType', '$tripDate')";
			mysqli_query($db, $sql);
			$_SESSION['destination'] = $destination;
			$_SESSION['description'] = $description;
			
			
			if($sql){
			echo '<script type="text/javascript"> alert("Trip Added!") 
			window.location= "trip1.php?formSubmitted";
				</script>';
			}
			
			
	}
	}
	
	}
				
?>