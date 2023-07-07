<?php

    //Definisco la CLASSE Movie
    class Movie{
      //dichiaro delle VARIABILI/attributi che avranno in comune le varie istanze di Movie
        public $titolo;
        public $regista;
        public $genere;
        public $prezzo;
        public $voto;
    
        /* Il COSTRUTTORE stabilisce le caratteristiche obbligatorie
            delle istanze
        */
        function __construct($titolo, $regista, $genere, $voto){
            //this -> elemento = $valore elemento
            $this->titolo = $titolo;
            $this->regista = $regista;
            $this->genere = $genere;
            $this->voto = $voto;    
        }

        //metodo che definisce il prezzo in base al voto
        public function setPrezzo($prezzo){
            if($this->voto < 3){
                $this-> prezzo = $prezzo;         
            }
            else{
                $this->prezzo = $prezzo*2;
            }
        }

    };

    /*ogni ISTANZA/OGGETTO è una COPIA della classe di partenza.
        Hanno in comune caratteristiche/variabili espresse nella classe,
        ma sono mondi separati 
    */
    $movie_1 = new Movie('Sharknado', 'Anthony Ferrante', 'azione/commedia', 2);
    $movie_2 = new Movie('Tre uomini e una gamba','Aldo,Giovanni e Giacomo','commedia', 5);
    $movie_3 = new Movie('Jojo Rabbit', 'Taika Waititi', 'commedia/drammatico', 8); 
    
    //inserisco un nuovo elemento nell'oggetto associato alla classe movie, tramite funzione
    $movie_1 -> setPrezzo(5);
    $movie_2 -> setPrezzo(5);
    $movie_3 -> setPrezzo(5);
    
    //Inserisco i film/oggetto in un array
    $movieArray = [$movie_1, $movie_2, $movie_3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php foreach($movieArray as $movie){ ?>  
            
                    <div class="card mb-3">
                        <h4><?php echo $movie->titolo ?></h4>
                        <div><span class="me-2">Regista:</span><?php echo $movie-> regista ?></div>
                        <div><span class="me-2">Genere:</span><?php echo $movie->genere ?></div>
                        <div><span class="me-2">Prezzo biglietto:</span><?php echo $movie->prezzo ?>&euro;</div>
                        <div><span class="me-2">Voto:</span><?php echo $movie->voto ?></div>
                    </div>
            
                <?php }?>
                
            </div>
        </div>
    </div>
</body>
</html>