<?php 
$base_url = "http://localhost/ngobar/commen/";

if (isset($_POST['btn_submit'])) 
{
	$name = $_POST['txt_name'];
	$message = $_POST['txt_message'];
	$handle = fopen("comments.php","a");
	fwrite($handle,"<div class='direct-chat-msg'>
						<div class='direct-chat-infos clearfix'>
							<span class='direct-chat-name float-left'> $name </span>
						</div>
						<div class='direct-chat-text'>  $message  </div>
					</div>");
	fclose($handle);
header("location:index.php?pesan=input");
}
?>