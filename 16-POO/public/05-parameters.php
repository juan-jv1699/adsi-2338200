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
        <h1 class="m-4 m text-center text-2xl text-white text-opacity-50 font-medium"> 
            Parameters(requiered/opcional)
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class Country {
                    public $name;
                    public function __construct($name){
                        $this->name= $name;
                    }                       
                }
                class FifaWorldCup{
                    private $country;
                    private $year;
                    private $winner;

                    public function __construct($country,$year,$winner = 'Brazil'){
                        $this->country = $country;
                        $this->year = $year;
                        $this->winner = $winner;
                    }

                    public function showEvent(){
                        echo '<ul>';
                        echo '<li class="p-2 rounded grid grid-cols-3 ring-1 ring-black/50 gap-2 mb-2">
                                 <span><b>Country:</b>'.$this->country->name.'</span>
                                 <span><b>Year:</b>'.$this->year.'</span>
                                 <span><b>Winner:</b>'.$this->winner.'</span>    
                             </li>';
                        echo '</ul>';
                    }
                }

                // instanmcias
                $coun = new Country('Italy');
                $FFWC = new FifaWorldCup($coun,1990,'Germany');
                $FFWC->showEvent();

                $coun = new Country('USA');
                $FFWC = new FifaWorldCup($coun,1994);
                $FFWC->showEvent();

                $coun = new Country('France');
                $FFWC = new FifaWorldCup($coun,1998,'France');
                $FFWC->showEvent();

            ?>
        </section>
        
    </main>
</body>
</html>