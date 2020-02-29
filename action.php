<?php 
	include('config.php');
	session_start();

	if(isset($_POST['postquestion'])){
		$output = '';
		$name = validate($_POST['name']);
		$email = validate($_POST['email']);
		$subject = validate($_POST['subject']);
		$question = $_POST['question'];
		$dateposted = date('d-m-Y h:i:a');

		if(!empty($name) && !empty($email) && !empty($subject) && !empty($question)){

			$sql = "INSERT INTO questionbank(name, email, subject, question, dateposted, question_status)
					VALUES('$name', '$email', '$subject', '$question', '$dateposted', 'Not Yet Answered')";
			$query = mysqli_query($connection, $sql);
			if($query){
				$output.= "
						<div class='alert alert-success'>
    					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    					<strong>Question Posted Successfully</strong>
  						</div>
				";
			}
  		}else{
  			$output.= "
						<div class='alert alert-danger'>
    					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    					<strong>Please Fill Neccessary Requirements</strong>
  						</div>
				";
  		}
  		echo $output;
  		
	}

	if(isset($_POST['getquestions'])){

		$sql = "SELECT * FROM questionbank ORDER BY id DESC";
		$query = mysqli_query($connection, $sql);
		$output = '';
		
		if(mysqli_num_rows($query) > 0){
			while($rows = mysqli_fetch_array($query)){
				$id = $rows['id'];
				$name = $rows['name'];
				$email = $rows['email'];
				$subject = $rows['subject'];
				$question = $rows['question'];
				$dateposted = $rows['dateposted'];

				$output = "
					<ul class='comment-list'>
                      <li class='comment'>
                        <div class='comment-body'>
                         <div class='comment-author'><img src='images/question-icon.png' alt='' class='img-circle'> </div>
                           <div class='comment-info'>
                              <div class='comment-header'>
                                <div class='comment-meta'><span class='comment-meta-date pull-right'>$dateposted</span></div>
                                	<h4 class='user-title'><b>$name</b></h4>
                                </div>
                                <div class='comment-content'>
                                 	<p>$question</p>
                                </div>
                                <div class='reply'><a href='#' class='btn-link' id='reply' pid='$id'><i class='fa fa-reply'></i> Reply </a>
                                <a href='#' class='btn-link' id='viewreply' pid='$id' style='margin-left:10px; text-decoration: none;''><i class='fa fa-eye'></i> View Answers </a><span id='numofreplies' replyid='$id'></span></div>   
                            </div>
                         </div>

						";
			
				echo $output;
			}

			echo '
				<ul class="pager">
  					<li><a href="#">Previous Questions</a></li>
  					<li><a href="#">Next Questions</a></li>
				</ul>
			';
		
		}else{
			echo '<h2>No questions yet</h2>';
		}	
	}

	if(isset($_POST['reply'])){
		$output = '';
		$quest = $_POST['pid'];

		$output.="
		<a href='forum.php'><span class='fa fa-arrow-left'></span></a>
		<br><br>
		<div id='replyresult'></div>
			<form id='replyform' method='post'>
             <div class='form-group'>
          		<textarea name='namefield' rows='8' class='form-control' id='namefield' placeholder='Answer question'></textarea>
             </div>
             <div class='form-group'>
              <button type='submit' class='btn btn-info' id='submitreply' pid='$quest'><i class='fa fa-reply'></i> Answer Question</button>
             </div>
           </form>
		";
		echo $output;
	}

	if(isset($_POST['showquestion'])){
		$sql = "SELECT * FROM questionbank";
		$query = mysqli_query($connection, $sql);
		$count = mysqli_num_rows($query);

		echo $count;
	}

	if(isset($_POST['answerquestion'])){
		if(!isset($_SESSION['user'])){
			echo "
				<div class='alert alert-success'>
  					<a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  					<strong>Please log in as an admin</strong>
				</div>
			";
			return false;
		}else{
			$admin = $_SESSION['user'];
		$namefield = validate($_POST['namefield']);
		$question_id = validate($_POST['question_id']);
		$date = date('d-m-Y h:i:a');

		$sql = "INSERT INTO answerbankk(question_id, answer, answered_by, date_answered)
				VALUES('$question_id', '$namefield', '$admin', '$date')";
		$query = mysqli_query($connection, $sql);

		$sql2 = "UPDATE questionbank SET question_status='Answered' WHERE id='$question_id'";
		$query2 = mysqli_query($connection, $sql2);
		if($query){

			echo "
				<div class='alert alert-success'>
  					<a href='' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  					<strong>Question Answered Successfully</strong>
				</div>
			";
			}
		
		}
	}

	if(isset($_POST['count_answered_num'])){
		//$replyid = $_POST['replyid'];
	//	echo $replyid;
	}

	if(isset($_POST['viewanswers'])){
		$admin = $_SESSION['user'];
	//	$image = $_SESSION['image'];
		$question_id = $_POST['question_id'];
		$output = '';

		$sql = "SELECT * FROM answerbankk WHERE question_id='$question_id' AND answered_by='$admin' ORDER BY id desc";
		$query = mysqli_query($connection, $sql);
		if(mysqli_num_rows($query) > 0){
			$output.= "
				<a href='forum.php'><span class='fa fa-arrow-left'></span></a>
					<br><br>
			";
			while($rows = mysqli_fetch_array($query)){
				$id = $rows['id'];
				$answer = $rows['answer'];
				$answered_by = $rows['answered_by'];
				$date_answered = $rows['date_answered'];
				
				$output .= "
					<ul class='comment-list' id='comment-list'>
                     	<li class='comment' style='background-color: #f2f2f2'>
                          <div class='comment-body'>
                            <div class=''>
                              <div class='comment-author'><img src='images/recent-post-img-1.jpg' alt='' class='img-circle'> </div>
                           <div class='comment-info'>
                            <div class='comment-header'>
                             <div class='comment-meta'><span class='comment-meta-date pull-right'>$date_answered </span></div>
                              <h4 class='user-title mb10'>$answered_by</h4>
                             </div>
                             <div class='comment-content'>
                              <p>$answer</p>
                             </div>
                          	</div>
                          </div>
                        </div>
                      </li>
                    </ul>
				";

				
			}
			echo $output;
		}else{
			echo "
			<a href='forum.php'><span class='fa fa-arrow-left'></span></a>
					<br><br>
				<center><h3>No answers yet</h3></center>
			";
		}
	}

	if(isset($_POST['latestPost'])){
		$result = "";
		$sql = "SELECT * FROM questionbank ORDER BY id desc LIMIT 5";
		$query = mysqli_query($connection,$sql);
		if(mysqli_num_rows($query) > 0){
			while($rows = mysqli_fetch_array($query)){
				$id = $rows['id'];
				$subject = $rows['subject'];
				$dateposted = $rows['dateposted'];

			$result.= "
				 <div class='widget widget-recent-post'><!-- widget recent post -
                        <h2 class='widget-title'> Recent Post </h2>
                        <ul class='listnone widget-recent-post'>
                            <li>
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <div class='recent-post-img'>
                                            <a href='#'><img src='images/recent-post-img.jpg' alt=''></a>
                                        </div>
                                    </div>
                                    <div class='col-md-8'>
                                        <div class='recent-post-content'>
                                            <h4><a href='#' pid='$id' class='title'>$subject</a></h4>
                                            <div class='meta'><span class='meta-date'>$dateposted</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
						</ul>
                    </div>
			";
			}
		}
	}

	if(isset($_POST['contactus'])){
		$emailMessage = '';
		$name = validate($_POST['name']);
		$phone = validate($_POST['phone']);
		$email = validate($_POST['email']);
		$subject = validate($_POST['subject']);
		$message = $_POST['message'];

		$to = 'classiquept@yahoo.com';
		$emailMessage.= "Name: ".$name. "\n";
		$emailMessage.= "Phone: ".$phone. "\n";
		$emailMessage.= "Name: ".$message. "\n";

		$headers = "From: ".$email. "\n". 
					'Reply to: '.$email. "\n";

		mail($to, $subject, $message, $headers);

		echo '
			<div class="alert alert-success">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Thank you for contacting us.</strong>
			</div>
		';
	}

	if(isset($_POST['adminlogin'])){
		$username = validate($_POST['username']);
		$password = md5($_POST['password']);

		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		$query = mysqli_query($connection, $sql);
		if(mysqli_num_rows($query) == 0){

			echo '
				<div class="alert alert-danger">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Incorrect Username or Password</strong>
				</div>
			';
		}
		else{

		$row = mysqli_fetch_array($query);
		
		$id = $row['id'];
		$user = $row['username'];
		$image = $row['image'];

		$_SESSION['user'] = $user;
		$_SESSION['id'] = $id;
		$_SESSION['image'] = $image;

			echo '
				<div class="alert alert-success">
  				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  				<strong>Admin login successfully</strong>
				</div>
			';

			echo '<script>window.location.href="adminhome.php"</script>';
		}
	}

	if(isset($_POST['subscribe'])){
		$subscribeEmail = $_POST['subscribeEmail'];

		$to = 'classiquept@yahoo.com';
		$subject = "Subscription for newsletter";
		$message = 'Here is my email for subscription :' .$subscribeEmail. '\n';
		$header = 'From: Classique Physiotherapy Services';
		 
		$sent = mail($to, $subject, $message);
		if($sent){
			echo 'Sent Successfully';
		}else{
			echo 'error';
		}

	}

	if(isset($_POST['submitappoint'])){
		$services = $_POST['services'];
		$name = validate($_POST['name']);
		$email = validate($_POST['email']);
		$phoneno = validate($_POST['phoneno']);
		$gender = $_POST['gender'];
		$age = validate($_POST['age']);
		$preference = $_POST['preference'];
		$address = validate($_POST['address']);

		if($services != null && $name != null && $email != null && $phoneno != null && $gender != null && $age != null && $preference != null && $address != null){
			
			$to = 'classiquept@yahoo.com';

			$subject = $services;

$headers = "From: classiquephysiotherapyservices \r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		$message.= "<h2 style='color: #0eb769;'><b>$services</b></h2>";
//$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: white;" cellpadding="10">';
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Phone No:</strong> </td><td>" . $phoneno . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Gender:</strong> </td><td>" . $gender . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Age:</strong> </td><td>" . $age . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Preference:</strong> </td><td>" . $preference . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Address:</strong> </td><td>" . $address . "</td></tr>";

$message .= "</table>";
$message .= "</body></html>";

		$sent = mail($to, $subject, $message, $headers);

		if($sent){
			echo 'Appointment sent successfully.';
		}else{
			echo 'Error. Please try again';
		}

		}
	}

