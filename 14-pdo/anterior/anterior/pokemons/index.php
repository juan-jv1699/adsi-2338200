<?php $title = 'All pokemons'?>
<?php include_once('../includes/header.inc');?>
<!-- header include -->
    <main class="container">
        <section class="row">
            <div class="col-md-8 offset-md-2 my-5">
                <h1 class="text-center">
                    <i class="fa fa-dragon"></i>
                    Web App Pokemons
                </h1>
                <hr>
                <a href="add.php" class="btn btn-lg btn-outline-success">
                    <i class="fa fa-plus"></i>
                    Add Pokemon
                </a>
                <div class="table-responsive">
                    <table class="table table-striped table-hover mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th class="d-none d-sm-table-cell">TYPE</th>
                                <th>IMAGE</th>
                                <th class="d-none d-sm-table-cell">TRAINER</th>
                                <th>ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php $pokemons = listAllPokemons($conx) ?>
                            <?php foreach($pokemons as $pokemon): ?>
                            <tr>
                                <td><?php echo $pokemon['id'] ?></td>
                                <td><?php echo $pokemon['name'] ?></td>
                                <td class="d-none d-sm-table-cell"><span class="badge bg-dark"><?php echo $pokemon['type'] ?></span></td>
                                <td>
                                    <img src="../<?= $pokemon['image']?>" width="40px">
                                </td>
                                <td class="d-none d-sm-table-cell"><?php echo $pokemon['nametrainer'] ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li><a class="dropdown-item" href="show.php?id=<?php echo $pokemon['id'] ?>"><i class="fa fa-search"></i> Show</a></li>
                                            <li><a class="dropdown-item" href="edit.php?id=<?php echo $pokemon['id'] ?>"><i class="fa fa-pen"></i> Edit</a></li>
                                            <li><a class="dropdown-item bg-danger btn-delete" href="" data-id="<?= $pokemon['id']?>"><i class="fa fa-trash"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!-- scripts include -->
    <?php include ('../includes/scripts.inc')?>
    <!--  -->
    <script>
        $(document).ready(function () {
            // Swal.fire(
            //         'Good job!',
            //         'Everything is OK!',
            //         'success'
            // )
            
            <?php if(isset($_SESSION['message'])):?>
                    Swal.fire({
                        position: 'top-center',
                        icon: 'success',
                        title: '<?=$_SESSION['message']?>',
                        showconfirmButton: false,
                        timer:2000
                })    
            <?php endif?>
            <?php unset($_SESSION['message'])?>

            $('.btn-delete').click(function(e){
                e.preventDefault()
                $id = $(this).attr('data-id')
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace('delete.php?id='+$id)   
                        
                    }
                    })
                Swal.fire({
                    title: 'Are You sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "Yes, delete it!"
                }).then((result)=>{
                    if(result.isConfirmed){
                        window.location.replace('delete.php?id='+$id)
                    }
                })
            })
        });
    </script>
</body>
</html>