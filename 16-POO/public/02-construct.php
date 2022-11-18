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

use function PHPSTORM_META\type;

                class Playlist{
                    // atributos
                    private $name;
                    private $artist = Array();
                    private $album = Array();
                    private $image = Array();
                    private $year = Array();

                    // metodos
                    public function __construct($name){
                        $this->name = $name;
                    }
                    public function setPlaylist($artist,$album,$image,$year){
                        $this->artist[] = $artist;
                        $this->album[] = $album;
                        $this->image[] = $image;
                        $this->year[] = $year;
                    }
                    public function getPLaylist(){
                        $ul = '';
                        for ($i=0; $i < count($this->artist); $i++) { 
                            $html = '<ul class="p-2 mb-4 flex flex-col justify-center items-center rounded ring">';
                            $html .= '<li>'.$this->artist[$i].'</li>';
                            $html .= '<li>'.$this->album[$i].'</li>';
                            $html .= '<li>'.$this->image[$i].'</li>';
                            $html .= '<li>'.$this->year[$i].'</li>';
                            $html.='</ul>';
                            $ul.= $html;
                        }
                        return $ul;
                    }
                }

                // instancias
                $playlist1 = new Playlist('Rap');
                $playlist1->setPlaylist('canserbero','la vida como pelicula','can.jpg',1955);
                $playlist1->setPlaylist('Granuja','particulas','granuja.jpg',2015);
                echo $playlist1->getPLaylist();
            ?>
        </section>
        
    </main>
</body>
</html>