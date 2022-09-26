<nav class="navbar navbar-expand-lg bg-dark text-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <i class="fa fa-dragon text-light"></i>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTop">
    <ul class="navbar-nav me-auto my-2 my-lg-0" >
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        
        
       
    </ul>
        
    <ul class="navbar-nav ms-auto my-2 my-lg-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?= $_SESSION['tphoto']?>" class="me-2 img-fluid rounded"alt="" style="width: 50px; height: 50px;">
                <?php echo $_SESSION['temail'] ?>
            </a>
            <ul class="dropdown-menu">
                <li>
                    
                    <a class="dropdown-item" href="pokemons/index.php"><i class="fa fa-dragon"></i>  Pokemons</a>
                </li>
                <li>
                    <a class="dropdown-item" href="trainers/index.php"><i class="fa fa-users"></i>  Trainers</a>
                </li>
                <li>
                    <a class="dropdown-item" href="gyms/index.php"><i class="fa-solid fa-castle"></i> Gyms</a>
                </li>
                <hr>
                <li>
                    <a class="dropdown-item" href="close.php"><i class="fa-solid fa-right-from-bracket"></i> Close Session</a>
                </li>
            </ul>
        </li>
    </ul>
    </div>
  </div>
</nav>