<?php
include 'conn.php';
if (isset($_POST['submit'])) {
	$email_id = $_POST['email_id'];
	$name = $_POST['full_name'];
	$contact_no = $_POST['contact_no'];
	$query = "INSERT INTO `tbl_subs`(`id`, `email_id`, `full_name`, `contuct_no`) VALUES ('null','$email_id','$name','$contact_no')";
	if (($email_id && $name && $contact_no) != null) {
		if (filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
			mysqli_query($conn, $query);
			echo "<script> alert('YOU ARE SUCESSFULLY SUBSCRIBED') </script>";
		} else {
			echo "<script> alert('PLEASE ENTER ALL THE FIELD CAREFULLY') </script>";
		}
	}
}
mysqli_close($conn);
?>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Indian Health Portal</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="icon" href="./img/medical-logo.jpeg" />
	<link rel="stylesheet" href="css\style3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="showcase">
		<div class="flexbox">
			<div class="one">
				<div class="btn1">
					<button style="text-transform: uppercase;color:#000" class="btn btn-success btn-lg" onclick="document.getElementById('form_click').style.display='block'">
						subscribe</button>
					<div id="form_click" class="modal">
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="form_content animate" method="post">
							<span onclick="document.getElementById('form_click').style.display='none'" class="close" title="Close PopUp">&times;</span>
							<div class="content">
								<div class="value">
									<label for="email_id">Email_id</label>
									<input type="email" name="email_id" id="email_id">
								</div>
								<div class="value">
									<label for="full_name">Full_name</label>
									<input type="text" name="full_name" id="full_name">
								</div>
								<div class="value">
									<label for="contact_NO">contact_no</label>
									<input type="text" name="contact_no" id="contact_no">
								</div>
								<br>
								<button type="submit" value="submit" name="submit" class="btn btn-success">submit</button>
								<button type="reset" class="btn btn-primary">reset</button>
							</div>
						</form>
					</div>
					<script>
						var modal = document.getElementById('form_click');
						window.onclick = function(event) {
							if (event.target == modal) {
								modal.style.display = "none";
							}
						}
					</script>
					<h2>Subscribe to Our news Letter</h2>
					<a href="index.php"><button type="button" class="btn btn-primary btn-sm">Home Page</button></a>
				</div>
			</div>
			<div class="two">
				<div id="alpha1">
					<div id="beta1">
						<h4>Take care of Your Health and others whom you love most</h4>
					</div>
					<div id="beta2">
						<h4>Make your dieat more Healthy it's important</h4>
					</div>
				</div>
				<div id="alpha2">
					<h3>Hold hands of those who needs the most, huminity is the gratest gift and laughter is the greatest medicine</h3>
				</div>
			</div>
		</div>
	</div>
</body>