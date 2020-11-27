
<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css" rel="stylesheet" href="css/style.css"></style>

</head>
<body style="">

	<div class="container">

			<h1 class="text-center text-weaping" style=" margin-top: 15px;">USER DETAILS</h1>
				<!-- <span class="text-right btn btn-primary">Add User</span> -->
				<button style="float: right; margin-bottom: 10px;" type="button" class="add-userbtn btn btn-primary" data-toggle="modal" data-target="#adduserModal"> Add User</button>
			
			<!------------------- Start Table Here ----------------->
			<table class="table table-striped" id="userdetailstable" style="box-shadow: 0px 0px 5px 0px;">
				 	<input type="hidden" name="types" id="types">
				    <thead class="">

				      <tr>
				        <th>Sr No.</th>
				        <th>User Id.</th>
				        <th>User Name</th>
				        <th>Mobile</th>
				        <th>Email</th>
				        <th>Date</th>
				        <th>Address</th>
				        <th>Action</th>
				      </tr>
				    </thead>
				 
				  	 <tbody>
				      
				      <tr>
				        <td>number</td>
				        <td>id</td>
				        <td>Name</td>
				        <td>mobile</td>
				        <td>Email</td>
				        <td>Address</td>
				        <td>
				        <span class="btn btn-warning" data-toggle="modal" data-target="#editModal1">Edit</span> &nbsp; 
				        <span class="btn btn-danger" onclick="DeleteUser()" name="deletedata" data-toggle="table" data-target="" value="">Delete</span></td>
				      </tr>
				     
				    </tbody>
			</table>
			<!--------------------End Table here-------------->

			<!----------- Add User Model ------------------>
				<div class="modal" id="adduserModal">
					<div class="modal-dialog">
						<div class="modal-content">
						    <div class="modal-header" style="background-color: #ddf5dd;">
						        <h4 class="modal-title">ADD USER </h4>
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						    </div>
						    <div class="modal-body" style="margin-bottom: -24px; padding-bottom: 48px;">
						        <form id="myform" action="" method="post">
									<input type="hidden" name="types" id="types" value="">
								   <div class="form-group" style="">
									      <label for="name" style="margin-bottom: 0px; font-weight: bold;">Name</label>
									      <input type="text" class="form-control " id="name" name="addusername" placeholder="User Name" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      <label for="mobile" style="margin-bottom: 0px; font-weight: bold;">Mobile</label>
									      <input class="form-control" type="number" id="mobile" name="addusermobile" placeholder="Enter your mobile number" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      	<label for="email" style="margin-bottom: 0px; font-weight: bold;">Email</label>
											<input type="email" class="form-control " id="email" name="adduseremail" placeholder="User Email" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      <label for="password" style="margin-bottom: 0px; font-weight: bold;">Password</label>
									      <input type="password" class="form-control " id="password" name="adduserpassword" placeholder="Password" minlength="8" maxlength="12" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									    <label for="address" style="margin-bottom: 0px; font-weight: bold;">Address</label>
									    <input class="form-control" type="text" id="address" name="adduseraddress" placeholder="Enter ur address" autocomplete="off">
									</div>
						    </div>
						    		<div class="modal-footer">
								      	<button class="btn btn-primary" id="submit" type="submit"  value="SUBMIT" onclick="addRecord()" >Add User </button>
								   		<button type="button" class="btn btn-danger" data-dismiss="modal">Cancle</button>
								    </div>
								</form>    
						</div>
					</div>
				</div>
			<!---------------- End User Model here ----------------->
				

			<!-------------- Edit / Update user details--------------------->
				<div class="modal" id="editModal1">
					<div class="modal-dialog">
						<div class="modal-content">
						    <div class="modal-header" style="background-color: #ddf5dd;">
						        <h4 class="modal-title" >EDIT/UPDATE  </h4>
						        <button type="button" class="close" data-dismiss="modal" style="">&times;</button>
						    </div>
						    <div class="modal-body" style="margin-bottom: -24px; padding-bottom: 48px;">
						        <form id="myform" action="" method="post">
						        	
				      				<div class="form-group" style="">
									      <label for="id" style="margin-bottom: 0px; font-weight: bold;">User Id</label>
									      <input type="text" class="form-control" name="id" placeholder="User Id" autocomplete="off" value="">
								    </div>
				      					
									<input type="hidden" name="types" id="type" value="">

								   
								   <div class="form-group" style="">
									      <label for="name" style="margin-bottom: 0px; font-weight: bold;">Name</label>
									      <input type="text" class="form-control " id="name" name="name" placeholder="User Name" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      <label for="mobile" style="margin-bottom: 0px; font-weight: bold;">Mobile</label>
									      <input class="form-control" type="number" id="mobile" name="mobile" placeholder="Enter your mobile number" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      	<label for="email" style="margin-bottom: 0px; font-weight: bold;">Email</label>
											<input type="email" class="form-control " id="email" name="email" placeholder="User Email" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									      <label for="password" style="margin-bottom: 0px; font-weight: bold;">Password</label>
									      <input type="password" class="form-control " id="password" name="password" placeholder="Password" minlength="8" maxlength="12" autocomplete="off">
									</div>
									<div class="form-group" style="" >
									    <label for="address" style="margin-bottom: 0px; font-weight: bold;">Address</label>
									    <input class="form-control" type="text" id="address" name="address" placeholder="Enter ur address" autocomplete="off">
									</div>
						    </div>
						    		<div class="modal-footer">
								      	<button class="btn btn-primary" id="submit" type="submit"  value="SUBMIT" >Update </button>
								   		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
								    </div>
								</form>    
						</div>
					</div>
				</div>
			<!--------------------- End Edit/update here ------------>	
		
		</div>
		<script>
			// $(document).ready(function(){
			// 		readrecord();
						
			// 	});

			function readRecord(){

				var readrecord = "readrecord";
				$.ajax({
					url:"function.php",
					type:"post",
					data:{ readrecord:readrecord },
					success:function(data,status){
						$('#userdetailstable').html(data);

					}
				});
			}	

/*--------------- Insert deta --------------*/
			
			
			function addRecord(){

				var addusername = $('$addusername').val();
				var addusermobile = $('$addusermobile').val();
				var adduseremail = $('$adduseremail').val();
				var adduserpassword = $('$adduserpassword').val();
				var adduseraddress = $('$adduseraddress').varal();

				$.ajax({

					url: "function.php",
					type: "post",
					data: { addusername: addusername,
							addusermobile: addusermobile, 
							adduseremail: adduseremail,
							adduserpassword: adduserpassword,
							adduseraddress: adduseraddress
						},
						success:function(data,status){
							readRecord();
						}
				});
			}

			/*---------delete -----------*/

			function DeleteUser(){
				var confirm = confirm("Are you sure for delete");
				if(confirm==true){
					$.ajax({
						url: "function.php",
						type: "post",
						data:{ deletedata:deletedata },
						success:function(data, status){
							readRecord();
						}
					});
				}
			}
	/*---------------- End Here delete query-------------*/
		</script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>