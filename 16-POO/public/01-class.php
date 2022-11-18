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
            Class
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class Vehicle{
                    // atributos 
                    public $brand;
                    public $reference;
                    public $model;
                    public $color;
                    // metodos;
                    public function setAttributes($brand,$ref,$mod,$color){
                        $this->brand = $brand;
                        $this->reference = $ref;
                        $this->model = $mod;
                        $this->color = $color;
                    }

                    function getAtrributes(){
                        $content = '<li> Brand: '.$this->brand.'</li>'.'<li> Reference: '.$this->reference.'</li>'.'<li> Model: '.$this->model.'</li>'.'<li> Color: '.$this->color.'</li>';
                        return '<ul class="bg-black/50 flex flex-col justify-center items-center gap-2 ring-1 ring-white/25 rounded p-2 mb-3">'.$content.'</ul>';
                    }
                }


                // creacion o instancia
                $vh1 = new Vehicle;
                $vh1->setAttributes('renault','clio-clasico','1990','red');
                echo $vh1->getAtrributes();
                $vh2 = new Vehicle;
                $vh2->setAttributes('porsche','cayman','2020','blue');
                $vh2->reference = 'carrera GT';
                echo $vh2->getAtrributes();
                $vh1 = new Vehicle;
                $vh1->setAttributes('ferrarri','la ferrari','1970','red');
                echo $vh1->getAtrributes();
            ?>
        </section>
        
    </main>
</body>
</html>