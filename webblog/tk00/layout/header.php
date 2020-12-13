<div class="jumbotron text-center" style="margin-bottom:0">
  <a href="index.php" title="Home" style=" text-decoration: none;color: #00ccff;"><h1 style="font-size: 100px;">TK00</h1></a>
  	<?php
  	session_start();
  	if(isset($_SESSION['username'])){
  		echo "<p>Hello <strong>".$_SESSION['username'].'</strong> <a href="logout.php">Logout</a></p>';
  	}else{
  		echo '<span><a href="login.php">Login</a> or <a href="register.php">Sign up</a></span>';
  	}
  	?>
</div>