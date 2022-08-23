<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Upload-Files"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        svg {
            width: 2rem;
        }
    </style>
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
            <?php echo "<h1 class='mt-5'>Uploads Files</h1>";?>
            <hr>
            <!-- Space to work -->
            <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <figure class="figure">
                            <img src="https://via.placeholder.com/250" width="250" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
					<div class="mb-3">
                        <button class="btn btn-dark btn-upload" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Select photo
                        </button>
						<input id="photo" type="file" class="form-control d-none" name="photo" accept="image/*">
					</div>
					<div class="mb-3">

						<button class="btn btn-success" type="submit"> Upload Photo </button>
					</div>
				</form>
				<?php if ($_FILES): ?>
					<?php if ($_FILES['photo']['error'] > 0): ?>
						<div class="alert alert-danger">
							<strong>Error:</strong> You must select an image.
						</div>
					<?php else: ?>
						<?php move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$_FILES['photo']['name']) ?>
						<div class="alert alert-success">
							<strong>
								File has been uploaded successfully!
							</strong>
							<li>
								<?php echo $_FILES['photo']['name'] ?>
							</li>
							<li>
								<?php echo $_FILES['photo']['type'] ?>
							</li>
							<li>
								<?php echo round($_FILES['photo']['size'] / 1024) ?> KB
							</li>
						</div>	
					<?php endif ?>
				<?php endif ?>
        </div>
    </div>
    </main>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.btn-upload').click(function() {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        });
    </script>
    </scrip>
</body>
</html>