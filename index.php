<?php
    require_once __DIR__ . "/datArray/albums.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        foreach($albums as $element ){
            echo $element ["title"];
            echo $element ["author"];
            echo $element ["genre"];
            echo $element ["year"];
            // foreach($singleAlbum as $element){
            //     echo $element;
            // }
            // var_dump($element);
        }
        ?>
    </div>
</body>
</html>