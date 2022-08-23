<?php 
// Create Cookie:
setcookie('name', 'Jeremias Springfield', time()+60);
// Delete Cookie:
//setcookie('name', 'Jeremias Springfield', time()-60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Cookies"?></title>
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
            <?php echo "<h1 class='mt-5'>Cookies</h1>";?>
            <hr>
            <!-- Space to work -->
            <div class="mt-4 p-5 bg-primary text-white rounded">
					<small> Show Cookies: Go to console/storage/cookies</small>
					<?php if (isset($_COOKIE['name'])): ?>
						<p class="lead"> 
							<strong>name:</strong>
							<?php echo $_COOKIE['name'] ?> 
						</p>
					<?php else: ?>
						<p class="lead">
							Welcome Guest!
						</p>
					<?php endif ?>
				</div>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>