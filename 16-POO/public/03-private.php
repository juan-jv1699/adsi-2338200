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
            Private
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <form class="flex flex-col justify-center items-start gap-3 ring-1 ring-black/80 p-3" action="" method="post">
                <h2 class="text-2xl self-center mb-2">Table Maker</h2>
                <label class="m-0 flex justify-between w-[300px]" for="num_rows">
                    Number of rows: 
                    <input class="m-0 p-1 rounded w-20 text-black/70" type="number" name="num_rows" id="num_rows" min="1" max="40" required>
                </label>
                <label class="m-0 flex justify-between w-[300px]" for="num_cols">
                    Number of cols: 
                    <input class="m-0 p-1 rounded w-20 text-black/70" type="number" name="num_cols" id="num_cols" min="1" max="15" required>
                </label>
                <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Render table</button>
            </form>
            <?php
                class RenderTable {
                    private $nr;
                    private $nc;
                    
                    public function __construct($nr,$nc){
                        $this->nr= $nr;
                        $this->nc= $nc;

                        $this->rendeTableHeader();
                        $this->rendeTableBody();
                        $this->rendeTableFooter();
                    }
                    private function rendeTableHeader(){
                        echo '<table class="border-collapse my-3 ">';
                    }
                    private function rendeTableBody(){
                        for ($i=1; $i <= $this->nr; $i++) { 
                            echo '<tr>';
                            for ($j=1; $j <= $this->nc; $j++) { 
                                echo '<td class="p-2 ring-1 ring-black/50 text-center">'.'R'.$i.'-'.'C'.$j.'</td>';
                            }
                            echo '</tr>';
                        }
                    }
                    private function rendeTableFooter(){
                        echo '</table>';
                    }
                }

                if($_POST){
                    $nr = $_POST['num_rows'];
                    $nc = $_POST['num_cols'];

                    $rt = new RenderTable($nr,$nc);
                }
            ?>
        </section>
        
    </main>
</body>
</html>