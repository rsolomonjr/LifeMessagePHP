<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>JS &amp; PHP Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body>

<?php


include '../age.php'; 

function getAge($age){

	    
	    $message = null; # define the $message variable 
	    
	    if ($age <= 23)
	    {
	        $message = "You're still a pup! Stay in school.";
	        
	    }
		
		    elseif ($age > 24 && $age <= 38)
		    {
		       $message = "This is the prime of your life-- Enjoy it!"; 
		    }
		    elseif ($age > 38 && $age <= 49)
		    {
		        $message = "This is the time to focus on your career!";
		    }
		    elseif ($age > 49 && $age <= 59)
		    {
		        $message = "These might be your prime earning years.";
		    }
		    elseif ($age > 59 && $age <= 65)
		    {
		        $message = "Time to get ready for retirement.";
		    }
	    
	    else
	    {
	        $message = "What's life's next adventure? Teaching, cruises, grandchildren...?";
	    }	
	    	giveMessage($message); 
	    }
		
		if (isset($_POST['age'])){
			getAge($_POST['age']); # get from html form
		}
		
		#DRY adding class to message
		#After creating the function, I added extra styling to the message
		
		function giveMessage($message){
		echo("
			<form class='container text-center age_form' style='width:59.5% !important;'>
					
			<div style='font-size:24px'>
				Consider the following: </div>
				<div>" . $message . "</div></form>"); 
		}		

?>

</body>
</html>