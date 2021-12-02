<?php 

    class Movie {
        public $title;
        public $genre;
        public $duration;
        public $director;

        function __construct($_title, $_genre, $_duration, $_director)
        {
            $this->setTitle($_title);
            $this->genre = $_genre;
            $this->duration = $_duration;
            $this->director = $_director;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($_title) {
            $this->title = $_title;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function getDuration() {
            return $this->duration;
        }

        public function getDirector() {
            return $this->director;
        }

    }


    $newMovie = new Movie("L'esorcista", "Horror", "230min", "Francis Ford Coppola");
    //var_dump($newMovie);
    // $nomeIstanza->NomeFunzione("Attributo1", "Attributo2");


    $newMovie2 = new Movie("Il padrino", "Gangster", "210min", "Francis Ford Coppola");
    //var_dump($newMovie2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <main>
        <div>
            <ul>
                <li><?php echo $newMovie->getTitle()?></li>
                <li><?php echo $newMovie->getGenre()?></li>
                <li><?php echo $newMovie->getDuration()?></li>
                <li><?php echo $newMovie->getDirector()?></li>
            </ul>
            <ul>
                <li><?php echo $newMovie2->getTitle()?></li>
                <li><?php echo $newMovie2->getGenre()?></li>
                <li><?php echo $newMovie2->getDuration()?></li>
                <li><?php echo $newMovie2->getDirector()?></li>
            </ul>
        </div>
    </main>
</body>
</html>