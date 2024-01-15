<?php 

	$firstName=$lastName=$email="";
	
	if(isset($_POST['firstName']))
	$firstName	=		$_POST['firstName'];

	if(isset($_POST['lastName']))
	$lastName	=		$_POST['lastName'];

	if(isset($_POST['email']))
	$email	=			$_POST['email'];
	
	$errors = [
	'firstNameError'=> '',
	'lastNameError'=> '',
	'emailError'=> ''
	];
	
if(isset($_POST['submit'])){

	$firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	//echo $firstName.' '.$lastName.' '.$email;
	$sql="INSERT INTO users(firstName,lastName, email) 
		VALUES('$firstName','$lastName','$email')";
		
	if(empty($firstName)){
		$errors['firstNameError']='يرجى إدخال الاسم الأول';
	}
	elseif(empty($lastName)){
		$errors['lastNameError']='يرجى إدخال الاسم الأخير';
	}
	elseif(empty($email)){
		$errors['emailError']='يرجى إدخال الايميل';
	}
	elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$errors['emailError']='يرجى إدخال ايميل صحيح';
	}
	else{
		
	if(mysqli_query($conn,$sql)){
		header('Location: '.$_SERVER['PHP_SELF']);
	}
	else{
		echo 'Error: ',mysqli_error($conn);
	}
	}
}