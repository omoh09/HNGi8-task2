<?php
//include 'contact-handle.php';
if(isset($_POST['submit'])){
	$firstname = trim($_POST["fname"]);
	$lastname = trim($_POST["lname"]);
	$email = trim($_POST["eaddress"]);
	//$msg = $_POST["message"];
	$address = $_POST["address"];
	$zip = $_POST["zip"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$eaddress = $_POST["eaddress"];
	$phone = $_POST["phone"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$marital = $_POST["marital"];
	$educational = $_POST["educational"];
	$occupational = $_POST["occupational"];
	$background = $_POST["background"];
	$goals = $_POST["golas"];
	//The name of the file that we want to create if it doesn't exist.

 	$allResumes = scandir("resumes/"); //return @array (2 filled)
    $countAllResume = count($allResumes);
    $newResumeId = ($countAllResume-1);
	
	 for ($counter = 0; $counter < $countAllResume ; $counter++) {
       
        $currentResume = $allResumes[$counter];

        if($currentResume == $email . ".json"){
          	echo 'user exist';
            exit();
        }
    }
	
	$userObject= array(
			'id' => $newResumeId,
			'Firstname' => $firstname,
			'Lastname' => $lastname,
			'Email' => $eaddress,
			'address' => $address,
			'city' => $city,
			'state' => $state,
			'zip' => $zip,
			'gender' => $gender,
			'phone' => $phone,
			'MaritalStatus' => $marital,
			'educationalStatus' => $educational,
			'background' => $background,
			'goals' => $goals
			);
		

	    $result = file_put_contents("resumes/".$userObject['Email'] . ".json", json_encode($userObject),true);
		if ($result){
			echo "<u>".strtoupper($firstname.' '.$lastname)."'s RESUME!!!</u>";?>
			<table>
				<tr>
					<td>
						<strong>Firstname</strong>
					</td>
					<td>
						<?=$firstname;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Lasttname</strong>
					</td>
					<td>
						<?=$lastname;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Email</strong>
					</td>
					<td>
						<?=$email;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Marrital Status</strong>
					</td>
					<td>
						<?=$marital;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Gender</strong>
					</td>
					<td>
						<?=$gender;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Phone</strong>
					</td>
					<td>
						<?=$phone;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Address</strong>
					</td>
					<td>
						<?=$address;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>State</strong>
					</td>
					<td>
						<?=$state;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>City</strong>
					</td>
					<td>
						<?=$city;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Educational Status</strong>
					</td>
					<td>
						<?=$educational;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>About</strong>
					</td>
					<td>
						<?=$background;?>
					</td>
				</tr>
				<tr>
					<td>
						<strong>Goals & Intrests</strong>
					</td>
					<td>
						<?=$goals;?>
					</td>
				</tr>
				
			</table>
			
			<?php
			
		}
		
	
	
}
?>