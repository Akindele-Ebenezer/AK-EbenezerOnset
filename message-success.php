<?php 
    $title = "Message Sent";

    include "config.php";

	if(isset($_POST["submit"])) {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];
		
		$sql = "INSERT INTO admin_inbox(name, email, subject, message, time) VALUES ('$name', '$email', '$subject', '$message', now())";
		$query = mysqli_query($conn, $sql);
	}

    include "header.php";
?>

<div class="message-success">
    <div>
        <h1>Message has been sent</h1>
        <p>Thanks for your feedback, <?= ucwords($name); ?>. I'll get back to you as soon as possible.</p>
        <p>Go back to <a href="index.php">HOMEPAGE</a></p>
    </div>
</div>

<?php 
    include "footer.php";
?>