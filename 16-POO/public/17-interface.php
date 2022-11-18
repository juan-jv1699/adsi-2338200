<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <script src="./js/tailwind.3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t from-orange-300 to-orange-600 min-h-screen">
    <main class="mx-auto max-w-lg m-5 p-5 border-orange-900 bg-white/5 border-2 rounded-xl">
        <h1 class="m-4 m text-center text-4xl text-white text-opacity-50 font-medium"> 
            Interface
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <form action="" class="mx-auto flex flex-col justify-center items-center gap-4" method="post" enctype="multipart/form-data">
                <input class="hidden" type="file" name="image" accept="image/*" required>
                <button type="button" class="bg-black/60 py-4 px-10 rounded-lg transition hover:bg-black/80 btn-select">Select File</button>
                <button type="submit" class="bg-green-600 py-4 px-7 rounded-lg transition hover:bg-green-800">Upload Image</button>
            </form>
            <?php
                interface Image {
                    public function uploadImage($file);
                }

                class Upload implements Image {
                    private $file;

                    public function uploadImage($file){
                        $this->file = $file;
                        move_uploaded_file($_FILES['image']['tmp_name'],$this->file);
                        echo "<p class='bg-green-400 my-3 p-2 ring-1 ring-white/50'>Upload Images Succesfully! </p>";
                    }
                }
                if($_FILES){
                    $ui = new Upload;
                    $ui->uploadImage('uploads/'.$_FILES['image']['name']);
                }
            ?>
        </section>
        
    </main>
    <script >
        const btnSelect = document.querySelector('.btn-select')

        btnSelect.addEventListener('click', e =>{
            document.querySelector('input[type=file]').click()
        })
    </script>
</body>
</html>