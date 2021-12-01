<?php
    require_once __DIR__ . "/datArray/albums.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Ajax Dischi Spotify</title>
</head>
<body>
    <header>
    <?php
        require __DIR__ . "/components/logo.php";
    ?>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-5">
                <?php
                    foreach($albums as $element ){
                        // aggiungo html intestato al php
                    // echo $element ["poster"];
                    // echo $element ["title"];
                    // echo $element ["author"];
                    // echo $element ["year"];
                    // foreach($singleAlbum as $element){
                    //     echo $element;
                    // }
                    // var_dump($element);
                    require __DIR__ . "/components/singleCard.php";
                }?>
                
            </div>
       
        </div>
    </main>
</body>
</html>