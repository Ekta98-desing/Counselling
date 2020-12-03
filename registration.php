<?php
require_once('config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, intial-scale=1.0">
  <title>User Registraion | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript"></script>

</head>
<body>
  	<?php
		if(isset($_POST['create'])){
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$counselling=$_POST['counselling'];
			$phonenumber=$_POST['phonenumber'];

			$sql = "INSERT INTO users(firstname, lastname, gender, email, counselling, phonenumber) VALUES(?,?,?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $gender, $email, $counselling, $phonenumber]);
            
            if ($result) 
            {
            	echo 'Successfully save';
            	 }
            	 else{
            	 	echo'there were error while saving the data';
            	 }

            }
        ?>
	</div>
	<div>
		<form action="registration.php" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-3" >
			<h1>Registration</h1>
			<p>Fill up the from with correct values</p>
			<hr class="mb-3">
            <label for="firstname"><b>First Name</b></label>
			<input class="form-control" type="text" name="firstname" required>

			<label for="last name"><b>Last Name</b></label>
			<input class="form-control" type="text" name="lastname" required>
            <hr class="mb-1">

			<div class="form-group">
                <label for="gender"><b>Gender</b></label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>


			<label for="email"><b>Email Address</b></label>
			<input class="form-control" type="email" name="email" required>
            <hr class="mb-1">

			<div class="form-counselling">
                <label for="counselling"><b>Counselling</b></label>
                <div>
                  <label for="personal" class="radio-inline"
                    ><input
                      type="radio"
                      name="counselling"
                      value="p"
                      id="personal"
                    />Personal</label
                  >
                  <label for="group" class="radio-inline"
                    ><input
                      type="radio"
                      name="counselling"
                      value="g"
                      id="group"
                    />Group</label
                  >
                  <label for="online" class="radio-inline"
                    ><input
                      type="radio"
                      name="counselling"
                      value="o"
                      id="online"
                    />Online</label
                  >
                </div>
              
              </div>
              

			<label for="phonenumber"><b>Phone Number</b></label>
			<input class="form-control" type="text" name="phonenumber" required>
            
            <hr class="mb-3">

			<input class="btn btn-primary" type="submit" name="create" value="Submit">
			</div>
            </div>
			</div>




		</form>
	</div>
 
</body>
</html>