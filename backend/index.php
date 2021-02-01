<?php 

// Call MYSQL and get datas to send to your frontend

// For tests only
if (isset($_GET["value"])) {
    $value = $_GET["value"];
}else {
    $value = 10;
}

// Return json to create api rest style template

echo '
{
    "articles": 5,
    "liste": [{
        "name": "PS5",
        "price": '.$value.'
    }, {
        "name": "PS4",
        "price": 100
    }, {
        "name": "PS3",
        "price": 50
    }, {
        "name": "PS2",
        "price": 30
    }, {
        "name": "PS1",
        "price": 10
    }]
}
';

?>
