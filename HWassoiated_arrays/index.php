<?php
    $tasks = [
        "title"     => "Drink water",
        "quantity"  => 2,
        "status"    => "Yes"
    ];
    require "./index.view.php";

    die();
    foreach($tasks as $key=>$task){
        echo"<pre>";
        var_dump($task);
    }


?>