<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php 
        date_default_timezone_set('Europe/Amsterdam');
        $t = date("H:i");
        $partOfDay;
        
        if ($t < "06:00"){
            $partOfDay = "nacht";
        }
        else if ($t < "12:00"){
            $partOfDay = "morgen";
        }
        else if ($t < "18:00"){
            $partOfDay = "middag";
        }
        else $partOfDay = "avond";

    ?>
</head>
<body 
class = <?php 
    echo $partOfDay;
?>

>
    <div>
        <h1>Goede <?php echo $partOfDay ?></h1>
        <h2>Het is nu <?php echo $t;?></h2>
    </div>

</body>
</html>