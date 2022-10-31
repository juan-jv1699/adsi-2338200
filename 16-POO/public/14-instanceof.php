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
            OPP (Object oriented Programming)
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class  Bike {
                    protected $brand;
                    protected $price;
                    protected $type;

                    public function __construct($brand,$price){
                        $this->brand = $brand;
                        $this->price = $price;
                    }
                    public function setBike($type){
                        if($type instanceof Road) $this->type = 'Road';
                        if($type instanceof Mtb) $this->type = 'Mtb';
                        if($type instanceof Enduro) $this->type = 'Enduro';
                    }
                    public function getInfoBike() {
                        return "<li class='mb-2 p-2 ring-1 ring-white/50 rounded list-none'>".$this->brand."| $".$this->price."|".$this->type."</li>";
                    }
                }

                class Road extends Bike{}
                class Mtb extends Bike {}
                class Enduro extends Bike {}

                $bk = new Road('Specialized',4000);
                $bk->setBike($bk);
                echo $bk->getInfoBike();

                $bk = new Mtb('Trek',3200);
                $bk->setBike($bk);
                echo $bk->getInfoBike();

                $bk = new Enduro('Santacruz',5200);
                $bk->setBike($bk);
                echo $bk->getInfoBike();
            ?>
        </section>
        
    </main>
</body>
</html>