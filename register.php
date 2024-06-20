
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body> 

	<?php 
		if(isset($_GET['msg'])){?>
			<p style="color:<?=($_GET['response'] ? "blue" : "red")?>" ><?=$_GET['msg']?></p>
			<?php if($_GET['response']){?>
				<a href="index.php">Done</a>
			<?php }else{?>
				<a href="register.php">Retry</a>
			<?php }
			}else{?>

		<form action="endpoint.php" method="POST">
			
		 <label>Name</label>
		 <input type="text" name="name">

		  <label>Email</label>
		 <input type="text" name="email">

		 <button type="submit" name="register">SUBMIT</button>

		</form>
	<?php }?>

</body>
</html>