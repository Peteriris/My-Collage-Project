<?php 
// Include the database config file 
include_once 'connect.php'; 

if(isset($_POST["c_id"]))
{ 
	$c=$_POST["c_id"];
    // Fetch state data based on the specific country 
    $result2 = pg_query($connect,"SELECT * FROM states WHERE country_id = '$c'"); 
	
     
    // Generate HTML of state options list 
    if(pg_num_rows($result2) > 0)
	{ 
	
        echo '<option value="">Select State</option>'; 
        while($row = pg_fetch_assoc($result2))
		{  
		    echo '<option value="'.$row['state_id'].'">'.$row['state_name'].'</option>'; 
        } 
    }
	else
	{ 
        echo '<option value="">State not available</option>'; 
		
    } 
}
elseif(isset($_POST["state_id"]))
{ 
	$s=$_POST["state_id"];
    // Fetch city data based on the specific state 
    $result1 = pg_query($connect,"SELECT * FROM cities WHERE state_id = '$s'"); 
   
     
    // Generate HTML of city options list 
    if(pg_num_rows($result1) > 0)
	{ 
        echo '<option value="">Select city</option>'; 
        while($row1 = pg_fetch_assoc($result1))
		{  
            echo '<option value="'.$row1['city_id'].'">'.$row1['city_name'].'</option>'; 
        } 
    }
	else
	{ 
        echo '<option value="">City not available</option>'; 
    } 
}
?>