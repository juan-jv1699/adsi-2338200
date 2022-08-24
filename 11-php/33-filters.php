<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Filters"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;">
      <div class="container-fluid">
        <div class="navbar-brand row">
           <a class="navbar-brand col"  href="https://www.php.net/manual/es/intro-whatis.php">PHP</a><a class="navbar-brand col" href="https://getbootstrap.com/">Bootstrap 5</a>
           <a class="col navbar-brand" href="/index.php">home</a>
        </div>
      </div>
    </nav>
    <main class="container">
    <div class="row">
        <div class="col-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5'>Filters</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST">
					<div class="mb-3">
						<input type="number" class="form-control" name="age" placeholder="Enter you Age">
					</div>
					<div class="mb-3">
						<input type="email" class="form-control" name="email" placeholder="Enter your Email">
					</div>
					<div class="mb-3">
						<input type="url" class="form-control" name="url" placeholder="Enter your URL">
					</div>
					<div class="mb-3">
						<input type="submit" value="Apply Filters" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						// AGE - - - - - - - - - - - - - - - - -
						$age = $_REQUEST['age'];
						$ops = array('options' => 
							   array('min_range' => 18, 
							   	     'max_range' => 23
							   	)
							);
						if (!filter_var($age, FILTER_VALIDATE_INT, $ops)) {
							echo '<div class="alert alert-danger">
									You Cannot Participate in WSI!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									You Can Participate in WSI!
								  </div>';
						}
						// EMAIL - - - - - - - - - - - - - - - - -
						if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
							echo '<div class="alert alert-danger">
									The Email is not valid!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									The Email is valid!
								  </div>';
						}
						// URL - - - - - - - - - - - - - - - - -
						$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
						echo '<div class="alert alert-success">
							The URL disinfected is: '.$url.'
							  </div>';
					}
				?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>