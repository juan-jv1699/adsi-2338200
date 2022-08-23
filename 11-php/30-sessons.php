<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Sessons"?></title>
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
            <?php echo "<h1 class='mt-5'>Sessons</h1>";?>
            <hr>
            <!-- Space to work -->
            <div class="mt-4 p-5 bg-dark text-white rounded">
					<?php 
						if ($_POST) {
							unset($_SESSION['visits']);
							session_destroy();
						}	
					?>

					<?php if (isset($_SESSION['visits'])): ?>
						<?php $_SESSION['visits']++; ?>
					<?php else: ?>
						<?php $_SESSION['visits'] = 1; ?>
					<?php endif ?>
					<p class="lead">
						<strong>
							You have visited this page: 
						</strong>
						<?php echo $_SESSION['visits']; ?>
                        <?php echo ($_SESSION['visits']==1)?"time":"times";?>
					</p>
					<form action="" method="POST">
						<input type="submit" value="Close Session" class="btn btn-danger" name="delete">
					</form>
				</div>
            
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>