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
        return $this->type . ": " . $this->plot . ".";
    }

    public function getMovieDuration()
    {
        return "Durata del Film: " . $this->duration . " circa";
    }
}
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