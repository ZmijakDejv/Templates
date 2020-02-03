<?php
    require_once "template.php";
    echo 'funguje to';
    $data = [
        'title' => "titulek",
        'caption' => "Nadpis",
        'message' => "zpráva"
    ];
    $page = new template("template/page.html");
    $page -> setData($data);
    echo $page ->render();
?>
