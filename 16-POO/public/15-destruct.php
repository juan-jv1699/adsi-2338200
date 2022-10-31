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
            Destruct
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class DataBase {
                    protected $conx;
                    public function __construct(){
                        $this->connect();
                    }

                    private function connect(){
                        $this->conx = mysqli_connect('localhost','root','','adsi2338200');
                        if($this->conx){
                            echo "<div class='mb-2 bg-green-300 p-2 text-black/75 rounded-2xl'> Connection DataBase Succesfully</div>";
                        }
                    }
                    private function disconnect(){
                        if(mysqli_close($this->conx)){
                            echo "<div class='my-2 mx-auto w-[500px] bg-red-300 p-2 text-black/75 text-center rounded-2xl'> Disconnection DataBase Succesfully</div>";
                        }
                    }
                    public function __destruct(){
                        $this->disconnect();
                    }
                }  

                class Pokemon extends DataBase {}
                $db = new DataBase;

            ?>
        </section>
        
    </main>
</body>
</html>