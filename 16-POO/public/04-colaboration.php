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
            Collaboration
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class Evolve {
                    public function evolvePokemon($origin,$evo){
                        echo '<ul class="ring-1 ring-black/50 p-2 m-2 rounded">';
                        echo '<li>';
                        echo '<b>Origin:</b> '.$origin.' ➡️ <b>Evolution:</b> '.$evo;
                        echo '</li>';
                        echo '</ul>';
                    }
                }
                class Pokemon {
                    private $origin;
                    private $evolution;
                    private $collaboration;

                    public function __construct($origin,$evolution){
                        $this->origin = $origin;
                        $this->evolution = $evolution;
                        // collaboration
                        $this->collaboration = new Evolve;
                    }

                    public function nextLevel(){
                        $this->collaboration->evolvePokemon($this->origin,$this->evolution);
                    }
                }

                // instancia
                $pk1 = new Pokemon('eevee','vaporeon');
                $pk1->nextLevel();
                $pk1 = new Pokemon('eevee','flareon');
                $pk1->nextLevel();
                $pk1 = new Pokemon('eevee','espeon');
                $pk1->nextLevel();
                $pk1 = new Pokemon('eevee','umbreon');
                $pk1->nextLevel();
                $pk1 = new Pokemon('eevee','jolteon');
                $pk1->nextLevel();
            ?>
        </section>
        
    </main>
</body>
</html>