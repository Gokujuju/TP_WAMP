<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    require_once('functions_bdd.php');
?>

<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Books Create</title>
    <script src="script.js"></script>
  </head>

  <body>
      <form method="post" action="form_create.php">
        <a>Créer votre Livre !</a>
        <p><a href='books_index.php'>Index</a></p>
        <p>
            <label for="author">Auteur :</label>
            <input type="text" id="author" name="author" /><br/>
        </p>
        <p>
            <label for="title">Titre :</label>
            <input type="text" id="title" name="title" /><br/>
        </p>
        <p>
          <label for="year">Année :</label>
          <input type="text" id="year" name="year" /><br/>
        </p>
        <p>
          <label for="publisher">Editeur :</label>
          <select id="publisher" name="publisher">
            <?php
            $publisher_list = $pdo->query("SELECT name FROM publisher");
            foreach($publisher_list as $pub){
              echo "<option value='".$pub['name']."'>".$pub["name"]."</option>";
            }
            
            ?>
        </p>  

        <input type="submit" value="Valider">
        
      </form>
  </body>


</html>

<?php
  if(!empty($_POST [ "author" ]) && !empty($_POST [ "title" ]) && !empty($_POST [ "year" ]) && !empty($_POST [ "publisher" ])){
    $author = $_POST [ "author" ];
    $title = $_POST [ "title" ];
    $year = $_POST [ "year" ];
    $publisher = $_POST [ "publisher" ];

    $sqlInsert = $pdo->prepare("INSERT INTO books(author, title, year, publisher) VALUES (?, ?, ?, ?)");
    $sqlInsert->execute(array($author,$title,$year,$publisher));
  }
?>