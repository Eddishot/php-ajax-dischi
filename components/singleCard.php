<?php


// dichiaro le variabili da inserire nell´html

$albumImg = $element["poster"];
$albumName = $element["title"];
$albumAuthor = $element["author"];
$albumYear = $element["year"];

?>


<div class="col">
    <div class="card">
      <img src="<?php echo $albumImg ?>" class="card-img-top" alt="...">
      <div class="card-body">
            <h5 class="card-title"><?php echo $albumName ?></h5>
            <div class="card-text">
                <ul>
                    <li><?php echo $albumAuthor ?></li>
                    <li><?php echo $albumYear ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>