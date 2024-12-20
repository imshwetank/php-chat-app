<?php 
  session_start();
// Set headers to prevent saving passwords
header("Cache-Control: no-store");  // Prevent caching
header("Pragma: no-cache");         // Prevent caching
header("X-Content-Type-Options: nosniff");  // Prevent MIME sniffing
header("X-XSS-Protection: 1; mode=block"); // Block XSS attacks
  if (!isset($_SESSION['username'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Cache-Control" content="no-store">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex, nofollow">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chat App - Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" 
	      href="css/style.css">
	<link rel="icon" href="img/logo.png">
</head>
<body class="d-flex
             justify-content-center
             align-items-center
             vh-100">
	 <div class="w-400 p-5 shadow rounded">
	 	<form method="post" 
		autocomplete="off"
	 	      action="app/http/auth.php">
	 		<div class="d-flex
	 		            justify-content-center
	 		            align-items-center
	 		            flex-column">

	 		<img src="img/logo.png" 
	 		     class="w-25">
	 		<h3 class="display-4 fs-1 
	 		           text-center">
	 			       LOGIN</h3>   


	 		</div>
	 		<?php if (isset($_GET['error'])) { ?>
	 		<div class="alert alert-warning" role="alert">
			  <?php echo htmlspecialchars($_GET['error']);?>
			</div>
			<?php } ?>
			
	 		<?php if (isset($_GET['success'])) { ?>
	 		<div class="alert alert-success" role="alert">
			  <?php echo htmlspecialchars($_GET['success']);?>
			</div>
			<?php } ?>
		  <div class="mb-3">
		    <label class="form-label">
		           User name</label>
		    <input type="text" 
		           class="form-control"
				   autocomplete="off"
		           name="username">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">
		           Password</label>
		    <input type="password" 
		           class="form-control"
				   autocomplete="new-password"
		           name="password">
		  </div>
		  
		  <button type="submit" 
		          class="btn btn-primary">
		          LOGIN</button>
		  <!-- <a href="signup.php">Sign Up</a> -->
		</form>
	 </div>
</body>
</html>
<?php
  }else{
  	header("Location: home.php");
   	exit;
  }
 ?>
 <script type="text/javascript">
  // Clear any potentially stored session/localStorage data on page load
  window.onload = function() {
    // Clears all sessionStorage data
    sessionStorage.clear();

    // Clears all localStorage data
    localStorage.clear();

    // Optionally, clear form inputs as well
    document.getElementsByName("password")[0].value = "";
  };
</script>