if(isset($_POST['submitAppointment'])){
		$services = $_POST['services'];
		$name = validate($_POST['name']);
		$email = validate($_POST['email']);
		$phoneno = validate($_POST['phoneno']);
		$gender = $_POST['gender'];
		$age = validate($_POST['age']);
		$preference = $_POST['preference'];
		$address = validate($_POST['address']);
		$orgname = validate($_POST['orgname']);
		$complaint = validate($_POST['complaint']);

		if($services != null && $name != null && $email != null && $phoneno != null && $gender != null && $age != null && $preference != null && $address != null && $orgname != null && $complaint != null){
			
			$to = 'classiquept@yahoo.com';

			$subject = $services;

$headers = "From: classiquephysiotherapyservices \r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$message = '<html><body>';
		$message.= "<h2 style='color: #0eb769;'><b>$services</b></h2>";
//$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Name:</strong> </td><td>" . $name . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Phone No:</strong> </td><td>" . $phoneno . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Gender:</strong> </td><td>" . $gender . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Age:</strong> </td><td>" . $age . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Preference:</strong> </td><td>" . $preference . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Address:</strong> </td><td>" . $address . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Organization Name:</strong> </td><td>" . $orgname . "</td></tr>";
$message .= "<tr style='background: #0eb769; color: white;'><td><strong>Complaint:</strong> </td><td>" . $complaint . "</td></tr>";


$message .= "</table>";
$message .= "</body></html>";

		$sent = mail($to, $subject, $message, $headers);

		if($sent){
			echo 'Appointment sent successfully.';
		}else{
			echo 'Error. Please try again';
		}

		}
	}
	function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
