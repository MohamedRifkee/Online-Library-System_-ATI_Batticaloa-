	<?php 

		include('connect.php');

		$rollno=$fname=$mname=$lname=$branch=$sem=$dob=$semail=$gender=$bg=$contact=$address=$cpass="";
		$rollno_err=$fname_err=$mname_err=$branch_err=$sem_err=$dob_err=$semail_err=$gender_err=$bg_err=$contact_err=$address_err=$pass_err=$cpass_err="";

		if($_SERVER["REQUEST_METHOD"]=="POST")
		{

			//ROLL NUMBER
			if(empty(trim($_POST["rollno"])))
			{
				$rollno_err = "Kindly enter a Roll Number";
			}
			else
			{	
				$query = 'SELECT * FROM student_table WHERE student_rollno=$_POST["rollno"]';
				// if ($stmt=mysqli_prepare($conn, $query)) 
				// {
				// 	mysqli_stmt_bind_param($stmt, 'i', $param_rollno);
				// 	$param_rollno = $_POST["rollno"];
				// 	if (mysqli_stmt_execute($stmt))
				// 	{

				// 		mysqli_stmt_store_result($stmt);

				// 		if (mysqli_stmt_num_rows($stmt)==1)
				// 		{
				// 			$rollno_err="This rollno already exists!";
				// 		}
				// 		else
				// 		{
				// 			$rollno=$_POST["rollno"];
				// 		}
				// 	}
				// 	else
				// 	{
				// 		echo "Try again later.";

				// 	}
				// }
				// mysqli_stmt_close($stmt);
				$result=mysqli_query($conn, $query);

				if(mysqli_num_rows($result)>0){

					$rollno_err = "This Roll No already exists!";
				}
				else{

					$rollno=$_POST["rollno"];
				}
			}
			//FIRST NAME
			if (empty(trim($_POST["fname"]))) 
			{
				$fname_err = "Enter first name";
			}
			else
			{
				$fname=trim($_POST["fname"]);
			}
			//MIDDLE NAME
			if (empty(trim($_POST["mname"]))) 
			{
				$mname_err = "Enter middle name";
			}
			else
			{
				$mname=trim($_POST["mname"]);
			}
			//LAST NAME
			$lname=trim($_POST["lname"]);
			//BRANCH
			if (empty(trim($_POST["branch"]))) 
			{
				$branch_err = "Enter branch";
			}
			else
			{
				$branch=trim($_POST["branch"]);
			}
			//SEMESTER
			if (empty(trim($_POST["sem"]))) 
			{
				$sem_err = "Enter semester";
			}
			else
			{
				$sem=trim($_POST["sem"]);
			}
			//DOB
			if (empty(trim($_POST["dob"]))) 
			{
				$dob_err = "Please select DOB";
			}
			else
			{
				$dob=trim($_POST["dob"]);
			}
			//EMAIL
			if(empty(trim($_POST["semail"])))
			{
				$semail_err = "Kindly enter an email id";
			}
			else{

					$semail=trim($_POST["semail"]);
			}
			//GENDER
			if (empty(trim($_POST["gender"]))) 
			{
				$gender_err = "Enter Gender";
			}
			else
			{
				$gender=trim($_POST["gender"]);
			}
			//BLOOD GROUP
			if (empty(trim($_POST["bg"]))) 
			{
				$bg_err = "Enter blood group";
			}
			else
			{
				$bg=trim($_POST["bg"]);
			}
			//CONTACT
			if (empty(trim($_POST["contact"]))) 
			{
				$contact_err = "Enter contact no";
			}
			else
			{
				$contact=trim($_POST["contact"]);
			}
			//ADDRESS
			if (empty(trim($_POST["address"]))) 
			{
				$address_err = "Enter Address";
			}
			else
			{
				$address=trim($_POST["address"]);
			}
			//PASSWORD
			if (empty(trim($_POST["pass"]))) 
			{
				$pass_err="Please enter a password";
			}
			elseif (strlen(trim($_POST["pass"])) < 6) 
			{
				$pass_err="Password should contain atleast 6 characters";
			}
			else
			{
				$pass=trim($_POST["pass"]);
			}
			//CONFIRM PASSWORD
			if (empty(trim($_POST["cpass"]))) 
			{
				$cpass_err="Please confirm password";
			}
			else
			{
				$cpass=trim($_POST["cpass"]);
			
				if (empty($pass_err) && ($pass!=$cpass)) 
				{
					$cpass_err="Password did not match.";
				}
			}

			if (empty($rollno_err) &&empty($fname_err) &&empty($mname_err)&&empty($branch_err)&&empty($sem_err)&&empty($dob_err)&&empty($semail_err)&&empty($gender_err)&&empty($bg_err)&&empty($contact_err)&&empty($address_err)&&empty($pass_err)&&empty($cpass_err)) 
			{
				$query1="INSERT INTO student_table(student_rollno,student_firstname,student_middlename,student_lastname,student_date_of_birth,student_gender,student_bloodgroup,student_branch,student_semester,student_address)VALUES($rollno,'$fname','$mname','$lname','$dob','$gender','$bg','$branch',$sem,'$address')";
				mysqli_query($conn,$query1);

				$query2='INSERT INTO student_login(student_rollno,student_password,student_emailid,student_contact)VALUES(?,?,?,?)';

				if ($stmt=mysqli_prepare($conn,$query2)) 
				{
					mysqli_stmt_bind_param($stmt,"isss",$param_rollno,$param_pass,$param_semail,$param_contact);

					$param_rollno=$rollno;
					$param_pass=$pass;
					$param_semail=$semail;
					$param_contact=$contact;

					if(mysqli_stmt_execute($stmt))
					{
						header("location:login.php");
					}
					else
					{
						echo "Please try later.";
					}
				}
				mysqli_stmt_close($stmt);
			}

			mysqli_close($conn);
		}
		?>