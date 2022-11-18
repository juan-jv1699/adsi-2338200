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
            Extends
            <a href="index.php" class="float-left trasition hover:translate-x-1">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path>
                </svg>
            </a>
        </h1>
        <section class="p-5 bg-black/30 text-white min-h-[400px] rounded-xl">
            <!-- contenido  -->
            <?php
                class Ancestor{
                    protected $number1;
                    protected $number2;

                    public function __construct($n1,$n2){
                        $this->number1 = $n1;
                        $this->number2 = $n2;
                    }
                }
                class Child extends Ancestor{
                    public function showResult(){
                        return '<p><b>The product is: </b>'.($this->number1*$this->number2).'</p>';
                    }
                }

                class child2 extends Ancestor{
                    public function showResult(){
                        return '<p><b>The product is: </b>'.($this->number1/$this->number2).'</p>';
                    }
                }

                class child3 extends Ancestor{
                    public function showResult(){
                        return '<p><b>The Exponentiation is: </b>'.pow($this->number1,$this->number2).'</p>';
                    }
                }

                $test = new Child(12,9);
                echo $test->showResult();
                $test = new Child2(1024,32);
                echo $test->showResult();
                $test = new Child3(2,2);
                echo $test->showResult();

            ?>
        </section>
        
    </main>
</body>
</html>