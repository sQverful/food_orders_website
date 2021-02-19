<!DOCTYPE html>
<html>
<head>

	<title>Registration</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Tomatos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Головна
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">       

          <a class='nav-link' href='login.php'>Увійти</a>
            

          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Контакти</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
require('includes/db.php');

if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['phone_number'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$phone_number = $_POST['phone_number'];


	$query = "INSERT INTO users (`username`, `password`, `number`) VALUES ('$username', '$password', '$phone_number')";
	$result = mysqli_query($connection, $query);

	if($result){
		$smsg = "Реєстрація успішна";
	}else {
		$fsmsg = "Помилка";
	}

}
?>

 <div class="container mt-5">
 	<form class="form-signin mx-auto" method="POST">
 		 <h2>Реєстрація</h2>
 		 <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div> <?php } ?>
 		 <?php if(isset($fsmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg; ?> </div> <?php } ?>
 		 <input type="text" name="username" class="form-control" placeholder="Username" required>
 		 <input type="number" name="phone_number" class="form-control" placeholder="Номер телефону" required>
 		 <input type="text" name="password" class="form-control" placeholder="Password" required>
 		 <button class="btn btn-lg btn-primary btn-block" type="submit">Зареєструватися</button>
 		<!-- <a href="#" class="btn btn-lg btn-primary btn-block" type="submit">Увійти</a> -->	
 	</form>
 </div>


   <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>	
</body>
</html>
