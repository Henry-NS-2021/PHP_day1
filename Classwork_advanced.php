<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="name" content="Henry">
    <title>PHP Day-1 - Advanced Exercise</title>
</head>
<body>
    <?php
    $characters = [
        [
        "character1" => "Mickey Mouse",  
        "character2" => "Super Mario",  
        "character3" => "Goku",
        "character4" => "Pokemon"
        ],
        [
        "type1" => "cartoon", 
        "type2" => "game", 
        "type3" => "anime", 
        ]
    ];
    echo "<p><b style='color: blue'>{$characters[0]['character1']}</b> is a <b style='color: red'>{$characters[1]['type1']}</b> character.</p>";

    echo "<p><b style='color: blue'>{$characters[0]['character2']}</b> is a <b style='color: red'>{$characters[1]['type2']}</b> character.</p>";

    echo "<p><b style='color: blue'>{$characters[0]['character3']}</b> is a <b style='color: red'>{$characters[1]['type3']}</b> character.</p>";
    
    echo "<p><b style='color: blue'>{$characters[0]['character4']}</b> though, is no character. It is an <b style='color: red'>{$characters[1]['type3']}</b>!</p>";


    ?>
</body>
</html>