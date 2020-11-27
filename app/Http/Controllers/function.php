<?php
	/*--------------- Include Database Connection-------------- */
 	include('db_config.php');

		/*-----------------Query for Fetch Data----------------*/

			$fetch = mysqli_query($db_conn, "SELECT * FROM user_details" );
			 mysqli_fetch_assoc($fetch);
		
		/*--------- end ---------*/
		
		/*---------------- Data Insert Query ----------------*/
		extract($_POST);
		
		if(isset($_POST['addusername']) && isset($_POST['addusermobile']) && isset($_POST['adduseremail']) && isset($_POST['adduserpassword']) && isset($_POST['adduseraddress']))
		{
			$insert_query = mysqli_query($db_conn, "INSERT INTO user_details(Name,Mobile_number,Email,Password,Address)VALUES('$addusername','$addusermobile','$adduseremail','$adduserpassword','$adduseraddress')");
			$insert = mysqli_query($db_conn, $insert_query);
			if($_SERVER['HTTP_REFERER'] == "user_details.php")
			{
				// echo "Add User Successfully";

			}else{
				header('Location:user_details.php');
			}
		}

		/*----------------- End Here ------------*/


	/*--------------- Data Update query ------------------*/
	if(isset($_POST['id']) && isset($_POST['types']))
	{
		$update= "UPDATE user_details SET Name='".$_POST['name']."', Mobile_number='".$_POST['mobile']."', Email='".$_POST['email']."', Password='".$_POST['password']."', Address='".$_POST['address']."' WHERE id='".$_POST['id']."'"; 
		$update_data = mysqli_query($db_conn, $update);
		
		// echo " Already exist email";
	}
		else
		{
			// echo "Update email..<pre>";
		}

		/*--------------- Query for Delete---------------*/
			if(isset($_POST['hidden']) && isset($_POST['type']))
			{
				$deletedata = $_POST['id'];
				$deletequery = "DELETE FROM user_details where id=$deletedata";
				mysqli_query($db_conn, $deletequery);	
			}
				
			// echo "delete data";
			
			// echo "delete ";
		/*--------------------End query for delete---------------*/	



