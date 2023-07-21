<?php
class Movie
{
    public $name;
    public $duration = "1:45:00";
    public $country;
    public $plot;
    public $type;
    public $cast;

    public function __construct($name, $duration, $country, $plot, $type, $cast)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->country = $country;
        $this->plot = $plot;
        $this->type = $type;
        $this->cast = $cast;
    }

    public function getMovieDescription()
    {
        return "Descrizione: " . $this->type . " => " . $this->plot . ".";
    }

    public function getMovieDuration()
    {
        return "Durata del Film: " . $this->duration . " circa";
    }
}

class Person
{
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->name . " " . $this->surname;
    }

    public function getPersonInfo()
    {
        return $this->getFullName() . " " . $this->age . " anni";
    }
}

$first_member_cast = new Person("Thanos", "Campanaros", "300");

$second_member_cast = new Person("Robert", "Downey Jr.", "58");

$third_member_cast = new Person("will", "Smith", "57");

$fourth_member_cast = new Person("Jhon", "Dog", "3");

$first_film_cast = [$first_member_cast, $second_member_cast];

$second_film_cast = [$third_member_cast, $fourth_member_cast];

$first_film = new Movie("Avengers:Infinity War", "3:00:00", "USA", "Lorem ipsum Thanos fecit dolor a muy part of the universo.....", "Action", $first_film_cast);

$second_film = new Movie("Io sono Leggenda", "2:30:00", "USA", "Lorem ipsum Will Smith and the dog fecit danni.....", "Action", $second_film_cast);



$movies = [$first_film, $second_film];
var_dump($movies)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <h1>Titolo: <?= $movie->name ?></h1>
                <h2>Nazionalità: <?= $movie->country ?></h2>
                <h3><?= $movie->getMovieDescription() ?></h3>
                <h4><?= $movie->getMovieDuration() ?></h4>
                <div>
                    <h4>Cast:</h4>
                    <ul>
                        <?php foreach ($movie->cast as $actor) : ?>
                            <li><?= $actor->getPersonInfo() ?></li>
                        <?php endforeach ?>
                    </ul>

                </div>

            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>