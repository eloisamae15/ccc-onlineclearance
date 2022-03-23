<?php
 include('config.php');
// if(isset($_POST["Import"])){
		

// 		echo $filename=$_FILES["file"]["tmp_name"];
		

// 		 if($_FILES["file"]["size"] > 0)
// 		 {

// 		  	$file = fopen($filename, "r");
// 	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
// 	         {
	    
// 	          //It wiil insert a row to our subject table from our csv file`
// 	           $sql = "INSERT INTO `users`(`email`, `user_id`, `fname`, `mname`, `lname`, `password`, `user_type`) 
//                VALUES ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]');";
//                 $sql .= "INSERT INTO `stud_tbl`(`user_id`, `bdate`, `address`, `gender`, `contact_no`, `course`, `year_lvl`) 
//                 VALUES ('$emapData[1]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]')";
// 	         //we are using mysql_query function. it returns a resource on true else False on error
// 	          $result = mysqli_multi_query( $db, $sql );
// 				if(! $result )
// 				{
// 					// echo "<script type=\"text/javascript\">
// 					// 		alert(\"Invalid File:Please Upload CSV File.\");
// 					// 		window.location = \"studenttbl.php\"
// 					// 	</script>";

//                     echo mysqli_error($db);
				
// 				}

// 	         }
// 	         fclose($file);
// 	         //throws a message if data successfully imported to mysql database from excel file
// 	         echo "<script type=\"text/javascript\">
// 						alert(\"CSV File has been successfully Imported.\");
// 						window.location = \"studenttbl.php\"
// 					</script>";
	        
			 

// 			 //close of connection
// 			mysqli_close($db); 
				
		 	
			
// 		 }
// 	}
    
    if (isset($_POST["import"])) {

        $fileName = $_FILES["file"]["tmp_name"];
    
        if ($_FILES["file"]["size"] > 0) {
    
            $file = fopen($fileName, "r");
            $lines = file($_FILES["file"]["tmp_name"]);
    
            foreach ($lines as $line) {
                $emapData = explode(',', $line);
                // $sqlInsert = "INSERT into price_dump (`stock_id`,`stock_price`,`previous_price`,`minute_set`)
                //        values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "')";
                $sql = "INSERT INTO `users`(`email`, `user_id`, `fname`, `mname`, `lname`, `password`, `user_type`) 
                VALUES ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]');";
                 $sql .= "INSERT INTO `stud_tbl`(`user_id`, `bdate`, `address`, `gender`, `contact_no`, `course`, `year_lvl`) 
                 VALUES ('$emapData[1]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]','$emapData[12]')";
                $result = mysqli_multi_query($db, $sql);
    
                if ($result) {
                    echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"studenttbl.php\"
					</script>";
                    
                } else {
                    echo mysqli_error($db);
                }
            }
        }
    }
?>		 