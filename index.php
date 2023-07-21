<?php
class Movie
{
    public $name;
    public $duration = "1:45:00";
    public $country;
    public $plot;
    public $type;

    public function __construct($name, $duration, $country, $plot, $type)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->country = $country;
        $this->plot = $plot;
        $this->type = $type;
    }

    public function getDescription()
    {
        return "Descrizione: " . $this->type . "=> " . $this->plot . ".";
    }

    public function getMovieDuration()
    {
        return "Durata del Film: " . $this->duration . " circa";
    }
}
$first_film = new Movie("Avengers:Infinity War", "3:00:00", "USA", "Lorem ipsum Thanos fecit dolor a muy part of the universo.....", "Action");
$second_film = new Movie("Io sono Leggenda", "2:30:00", "USA", "Lorem ipsum Will Smith and the dog fecit danni.....", "Action");
$movies = [$first_film, $second_film];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>weee</h1>
</body>

</html>