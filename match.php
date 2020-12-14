<?php
$search_keyword = "Tags";			// search tag
$table_ass_array = array('Mentor' => array( 'id_Mentor', 'Tags'));

php_search_all_tags($search_keyword, $table_ass_array);		// call this  function

function php_search_all_tags($search_keyword,$table_ass_array){

	global $conn;							// declared global variable conn

	$db_hostname = 'DATABASE HOST NAME'; 		// database hostname (default value: localhost)
	$db_username = 'DATABASE USERNAME'; 		// database username (default value: root)
	$db_password = 'DATABASE PASSWORD';			// database password (default value: password)
	$db_database_name = 'DATABASE NAME';		// database name

	$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_database_name);	// create connection

		if(mysqli_connect_errno()){		// Check connection
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$rt = $table_ass_array;
		echo "<b>Given Keyword :</b> ".$search_keyword . '<br>';
		echo "<b>Given tables :</b> " . implode($rt,', ') . '<br>';

		if(count($rt) > 0){ 							// check weather table column is not empty
			foreach($rt as $k=>$v){ 						// iterate column name table
				echo $table = $k;
				echo $v;
				foreach($v as $r2){	// fetch data from respective column name

					$colum = $r2;	//[0];
					$sql_search_fields = $colum . " LIKE ('%" . $search_keyword . "%')";
					$sql_search = "SELECT * FROM " . $table . " WHERE " . $sql_search_fields;
					$rs3 = $conn->query($sql_search);

					if($rs3->num_rows > 0){ 				// check weather 'keyword' found or not

						echo "Matched";
					
							
						}	// while loop close

					else 
					echo "Not Matched";

				}	
		    } 	
        }
    }    
?>