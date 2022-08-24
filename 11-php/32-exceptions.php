<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Exceptions"?></title>
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
            <?php echo "<h1 class='mt-5'>Exceptions</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST">
					<div class="mb-3">
						<input type="number" class="form-control" name="age" placeholder="Enter your age">
					</div>
					<div class="mb-3">
						<input type="submit" value="Validate" class="btn btn-success">
					</div>
				</form>
				<?php 
						function validate_age($age) {
							if ($age < 18) {
								throw new Exception("You can't vote!");
							}
							return true;
						}
					if ($_POST) {
						try {
							validate_age($_POST['age']);
							echo '<div class="alert alert-success">
									You can vote!
								  </div>';
						} catch (Exception $e) {
							echo '<div class="alert alert-danger">
									Error: '.$e->getMessage().'
								  </div>';
						}
					}
				?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>