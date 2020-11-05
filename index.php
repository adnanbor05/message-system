<?php 
include "proses.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>comment</title>
	<link rel="stylesheet" href="adminlte.min.css">
</head>

<body>
	<h1 class="text-center">Hello, world!</h1>
	<section>
		<div class="container">
			<div class="row">
				<!-- input message -->
				<div class="col-md-6">
					<form method="POST" action="proses.php">
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="txt_name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name*" required="">
						</div>

						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" name="txt_message" id="exampleFormControlTextarea1" rows="3" placeholder="Your Message*" required=""></textarea>
						</div>

						<div class="form-group">
							<input type="submit" name="btn_submit" class="btn btn-primary" value="submit">
						</div>
					</form>
				</div>
				<!-- input message -->

				<!-- list message -->
				<div class="col-md-6">
					<div class="card direct-chat direct-chat-primary">
						<div class="card-body">
							<div class="direct-chat-messages">

								<?php include "comments.php"; ?>

							</div>
						</div>
					</div>
				</div>
				<!-- end list message -->
			</div>

		</div>
	</section>


</body>
</html>