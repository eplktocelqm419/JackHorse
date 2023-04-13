<?php

for($i=0;$i<1000;$i++){
    $rand = rand(1, 15);
    $content = [
        "name"=>"JackHorse #".$i,
        "image"=>"https://eplktocelqm419.github.io/JackHorse/images/$rand.png",
    ];
    file_put_contents("./docs/json/$i.json", json_encode($content));
}