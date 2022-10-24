<?php $title = 'Dashboard'?>
<?php include_once('includes/header.inc');?>
<?php include_once('includes/navbar.inc')?>
<!-- header include -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-cog"></i>
                    Dashboard
                </h1>
                <hr>
                <div class="row">
                <div class="col-md-4 col-xs-6 mb-2">
                  <div class="card bg-dark text-light" style="min-height: 50px;">
                      <div class="card-body">
                            <h3 class="card-title">
                                <i class="fa fa-paw fa-2x"></i>
                                Pokemons
                            </h3>
                        <p class="card-text mt-4">
                            Admin all information about pokemons
                        </p>
                        <a href="pokemons/index.php" class="btn btn-warning form-control">
                                <i class="fa-solid fa-circle-chevron-right "></i>
                                Enter
                            </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-6 mb-2">
                  <div class="card bg-dark text-light" style="min-height: 120px;">
                      <div class="card-body">
                            <h3 class="card-title">
                                <i class="fa fa-users fa-2x"></i>
                                Trainers
                            </h3>
                        <p class="card-text mt-4">
                            Admin all information about trainers
                        </p>
                        <a href="gyms/index.php" class="btn btn-warning form-control">
                                <i class="fa-solid fa-circle-chevron-right "></i>
                                Enter
                            </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-xs-6 mb-2" style="min-height: 120px;">
                    <div class="card bg-dark text-light">
                      <div class="card-body">
                            <h3 class="card-title">
                                <i class="fa fa-landmark fa-2x"></i>
                                Gyms
                            </h3>
                            <p class="card-text mt-4">
                                Admin all information about gyms
                            </p>
                            <a href="gyms/index.php" class="btn btn-warning form-control">
                                <i class="fa-solid fa-circle-chevron-right "></i>
                                Enter
                            </a>
                      </div>
                    </div>
                  </div>
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!-- scripts include -->
    <?php include ('includes/scripts.inc')?>
    <!--  -->
    <script>
        $(document).ready(function () {
            
        });
    </script>
</body>
</html>