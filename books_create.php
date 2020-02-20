<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require_once('functions_bdd.php');

    $author = $_POST [ "author" ];
    $title = $_POST [ "title" ];
    $year = $_POST [ "year" ];
    $publisher = $_POST [ "publisher" ];

    $sqlInsert = $pdo->prepare("INSERT INTO books(author, title, year, publisher) VALUES (?, ?, ?, ?)");
    $sqlInsert->execute(array($author,$title,$year,$publisher));

    
    $sqlRequest = "SELECT * FROM books";
    $rst = $pdo->query($sqlRequest);
    $display = $rst->fetch(PDO::FETCH_ASSOC);
    
    foreach($display as $key => $value){
        echo $key." : ".$value."<br/>";
    }
    echo "<br/>";
    echo "<p><a href='form_create.html'>Retourner à la création de livre</a></p>";
    echo "<p><a href='books_index.php'>Index</a></p>";
?>


